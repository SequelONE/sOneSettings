sOneSettings.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'sonesettings-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            html: '<h2>' + _('sonesettings') + '</h2>',
            cls: '',
            style: {margin: '15px 0'}
        }, {
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: true,
            hideMode: 'offsets',
            items: [{
                title: _('sonesettings_items'),
                layout: 'anchor',
                items: [{
                    html: _('sonesettings_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'sonesettings-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    sOneSettings.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(sOneSettings.panel.Home, MODx.Panel);
Ext.reg('sonesettings-panel-home', sOneSettings.panel.Home);
