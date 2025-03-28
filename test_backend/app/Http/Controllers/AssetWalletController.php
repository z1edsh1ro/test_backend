<?php

namespace App\Http\Controllers;

use App\Models\AssetWallet;
use Illuminate\Http\Request;
use App\Http\Resources\AssetWalletResouce;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'currency_id' => 'required|integer',
            'amount' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
        ]);

        // when fail
        if ($validator->fails()) {
            return response()->json([
                'create fail',
                $validator->errors(),
            ]);
        }

        $createData = AssetWallet::create([
            'user_id' => $request->user_id,
            'currency_id' => $request->currency_id,
            'amount' => $request->amount,
        ]);

        return response()->json([
            'created success',
            new AssetWalletResouce($createData),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(AssetWallet $assetWallet)
    {
        return response()->json($assetWallet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AssetWallet $assetWallet)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'currency_id' => 'required|integer',
            'amount' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
        ]);

        // when fail
        if ($validator->fails()) {
            return response()->json([
                'update fail',
                $validator->errors(),
            ]);
        }

        $assetWallet->user_id = $request->user_id;
        $assetWallet->currency_id = $request->currency_id;
        $assetWallet->amount = $request->amount;

        $assetWallet->save();

        return response()->json([
            'updated success',
            new AssetWalletResouce($assetWallet),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AssetWallet $assetWallet)
    {
        $assetWallet->delete();

        return response()->json(
            'deleted success',
        );
    }
}
