<div class="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) ?>
	<div class="row">
		<div class="col-12">
			<div class="trends">
				<h2 class="title">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
						<path d="M12 23C7.85786 23 4.5 19.6421 4.5 15.5C4.5 13.3462 5.40786 11.4045 6.86179 10.0366C8.20403 8.77375 11.5 6.49951 11 1.5C17 5.5 20 9.5 14 15.5C15 15.5 16.5 15.5 19 13.0296C19.2697 13.8032 19.5 14.6345 19.5 15.5C19.5 19.6421 16.1421 23 12 23Z"></path>
					</svg>
					Trendler
				</h2>
				<div class="links">
					<?php
					$args = array(
						'posts_per_page' => 10,
						'meta_key'       => 'popular_posts',
						'orderby'        => 'meta_value_num',
						'order'          => 'DESC'
					);
					$popular_posts = new WP_Query($args);
					while ($popular_posts->have_posts()) : $popular_posts->the_post();
					?>
						<a href="<?php the_permalink(); ?>" class="post-link">
							<h4 class="post-title"><?php the_title(); ?></h4>
							<span class="date"><?= esc_html(human_time_diff(get_the_time('U'), current_time('timestamp'))) . ' önce'; ?></span>
						</a>
					<?php endwhile;
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
</div>