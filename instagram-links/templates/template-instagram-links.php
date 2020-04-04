<?php
/**
 * Template Name: Instagram Links
 *
 * 
 *
 * @package understrap_ccp
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );

get_header();

echo '<div class="ig-wrapper">';

// check for a Featured Image and then assign it to a PHP variable for later use
if ( has_post_thumbnail() ) {
    $featured_image = get_the_post_thumbnail();
	echo '<span class="ig-profile-image">' . $featured_image . '</span>';
}

echo '<h2>';
the_title();
echo '</h2>';

echo the_content();

$args = array(
  'post_type' => 'instagram-links',
  'order' => 'asc',
  'orderby' => 'menu_order'
);

$ig_links = new WP_Query($args);

// The Loop
if ( $ig_links->have_posts() ) {
    echo '<ul class="ig-link-list col-12">';
    while ( $ig_links->have_posts() ) {
        $ig_links->the_post();
		
		$url = get_field('url');
		if ($url) {
			echo '<li><a href="' . $url . '">' . get_the_title() . '</a></li>';
		}
    }
    echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

echo '</div> <!-- #ig-wrapper -->';

get_footer();

?>
