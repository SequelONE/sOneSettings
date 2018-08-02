sOneSettings.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'sonesettings-panel-home',
            renderTo: 'sonesettings-panel-home-div'
        }]
    });
    sOneSettings.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(sOneSettings.page.Home, MODx.Component);
Ext.reg('sonesettings-page-home', sOneSettings.page.Home);