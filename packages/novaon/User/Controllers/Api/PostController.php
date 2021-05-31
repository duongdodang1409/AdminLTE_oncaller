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
use Novaon\User\Models\Post;


class PostController extends Controller
{

    public function index(Post $post)
    {
//        $post = Post::all();
//        return ResponseBuilder::success($post, ApiCode::SUCCESS);
        return Post::all();
    }

    public function show(Post $post)
    {
        return ResponseBuilder::success($post, ApiCode::SUCCESS);
    }

    public function store(Request $request, Post $post)
    {
        $data =$post->create($request->all());
//        return ResponseBuilder::success($post, ApiCode::SUCCESS);
    }

    public function update(Request $request, Post $post)
    {
        $data =$post->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(Post $post)
    {

        $post->delete();
//        return ResponseBuilder::success();
    }
}
