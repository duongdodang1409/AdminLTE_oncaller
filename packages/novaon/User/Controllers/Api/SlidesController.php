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
use Novaon\User\Models\Slide;


class SlidesController extends Controller
{

    public function index(Slide $slide)
    {
        $slide = Slide::all();
        return ResponseBuilder::success($slide, ApiCode::SUCCESS);
    }

    public function show(Slide $slide)
    {
        return ResponseBuilder::success($slide, ApiCode::SUCCESS);
    }

    public function store(Request $request, Slide $slide)
    {
        $data =$slide->create($request->all());
        return ResponseBuilder::success($slide, ApiCode::SUCCESS);
    }

    public function update(Request $request, Slide $slide)
    {
        $data =$slide->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(Slide $slide)
    {

        $slide->delete();
        return ResponseBuilder::success();
    }
}
