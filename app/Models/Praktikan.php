<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikan extends Model
{
    use HasFactory;

    public function Praktikan(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function Praktikum(){
        return $this->belongsTo(Praktikum::class, 'id_praktikum');
    }


}
