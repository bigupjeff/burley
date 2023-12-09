<?php
/**
 * Title: Image Gallery with title
 * Slug: burley/image-gallery
 * Categories: burley
 * Keywords: gallery, images
 *
 * @package burley
 */

$strings = array(
	'title'  => __( 'Image Gallery with title', 'burley' ),
	'byline' => __( 'Add your text, and replace with your images', 'burley' ),
	'button' => __( 'View more photos', 'burley' ),
);

$image_markup = '';
for ( $n = 1; $n <= 5; $n++ ) {
	$image_markup .= '<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->';
	$image_markup .= '<figure class="wp-block-image size-full">';
	$image_markup .= '<img src="' . esc_url( BURLEY_URL . 'assets/svg/pattern-images/shape-0' . $n . '.svg' ) . '" alt="Illustration"/>';
	$image_markup .= '</figure>';
	$image_markup .= '<!-- /wp:image -->';
}

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo esc_html( $strings['title'] ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html( $strings['byline'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">

<!-- wp:gallery {"imageCrop":false,"linkTo":"none","sizeSlug":"full","align":"center"} -->
<figure class="wp-block-gallery aligncenter has-nested-images columns-default"><?php echo wp_kses_post( $image_markup ); ?></figure>
<!-- /wp:gallery -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"textColor":"burley-fg-alt"} -->
<div class="wp-block-button">
<a class="wp-block-button__link has-burley-fg-alt-color has-text-color"><?php echo esc_html( $strings['button'] ); ?></a>
</div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
