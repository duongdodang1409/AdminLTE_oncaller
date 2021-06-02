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
use Novaon\Product\Models\FeaturePack;


class FeaturePackController extends Controller
{

    public function index(FeaturePack $feature_pack)
    {
        $feature_pack = FeaturePack::all();
        return ResponseBuilder::success($feature_pack, ApiCode::SUCCESS);
    }

    public function show(FeaturePack $feature_pack)
    {
        return ResponseBuilder::success($feature_pack, ApiCode::SUCCESS);
    }

    public function store(Request $request, FeaturePack $feature_pack)
    {
        $data =$feature_pack->create($request->all());
        return ResponseBuilder::success($feature_pack, ApiCode::SUCCESS);
    }

    public function update(Request $request, FeaturePack $feature_pack)
    {
        $data =$feature_pack->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(FeaturePack $feature_pack)
    {

        $feature_pack->delete();
        return ResponseBuilder::success();
    }
}
