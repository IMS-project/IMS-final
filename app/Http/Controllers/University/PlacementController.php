<?php

namespace App\Http\Controllers;

use App\placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('placement');
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
     * @param  \App\placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function show(placement $placement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function edit(placement $placement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, placement $placement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\placement  $placement
     * @return \Illuminate\Http\Response
     */
    public function destroy(placement $placement)
    {
        //
    }
}
