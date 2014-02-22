<?php
namespace DpAsynchronJob;

use Zend\ServiceManager\ServiceLocatorAwareInterface;

class Module
{
    public function getServiceConfig()
    {
    	return array(
		        'invokables' => array(
			        'DpAsynchronJob\JobCenter\Manager' => 'DpAsynchronJob\JobCenter\Manager',
			        'DpAsynchronJob\ModelInterface\IJobManagement' => 'DpAsynchronJob\Model\ResqueJobManagement'
		        ),
		        'factories' => array(
		        ),
		        'initializers' => array(
			        function($instance, $serviceManager) {
				        if ($instance instanceof ServiceLocatorAwareInterface) {
					        $instance->setServiceLocator($serviceManager);
				        }
			        }
		        )
			);
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}