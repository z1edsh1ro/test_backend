<?php

namespace App\Http\Controllers;

use App\Models\AssetExchange;
use Illuminate\Http\Request;
use App\Http\Resources\AssetExchangeResouce;

class AssetExchangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AssetExchange::latest()->get();

        return response()->json([
            'fetch success',
            AssetExchangeResouce::collection($data),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AssetExchange $assetExchange)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssetExchange $assetExchange)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssetExchange $assetExchange)
    {
        //
    }
}
