<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    //partie des contraintes de clé
    public function restaurant(){
        return $this->hasOne(Restaurant::class);
    }
}
