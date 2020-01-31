<?php

namespace Flynsarmy\DashboardCacheWidget;

use System\Classes\PluginBase;

/**
 * DashboardCacheWidget Plugin Information File.
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
            'name'        => 'Dashboard Cache Widget',
            'description' => "A simple dashboard widget with a button to clear October's cache.",
            'author'      => 'Flynsarmy',
            'icon'        => 'icon-remove',
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Flynsarmy\DashboardCacheWidget\ReportWidgets\ClearCache' => [
                'label'   => 'flynsarmy.dashboardcachewidget::lang.widgets.clearcache.label',
                'context' => 'dashboard',
            ],
        ];
    }
}
