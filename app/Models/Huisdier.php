<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huisdier extends Model
{
    use HasFactory;

    protected $table = 'huisdier';

    public $timestamps = false;

    public function huisdierEigenaar() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
