<?php

namespace App\Http\Controllers;

use App\Models\sauce;
use Illuminate\Http\Request;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sauces = Sauce::all();
        return response()->json(['data'=>$sauces],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sauce  $sauce
     * @return \Illuminate\Http\Response
     */
    public function show(sauce $sauce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sauce  $sauce
     * @return \Illuminate\Http\Response
     */
    public function edit(sauce $sauce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sauce  $sauce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sauce $sauce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sauce  $sauce
     * @return \Illuminate\Http\Response
     */
    public function destroy(sauce $sauce)
    {
        //
    }
}
