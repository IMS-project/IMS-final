<?php

namespace App\Http\Controllers;

use App\Company_coordinator;
use Illuminate\Http\Request;

class CompanyCoordinatorController extends Controller
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
        //
        return view('company');
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
     * @param  \App\Company_coordinator  $company_coordinator
     * @return \Illuminate\Http\Response
     */
    public function show(Company_coordinator $company_coordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company_coordinator  $company_coordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(Company_coordinator $company_coordinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company_coordinator  $company_coordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company_coordinator $company_coordinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company_coordinator  $company_coordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company_coordinator $company_coordinator)
    {
        //
    }
}
