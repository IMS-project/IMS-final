<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assign;
use App\Student;
use App\Advisor;
use App\Chat;
use Flash;
class Advisorcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('advisor');
        // $this->middleware('prevent-back-history');
    }
    public function index()
    {   
       $user = Advisor::where('user_id',Auth::id())->first();
        $student = Assign::where('advisor_id',$user->id)->get(); 
        return view('Advisor.index')->with('students',$student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(){
        return view('Advisor.view');
    }
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
        $user = Advisor::where('user_id',Auth::id())->first();
        $chat = new Chat;
        $chat->sender = Auth::id();;
        $chat->receiver =$request->id;
        $chat->body =$request->message;
        $chat->save();
        Flash::success('message sent successfully');
        return redirect(route('show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Advisor.createmessage')->with('id',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
