<?php

/**
 * Wysiwyg category filter
 *
 * @category Agere
 * @package Agere_Wysiwyg
 * @author Popov Sergiy <popov@agere.com.ua>
 * @copyright Copyright (c) 2013-2015 Agere Company. (http://www.agere.com.ua)
 * @license http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @datetime: 06.10.2015 17:28
 */
class Agere_Wysiwyg_Helper_Filter extends Mage_Core_Helper_Abstract {

	public function categoryAttribute($mainHelper, $result, $params) {
		/** @var Mage_Cms_Helper_Data $helperCms */
		$helperCms = Mage::helper('cms');
		$processor = $helperCms->getPageTemplateProcessor();

		return $processor->filter($result);
	}

}