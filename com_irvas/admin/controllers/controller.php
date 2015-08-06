<?php 
defined('_JEXEC') or die;

if (!JFactory::getUser()->authorise('core.manage', 'com_irvas')) {
    return JError::reiseWarning(404, JText::_('JEROR_ALERTNOAUTHOR'));   
}

$controller = JControllerLegacy::getInstance('Irvas');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

?>