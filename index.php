<?php get_header(); ?>
(index.php) (par défaut la "poste page" (définie coté interface wordpress) = index ? )
<main id="site-main"></main>

<?php
    include('template-parts/post-list.php');
?>

<?php 
echo "contenu de la plage :";
the_content();
 ?>
<?php get_footer(); ?>
