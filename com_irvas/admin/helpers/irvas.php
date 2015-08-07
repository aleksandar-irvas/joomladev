<?php 
defined('_JEXEC') or die;

class IrvasHelper {
    public static function getActions($categoryId = 0){
        $user = JFactory::getUser();
        $result = new JObject;
        if (empty($categoryId)){
            $assetName = 'com_irvas';
            $level = 'component';
        }else{
            $assetName = 'com_irvas.category.'.(int) $categoryId;
            $level = 'category';
        }
        $actions = JAccess::getActions('com_irvas', $level);
        foreach ($actions as $action){
            $result->set($action->name, $user->authorise($action->name, $assetName));
        }
        
        return $result;
    }
}

?>