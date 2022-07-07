<?php get_header() ?>

								<?php
								$author_id = $post->post_author;
								$author_name = get_the_author_meta( 'nickname', $author_id );
								?>
								<?= $author_name ?>
							</div>

							<time>
								<?= date_i18n( 'j F Y', $post->post_date); ?>
							</time>

					<div class="post-image">
						<?= get_the_post_thumbnail() ?>
					</div>
					<div class="post-content">
						<?php the_content() ?>
					</div>

<?php get_footer() ?>