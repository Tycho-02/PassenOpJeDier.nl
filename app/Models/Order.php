<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'orders';

    public function infoHuisdier() {
        return $this->belongsTo(\App\Models\Huisdier::class, 'huisdier_id');
    }

    public function infoEigenaar() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function infoOppasser() {
        return $this->belongsTo(\App\Models\User::class, 'oppasser_id');
    }
}
