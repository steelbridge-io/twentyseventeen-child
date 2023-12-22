<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php if( is_user_logged_in() ):
  $user = wp_get_current_user();
      $role = ( array ) $user->roles;
      if(!$role){
        echo "<p class='user-not-logged'> You are not logged in or do not have permission to view this page. Please <a href='https://c5connections.org/'>sign in</a>. </p>";
        die;
      }else{
        //print_r($role);
      }
else:?>
<p class="user-not-logged"> You are not logged in or do not have permission to view this page. Please sign in. </p>
<?php
die;
endif;?>


<div class="wrap">
	<div class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

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