<?php

/**
 * The home manager controller for sOneSettings.
 *
 */
class sOneSettingsHomeManagerController extends modExtraManagerController
{
    /** @var sOneSettings $sOneSettings */
    public $sOneSettings;


    /**
     *
     */
    public function initialize()
    {
        $this->sOneSettings = $this->modx->getService('sOneSettings', 'sOneSettings', MODX_CORE_PATH . 'components/sonesettings/model/');
        parent::initialize();
    }


    /**
     * @return array
     */
    public function getLanguageTopics()
    {
        return ['sonesettings:default'];
    }


    /**
     * @return bool
     */
    public function checkPermissions()
    {
        return true;
    }


    /**
     * @return null|string
     */
    public function getPageTitle()
    {
        return $this->modx->lexicon('sonesettings');
    }


    /**
     * @return void
     */
    public function loadCustomCssJs()
    {
        $this->addCss($this->sOneSettings->config['cssUrl'] . 'mgr/main.css');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/sonesettings.js');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/misc/utils.js');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/misc/combo.js');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/widgets/items.grid.js');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/widgets/items.windows.js');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/widgets/home.panel.js');
        $this->addJavascript($this->sOneSettings->config['jsUrl'] . 'mgr/sections/home.js');

        $this->addHtml('<script type="text/javascript">
        sOneSettings.config = ' . json_encode($this->sOneSettings->config) . ';
        sOneSettings.config.connector_url = "' . $this->sOneSettings->config['connectorUrl'] . '";
        Ext.onReady(function() {MODx.load({ xtype: "sonesettings-page-home"});});
        </script>');
    }


    /**
     * @return string
     */
    public function getTemplateFile()
    {
        $this->content .= '<div id="sonesettings-panel-home-div"></div>';

        return '';
    }
}