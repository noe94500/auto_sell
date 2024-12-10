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
        $data['lesvehicules'] = Vehicule::all();
        
        
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
                
            } else {
                //client
                session()->set('connect','client');
                session()->set('id',$users[0]->id);
                return view('template/header')
                     . view('accueil', $data)
                     . view('template/footer');
                
            }
            
        } else {
            //admin
            session()->set('connect','admin');
            session()->set('id',$users[0]->id);
            return view('template/headeradmin')
                     . view('accueil_admin', $data)
                     . view('template/footeradmin');
            
            
        }
        
            $session = session();
            $sessiondata = array(
                   'nom'  => $this->request->getPost('login'),
                   'admin'=> true
                );
            $session->set($sessiondata);
           
        
        
        
    }
    
    public function getLog()
    
    {
        return view('template/header')
             . view('user_login')
             . view('template/footer');
    }
    
    public function getLogout()
    {
        $session = session();
        $session->destroy();
        $data['titre'] = "Bienvenue sur AutoSell";
                return view('template/header')
                     . view('user_login',$data)
                     . view('template/footer');
    }
    
}