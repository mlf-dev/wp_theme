<?php
get_header(); // fait un require du header.php. A noter que l'on peut avoir plusieurs header et footer à ce moment là on spécifie le nom en paramètre de cette fonction
if(have_posts()) : // s'il y a des articles à afficher have_posts retourne un booléen, s'il y en a  alors :
    while (have_posts()) : the_post(); // boucle : tant qu'il y a des objets à afficher : affiche l'archive; the_post() déplace le curseur dans le jeu de résultat contenant les éléments à afficher et en extrait les informations

        ?>


        <h1 class="col-12">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>

        <div class="col-12">
            <?php the_content(); ?>
        </div>


    <?php
    endwhile;

else :
    echo '<p>Aucun contenu ne correspond à votre demande</p>';
endif;

get_footer();
?>
