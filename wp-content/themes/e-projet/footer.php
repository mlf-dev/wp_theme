    </div><!--fin div.row-->
    </section><!--fin section.container-->

<footer class="align-items-center"><!--aligne verticalement au milieu dans un block-->
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-4">
                <?php dynamic_sidebar('footer-gauche'); ?>
            </div>
            <div class="col-lg-4">
                <p>&copy; Mes petites annonces - 2019</p>
            </div>
            <div class="col-lg-4"></div>

        </div><!--fin div.row-->
    </div><!--fin div.container-->
</footer>

<?php wp_footer(); // idem wp_header affiche les scripts déclarés dans functions.php ?>

</body>
</html>