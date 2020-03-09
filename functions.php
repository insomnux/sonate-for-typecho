<?php
/* functions.php */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logo_url = new Typecho_Widget_Helper_Form_Element_Text('logo_url', NULL, NULL, _t('Logo URL'), _t('Type the URL of your logo'));
    $form->addInput($logo_url);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('Display recent posts'),
    'ShowRecentComments' => _t('Display recent comments'),
    'ShowCategory' => _t('Display categories list'),
    'ShowArchive' => _t('Display archive'),
    'ShowOther' => _t('Additional elements')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('Display to sidebar'));
    
    $form->addInput($sidebarBlock->multiMode());
}
