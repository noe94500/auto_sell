<!-- application/views/vehicle_search.php -->

<form action="<?php echo site_url('Vicl/search'); ?>" method="get">
    <label for="marque">Marque:</label>
    <input type="text" id="marque" name="marque"><br>

    <label for="modele">Modèle:</label>
    <input type="text" id="modele" name="modele"><br>

    <label for="carburant">Carburant:</label>
    <input type="text" id="carburant" name="carburant"><br>

    <label for="annee">Année:</label>
    <input type="text" id="annee" name="annee"><br>

    <label for="etat">État:</label>
    <input type="text" id="etat" name="etat"><br>

    <label for="nombre_de_place">Nombre de places:</label>
    <input type="text" id="nombre_de_place" name="nombre_de_place"><br>

    <input type="submit" value="Search">
</form>

<?php if (isset($vehicles)): ?>
    <ul>
        <?php foreach ($vehicles as $vehicle): ?>
            <li><?php echo $vehicle->marque . ' ' . $vehicle->modele . ' (' . $vehicle->annee . ') - ' . $vehicle->carburant . ', ' . $vehicle->etat . ', ' . $vehicle->nombre_de_place . ' places'; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
