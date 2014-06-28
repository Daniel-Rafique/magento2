<?php
/**
* magento2
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* http://opensource.org/licenses/OSL-3.0
*
* @package      magento2
* @copyright    Copyright (c) 2013 Gordon Lesti (http://www.gordonlesti.com)
* @author       Gordon Lesti <info@gordonlesti.com>
* @license      http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
*/
class Lesti_HelloWorld_Block_Hello extends Mage_Core_Block_Template
{
    public function getWelcome()
    {
        $date = new Zend_Date();
        $hour = (int) $date->toString('HH');
        if ($hour >= 6 && $hour < 12) {
            return Mage::helper('Lesti_HelloWorld_Helper_Data')->__('Good Morning World!');
        } elseif ($hour < 24) {
            return Mage::helper('Lesti_HelloWorld_Helper_Data')->__('Hello World!');
        } else {
            return Mage::helper('Lesti_HelloWorld_Helper_Data')->__('Good Night World!');
        }
    }
}