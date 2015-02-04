<?php

/**
 * Register Backend routes before all user routes.
 */
App::before(function ($request) {
    /*
     * Other pages
     */
    Route::group(['prefix' => Config::get('cms.backendUri', 'backend')], function () {
        Route::any('flynsarmy/dashboardcachewidget/clear', function() {
            Artisan::call('cache:clear');

            return 'Cache successfully cleared.';
        });
    });
});