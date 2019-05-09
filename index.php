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
        <link href="https://fonts.googleapis.com/css?family=Ovo" rel="stylesheet" />        
        <link rel="icon" href="http://www.ocordo-travaux.fr/favicon.ico" />
        <link rel="stylesheet" href="/assets/css/style.css" />
        <title><?= $title; ?></title>
    </head>
    <body>
        <header>
            <div class="navbar-fixed">
                <nav>
                    <div class="nav-wrapper">
                        <a href="page0.html" class="brand-logo"><img class="logo" src="assets/img/ocordo.png" alt="Logo Ocordo"/> Ocordo</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="page0.html"><?= $xml->page[0]->menu; ?></a></li>
                            <li><a href="page1.html"><?= $xml->page[1]->menu; ?></a></li>
                            <li><a href="page2.html"><?= $xml->page[2]->menu; ?></a></li>
                            <li><a href="page3.html"><?= $xml->page[3]->menu; ?></a></li>
                        </ul>                
                    </div>
                </nav>
            </div>
            <!-- important UL side-nav doit être en dehors de la div navbar-fixed -->
            <ul class="side-nav" id="mobile-demo">
                <li><a href="page0.html"><?= $xml->page[0]->menu; ?></a></li>
                <li><a href="page1.html"><?= $xml->page[1]->menu; ?></a></li>
                <li><a href="page2.html"><?= $xml->page[2]->menu; ?></a></li>
                <li><a href="page3.html"><?= $xml->page[3]->menu; ?></a></li>
            </ul>
        </header>
        <!-- Mise en place de l'intro video -->
        <?php
        // si la $page = 0 alors, on include le fichier video.php
        if ($page == 0) {
            include 'video.php';
        }
        ?>
        <div class="container content-page">
            <?= $xml->page[$page]->content; ?>
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Devis gratuit!</h5>
                        <p class="grey-text text-lighten-4">N'hésitez pas prendre <a href="page4.html"><?= $xml->page[3]->menu; ?></a>.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Liens</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="legals.php">Mentions Légales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Anousone MOUNIVONGS, Jonathan MARANDEAU, Thibault HALBEISEN
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <script type="text/javascript" src="/assets/js/script.js"></script>
    </body>
</html>
