<?php

/**
 * Search Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<a class="li-wrapper" href="<?php bbp_topic_permalink( bbp_get_reply_topic_id() ); ?>">
<div class="bbp-reply-header">
	<span class="bbp-topic-post-date"><?php bbp_topic_post_date( bbp_get_topic_id() ); ?></span>
	<div class="bbp-reply-title">

		<h3><?php _e( 'In reply to: ', 'bbpress' ); ?>
		<span class="bbp-topic-permalink"><?php bbp_topic_title( bbp_get_reply_topic_id() ); ?></span></h3>

	</div><!-- .bbp-reply-title -->

</div><!-- .bbp-reply-header -->

<div id="post-<?php bbp_reply_id(); ?>" <?php bbp_reply_class(); ?>>

	<div class="bbp-reply-author">

		<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>

		<?php //bbp_reply_author_link( array( 'sep' => '<br />', 'show_role' => false ) ); ?>
		<?php bbp_reply_author_link( array( 'sep' => '<br />', 'show_role' => false) ); ?>
		<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>

	</div><!-- .bbp-reply-author -->

	<div class="bbp-reply-content">

		<?php do_action( 'bbp_theme_before_reply_content' ); ?>
		<?php remove_silly_object_filter('bbp_get_reply_content', 'gdbbAtt_Front', 'embed_attachments'); ?>
		<?php //bbp_reply_content(); ?>
		<?php
			$content = bbp_get_reply_content();
			$content = wp_strip_all_tags($content);
				echo $content;
			?>
		<?php do_action( 'bbp_theme_after_reply_content' ); ?>

	</div><!-- .bbp-reply-content -->

</div><!-- #post-<?php bbp_reply_id(); ?> -->
</a>
