<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            'users' => \App\Models\User::all(),
        ]);
    }

    public function block($id) {
        $user = \App\Models\User::find($id);
        $user->isBlocked = true;

        try {
            $user->save();
            return redirect('/admin');
            // ->with('succesMessage', 'Gebruiker is succesvol geblokkeerd!');
        } catch (Exception $err) {
            return redirect('/admin');
            // ->with('errorMessage', 'Gebruiker kon niet geblokkeerd worden!');
        }
    }

    public function unblock($id) {
        $user = \App\Models\User::find($id);
        $user->isBlocked = false;

        try {
            $user->save();
            return redirect('/admin')->with('succesMessage', 'Gebruiker is succesvol gedeblokkeerd!');
        } catch (Exception $err) {
            return redirect('/admin')->with('errorMessage', 'Gebruiker kon niet gedeblokkeerd worden!');
        }
    }
}
