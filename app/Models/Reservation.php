<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;
    
    public function client() {
        return $this->belongsTo('App\Models\Client'); 
    }
    
    public function vehicule() {
        return $this->belongsTo('App\Models\Vehicule'); 
    }
}