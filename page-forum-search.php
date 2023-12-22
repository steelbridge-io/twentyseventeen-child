<?php
/*
Template Name: Search Page
*/

get_header(); ?>

<div class="wrap">
	<div class="content-area">
		<main id="main" class="site-main" role="main">
      <header class="entry-header">
    		<h1 class="entry-title">Search Results</h1>
        <?php if ( bbp_allow_search() ) : ?>

          <div class="bbp-search-form">

            <?php bbp_get_template_part( 'form', 'search' ); ?>

          </div>

        <?php endif; ?>
        <div class="clear"></div>
    	</header><!-- .entry-header -->
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'bbpress/content', 'search' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();