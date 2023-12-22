<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
function mycustom_breadcrumb_options() {
	// Home - default = true
	$args['include_home']    = true;
	// Forum root - default = true
	$args['include_root']    = false;
	// Current - default = true
	$args['include_current'] = true;

	return $args;
}

add_filter('bbp_before_get_breadcrumb_parse_args', 'mycustom_breadcrumb_options' );


/*BBPress email fix*/
add_filter( 'wp_mail_from_name', 'email_sent_from_name' );
function email_sent_from_name( $name )
{
    return 'C5 Connections Staff Portal';
}
add_filter( 'wp_mail_from', 'email_sent_from' );
function email_sent_from( $email )
{
    return 'donotreply@c5connections.org';
}

function bbp_enable_visual_editor( $args = array() ) {
    $args['tinymce'] = true;
    return $args;
}
add_filter( 'bbp_after_get_the_content_parse_args', 'bbp_enable_visual_editor' );

/**
 * Include bbPress 'topic' custom post type in WordPress' search results
 */

function ntwb_bbp_topic_cpt_search( $topic_search ) {
	$topic_search['exclude_from_search'] = false;
	return $topic_search;
}
add_filter( 'bbp_register_topic_post_type', 'ntwb_bbp_topic_cpt_search' );

/**
 * Include bbPress 'forum' custom post type in WordPress' search results
 */

function ntwb_bbp_forum_cpt_search( $forum_search ) {
	$forum_search['exclude_from_search'] = false;
	return $forum_search;
}
add_filter( 'bbp_register_forum_post_type', 'ntwb_bbp_forum_cpt_search' );

/**
 * Include bbPress 'reply' custom post type in WordPress' search results
 */

function ntwb_bbp_reply_cpt_search( $reply_search ) {
	$reply_search['exclude_from_search'] = false;
	return $reply_search;
}
add_filter( 'bbp_register_reply_post_type', 'ntwb_bbp_reply_cpt_search' );


add_filter( 'bbp_get_author_link', 'remove_author_links', 10, 2);
add_filter( 'bbp_get_reply_author_link', 'remove_author_links', 10, 2);
add_filter( 'bbp_get_topic_author_link', 'remove_author_links', 10, 2);
function remove_author_links($author_link, $args) {
	$author_link = preg_replace('#<a.*?>(.*?)</a>#i', '\1', $author_link);
	return "<p class='bbp-author-name'>".$author_link."</p>";
 }

// add_action('bbp_theme_before_reply_content','remove_attachments_search_page');
//
// function remove_attachments_search_page(){
//   global $gdbbpress_attachments_front;
//  remove_filter('bbp_get_reply_content', $gdbbpress_attachments_front->embed_attachments, 100, 2);
//  remove_filter('bbp_get_topic_content', $gdbbpress_attachments_front->embed_attachments, 100, 2);
// }

function remove_silly_object_filter($filter_name, $class_name, $function_name){
  global $wp_filter;
  foreach($wp_filter[ $filter_name ]->callbacks as $priority => $pri_data){
    foreach ($pri_data as $cb => $cb_data){
      if (is_array($cb_data['function']) && get_class($cb_data['function'][0]) == $class_name && $cb_data['function'][1] == $function_name){
        $object = $cb_data['function'][0];
        $priority_to_remove = $priority;
        $function = $cb_data['function'][1];
        break;
      }
    }
    if (isset($object)) break;
  }
  remove_filter($filter_name,  array($object, $function), $priority_to_remove);
}
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
?>