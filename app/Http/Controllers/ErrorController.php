<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ErrorController extends Controller
{
    public function show(){   
        return view('error.show',[
            'gebruiker' => \App\Models\User::where('id', '=', Auth::user()->id)->first(),
        ]);        
    }
}
