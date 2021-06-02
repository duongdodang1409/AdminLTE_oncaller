<?php
/**
 * Project: Caller_Core
 * Package: Novaon\User\Request\Tenant
 * Author: taitn
 * Create time: 11:15 5/27/21
 * Copyright (c) 2021 NOVAON.
 **/


namespace Novaon\Product\Controllers\Api;

use App\ApiCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Novaon\Product\Models\Feature;


class FeatureController extends Controller
{

    public function index(Feature $feature)
    {
        $feature = Feature::all();
        return ResponseBuilder::success($feature, ApiCode::SUCCESS);
    }

    public function show(Feature $feature)
    {
        return ResponseBuilder::success($feature, ApiCode::SUCCESS);
    }

    public function store(Request $request, Feature $feature)
    {
        $data =$feature->create($request->all());
        return ResponseBuilder::success($feature, ApiCode::SUCCESS);
    }

    public function update(Request $request, Feature $feature)
    {
        $data =$feature->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(Feature $feature)
    {

        $feature->delete();
        return ResponseBuilder::success();
    }
}
