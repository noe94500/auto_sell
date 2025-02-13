<?php

namespace App\Controllers;

use App\Models\Vehicule; 

class Home extends BaseController
{
    public function index()
    {   
        $data['vehicules'] = Vehicule::all();
        
        return view('template/header')
             . view('template/search_form') 
             . view('accueil',$data)
             . view('template/footer');
        
    }
}
