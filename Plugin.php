<?php

namespace ReynierPM\BlogExtension;

use System\Classes\PluginBase;

/**
 * BlogExtension Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'BlogExtension',
            'description' => 'Support for search, tags and subcategories for the RainLab Blog plugin',
            'author' => 'ReynierPM',
            'icon' => 'icon-expand'
        ];
    }

}