<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Exception;
class AccountController extends Controller
{
    public function show(){
        $order = \App\Models\Order::where('user_id', '=', Auth::user()->id)->where('status', '=', 'aanvraag')->first();
        try{
            return view('account.show', [
                'orderAanvraag' => $order,
                'huisdier' => $order->infoHuisdier,
                'eigenaar' => $order->infoEigenaar,
                'oppasser' => $order->infoOppasser,
            ]);
        }catch(Exception $e){
            return redirect('/error');
        }
        
    }
}
