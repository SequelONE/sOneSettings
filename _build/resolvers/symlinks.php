<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/sOneSettings/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/sonesettings')) {
            $cache->deleteTree(
                $dev . 'assets/components/sonesettings/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/sonesettings/', $dev . 'assets/components/sonesettings');
        }
        if (!is_link($dev . 'core/components/sonesettings')) {
            $cache->deleteTree(
                $dev . 'core/components/sonesettings/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/sonesettings/', $dev . 'core/components/sonesettings');
        }
    }
}

return true;