<section>
    <h1>Liste Client</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Actions</th>
                            <th>Reservation active</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($lesclients as $client) {
                                echo "<tr>";
                                echo "<td>" . $client->nom. "</td>";
                                
                                echo "<td>" . anchor('iencli/supprimer/'.$client->id, '<i class="fa-solid fa-power-on"></i> supprimer', ['class' => 'btn btn-warning']) . "</td>";
                                echo "<td>" . anchor('categ/modifier/'.$client->id, '<i class="fa-solid fa-power-on"></i> modifier', ['class' => 'btn btn-warning']) . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>

               
                

            </div>
        </div>
    </div>
</section>
