<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=no">
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css?v=2.3" />
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css?v=2.2" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?= get_theme_mod('site_icon', get_template_directory_uri() . '/images/cavonews-favicon.png') ?>" type="image/png">
	<?php wp_head(); ?>
	<style>
		:root {
			--primary-color: <?= get_theme_mod('primary_color', '#ca0a14') ?>;
			--secondary-color: <?= get_theme_mod('secondary_color', '#282a31') ?>;
			--background-color: <?= get_theme_mod('main_background_color', '#f2f2f3') ?>;
		}
	</style>
	<?= get_theme_mod('ads_auto') ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9FH7EVK29P"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-9FH7EVK29P');
	</script>
</head>
<body>
	<?php if(get_theme_mod('ads_masthead')) : ?>
		<div class="masthead-container">
			<div class="masthead">
				<?= get_theme_mod('ads_masthead') ?>
			</div>
		</div>
	<?php endif; ?>
	<header class="head-navbar">
		<div class="header-top">
			<div class="container">
				<div class="header-container">
					<div class="header-left">
						<div class="logo">
							<a href="<?= get_site_url(); ?>"><img src="<?= get_theme_mod('site_logo') ?>" alt="<?php bloginfo('name'); ?>" /></a>
						</div>
					</div>
					<div class="ticker-bar">
						<div class="ticker-bar-container">
							<div class="ticker">
								<span class="name">BORSA</span>
								<div class="price" data-symbol="XU100">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
							<div class="ticker">
								<span class="name">DOLAR</span>
								<div class="price" data-symbol="USD/TRL">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
							<div class="ticker">
								<span class="name">EURO</span>
								<div class="price" data-symbol="EUR/TRL">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
							<div class="ticker">
								<span class="name">EURO/DOLAR</span>
								<div class="price" data-symbol="EUR/USD">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
							<div class="ticker">
								<span class="name">GRAM GOLD</span>
								<div class="price" data-symbol="XGLD">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
							<div class="ticker">
								<span class="name">GOLD(ONS)</span>
								<div class="price" data-symbol="XAU/USD">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
							<div class="ticker">
								<span class="name">BRENT</span>
								<div class="price" data-symbol="XBR/USD">
									<div class="loading"></div>
									<span class="value"></span>
									<span class="change up"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="header-mobile">
						<div class="mobile-button open-search">
							<i class="ri-search-line"></i>
						</div>
						<div class="mobile-button open-menu">
							<i class="ri-menu-3-line"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="header-container">
					<nav class="header-menu">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'main_menu',
								'container' => 'ul',
								'menu_class' => 'menu',
							));
						?>
					</nav>
					<div class="search">
						<form method="get" autocapitalize="off" autocomplete="off" autocorrect="off" action="<?= esc_url( home_url( '/' ) ); ?>">
							<input type="text" value="<?= get_search_query(); ?>" name="s" id="s" placeholder="Search" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Mobile Search & Mobile Menu -->
	<div class="mobile-search">
		<form method="get" autocapitalize="off" autocomplete="off" autocorrect="off" action="<?= esc_url( home_url( '/' ) ); ?>">
			<input type="text" value="<?= get_search_query(); ?>" name="s" id="s" placeholder="Search" />
			<div class="mobile-button close-search">
				<i class="ri-close-line"></i>
			</div>
		</form>
	</div>
	<div class="mobile-menu">
		<nav class="header-menu">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'container' => 'ul',
					'menu_class' => 'menu',
				));
			?>
		</nav>
	</div>
	<!-- //End -->
	<main id="wrapper">