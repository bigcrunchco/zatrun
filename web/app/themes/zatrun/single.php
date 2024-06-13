<?php get_header(); ?>
	<section class="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12">
					<div class="post">
						<div class="single-post">
							<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post(); ?>

							<div class="header">
								<h1 class="title"><?php the_title(); ?></h1>
								<?php the_excerpt(); ?>
							</div>
							
							<div class="subscription">
								<a class="google-news" href="https://news.google.com/publications/CAAqBwgKMOG3qwwwh8buAg" target="_blank">
									<span class="sub-logo"><svg xmlns="http://www.w3.org/2000/svg" width="74" viewBox="0 0 140 24.291"><defs><style>.a{fill:#4285f4;}.b{fill:#ea4335;}.c{fill:#fbbc05;}.d{fill:#34a853;}.e{fill:#5f6368;}</style></defs><g transform="translate(-28.617 -13)"><path class="a" d="M38.264,21.653v2.6h6.212a5.517,5.517,0,0,1-1.416,3.276,6.365,6.365,0,0,1-4.8,1.9,6.911,6.911,0,0,1,0-13.82,6.606,6.606,0,0,1,4.68,1.86l1.828-1.828A8.978,8.978,0,0,0,38.264,13a9.642,9.642,0,0,0-9.647,9.509,9.642,9.642,0,0,0,9.647,9.509A8.715,8.715,0,0,0,44.9,29.355a8.6,8.6,0,0,0,2.25-6.075,8.354,8.354,0,0,0-.137-1.627H38.264Z"/><path class="b" d="M55.136,19.612A6.138,6.138,0,1,0,61.3,25.75,6.049,6.049,0,0,0,55.136,19.612Zm0,9.857A3.551,3.551,0,0,1,51.67,25.75a3.474,3.474,0,1,1,6.931,0A3.55,3.55,0,0,1,55.136,29.469Z" transform="translate(-0.22 -0.072)"/><path class="a" d="M85.631,20.985h-.1A4.256,4.256,0,0,0,82.3,19.612a5.968,5.968,0,0,0-5.737,6.138A5.982,5.982,0,0,0,82.3,31.889a4.19,4.19,0,0,0,3.233-1.395h.095v.856c0,2.346-1.256,3.6-3.274,3.6a3.4,3.4,0,0,1-3.1-2.187l-2.346.971a5.849,5.849,0,0,0,5.441,3.624c3.159,0,5.832-1.86,5.832-6.392V19.929H85.631Zm-3.1,8.484A3.437,3.437,0,0,1,79.26,25.75a3.418,3.418,0,0,1,3.274-3.719,3.458,3.458,0,0,1,3.276,3.741A3.419,3.419,0,0,1,82.535,29.469Z" transform="translate(-0.519 -0.072)"/><path class="c" d="M69.021,19.612a6.138,6.138,0,1,0,6.16,6.138A6.049,6.049,0,0,0,69.021,19.612Zm0,9.857a3.55,3.55,0,0,1-3.465-3.719,3.474,3.474,0,1,1,6.931,0A3.551,3.551,0,0,1,69.021,29.469Z" transform="translate(-0.37 -0.072)"/><path class="d" d="M90.45,13.256H93.1V31.82H90.451Z" transform="translate(-0.669 -0.003)"/><path class="b" d="M101.343,29.469a3.124,3.124,0,0,1-2.98-1.86l8.21-3.391-.275-.7a5.7,5.7,0,0,0-5.252-3.909,5.832,5.832,0,0,0-5.79,6.138,6,6,0,0,0,6.085,6.139,6.126,6.126,0,0,0,5.114-2.715l-2.092-1.395a3.516,3.516,0,0,1-3.022,1.692Zm-.191-7.554a2.428,2.428,0,0,1,2.325,1.352L97.93,25.56a3.335,3.335,0,0,1,3.223-3.645Z" transform="translate(-0.721 -0.072)"/><path class="e" d="M114.439,31.983V15.157h2.631l8.179,13.09h.094L125.249,25V15.158h2.161V31.984h-2.255L116.6,18.259h-.094L116.6,21.5v10.48Zm21.2.376a5.554,5.554,0,0,1-4.242-1.739,6.167,6.167,0,0,1-1.633-4.394,6.333,6.333,0,0,1,1.587-4.324,5.149,5.149,0,0,1,4.054-1.81,5.312,5.312,0,0,1,4.1,1.669,6.33,6.33,0,0,1,1.539,4.465l-.024.4h-9.094a3.91,3.91,0,0,0,1.163,2.75,3.527,3.527,0,0,0,2.5,1.009,3.1,3.1,0,0,0,3.149-1.973l1.927.8a5.162,5.162,0,0,1-1.857,2.244,5.39,5.39,0,0,1-3.172.9Zm3.1-7.52a3.066,3.066,0,0,0-.905-1.879,3.23,3.23,0,0,0-2.479-.893,3.1,3.1,0,0,0-2.079.752,3.844,3.844,0,0,0-1.211,2.021Zm16.872,7.144H153.4l-2.867-8.835-2.844,8.835H145.5l-3.712-11.514h2.256l2.562,8.695h.023l2.844-8.695h2.233l2.843,8.695h.024l2.538-8.695h2.209L155.61,31.983Zm9.4.376a5.173,5.173,0,0,1-3.185-.94,5.564,5.564,0,0,1-1.844-2.35l1.927-.8a3.185,3.185,0,0,0,3.126,2.161,2.855,2.855,0,0,0,1.657-.446,1.368,1.368,0,0,0,.646-1.175q0-1.128-1.575-1.527l-2.327-.564a5.533,5.533,0,0,1-2.091-1.069,2.577,2.577,0,0,1-.987-2.127,2.905,2.905,0,0,1,1.351-2.479,5.423,5.423,0,0,1,3.208-.953,5.347,5.347,0,0,1,2.726.693,3.907,3.907,0,0,1,1.715,1.986l-1.879.776a2.552,2.552,0,0,0-2.632-1.528,3.077,3.077,0,0,0-1.622.4,1.219,1.219,0,0,0-.658,1.081q0,.987,1.527,1.339l2.28.541a4.305,4.305,0,0,1,2.4,1.292,3.116,3.116,0,0,1,.776,2.067,3.2,3.2,0,0,1-1.269,2.586A5,5,0,0,1,165.01,32.359Z" transform="translate(-0.928 -0.023)"/></g></svg></span>
									<span class="sub-text">Subscribe</span>
								</a>
							</div>

							<div class="detail">
								<div class="author">
									<?= get_avatar( get_the_author_email(), '60' ); ?>
									<div class="info">
										<a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" itemprop="author" itemtype="http://schema.org/Person" class="name"><?php the_author(); ?></a></span>
										<time class="date" itemprop="datePublished"><?= human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></time>
									</div>
								</div>
								<div class="share">
									<a class="link x" href="https://x.com/share?text=<?php get_the_title(); ?> <?= get_permalink(); ?>" onclick="window.open('https://x.com/share?text=<?php get_the_title(); ?> <?= get_permalink(); ?>','X','width=800,height=400')" target="popup" rel="nofollow" title="X">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14" fill="currentColor"><path d="M8 2H1L9.26086 13.0145L1.44995 21.9999H4.09998L10.4883 14.651L16 22H23L14.3917 10.5223L21.8001 2H19.1501L13.1643 8.88578L8 2ZM17 20L5 4H7L19 20H17Z"></path></svg>
									</a>
									<a class="link facebook" href="http://www.facebook.com/share.php?u=<?= get_permalink(); ?>" onclick="window.open('http://www.facebook.com/share.php?u=<?= get_permalink(); ?>','facebook','width=800,height=400')" target="popup" rel="nofollow" title="Facebook">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47062 14 5.5 16 5.5H17.5V2.1401C17.1743 2.09685 15.943 2 14.6429 2C11.9284 2 10 3.65686 10 6.69971V9.5H7V13.5H10V22H14V13.5Z"></path></svg>
									</a>
									<a class="link linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink(); ?>/&text=<?= get_the_title(); ?>" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink(); ?>/&text=<?= get_the_title(); ?>','linkedin','width=800,height=400')" target="popup" rel="nofollow" title="Facebook">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M6.94048 4.99993C6.94011 5.81424 6.44608 6.54702 5.69134 6.85273C4.9366 7.15845 4.07187 6.97605 3.5049 6.39155C2.93793 5.80704 2.78195 4.93715 3.1105 4.19207C3.43906 3.44699 4.18654 2.9755 5.00048 2.99993C6.08155 3.03238 6.94097 3.91837 6.94048 4.99993ZM7.00048 8.47993H3.00048V20.9999H7.00048V8.47993ZM13.3205 8.47993H9.34048V20.9999H13.2805V14.4299C13.2805 10.7699 18.0505 10.4299 18.0505 14.4299V20.9999H22.0005V13.0699C22.0005 6.89993 14.9405 7.12993 13.2805 10.1599L13.3205 8.47993Z"></path></svg>
									</a>
									<a class="link whatsapp" href="whatsapp://send?text=<?= get_permalink(); ?>" data-action="share/whatsapp/share">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z"></path></svg>
									</a>
									<a class="link email" href="mailto:?subject=<?php the_title(); ?>&body=<?= get_permalink(); ?>">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z"></path></svg>
									</a>
								</div>
							</div>

							<div class="content">
								<div class="featured-image">
									<img src="<?php the_post_thumbnail_url( "full" ); ?> " alt="<?php the_title(); ?>" />
								</div>
								<?php the_content(); ?>
							</div>

							<div class="disclaimer">
								<p><?php bloginfo('name'); ?>, While providing updates on current financial developments, we emphasize that we do not offer investment advice and urge readers to evaluate the information provided through their own research. We cannot be held responsible for any losses resulting from the information on our site, and we recommend readers to conduct their own risk analysis before engaging in any financial transactions.</p>
							</div>

							<?php endwhile;
							else :
								echo wpautop( '<h2>Yazı bulunamadı!</h2>' );
							endif;
							?>
							<?= get_theme_mod('ads_post_bottom') ?>
						</div>
						<div class="pagination">
							<?php previous_post_link() ?>
						</div>

						<div class="smilar">
							<div class="header">
								<span class="title">You may be interested</span>
							</div>
							<div class="row">
								<?php
								$categories = get_the_category($post->ID);
								if ($categories) {
									$category_ids = array();
									foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
									
									$args = array(
										'category__in' => $category_ids,
										'post__not_in' => array($post->ID),
										'showposts'=>3, // Gösterilecek benzer yazı sayısı
										'caller_get_posts'=>1
									);
											
									$smilar = new WP_Query($args);
									if( $smilar->have_posts() ) {
										while ($smilar->have_posts()) {
											$smilar->the_post();
										?>
										<div class="col-md-4">
											<a href="<?= get_permalink(); ?>" class="post-card">
												<?php the_post_thumbnail('small'); ?>
												<div class="content">
													<?php $category = get_the_category(); ?>
													<span class="category"><?= $category[0]->cat_name; ?></span>
													<span class="title"><?php the_title(); ?></span>
												</div>
											</a>
										</div>
								<?php
										}
									}
									wp_reset_query();
								}
								?>
							</div>
						</div>
						
						<?php if(1==2): ?>
						<div class="comments">
							<?php comments_template(); ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>