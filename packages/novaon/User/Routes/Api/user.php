<?php
/**
 * Project: Caller_Core
 * Author: tony
 * Create time: 11:29 9/28/20
 * Copyright (c) 2020 NOVAON.
 **/

use Novaon\User\Controllers\Api\UserController;
use Novaon\User\Controllers\Api\PostController;
use Novaon\User\Controllers\Api\SettingController;
use Novaon\User\Controllers\Api\SlidesController;
use Novaon\User\Controllers\Api\ItemController;
use Novaon\User\Controllers\Api\FeatureController;
use Novaon\User\Controllers\Api\FeaturePackController;
use Novaon\User\Controllers\Api\MenuController;



Route::group([
    'as' => 'api.',
    'prefix' => 'api/v1',
    'middleware' => 'bindings',
], function () {
    Route::resource('user', UserController::class);
    Route::resource('post', PostController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('slides', SlidesController::class);
    Route::resource('item', ItemController::class);
    Route::resource('feature', FeatureController::class);
    Route::resource('feature_pack', FeaturePackController::class);
    Route::resource('menu', MenuController::class);
});
