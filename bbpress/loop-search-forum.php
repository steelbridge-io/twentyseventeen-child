<?php

/**
 * Search Loop - Single Forum
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<a class="li-wrapper" href="<?php bbp_forum_permalink(); ?>">
<div class="bbp-forum-header">

	<div class="bbp-meta">

		<span class="bbp-forum-post-date"><?php printf( __( 'Last updated %s', 'bbpress' ), bbp_get_forum_last_active_time() ); ?></span>

		<!-- <span>#<?php //bbp_forum_id(); ?></span> -->

	</div><!-- .bbp-meta -->

	<div class="bbp-forum-title">

		<?php do_action( 'bbp_theme_before_forum_title' ); ?>

		<?php _e( 'Forum: ', 'bbpress' ); ?><span><?php bbp_forum_title(); ?></span>

		<?php do_action( 'bbp_theme_after_forum_title' ); ?>

	</div><!-- .bbp-forum-title -->

</div><!-- .bbp-forum-header -->

<div id="post-<?php bbp_forum_id(); ?>" <?php bbp_forum_class(); ?>>

	<div class="bbp-forum-content">

		<?php do_action( 'bbp_theme_before_forum_content' ); ?>

		<?php //bbp_forum_content(); ?>
		<?php
			$content = bbp_get_forum_content();
			$content = wp_strip_all_tags($content);
				echo $content;
			?>
		<?php do_action( 'bbp_theme_after_forum_content' ); ?>

	</div><!-- .bbp-forum-content -->

</div><!-- #post-<?php bbp_forum_id(); ?> -->
