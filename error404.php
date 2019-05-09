<?php
// appel du controller php dans le répertoire controller
include 'controller/index_controller.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <link rel="icon" href="http://www.ocordo-travaux.fr/favicon.ico" />
        <title>PROJET NEMO</title>
    </head>
    <body>
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper">
                        <a href="page1.html" class="brand-logo"><img class="logo" src="assets/img/ocordo.png" alt="Logo Ocordo"/> Ocordo</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="page1.html"><?= $xml->page[0]->menu; ?></a></li>
                            <li><a href="page2.html"><?= $xml->page[1]->menu; ?></a></li>
                            <li><a href="page3.html"><?= $xml->page[2]->menu; ?></a></li>
                            <li><a href="page4.html"><?= $xml->page[3]->menu; ?></a></li>
                        </ul>                
                    </div>
                </nav>
            </div>
            <!-- important UL side-nav doit être en dehors de la div navbar-fixed -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="page1.html"><?= $xml->page[0]->menu; ?></a></li>
                <li><a href="page2.html"><?= $xml->page[1]->menu; ?></a></li>
                <li><a href="page3.html"><?= $xml->page[2]->menu; ?></a></li>
                <li><a href="page4.html"><?= $xml->page[3]->menu; ?></a></li>
            </ul>
        </header>
        <div class="container"> 
            <!--Mise en place du texte d'erreur 404 -->
            <div class="row">
                <div class="col s4 offset-s4">
                    <p><strong>ERREUR 404</strong>, Tu n'es pas sur une page du site<p>
                    <p>COCORINHA</p>
                    </div>                 
            </div>
            <div class="row">
                <div class="col s4 offset-s4">
                    <img class="responsive-img" src="/assets/img/cocorinha.PNG" alt="image cocorinha" />
                </div>                 
            </div>                             
        
        <div class="row">
                <div class="col s4 offset-s4">
                <!-- Lien retour vers la page d'acceuil --> 
                <p class="returnSite">Retourne donc sur le site <a href="index.php">ici</a></p>
        </div>
            </div>
            </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>