<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class ProfielController extends Controller
{
    public function index(){   
        return view('profiel.index',[
            'profiel' => \App\Models\Profiel::all(),
        ]);
    }

    public function show($id){   
        return view('profiel.show',[
            'profiel' => \App\Models\Profiel::find($id),
            'profielEigenaar' => \App\Models\Profiel::find($id)->profielEigenaar,
        ]);
    }

    
}