<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Resources\CurrencyResouce;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Currency::latest()->get();

        return response()->json([
            'fetch success',
            CurrencyResouce::collection($data),
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
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency)
    {
        //
    }
}
