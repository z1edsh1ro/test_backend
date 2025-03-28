<?php

namespace App\Http\Controllers;

use App\Models\P2p;
use Illuminate\Http\Request;
use App\Http\Resources\P2pResouce;

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
        //
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
