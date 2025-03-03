<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    public $timestamps = false;
    
    public function reservations() {
        return $this->hasMany('App\Models\Reservation'); 
    }
    
    public function vehicules() {
        return $this->hasMany('App\Models\Reservation'); 
        
    }
}