<?php

/**
 * @category Agere
 * @package Agere_Banner
 * @author Popov Sergiy <popov@agere.com.ua>
 * @copyright Copyright (c) 2013-2015 Agere Company. (http://www.agere.com.ua)
 * @license http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @datetime: 20.04.14 15:02
 */
class Agere_Wysiwyg_Model_Observer extends Varien_Event_Observer {

	public function addWysiwygHandler(Varien_Event_Observer $observer) {
		/** @var Mage_Catalog_Helper_Output $_helperOutput */
		/** @var Agere_Wysiwyg_Helper_Filter $_helperFilter */
		$_helperOutput = Mage::helper('catalog/output');
		$_helperFilter = Mage::helper('agere_wysiwyg/filter');
		$_helperOutput->addHandler('categoryAttribute', $_helperFilter);
		$_helperOutput->addHandler('productAttribute', $_helperFilter);
	}

}