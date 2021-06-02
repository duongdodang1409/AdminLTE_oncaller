<?php
/**
 * Project: Caller_Core
 * Author: tony
 * Create time: 11:29 9/28/20
 * Copyright (c) 2020 NOVAON.
 **/

use Novaon\Menus\Controllers\Api\MenuController;
use Novaon\Menus\Controllers\Api\SettingController;

Route::group([
    'as' => 'api.',
    'prefix' => 'api/v1',
    'middleware' => 'bindings',
], function () {
    Route::resource('menu', MenuController::class);
    Route::resource('setting', SettingController::class);
});


