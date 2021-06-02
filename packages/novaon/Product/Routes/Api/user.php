<?php
/**
 * Project: Caller_Core
 * Author: tony
 * Create time: 11:29 9/28/20
 * Copyright (c) 2020 NOVAON.
 **/

use Novaon\Product\Controllers\Api\ProductController;
use Novaon\Product\Controllers\Api\FeatureController;
use Novaon\Product\Controllers\Api\ItemController;
use Novaon\Product\Controllers\Api\FeaturePackController;
use Novaon\Product\Controllers\Api\slideController;

Route::group([
    'as' => 'api.',
    'prefix' => 'api/v1',
    'middleware' => 'bindings',
], function () {
    Route::resource('feature',FeatureController::class);
    Route::resource('item', ItemController::class);
    Route::resource('feature_pack', FeaturePackController::class);
    Route::resource('slides', SlideController::class);
});
