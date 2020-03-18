<?php

namespace App\Http\Controllers\University;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\University;
class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uni = University::all();
        return view('universities.index')
        ->with('universities', $uni);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('universities.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name'=>'required',
            'address'=>'required']);
            $uni = new University;
            $uni->name = $request->name;
            $uni->address = $request->address;
            $uni->save();
            return redirect(route('universities.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Responsee
     */
    public function show($id)
    {
        $uni = University::find($id);
        return view('universities.show')->with('university', $uni);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $uni = University::find($id);
        return view('universities.edit')->with('university', $uni);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name'=>'required',
        'address'=>'required']);
        $uni = University::find($id);
        $uni->name = $request->name;
        $uni->address = $request->address;
        $uni->save();
        return redirect(route('universities.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $uni = University::find($id);
        $uni->delete();
        return redirect(route('universities.index'));
    }
}
