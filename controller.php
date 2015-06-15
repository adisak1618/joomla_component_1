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
jimport('joomla.application.component.controller');

/**
*fucntion to init Controller class
*
*/

class HelloController extends JControllerLegacy
{
	function display($cachable = false,$urlparams = array()){
		require_once JPATH_COMPONENT.'/helpers/hello.php';
		parent::display($cachable,$urlparams);
	}
}