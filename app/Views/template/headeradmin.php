
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AutoSell Admin accueil - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url();?>public/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?php echo base_url();?>">AutoSell Admin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo base_url();?>">Accueil</a></li>
                        <div class="text-center">
                          <?php echo anchor('admin/logout/','Deconnexion','class="btn btn-outline-dark mt-auto"'); ?>
                          <?php echo anchor('iencli/afficher/','Client','class="btn btn-outline-dark mt-auto"'); ?>
                        </div>
                        <li class="nav-item dropdown">
                            
                            
                        </li>
                    </ul>
                    <form class="d-flex">
                        
                    </form>
                </div>
            </div>
        </nav>
        
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">AutoSell ADMIN</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Tous les véhicules au meilleur prix</p>
                </div>
            </div>
        </header>