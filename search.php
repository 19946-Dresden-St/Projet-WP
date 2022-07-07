<?php
/*
Template Name: Search Page
*/
?>

<?php
get_header(); 
$s=get_search_query();
?>

<div >
    <div>
            <div>
                    <div>
                        <?php get_search_form(); ?>
                    </div>

                    <h1>Search result for <?php echo $s ?> </h1>
                    <div>
            </div>
            <?php
                $s=get_search_query();
                $args = array(
                            );
            $argsPost = [
                'post_type' => 'post',
                's' =>$s,
                'post_status' => 'publish',
            ];

            $the_queryPost = new WP_Query( $argsPost );

            if($the_queryPost->have_posts()){
                            
                echo '<ul>';
                        while($the_queryPost->have_posts()){
                            $the_queryPost->the_post();
                            echo '<li><a href="' . get_permalink($post->ID) . '">';
                            echo '<article>';
                            echo '<h1>' . $post->post_title . '</h1>';
                            echo ' <time>' . date_i18n('j F Y', get_post_timestamp($post)) . '</time>';
                            echo '<p>'.wp_strip_all_tags($post->post_content) .'</p>';
                            echo '</article></a></li>';
                    
                        }
            
                    echo '</ul>';
            }
        
            ?>
            </div>
    </div>
</div>
<?php get_footer(); ?>