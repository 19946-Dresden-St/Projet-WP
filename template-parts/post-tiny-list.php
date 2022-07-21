<?php
	$paged = (get_query_var('paged')) ? absint( get_query_var( 'paged' ) ) : 1;

	$args = [
		'post_type' => 'post',
		'posts_per_page' => 4,
		'post_status' => 'publish',
		'paged' => $paged
	];

	$the_query = new WP_Query($args);
	?>


	<div>
	<h5>Recent posts</h5>

	
	<?php while($the_query->have_posts()){
					$the_query->the_post();
	?>
	
						<div class="recent-post">
							<div></div>
							<div>
								<p>
									<?=  $post->post_title ?>
								</p>
								<p>
									<?=' <time>' . date_i18n('j F Y', get_post_timestamp($post)) . '</time>' ?>
								</p>
							</div>
						</div>
	<?php } ?>
 </div>











