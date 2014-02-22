<?php
/**
 * User: Dominik
 * Date: 29.06.13
 */

namespace DpAsynchronJob\JobCenter;


use DpZFExtensions\ServiceManager\TServiceLocator;
use DpAsynchronJob\ModelInterface\IJobManagement;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

class Manager implements ServiceLocatorAwareInterface{
	use TServiceLocator;
	public function addJob($jobName,$params) {
		if ($this->getServiceLocator()->has('DpAsynchronJob\ModelInterface\IJobManagement')) {
			/** @var IJobManagement $jobManagement */
			$jobManagement = $this->getServiceLocator()->get('DpAsynchronJob\ModelInterface\IJobManagement');
			$jobManagement->addJob($jobName,$params);
			return true;
		}
		return false;
	}
}