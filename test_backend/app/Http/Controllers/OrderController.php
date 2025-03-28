<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResouce;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order::latest()->get();

        return response()->json([
            'fetch success',
            OrderResouce::collection($data),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
                'create fail',
                $validator->errors(),
            ]);
        }

        $createData = Order::create([
            'user_id' => $request->user_id,
            'p2p_id' => $request->p2p_id,
            'market_id' => $request->market_id,
            'amount' => $request->amount,
            'method' => $request->method,
        ]);

        return response()->json([
            'created success',
            new OrderResouce($createData),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
