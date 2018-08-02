<?php

class sOneSettingsItemCreateProcessor extends modObjectCreateProcessor
{
    public $objectType = 'sOneSettingsItem';
    public $classKey = 'sOneSettingsItem';
    public $languageTopics = ['sonesettings'];
    //public $permission = 'create';


    /**
     * @return bool
     */
    public function beforeSet()
    {
        $name = trim($this->getProperty('name'));
        if (empty($name)) {
            $this->modx->error->addField('name', $this->modx->lexicon('sonesettings_item_err_name'));
        } elseif ($this->modx->getCount($this->classKey, ['name' => $name])) {
            $this->modx->error->addField('name', $this->modx->lexicon('sonesettings_item_err_ae'));
        }

        return parent::beforeSet();
    }

}

return 'sOneSettingsItemCreateProcessor';