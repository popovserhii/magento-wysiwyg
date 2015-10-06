<?php

/**
 * Enable widget button anywhere
 *
 * @category Agere
 * @package Agere_Wysiwyg
 * @author Popov Sergiy <popov@agere.com.ua>
 * @copyright Copyright (c) 2013-2015 Agere Company. (http://www.agere.com.ua)
 * @license http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @datetime: 06.10.2015 16:39
 */
class Agere_Wysiwyg_Block_Widget_Anywhere extends Mage_Adminhtml_Block_Catalog_Helper_Form_Wysiwyg_Content {

	protected function _prepareForm() {
		//return parent::_prepareForm();
		$form = new Varien_Data_Form(array('id' => 'wysiwyg_edit_form', 'action' => $this->getData('action'), 'method' => 'post'));

		$config['document_base_url']     = $this->getData('store_media_url');
		$config['store_id']              = $this->getData('store_id');
		$config['add_variables']         = true;
		$config['add_widgets']           = true;
		$config['add_directives']        = true;
		$config['use_container']         = true;
		$config['container_class']       = 'hor-scroll';

		$form->addField($this->getData('editor_element_id'), 'editor', array(
			'name'      => 'content',
			'style'     => 'width:725px;height:460px',
			'required'  => true,
			'force_load' => true,
			'config'    => Mage::getSingleton('cms/wysiwyg_config')->getConfig($config)
		));
		$this->setForm($form);

		return $this;
	}

}