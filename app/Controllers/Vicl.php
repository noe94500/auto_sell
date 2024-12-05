<?php

namespace App\Controllers;
use App\Models\Vehicule; 

class Vicl extends BaseController{
    
    public function getDetail($idv)
    {        
        $data['lavoiture'] = Vehicule::find($idv);
        return view('template/header')
             . view('detail_vehicule', $data);
        
        
    }
    
    
    
}