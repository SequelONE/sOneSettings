<?php

class sOneSettingsItemDisableProcessor extends modObjectProcessor
{
    public $objectType = 'sOneSettingsItem';
    public $classKey = 'sOneSettingsItem';
    public $languageTopics = ['sonesettings'];
    //public $permission = 'save';


    /**
     * @return array|string
     */
    public function process()
    {
        if (!$this->checkPermissions()) {
            return $this->failure($this->modx->lexicon('access_denied'));
        }

        $ids = $this->modx->fromJSON($this->getProperty('ids'));
        if (empty($ids)) {
            return $this->failure($this->modx->lexicon('sonesettings_item_err_ns'));
        }

        foreach ($ids as $id) {
            /** @var sOneSettingsItem $object */
            if (!$object = $this->modx->getObject($this->classKey, $id)) {
                return $this->failure($this->modx->lexicon('sonesettings_item_err_nf'));
            }

            $object->set('active', false);
            $object->save();
        }

        return $this->success();
    }

}

return 'sOneSettingsItemDisableProcessor';
