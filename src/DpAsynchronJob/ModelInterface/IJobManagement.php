<?php
/**
 * User: Dominik
 * Date: 29.06.13
 */

namespace DpAsynchronJob\ModelInterface;


interface IJobManagement {
	public function addJob($queueName,$params);
}