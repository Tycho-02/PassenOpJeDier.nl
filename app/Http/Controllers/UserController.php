<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit($id) {
        $rollen = \App\Models\Role::all();

        $gebruiker = \App\Models\User::find($id);

        if(!$gebruiker) {
            return redirect('/');
        }

        return view('admin.edit', [
            'rollen' => $rollen,
            'gebruiker' => $gebruiker,
        ]);

    }

    public function update(Request $request) {
        $gebruiker = \App\Models\User::find($request->input('user_id'));
        $gebruiker->role = $request->input('role');
        $gebruiker->save();

        return redirect('/admin');
    }
}
