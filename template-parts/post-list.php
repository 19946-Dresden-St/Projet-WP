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

	?>
</div>


<div class="row row-cols-1 row-cols-md-2 g-4">


			<?php while($the_query->have_posts()){ 
					$the_query->the_post();
				?>

				<div class="col">
					<div class="card">
						<div class="img-container">
							<img src= "<?= get_the_post_thumbnail_url($post)?> ">
						</div>
						<div class="card-body">
							<h5 class="card-title" style="margin: 1.5rem 0"><?= $post->post_title ?></h5>
							<p class="card-text">
								<?= wp_strip_all_tags($post->post_content)  ?>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>

			<?php

					echo '<div class="post-list-pagination">';
					echo paginate_links([
						'total' => $the_query->max_num_pages,
						'current' => $paged
					]);
					echo '</div>';
			?>
</div>











