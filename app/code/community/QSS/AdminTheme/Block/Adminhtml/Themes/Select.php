<?php

class QSS_AdminTheme_Block_Adminhtml_Themes_Select extends Mage_Adminhtml_Block_Html_Select
{
    protected function _construct()
    {
        $this->setName('theme')
            ->setId('interface_theme')
            ->setTitle($this->helper('qss_admintheme')->__('Current Admin Theme'))
            ->setValue(Mage::getStoreConfig('qss_admintheme/config/theme'))
            ->setExtraParams('style="width:200px"')
            ->setOptions($this->_getSelectOptions());
    }

    protected function _getSelectOptions()
    {
        return Mage::getModel('qss_admintheme/adminhtml_system_config_source_themes')->toOptionArray();
    }
}