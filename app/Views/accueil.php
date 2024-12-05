

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            
            <?php foreach($vehicules as $unvehicule) { ?>
                
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <?php
                            $imgProprietes = [
                                'src'    => 'public/assets/image/vehicule_'.$unvehicule->id.'.jpg',
                                'alt'    => $unvehicule->marque,
                                'class'  => 'card-img-top',
                            ];
                            echo img($imgProprietes)?>
                        
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $unvehicule->marque; ?></h5>
                                <!-- Product price-->
                                <?php echo $unvehicule->prix; ?>
                            </div>
                        </div>
                        
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <?php echo anchor('vicl/detail/'.$unvehicule->id,'Voir le détail','class="btn btn-outline-dark mt-auto"'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
           } 
            
            
            
            
            
            
            
            
            