var sOneSettings = function (config) {
    config = config || {};
    sOneSettings.superclass.constructor.call(this, config);
};
Ext.extend(sOneSettings, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('sonesettings', sOneSettings);

sOneSettings = new sOneSettings();