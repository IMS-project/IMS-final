<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Admincontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('company');
        // $this->middleware('prevent-back-history');
    }
public function index(){
 
   
    return view('Admin.index');
}
    
}
