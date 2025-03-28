<?php

namespace App\Http\Controllers;

use App\Models\AssetExchange;
use Illuminate\Http\Request;
use App\Http\Resources\AssetExchangeResouce;
use Illuminate\Support\Facades\Validator;

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

        $createData = AssetExchange::create([
            'user_id' => $request->user_id,
            'currency_id' => $request->currency_id,
            'amount' => $request->amount,
        ]);

        return response()->json([
            'created success',
            new AssetExchangeResouce($createData),
        ]);
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
