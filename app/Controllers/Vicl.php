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
    
    
    public function getSearch()
    {
        $vehiculeModel = new Vehicule();
        $query = $vehiculeModel;

        // Récupérer les filtres de la requête
        $marque = $this->request->getGet('marque');
        $modele = $this->request->getGet('modele');
        $carburant = $this->request->getGet('carburant');
        $annee = $this->request->getGet('annee');
        $etat = $this->request->getGet('etat');
        $nb_place = $this->request->getGet('nb_place');

        // Appliquer les filtres dynamiquement
        if (!empty($marque)) {
            $query = $query->where('marque', $marque);
        }
        if (!empty($modele)) {
            $query = $query->where('modele', $modele);
        }
        if (!empty($carburant)) {
            $query = $query->where('carburant', $carburant);
        }
        if (!empty($annee)) {
            $query = $query->where('annee', $annee);
        }
        if (!empty($etat)) {
            $query = $query->where('etat', $etat);
        }
        if (!empty($nb_place)) {
            $query = $query->where('nombre_de_place', $nb_place);
        }

        // Récupérer les résultats avec findAll()
        $vehicles = $query->get();

        // Retourner la vue avec les résultats
        return view('template/header.php')
             . view('resultat_recherche.php', ['vehicles' => $vehicles])
             . view('template/footer.php');
    }
    
}