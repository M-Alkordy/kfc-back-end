<?php

namespace App\Http\Controllers;

use App\Models\drink;
use Illuminate\Http\Request;


class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = Drink::all();
      return response()->json(['data'=>$drinks],200);
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
     * @param  \App\Models\drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(drink $drink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(drink $drink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, drink $drink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(drink $drink)
    {
        //
    }
}
