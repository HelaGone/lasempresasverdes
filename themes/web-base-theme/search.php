<?php get_header(); global $wp_query; ?>
<main>
	<section>
		<div class="container archive-section">
			<div class="archive-content">
				<div class="post-grid-title">
					<h1><?php printf( __( 'Resultados de búsqueda para: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
				<?php if(have_posts()): ?>
					<div class="post-archive">
					<?php while(have_posts()):
						the_post();
						$thumbnail_id = get_post_thumbnail_id( $post->ID );
						$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ?>
							<div class="post">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<figure>
										<img src="<?php the_post_thumbnail_url('middle'); ?>" alt="<?php echo esc_attr($alt); ?>"/>
									</figure>
									<h2><?php the_title(); ?></h2>
									<div class="description"><?php echo strip_tags(get_the_excerpt()); ?></div>
								</a>
							</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<div class="post-archive-pagination">
					<?php custom_pagination($wp_query->max_num_pages, "9"); ?>
				</div>
			</div>
			<aside class="sidebar">
				<div class="sidebar-ad-break sidebar-item"></div>
				<div class="related-sidebar-section sidebar-item">
					<div class="sidebar-item-title">
						<h3>Relacionadas</h3>
					</div>
					<div class="related-sidebar-content">
						<?php
							$var_expire = 300;
							$query = wp_cache_get('sidebar_relacionados');
							if($query === false){
								$args = array(
											'post_type' 		=> 'post',
											'posts_per_page' 	=> 10,
											'post_status' 		=>'publish',
											'orderby' 			=> 'date',
											'order' 			=> 'DESC',
											'post__not_in'		=> $dot_not_repeat_post_id,
											);
								$posts = new WP_Query($args);
								wp_cache_set('sidebar_relacionados', $posts, $var_expire);
							}
						?>
						<?php
							if($posts->have_posts()):
								while($posts->have_posts()):
									$posts->the_post();
									setup_postdata($post);
						?>
						<div class="post type-video">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<figure>
									<?php the_post_thumbnail('middle'); ?>
								</figure>
								<h2><?php the_title(); ?></h2>
							</a>
						</div>
						<?php
								endwhile;
							wp_reset_postdata();
							endif;
						?>
					</div>
				</div>
			</aside>
		</div>
	</section>
</main>
<?php get_footer(); ?>
