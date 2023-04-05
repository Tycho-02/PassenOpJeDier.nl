<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiel extends Model
{
    use HasFactory;

    protected $table = 'profielen';


    public function profielEigenaar() {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }
}
