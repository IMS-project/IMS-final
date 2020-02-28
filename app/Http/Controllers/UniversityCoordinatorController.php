<?php

namespace App\Http\Controllers;

use App\university_coordinator;
use Illuminate\Http\Request;

class UniversityCoordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('university');
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
        //Uc::create([
            //'ui' => $u
        //]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\university_coordinator  $university_coordinator
     * @return \Illuminate\Http\Response
     */
    public function show(university_coordinator $university_coordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\university_coordinator  $university_coordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(university_coordinator $university_coordinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\university_coordinator  $university_coordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, university_coordinator $university_coordinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\university_coordinator  $university_coordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(university_coordinator $university_coordinator)
    {
        //
    }
}
