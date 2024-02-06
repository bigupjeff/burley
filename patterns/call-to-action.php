<?php
/**
 * Title: Call to action
 * Slug: burley/call-to-action
 * Categories: burley
 * Keywords: section, cta, button
 *
 * @package burley
 */

$strings = array(
	'title'  => __( 'Contact us Today', 'burley' ),
	'byline' => __( 'We are ready to provide you with with mortgage advice and help secure your home.', 'burley' ),
	'button' => __( 'Contact', 'burley' ),
);

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"burley-accent","className":"has-responsive-h2","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-responsive-h2 has-burley-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
		<p class="has-text-align-center has-large-font-size">
			<?php echo esc_html( $strings['byline'] ); ?>
		</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","textColor":"burley-fg-alt","fontSize":"display-medium"} -->
		<h2 class="wp-block-heading has-text-align-center has-burley-fg-alt-color has-text-color has-display-medium-font-size">
			<?php echo esc_html( $strings['title'] ); ?>
		</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:button {"textColor":"burley-fg-alt","className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill">
				<a class="wp-block-button__link has-burley-fg-alt-color has-text-color wp-element-button" href="/contact/#form">
					<?php echo esc_html( $strings['button'] ); ?>
				</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
