<?php

namespace App\Controllers;
use App\Models\Vehicule;

class Formres extends BaseController{
    
    public function getFormu($id)
    {        
        $data['vehicules'] = Vehicule::find($id);
        
        return view('template/header')
             . view('reservation_formulaire', $data)
             . view('template/footer');  
    }
    
    public function postReservation()
    {
        
    }
    
}