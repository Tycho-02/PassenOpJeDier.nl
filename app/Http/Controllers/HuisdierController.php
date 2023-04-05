<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use Auth;
class HuisdierController extends Controller
{
    public function index(){
        
        return view('huisdier.index', [
            'huisdier' => \App\Models\Huisdier::all(),        
        ]);
    }

    public function show($id){   
        return view('huisdier.show',[
            'eigenaar' => \App\Models\Huisdier::find($id)->huisdierEigenaar,
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);        
    }

    public function create(){
        return view('huisdier.create', [
            'gebruiker' => Auth::user(),
            'afbeeldingen' => \App\Models\Image::all(),
            'soorten' => \App\Models\Soort::all(),
            'huisdier' => \App\Models\Huisdier::all(),
            ]);
    }

    public function store(Request $request, \App\Models\Huisdier $huisdier){
        $huisdier->naam = $request->input('naam');
        $huisdier->image = $request->input('afbeelding');
        $huisdier->image640 = $request->input('afbeelding');
        $huisdier->image1280 = $request->input('afbeelding');
        $huisdier->image1920 = $request->input('afbeelding');
        $huisdier->soort = $request->input('soort');
        $huisdier->wanneer = $request->input('wanneer');
        $huisdier->uurtarief = $request->input('uurtarief');
        $huisdier->hoelang = $request->input('hoelang');
        $huisdier->user_id = Auth::user()->id;
        $huisdier->beschrijving = $request->input('beschrijving');


        $huisdier->save();
        return redirect('/');

    }

    public function destroy($id) {
        $huisdier = \App\Models\Huisdier::find($id);

        $huisdier->delete();
        return redirect('/admin');      
    }
}


