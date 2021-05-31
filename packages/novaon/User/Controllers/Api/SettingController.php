<?php
/**
 * Project: Caller_Core
 * Package: Novaon\User\Request\Tenant
 * Author: taitn
 * Create time: 11:15 5/27/21
 * Copyright (c) 2021 NOVAON.
 **/


namespace Novaon\User\Controllers\Api;

use App\ApiCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Novaon\User\Models\Setting;


class SettingController extends Controller
{

    public function index(Setting $set)
    {
        $set = Setting::all();
        return ResponseBuilder::success($set, ApiCode::SUCCESS);
    }

    public function show(Setting $set)
    {
        return ResponseBuilder::success($set, ApiCode::SUCCESS);
    }

    public function store(Request $request, Setting $set)
    {
        $data =$set->create($request->all());
        return ResponseBuilder::success($set, ApiCode::SUCCESS);
    }

    public function update(Request $request, Setting $set)
    {
        $data =$set->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(Setting $set)
    {

        $set->delete();
        return ResponseBuilder::success();
    }
}
