<!-- Section Recherche -->
<section class="py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h2>Rechercher un véhicule</h2>
                <form id="searchForm" method="POST" action="<?php echo site_url('vicl/recherche'); ?>">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" name="marque" placeholder="Marque">
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" name="modele" placeholder="Modele">
                        </div>
                         <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" name="annee" placeholder="Année">
                        </div>
                        <div class="col-md-3 mb-3">
                            <select class="form-control" name="etat">
                                <option value="">Etat</option>
                                <option value="essence">Neuve</option>
                                <option value="diesel">Occasion</option>    
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <select class="form-control" name="nbplace">
                                <option value="">Nombre de place</option>
                                <option value="deux">2</option>
                                <option value="quattre">4</option>
                                <option value="cinq">5</option>
                                <option value="sept">7</option>
                                <option value="neuf">9</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <select class="form-control" name="carburant">
                                <option value="">Carburant</option>
                                <option value="essence">Essence</option>
                                <option value="diesel">Diesel</option>
                                <option value="electrique">Électrique</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>