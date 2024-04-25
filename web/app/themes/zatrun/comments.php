<?php
/* cavonews WordPress Teması Yorum Şablonu */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area">

	<?php if ( have_comments() ) : ?>

	<h2 class="comments-title">
		<?php
			printf( _n( '1 yorum', '%1$s yorum', get_comments_number(), 'cavonews' ),
				number_format_i18n( get_comments_number() ), get_the_title() );
		?>
	</h2>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'cavonews' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Daha Eski Yorumlar', 'cavonews' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Yeni Yorumlar &rarr;', 'cavonews' ) ); ?></div>
	</nav><!-- #comment-nav-above -->
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 34,
			) );
		?>
	</ol><!-- .comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Yorum navigasyonu', 'cavonews' ); ?></h1>
		<div class="nav-previous"><?php previous_comments_link( __( '&larr; Daha eski', 'cavonews' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( __( 'Daha yeni &rarr;', 'cavonews' ) ); ?></div>
	</nav><!-- #comment-nav-below -->
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Yorumlara kapalıdır.', 'cavonews' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
