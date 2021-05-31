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
use Novaon\User\Models\Menu;


class MenuController extends Controller
{

    public function index(Menu $menu)
    {
        $menu = Menu::all();
        return ResponseBuilder::success($menu, ApiCode::SUCCESS);
    }

    public function show(Menu $menu)
    {
        return ResponseBuilder::success($menu, ApiCode::SUCCESS);
    }

    public function store(Request $request, Menu $menu)
    {
        $data =$menu->create($request->all());
        return ResponseBuilder::success($menu, ApiCode::SUCCESS);
    }

    public function update(Request $request, Menu $menu)
    {
        $data =$menu->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(Menu $menu)
    {

        $menu->delete();
        return ResponseBuilder::success();
    }
}
