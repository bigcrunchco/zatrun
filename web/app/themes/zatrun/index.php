<?php get_header(); ?>
	<section class="headline-post">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12">
					<!-- Headlines -->
					<div class="swiper headlines">
						<div class="swiper-wrapper">
						<?php
						$headline_category = get_theme_mod('headline_category');
						$args = array(
							'posts_per_page' => 20,
							'orderby'        => 'post_date',
							'cat'       => $headline_category,
							'order'          => 'desc'
						);

						$headline_query = new WP_Query($args);

						if ($headline_query->have_posts()) :
							while ($headline_query->have_posts()) : $headline_query->the_post();
						?>
							<div class="swiper-slide">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-card">
									<div class="photo" style="background-image:url('<?php the_post_thumbnail_url('headline') ?>')"></div>
									<div class="content">
										<?php
										$categories = get_the_category();
										if (!empty($categories)) :
											$category = $categories[0];
										?>
											<span class="category"><?= esc_html($category->cat_name); ?></span>
										<?php endif; ?>
										<h2 class="title"><?php the_title(); ?></h2>
									</div>
								</a>
							</div>
						<?php
							endwhile;
							wp_reset_postdata();
						else :
							// No posts found
						endif;
						?>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-pagination"></div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<div class="headline-links scroll">
						<div class="links">
							<?php
							$cat = get_theme_mod('featured_category');
							$args = array(
								'posts_per_page' => 10,
								'offset'         => 20,
								'orderby'        => 'post_date',
								'cat'       => $cat,
								'order'          => 'desc'
							);

							$featured = new WP_Query($args);

							if ($featured->have_posts()) :
								while ($featured->have_posts()) : $featured->the_post();
							?>
									<a href="<?php the_permalink(); ?>" class="post-link">
									<div class="thumbnail-image">
										<?php
											the_post_thumbnail(
												'extra-small',
												array('alt' => get_the_title())
											);
										?>
									</div>
										<h4 class="post-title"><?php the_title(); ?></h4>
									</a>
							<?php
								endwhile;
								wp_reset_postdata();
							else :
								// No posts found
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="fast-post">
		<div class="container">
			<!-- Fast News -->
			<div class="swiper fast-news">
				<div class="swiper-wrapper">
				<?php
				$cat = get_option('cavonews_manset');
				$args = array(
					'posts_per_page' => 10,
					'offset'         => 30,
					'orderby'        => 'post_date',
					'cat'       => $cat,
					'order'          => 'desc'
				);

				$the_query = new WP_Query($args);

				if ($the_query->have_posts()) :
					while ($the_query->have_posts()) : $the_query->the_post();
				?>
					<div class="swiper-slide">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-card">
							<div class="thumbnail-image">
								<?php
									the_post_thumbnail(
										'small',
										array('alt' => get_the_title())
									);
								?>
							</div>
							<div class="content">
								<?php $category = get_the_category(); ?>
								<?php if ($category) : ?>
									<span class="category"><?php echo esc_html($category[0]->cat_name); ?></span>
								<?php endif; ?>
								<h2 class="title"><?php the_title(); ?></h2>
							</div>
						</a>
					</div>
				<?php
					endwhile;
					wp_reset_postdata();
				else :
					// No posts found
				endif;
				?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>
	<section class="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12">
					<div class="posts">
						<div class="header">
							<h1 class="d-none">Finans Haberleri</h1>
							<span class="title">Son Haberler</span>
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
											if ($categories) :
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
						
						<div class="pagination">
							<div class="nav-previous alignleft"><?php previous_posts_link( 'Yeni yazılar' ); ?></div>
							<div class="nav-next alignright"><?php next_posts_link( 'Eski yazılar' ); ?></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>