<?php get_header(); ?>
(index.php) (par défaut la "poste page" (définie coté interface wordpress) = index ? )
<main id="site-main"></main>

<?php
    include('template-parts/post-list.php');
    include ('template-parts/post-tiny-list.php');
    get_search_form();
?>

<?php 
echo "contenu de la plage :";
 ?>
<?php get_footer(); ?>
