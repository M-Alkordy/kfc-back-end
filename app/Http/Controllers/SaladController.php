<?php

namespace App\Http\Controllers;

use App\Models\salad;
use Illuminate\Http\Request;

class SaladController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salads = Salad::all();
        return response()->json(['data'=>$salads],200);
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
     * @param  \App\Models\salad  $salad
     * @return \Illuminate\Http\Response
     */
    public function show(salad $salad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salad  $salad
     * @return \Illuminate\Http\Response
     */
    public function edit(salad $salad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salad  $salad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salad $salad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salad  $salad
     * @return \Illuminate\Http\Response
     */
    public function destroy(salad $salad)
    {
        //
    }
}