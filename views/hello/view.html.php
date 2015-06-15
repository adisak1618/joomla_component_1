<?php
/**
*@version version
*@package sayhi
*@subpackage com_sayhi
*@copyright Copyright 2015 Adisak Chaiyakul. All rights reserved
*@by Adisak Chaiyakul
*@email adisakchaiyakul@gmail.com
*
*
*/


defined('_JEXEC') or die;
jimport('joomla.application.component.view');


/**
*fucntion to initail class
*
*/

class HelloViewHello extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->addToolbar();
		echo JFactory::getApplication()->input->get('task');
		parent::display($tpl);
	}


	protected function addToolbar()
	{
		$canDo = HelloHelper::getActions();
		JToolBarHelper::title('Hello');
		JToolBarHelper::custom( 'test', 'generic', 'icon over', 'Test', boolean, boolean );

		if($canDo->get('core.admin')){
			JToolBarHelper::preferences('com_hello');
		}
	}
}