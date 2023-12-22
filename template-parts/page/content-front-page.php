<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" >

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<p>test</p>
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php echo the_content();?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->
