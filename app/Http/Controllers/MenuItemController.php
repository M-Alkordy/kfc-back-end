<?php

namespace App\Http\Controllers;

use App\Models\menuItem;
use Illuminate\Http\Request;



class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menuItems = menuItem::all();
       return response()->json(['data'=>$menuItems],200);
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
     * @param  \App\Models\menuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function show(menuItem $menuItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function edit(menuItem $menuItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menuItem $menuItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menuItem  $menuItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(menuItem $menuItem)
    {
        //
    }
}