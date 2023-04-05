<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'reviews';

    public function infoOrder() {
        return $this->belongsTo(\App\Models\Order::class, 'order_id');
    }

    public function infoHuisdier() {
        return $this->belongsTo(\App\Models\Huisdier::class, 'huisdier_id');
    }

}
