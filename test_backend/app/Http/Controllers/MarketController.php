<?php

namespace App\Http\Controllers;

use App\Models\Market;
use Illuminate\Http\Request;
use App\Http\Resources\MarketResouce;
use Illuminate\Support\Facades\Validator;

class MarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Market::latest()->get();

        return response()->json([
            'fetch success',
            MarketResouce::collection($data),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'currency_id' => 'required|integer',
        ]);

        // when fail
        if ($validator->fails()) {
            return response()->json([
                'create fail',
                $validator->errors(),
            ]);
        }

        $createData = Market::create([
            'currency_id' => $request->currency_id,
        ]);

        return response()->json([
            'created success',
            new MarketResouce($createData),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Market $market)
    {
        return response()->json($market);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $market)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'p2p_id' => 'integer',
            'market_id' => 'integer',
            'amount' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'method' => 'required|numeric|in:0,1',
        ]);

        // when fail
        if ($validator->fails()) {
            return response()->json([
                'update fail',
                $validator->errors(),
            ]);
        }

        $market->user_id = $request->user_id;
        $market->p2p_id = $request->p2p_id;
        $market->market_id = $request->market_id;
        $market->amount = $request->amount;
        $market->method = $request->method;


        $market->save();

        return response()->json([
            'updated success',
            new MarketResouce($market),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        $market->delete();

        return response()->json(
            'deleted success',
        );
    }
}
