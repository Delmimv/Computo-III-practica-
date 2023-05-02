<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    //registro de que existe una relacionen la laravel. Se registra en el archibo que representa la tabla*/

    public function owner(){
        return $this->belongsTo(owner::class);
    }
}
