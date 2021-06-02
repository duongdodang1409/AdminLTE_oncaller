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
use Illuminate\Support\Facades\Hash;
use MarcinOrlowski\ResponseBuilder\ResponseBuilder;
use Novaon\User\Models\User;
use Novaon\User\Request\Tenant\DeleteUserRequest;
use Novaon\User\Request\Tenant\StoreUserRequest;
use Novaon\User\Request\Tenant\UpdateUserRequest;
use Novaon\User\Request\Tenant\ViewUserRequest;

class UserController extends Controller
{
    /**
     * @param ViewUserRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ViewUserRequest $request)
    {
        $users = User::all();
        return ResponseBuilder::success($users, ApiCode::SUCCESS);
//        return ResponseBuilder::asError(ApiCode::NOT_FOUND)
//            ->withHttpCode(ApiCode::NOT_FOUND)
//            ->withMessage($response['message'])
//            ->build();
    }

    /**
     * Get User info
     * @param User $user
     * @param ViewUserRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(ViewUserRequest $request, User $user)
    {
        return ResponseBuilder::success($user, ApiCode::SUCCESS);
    }

    /**
     * Create new User
     * @param StoreUserRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return ResponseBuilder::success($user, ApiCode::SUCCESS);
    }

    /**
     * Update User information
     * @param UpdateUserRequest $request
     * @param User $user
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = [
            'name' => $request['name'] ?? $user['name'],
            'password' => $request['password'] ? Hash::make($request['password']) : $user['password'],
        ];
        $user->update($data);
        return ResponseBuilder::success($user, ApiCode::SUCCESS);
    }

    /**
     * Delete User
     * @param User $user
     * @param DeleteUserRequest $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Exception
     */
    public function destroy(User $user, DeleteUserRequest $request)
    {
        //TODO: Delete
        $user->delete();
        return ResponseBuilder::success();
    }
}
