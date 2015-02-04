<?php namespace Flynsarmy\DashboardCacheWidget\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

class ClearCache extends ReportWidgetBase
{
    public function render()
    {
        try {
            $this->loadData();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('widget');
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'             => 'backend::lang.dashboard.widget_title_label',
                'default'           => 'flynsarmy.dashboardcachewidget::lang.widgets.clearcache.label',
                'type'              => 'string',
                'validationPattern' => '^.+$',
                'validationMessage' => 'backend::lang.dashboard.widget_title_error'
            ],
        ];
    }

    protected function loadData()
    {

    }
}
