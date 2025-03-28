<?php

namespace App\Http\Controllers;

use App\Models\AssetWallet;
use Illuminate\Http\Request;
use App\Http\Resources\AssetWalletResouce;

class AssetWalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AssetWallet::latest()->get();

        return response()->json([
            'fetch success',
            AssetWalletResouce::collection($data),
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
    public function show(AssetWallet $assetWallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssetWallet $assetWallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssetWallet $assetWallet)
    {
        //
    }
}
