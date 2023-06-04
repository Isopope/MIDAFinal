<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
     //partie reservé aux contraintes de clé etrangeres
     public function restaurant(){
        return $this->hasOne(Restaurant::class);
    }
}
