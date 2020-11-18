<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assign;
use Flash;
class AssignController extends Controller
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
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id,$id2)
    {
        $assign = new Assign();
        $assign->advisor_id =$id2;
        $assign->company_id =$id;

        $stid = Assign::all()->where('advisor_id',$id2);
        $count = 0 ;
    foreach($stid as $row)
        {
            $try = $row->company_id;
            if($try==$id)
            {
                $count = 1;
            } 
        }
        if($count==1)
        {
            Flash::warning('You have Already assigned . . .');
            // return view('Assignadvisor.index') ;
        } 
        else
        {
            $assign->save();
            Flash::success('Application successful.');
        }
    
        

        return back()->with('Application successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
