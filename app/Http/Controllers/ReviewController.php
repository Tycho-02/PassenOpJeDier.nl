<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        
        return view('review.index', [
            'review' => \App\Models\Review::all()->where('oppasser_id', '=', Auth::user()->id),        
        ]);
    }
    
    public function create(){
        return view('review.create', [
            'eigenaar' => Auth::user(),
            'huisdier' => \App\Models\Huisdier::where('id', '=', Auth::user()->id)->first(),
            'order' => \App\Models\Order::where('user_id', '=', Auth::user()->id)->first(),
            ]);
    }

    public function store(Request $request, \App\Models\Review $review){
        $review->review = $request->input('review');
        $review->user_id = Auth::user()->id;
        $review->oppasser_id = $request->input('oppasser_id');
        $review->huisdier_id = $request->input('huisdier_id');
        $review->order_id = $request->input('order_id');

        try{
            $review->save();
            return redirect('/');
        }catch(Exception $e){
            return redirect('/reviews/create');
        }
    }

}
