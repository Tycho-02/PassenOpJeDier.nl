<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'gebruiker' => \App\Models\User::all()->where('role', '!=', 'Geblokkeerd'),
            'huisdier' => \App\Models\Huisdier::all(),
            'profiel' => \App\Models\Profiel::all(),
        ]);
    }

    
}
