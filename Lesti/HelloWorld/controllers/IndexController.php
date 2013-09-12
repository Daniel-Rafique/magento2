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

/**
 * Class Lesti_HelloWorld_IndexController
 */
class Lesti_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}