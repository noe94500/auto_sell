<section>
    <div class="card">
        <div class="card-body">

            <?php echo form_open('admin/login'); ?>
                <div class="row">
                    <div class="col-md-1 text-end">
                        <i class="fa-solid fa-user align-bottom"></i>
                    </div>
                    <div class="col-md-7">
                        <?php
                        // input login
                        $input = array(
                            'name'          => 'login',
                            'placeholder'   => 'Nom d\'utilisateur',
                            'class'         => 'form-control'
                        );
                        echo form_input($input); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 text-end">
                        <i class="fa-solid fa-key align-bottom"></i>
                    </div>
                    <div class="col-md-7">
                        <?php    
                        // input password
                        $inputpwd = array(
                            'name'          => 'pwd',
                            'placeholder'   => 'Mot de passe',
                            'class'         => 'form-control'
                        );
                        echo form_password($inputpwd); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <?php
                        // bouton submit
                        $subm = array(
                            'type'      => 'submit',
                            'content'   => 'Se connecter',
                            'class'     => 'btn btn-success'
                        );
                        echo form_button($subm); ?>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>