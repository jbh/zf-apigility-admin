<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Apigility\Admin\Controller;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class FiltersControllerFactory implements FactoryInterface
{
    function createService(ServiceLocatorInterface $controllers)
    {
        $services = $controllers->getServiceLocator();
        return new FiltersController($services->get('ZF\Apigility\Admin\Model\FiltersModel'));
    }
}