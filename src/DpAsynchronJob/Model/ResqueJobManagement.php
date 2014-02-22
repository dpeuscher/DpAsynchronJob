<?php
/**
 * User: Dominik
 * Date: 29.06.13
 */

namespace DpAsynchronJob\Model;


use DpAsynchronJob\ModelInterface\IJobManagement;
use Resque;

class ResqueJobManagement implements IJobManagement {
	public function addJob($queueName, $params) {
		Resque::enqueue($queueName, "Application", $params);
	}
}