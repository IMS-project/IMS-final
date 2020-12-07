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
    public function store(Request $request)
    {
       $count=0;
       
        foreach($request->student as $s){
   
        $stid = Assign::all()->where('studentplacement_id',$s)->first();
      
        if($stid){
        $count =1;
        }
        else
        {
                $assign = new Assign();
                $assign->advisor_id =$request->advisor;
                $assign->studentplacement_id = $s;
                $assign->save();
               
    
            }
            
        }
 if($count==1){

   
    Flash::warning('You have Already assigned . . .');
    return back();
    
 }
 else{
    Flash::success('You have assigned successfully. .');
    return back();
 }
       
        

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
