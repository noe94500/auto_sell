<?php

namespace App\Controllers;

use App\Models\Vehicule;
use App\Models\Administrateur;
use App\Models\Client;
use App\Models\Reservation;

class Iencli extends BaseController
{
    public function getAfficher()
    {        
        $data['lesclients'] = Client::all();
        return view('template/headeradmin')
             . view('liste_client', $data)
             . view('template/footeradmin');
    }
    
    public function getSupprimer($id)
    {
        Client::where('id', $id)->first();
        $client = Client::find($id);
        $client->delete();
        return redirect()->to(base_url());
    }
}