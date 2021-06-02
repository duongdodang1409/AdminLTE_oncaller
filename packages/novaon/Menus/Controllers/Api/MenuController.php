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
use Novaon\Menus\Models\Menu;


class MenuController extends Controller
{
    /**
     * @param ViewUserRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $menus = Menu::all();
        return ResponseBuilder::success($menus, ApiCode::SUCCESS);
//        return ResponseBuilder::asError(ApiCode::NOT_FOUND)
//            ->withHttpCode(ApiCode::NOT_FOUND)
//            ->withMessage($response['message'])
//            ->build();
    }

    public function show(Request $request, Menu $menu)
    {
        return ResponseBuilder::success($menu, ApiCode::SUCCESS);
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->all());
        return ResponseBuilder::success($menu, ApiCode::SUCCESS);
    }

    public function update(Request $request, Menu $menu)
    {
         $data=$request->all();
        $menu->update($data);
        return ResponseBuilder::success($menu, ApiCode::SUCCESS);
    }

    public function destroy(Menu $menu, Request $request)
    {
        //TODO: Delete
        $menu->delete();
        return ResponseBuilder::success();
    }
}
