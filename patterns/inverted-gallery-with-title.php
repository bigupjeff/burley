<?php
/**
 * Title: Inverted gallery with title
 * Slug: burley/inverted-gallery-with-title
 * Categories: burley
 * Keywords: section, gallery, image, title, images
 *
 * @package burley
 */

$strings = array(
	'title' => __( 'Inverted gallery with title', 'burley' ),
);

$images = array(
	BURLEY_URL . 'assets/svg/pattern-images/shape-01.svg',
	BURLEY_URL . 'assets/svg/pattern-images/shape-07.svg',
	BURLEY_URL . 'assets/svg/pattern-images/shape-06.svg',
	BURLEY_URL . 'assets/svg/pattern-images/shape-05.svg',
	BURLEY_URL . 'assets/svg/pattern-images/shape-08.svg',
);

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"burley-fg","textColor":"burley-bg","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-burley-bg-color has-burley-fg-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:heading -->
<h2><?php echo esc_html( $strings['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_html( $images[0] ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_html( $images[1] ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_html( $images[2] ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_html( $images[3] ); ?>" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_html( $images[4] ); ?>" alt=""/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
