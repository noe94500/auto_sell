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
    
    
    public function postSearch() {
        // Récupérer les filtres de la requête
        $marque = $this->input->get('marque');
        $modele = $this->input->get('modele');
        $carburant = $this->input->get('carburant');
        $annee = $this->input->get('annee');
        $etat = $this->input->get('etat');
        $nombre_de_place = $this->input->get('nombre_de_place');

        // Initialiser la requête Eloquent
        $query = Vehicle::query();

        // Appliquer les filtres
        if ($marque) {
            $query->where('marque', $marque);
        }
        if ($modele) {
            $query->where('modele', $modele);
        }
        if ($carburant) {
            $query->where('carburant', $carburant);
        }
        if ($annee) {
            $query->where('annee', $annee);
        }
        if ($etat) {
            $query->where('etat', $etat);
        }
        if ($nombre_de_place) {
            $query->where('nombre_de_place', $nombre_de_place);
        }

        // Exécuter la requête et récupérer les résultats
        $vehicles = $query->get();

        // Passer les résultats à la vue
        $this->load->view('vehicle_search_results', ['vehicles' => $vehicles]);
    }
    
}