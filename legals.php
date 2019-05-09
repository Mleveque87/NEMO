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
        <link rel="stylesheet" href="/assets/css/style.css" />
        <link rel="icon" href="http://www.ocordo-travaux.fr/favicon.ico" />
        <title>Agence de travaux Ocordo - Mentions Légales</title>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="page1.html" class="brand-logo">Maçonnerie Ocordo</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="page1.html"><?= $xml->page[0]->menu; ?></a></li>
                    <li><a href="page2.html"><?= $xml->page[1]->menu; ?></a></li>
                    <li><a href="page3.html"><?= $xml->page[2]->menu; ?></a></li>
                    <li><a href="page4.html"><?= $xml->page[3]->menu; ?></a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="page1.html"><?= $xml->page[0]->menu; ?></a></li>
                    <li><a href="page2.html"><?= $xml->page[1]->menu; ?></a></li>
                    <li><a href="page3.html"><?= $xml->page[2]->menu; ?></a></li>
                    <li><a href="page4.html"><?= $xml->page[3]->menu; ?></a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1>Mentions Légales</h1>
            <h2>Propriété</h2>
            <p>Ce site web est la propriété de OCORDO, SARL au capital de 50 000 euros, immatriculée au RCS de Lille sous le numéro B 523 730 265.</p>
            <h2>Siège Social</h2>
            <p>Le siège social se situe  3 avenue Maracci, 59800 Lille</p>
            <h2>Directeur de la publication et administrateur du site</h2>
            <p>Mr MOUNIVONGS Téléphone: 06 01 02 03 04, mail: amouvinongs@ocordo-travaux.fr</p>
            <h2>Hébergement</h2>
            <p>OVH, 2 Rue Kellermann - 59100 Roubaix</p>
            <h2>Données Personnelles</h2>
            <p>OCORDO s'engage à protéger la vie privée des personnes et la confidentialité des informations fournies. 
                > Finalité du traitement 
                Les informations et données à caractère personnel vous concernant, demandées par OCORDO, responsable de traitement, sont nécessaire à effectuer des opérations relatives à la gestion de la relation client et à effectuer des opérations relatives à la prospection. 
                > Durée de conservation des données collectées et traitées 
                Les informations et données à caractère personnel collectées et traitées par OCORDO sont conservées pour une durée de 11 ans.
                > Caractère obligatoire ou facultatif des données demandées 
                Les informations et données demandées par OCORDO disposent d'un caractère obligatoire quant au nom, la ville ou le code postal, le numéro de téléphone ainsi que l'objet de votre demande car indispensables au suivi de celle-ci. En revanche, les informations telles que votre prénom ou votre e-mail, disposent d'un caractère facultatif. En cas de défaut de réponse aux mentions obligatoires, nous serons dans l'impossibilité de faire suite à votre demande. 
                Si vous ne souhaitez pas être contacté par téléphone par des sociétés dont vous n'êtes pas client, vous pouvez vous inscrire sur : http://bloctel.gouv.fr
                > A qui sont transmises les données ? 
                Que vous contactiez notre service par téléphone, e-mail ou par tout autre moyen, les informations et données que vous nous transmettez seront destinées aux personnes chargées du service commercial, des services chargés de traiter la relation client et la prospection, du service marketing, des services administratifs, des services logistiques et informatiques ainsi que leurs responsables hiérarchiques. Peuvent être également destinataires des données, les partenaires et prestataires de services de OCORDO dans le but de vous fournir une solution complète. 
                Si vous contactez notre service de relation client par téléphone, le conseiller accédera automatiquement à votre dossier personnel grâce à votre numéro de téléphone. Ce dernier apparaît temporairement sur son poste de travail. 
                > Droit d'accès, de rectification des données, d'opposition et de suppression
                Conformément aux dispositions de la Loi n°78-17 « Informatique et Libertés » du 6 janvier 1978 modifiée, vous disposez d'un droit d'accès, de rectification et de suppression de vos données personnelles ainsi qu'un droit d'opposition au traitement de celles-ci. Il vous est également possible de définir des directives relatives à la conservation, à l'effacement et à la communication de vos données à caractère personnel après votre décès. Vous pouvez modifier ou révoquer vos directives à tout moment. 
                Vous pouvez exercer ces droits en écrivant à :  contact@ocordo-travaux.fr ou par courrier à OCORDO - 3 avenue Maracci - 59800 Lille, en joignant une copie de votre pièce d'identité.
                > Transferts de données à caractère personnel vers un État non membre de la Communauté européenne
                OCORDO ne transfert pas de données à caractère personnel vers un Etat non membre de la Communauté européenne.</p>
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Devis gratuit!</h5>
                        <p class="grey-text text-lighten-4">N'hésitez pas à nous contacter.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Liens</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="legals.php">Mentions Légales</a></li>
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
