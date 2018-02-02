<?php
/**
 * Plugin Commentlink.
 *
 * Add an icon in the link list for showing comments.
 * Works only if another commenting plugin is installed!
 */

/**
 * Add commenting icon to link_plugin when rendering linklist.
 *
 * @param mixed $data - linklist data.
 *
 * @return mixed - linklist data with Commentlink plugin.
 */
function hook_commentlink_render_linklist($data)
{
    $commentlink_html = file_get_contents(PluginManager::$PLUGINS_PATH . '/commentlink/commentlink.html');

    foreach ($data['links'] as &$value) {
        if($value['private'] && preg_match('/^\?[a-zA-Z0-9-_@]{6}($|&|#)/', $value['real_url'])) {
            continue;
        }
        $commentlink = sprintf($commentlink_html, $value['shorturl']);
        $value['link_plugin'][] = $commentlink;
    }

    return $data;
}

/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function commentlink_dummy_translation()
{
    // meta
    t('For each link, add a commenting icon.');
}
