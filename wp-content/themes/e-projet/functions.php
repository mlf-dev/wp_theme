<?php

// Création de zones de widgets
function eprojet_init_widgets(){

    register_sidebar(array(
        'name'          => 'Zone entête', // nom qui apparaît dans le BO
        'id'            => 'region-entete', // identifiant obligatoire de la zone pour pouvoir l'insérer dans un template
        'description'   => 'Zone de widget affichée en entête de la page accueil', // description qui apparaît dans le BO
        'before_widget' => '', // pour retirer les balises <li> par défaut avant chaque widget
        'after_widget'  => '', // pour retirer les balises </li> par défaut après chaque widget
        'before_title'  => '<h1>', // pour définir/remplacer le <h2> par défaut avant le titre du widget
        'after_title'   => '</h1>' // pour définir/remplacer le </h2> par défaut après le titre du widget
    ));

    register_sidebar(array(

        'name'          => 'Zone de la barre latérale',
        'id'            => 'Colonne droite',
        'description'   => 'Zone de widget affichée dans la barre latérale de droite',
        'before_widget' => '<div>',
        'after_widget'  => '</div>'

    ));

    register_sidebar(array(

        'name'          => 'Zone footer gauche',
        'id'            => 'footer-gauche',
        'description'   => 'Zone de widget affichée dans la zone gauche du footer',
        'before_widget' => '',
        'after_widget'  => ''

    ));

};

add_action('widgets_init', 'eprojet_init_widgets'); // ajoute une action au moment où il initialise les widgets au démarrage de la page, on lui indique d'accrocher et d'exécuter la fonction eprojet_init_widgets par le core de WP. Widgets_init s'appelle un HOOK (crocher en français, car y sont accrochés les fonctions du core de WP ainsi que la nôtre. Elles s'exécutent ensemble à l'exécution de ce hook

