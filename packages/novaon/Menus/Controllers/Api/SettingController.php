<?php
/**
 * Project: Caller_Core
 * Package: Novaon\User\Request\Tenant
 * Author: taitn
 * Create time: 11:15 5/27/21
 * Copyright (c) 2021 NOVAON.
 **/


namespace Novaon\Menus\Controllers\Api;

use App\ApiCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Novaon\Menus\Models\Setting;


class SettingController extends Controller
{
    /**
     * @param ViewUserRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $settings = Setting::all();
        return ResponseBuilder::success($Settings, ApiCode::SUCCESS);
//        return ResponseBuilder::asError(ApiCode::NOT_FOUND)
//            ->withHttpCode(ApiCode::NOT_FOUND)
//            ->withMessage($response['message'])
//            ->build();
    }

    public function show(Request $request, Setting $setting)
    {
        return ResponseBuilder::success($setting, ApiCode::SUCCESS);
    }

    public function store(Request $request)
    {
        $setting = Setting::create($request->all());
        return ResponseBuilder::success($setting, ApiCode::SUCCESS);
    }

    public function update(Request $request, Setting $setting)
    {
        $data=$request->all();
        $setting->update($data);
        return ResponseBuilder::success($setting, ApiCode::SUCCESS);
    }

    public function destroy(Setting $setting, Request $request)
    {
        //TODO: Delete
        $setting->delete();
        return ResponseBuilder::success();
    }
}
