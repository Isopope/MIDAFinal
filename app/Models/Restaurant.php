<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'resto_name',
        'resto_affiche',
        'resto_phone',
        'resto_email',
        'resto_price',
        'resto_desc',
        'resto_adresse',
        'user_id',
    ];

    // parties reservé aux contraintes de clé etrangères
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function food(){
        return $this->belongsTo(Food::class);
    }

    public function local(){
        return $this->belongsTo(Local::class);
    }

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
