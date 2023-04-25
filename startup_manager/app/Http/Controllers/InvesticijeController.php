<?php

namespace App\Http\Controllers;

use App\Http\Resources\InvesticijeResource;
use App\Models\Investicije;
use Illuminate\Http\Request;

class InvesticijeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investicije = Investicije::all();
        return InvesticijeResource::collection($investicije);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Investicije $investicije)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Investicije $investicije)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Investicije $investicije)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Investicije $investicije)
    {
        $investicije->delete();
        return response()->json('Uspešno obrisana investicija!');
    }
}
