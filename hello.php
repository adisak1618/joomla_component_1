<?php
defined('_JEXEC') or die;



if(!JFactory::getUser()->authorise('core.manage','com_hello'))
{
	return JError::raiseWarning(404,JText::_('JERROR_ALERTNOAUTHOR'));
}


jimport('joomla.application.component.controller');

echo JFactory::getApplication()->input->get('task');

$controller = JControllerLegacy::getInstance('Hello');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();