<div class="container">
    <h1>Détails du véhicule</h1>
    <?php
        $imgProprietes = [
            'src'    => 'public/assets/image/vehicule_'.$lavoiture->id.'.jpg',
            'alt'    => $lavoiture->marque,
            'class'  => 'card-img-top',

        ];
        echo img($imgProprietes)?>
    
    <table border="1">
    <tr>
        <th>Marque</th>
        <td><?php echo $lavoiture->marque; ?></td>
    </tr>
    <tr>
        <th>Modèle</th>
        <td><?php echo $lavoiture->modele; ?></td>
    </tr>
    <tr>
        <th>Prix</th>
        <td><?php echo $lavoiture->prix; ?> €</td>
    </tr>
    <tr>
        <th>Description</th>
        <td><?php echo $lavoiture->descriptif; ?></td>
    </tr>
    <tr>
        <th>Année</th>
        <td><?php echo $lavoiture->annee; ?></td>
    </tr>
    <tr>
        <th>Carburant</th>
        <td><?php echo $lavoiture->carburant; ?></td>
    </tr>
    <tr>
        <th>Kilométrage</th>
        <td><?php echo $lavoiture->kilometrage. " Km"; ?></td>
    </tr>
    <tr>
        <th>Etat</th>
        <td><?php echo $lavoiture->etat; ?></td>
    </tr>
    <tr>
        <th>Nombre de place</th>
        <td><?php echo $lavoiture->nb_place; ?></td>
    </tr>
    </table>
    
    <div style="position: absolute; bottom: -400px; right: 300px;">
    <?php echo anchor('Formres/Formu/'.$lavoiture->id, 'Faire une demande de réservation', 'class="btn btn-outline-dark mt-auto" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;"'); ?>
    </div>



</div>
