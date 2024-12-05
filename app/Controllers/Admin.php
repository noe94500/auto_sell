<?php

namespace App\Controllers;

use App\Models\Vehicule;
use App\Models\Administrateur;
use App\Models\Client;
use App\Models\Reservation;

class Admin extends BaseController
{    
    public function postLogin()
    {
        $login = $this->request->getPost('login');
        $pwd = $this->request->getPost('pwd');
        
        $users = Administrateur::where('nom',$login)
                ->where('password', $pwd)
                ->get();
                
        if ($users->count()==0) {
            $users = Client::where('email',$login)
                ->where('password', $pwd)
                ->get();
            if($users->count()==0 ){
                //pas de user : précaution
                session()->destroy();
                return redirect()->to('/accueil');
            } else {
                //client
                session()->set('connect','client');
                session()->set('id',$users[0]->id);
                
                
            }
            
        } else {
            //admin
            session()->set('connect','admin');
            session()->set('id',$users[0]->id);
            
            
        }
        
            $session = session();
            $sessiondata = array(
                   'nom'  => $this->request->getPost('login'),
                   'admin'=> true
                );
            $session->set($sessiondata);
            return redirect()->to('/accueil');
        
        

        $data['titre'] = "Bienvenue sur ProdIgniter";
        $data['soustitre'] = "Saisie invalide";
        return view('template/header')
             . view('user_login',$data)
             . view('template/footer');
    }
    
    public function getLog()
    
    {
        return view('template/header')
             . view('user_login')
             . view('template/footer');
    }
}