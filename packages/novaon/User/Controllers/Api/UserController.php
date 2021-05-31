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
use Novaon\User\Models\User;


class UserController extends Controller
{

    public function index(User $user)
    {
        $user = User::all();
        return ResponseBuilder::success($user, ApiCode::SUCCESS);
    }

    public function show(User $user)
    {
        return ResponseBuilder::success($user, ApiCode::SUCCESS);
    }

    public function store(Request $request, User $user)
    {
        $data =$user->create($request->all());
        return ResponseBuilder::success($user, ApiCode::SUCCESS);
    }

    public function update(Request $request, User $user)
    {
        $data =$user->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(User $user)
    {

        $user->delete();
        return ResponseBuilder::success();
    }
}
