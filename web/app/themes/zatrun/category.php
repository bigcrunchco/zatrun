<?php get_header(); ?>
	<section class="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12">
					<div class="posts">
						<div class="header">
							<h1 class="title"><?= single_cat_title() ?></h1>
						</div>
						<div class="post-list">
							<?php
							if (have_posts()) :
								while (have_posts()) : the_post();
							?>
									<a href="<?php the_permalink(); ?>" class="post-card">
										<div class="thumbnail-image">
											<?php
												the_post_thumbnail(
													'small',
													array('alt' => get_the_title())
												);
											?>
										</div>
										<div class="content">
											<?php
											$categories = get_the_category();
											if (!empty($categories)) :
												$category = $categories[0];
											?>
												<span class="category"><?php echo esc_html($category->cat_name); ?></span>
											<?php endif; ?>
											<span class="title"><?php the_title(); ?></span>
											<span class="date"><?php echo esc_html(human_time_diff(get_the_time('U'), current_time('timestamp'))) . ' önce'; ?></span>
										</div>
									</a>
							<?php
								endwhile;
							else :
								include get_template_directory() . '/partials/not-found-content.php';
							endif;
							?>
						</div>
					</div>
					<div class="pagination">
						<div class="nav-previous alignleft"><?php previous_posts_link( 'Yeni yazılar' ); ?></div>
						<div class="nav-next alignright"><?php next_posts_link( 'Eski yazılar' ); ?></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>