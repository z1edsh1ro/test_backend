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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Market $market)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Market $market)
    {
        //
    }
}
