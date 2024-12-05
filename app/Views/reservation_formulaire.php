<div class="container mt-5">
    <h1>Demande de réservation</h1>
    <p>Veuillez remplir le formulaire ci-dessous pour réserver le véhicule.</p>

    <?php echo form_open('formres/reservation'); ?>

    <!-- Nom -->
    <div class="mb-3">
        <?php 
            echo form_label('Identifiant client', 'idc', ['class' => 'form-label']);
            echo form_input([
                'name' => 'id',
                'id' => 'idc',
                'class' => 'form-control',
                'placeholder' => 'Votre identifiant client',
                'required' => 'required',
            ]);
        ?>
    </div>

    

    <!-- Message -->
    <div class="mb-3">
        <?php 
            echo form_label('Message', 'message', ['class' => 'form-label']);
            echo form_textarea([
                'name' => 'message',
                'id' => 'message',
                'class' => 'form-control',
                'rows' => '5',
                'placeholder' => 'Vos remarques ou demandes spéciales',
            ]);
        ?>
    </div>

    <div class="d-grid">
        <?php 
            echo form_submit('submit', 'Envoyer la demande', [
                'class' => 'btn btn-primary',
            ]);
        ?>
    </div>

    <?php echo form_close(); ?>
</div>
