<!doctype html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('chartset'); ?>"> <!-- bloginfo est une fonction de WP qui permet de récupérer des infos sur le site, ici on demande la valeut du charset -->
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title> <!-- ici on récupère dynamiquement le nom du site qui se trouve dans back-office>reglages>general>titre du site -->

    <!-- Bootstrap 4 (CDN : content delivery network, serveur qui permet de récupérer du contenu pour les sites)-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Style css spécifique au thème : attention à bien écrire le lien en absolu et non en relatif puisque le header peut être utilisé dans des fichiers qui se situent à des endroits différents. On utilise la fonction de wordpress qui le fait directement : -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css"> <!-- affiche de chemin du thème actif auquel on ajoute le nom du fichier : style.css-->

    <?php wp_head(); ?> <!-- Sert à afficher des éléments indispensables à WP comme : les balises link et script déclarées dans le fichier en functions.php, la barre d'administration lorsqu'on est connecté en tant qu'admin -->
</head>

<body <?php body_class(); // affiche les class du body automatiquement générées par WP ?>>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <div class="row w-100"><!--w-100 fait prendre la largeur de 100%-->
                    <div class="navbar-brand col-lg-3"><!--navbar-brand : marque du site-->
                        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
                        <!--bloginfo('url') affiche l'url du site-->
                        <!--bloginfo('name') affiche le nom du site-->
                    </div>
                    <p class="col-lg-9 texte-description">
                        <?php bloginfo('description') ?><!--affiche le slogan du site (reglages>général>slogan)-->
                    </p>
                    <div class="col-12">
                        <!--Zone de menu de navigation-->
                        <?php wp_nav_menu(array(
                                'theme_location'    => 'primary', // identifiant du menu déclaré dans functions.php
                                'menu_class'        => 'navbar-nav' // ajout d'une ou plusieurs class
                        )); ?>
                    </div>
                </div> <!--fin div.row-->
            </div><!--fin div.container-->
        </nav>
    </header>

        <!--Zone de widget entête du site-->
        <?php if(is_front_page()) : ?> <!-- Bouléen qui retourne true si on affiche la page d'accueil -->
            <div id="entete" class="align-items-center">
                <div class="container">
                    <?php dynamic_sidebar('region-entete'); // pas d'écho, se fait dans la fonction en question par défaut. Ceci appelle la zone identifée 'region-entete' déclarée dans le fichier functions.php ?>
                </div>
            </div>
        <?php endif ?>

    <section class="container">
        <div class="row">
            <!--ici le contenu spécifique à chaque page-->


