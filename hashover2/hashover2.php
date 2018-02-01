<?php

/**
 * Plugin Hashover-Next.
 * Based on Plugin Isso.
 */

use Shaarli\Config\ConfigManager;

/**
 * Display an error everywhere if the plugin is enabled without configuration.
 *
 * @param $conf ConfigManager instance
 *
 * @return mixed - linklist data with Hashover-Next plugin.
 */
function hashover2_init($conf)
{
    $hashover2Url = $conf->get('plugins.HASHOVER2_SERVER');
    if (empty($hashover2Url)) {
        $error = t('Hashover-Next plugin error: '.
            'Please define the "HASHOVER2_SERVER" setting in the plugin administration page.');
        return array($error);
    }
}

/**
 * Render linklist hook.
 * Will only display Hashover-Next comments on permalinks.
 *
 * @param $data array         List of links
 * @param $conf ConfigManager instance
 *
 * @return mixed - linklist data with Hashover-Next plugin.
 */
function hook_hashover2_render_linklist($data, $conf)
{
    $hashover2Url = $conf->get('plugins.HASHOVER2_SERVER');
    if (empty($hashover2Url)) {
        return $data;
    }

    // Only display comments for permalinks.
    if (count($data['links']) == 1 && empty($data['search_tags']) && empty($data['search_term'])) {
        $link = reset($data['links']);
        $hashover2Html = file_get_contents(PluginManager::$PLUGINS_PATH . '/hashover2/hashover2.html');

        $hashover2 = sprintf($hashover2Html, $hashover2Url, $hashover2Url, $link['id'], $link['id']);
        $data['plugin_end_zone'][] = $hashover2;

        // Hackish way to include this CSS file only when necessary.
        // $data['plugins_includes']['css_files'][] = PluginManager::$PLUGINS_PATH . '/hashover2/hashover2.css';
    }

    return $data;
}

/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function hashover2_dummy_translation()
{
    // meta
    t('Let visitor comment your shaares on permalinks with Hashover-Next.');
    t('Hashover-Next server URL (without \'http://\')');
}
