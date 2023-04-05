<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class OrderController extends Controller
{
    public function create($id){   
        return view('order.create',[
            'eigenaar' => \App\Models\Huisdier::find($id)->huisdierEigenaar,
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);        
    }

    public function store(Request $request, \App\Models\Order $order){
        $order->user_id = $request->input('user_id');
        $order->oppasser_id = Auth::user()->id;
        $order->huisdier_id = $request->input('huisdier_id');
        $order->bericht = $request->input('bericht');

        try{
            $order->save();
            return redirect('/');
        }catch(Exception $e){
            return redirect('/orders/{id}/create');
        }
    }

    public function destroy($id) {
        $order = \App\Models\Order::find($id);

        $order->delete();
        return redirect('/');       
    }
}