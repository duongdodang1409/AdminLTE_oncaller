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
use Novaon\User\Models\Item;


class ItemController extends Controller
{

    public function index(Item $item)
    {
        $item = Item::all();
        return ResponseBuilder::success($item, ApiCode::SUCCESS);
    }

    public function show(Item $item)
    {
        return ResponseBuilder::success($item, ApiCode::SUCCESS);
    }

    public function store(Request $request, Item $item)
    {
        $data =$item->create($request->all());
        return ResponseBuilder::success($item, ApiCode::SUCCESS);
    }

    public function update(Request $request, Item $item)
    {
        $data =$item->update($request->all());
        return ResponseBuilder::success($data, ApiCode::SUCCESS);
    }


    public function destroy(Item $item)
    {

        $item->delete();
        return ResponseBuilder::success();
    }
}
