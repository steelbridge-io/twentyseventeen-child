<?php

/**
 * Template Name: bbPress - Topics (Newest)
 *
 * @package bbPress
 * @subpackage Theme
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

<div class="site-content-contain">
  <div id="content" class="site-content">
    <div class="wrap">
	    <div id="primary" class="content-area">
		     <main id="main" class="site-main" role="main">
           <?php do_action( 'bbp_before_main_content' ); ?>

         	<?php do_action( 'bbp_template_notices' ); ?>

         	<?php while ( have_posts() ) : the_post(); ?>

         		<div id="topics-front" class="bbp-topics-front">
         			<h1 class="entry-title">C5 Staff Portal</h1>
              <div class="bbp-search-form">

          			<?php bbp_get_template_part( 'form', 'search' ); ?>

          		</div>
         			<div class="entry-content">

         				<?php the_content(); ?>

         				<?php bbp_get_template_part( 'content', 'archive-forum' ); ?>

         			</div>
         		</div><!-- #topics-front -->

         	<?php endwhile; ?>

         	<?php do_action( 'bbp_after_main_content' ); ?>
         </main>
        </div>
    </div>
  </div>
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>