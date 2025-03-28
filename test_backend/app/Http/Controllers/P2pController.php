<?php

namespace App\Http\Controllers;

use App\Models\P2p;
use Illuminate\Http\Request;
use App\Http\Resources\P2pResouce;
use Illuminate\Support\Facades\Validator;

class P2pController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = P2p::latest()->get();

        return response()->json([
            'fetch success',
            P2pResouce::collection($data),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'sender_user_id' => 'required|integer',
            'currency_id' => 'required|integer',
            'message' => 'required|string',
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

        $createData = P2p::create([
            'sender_user_id' => $request->sender_user_id,
            'currency_id' => $request->currency_id,
            'message' => $request->message,
            'amount' => $request->amount,
            'method' => $request->method,
        ]);

        return response()->json([
            'created success',
            new P2pResouce($createData),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(P2p $p2p)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, P2p $p2p)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(P2p $p2p)
    {
        //
    }
}
