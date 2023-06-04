<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    const STATE_EN_ATTENTE='EN ATTENTE';
    const STATE_ACCEPTER='ACCEPTER';
    const STATE_REFUSER='REFUSER';
    use HasFactory;

    //PARTIE POUR l'initialisation par defaut de l'attribut reservation_state as en attente

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['reservation_state'] = self::STATE_EN_ATTENTE;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function restaurant(){
        return $this->belongsToMany(Restorer::class);
    }
}
