<div class="post-list-wrapper">
	<?php
	$paged = (get_query_var('paged')) ? absint( get_query_var( 'paged' ) ) : 1;

	$args = [
		'post_type' => 'post',
		'posts_per_page' => 4,
		'post_status' => 'publish',
		'paged' => $paged
	];

	$the_query = new WP_Query($args);

	if($the_query->have_posts()){
		echo '<ul class="post-list">';
		while($the_query->have_posts()){
			$the_query->the_post();
			echo '<li><a href="' . get_permalink($post->ID) . '">';
			echo '<article>';
			echo '<img src= "'.get_the_post_thumbnail_url($post). '"/>';
			echo '<h1>' . $post->post_title . '</h1>';
            echo '<p>'.wp_strip_all_tags($post->post_content) .'</p>';
			echo '</article></a></li>';
		}
		echo '</ul>';
	}
	echo '</div>';
	?>
</div>












