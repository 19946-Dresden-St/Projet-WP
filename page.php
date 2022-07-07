<?php get_header() ?>
(page.php)

<h1><?php the_title() ?></h1>


<?php
    echo '<div class="page-content">';
            the_content();
    echo '</div>';
?>

<?php get_footer() ?>
