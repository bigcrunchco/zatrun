<?php get_header(); ?>
	<section class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-12">
					<div class="post">
						<div class="single-post">
							<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post(); ?>

							<div class="header">
								<h1 class="title"><?php the_title(); ?></h1>
							</div>

							<div class="content">
								<?php the_content(); ?>
							</div>

							<?php endwhile;
							else :
								echo wpautop( '<h2>Sayfa bulunamadı!</h2>' );
							endif;
							?>
						</div>
						<div class="pagination">
							<?php previous_post_link() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>