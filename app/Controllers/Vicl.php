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
    
    public function getSupprimer($id)
    {
        Vehicule::where('id', $id)->first();
        $vehic = Vehicule::find($id);
        $vehic->delete();
        return redirect()->to(base_url());
    }
    
    
}