<?php
/**
 * Title: Services Query Loop
 * Slug: burley/services-query-loop
 * Categories: burley
 * Keywords: services, latest
 *
 * @package burley
 */

$strings = array(
	'button' => __( 'Book Appointment', 'burley' ),
);

?>
<!-- wp:query {"queryId":10,"query":{"perPage":"3","pages":0,"offset":0,"postType":"service","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"full","className":"queryLoopCards-coloured","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignfull queryLoopCards-coloured">
	<!-- wp:group {"align":"wide","className":"has-overflow-hidden has-border-radius-medium","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-overflow-hidden has-border-radius-medium">
		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"}},"className":"queryLoopCards-coloured","layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"100%"},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg"}}}},"textColor":"bur-fg","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group has-bur-fg-color has-text-color has-link-color" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:post-featured-image {"aspectRatio":"auto","height":"14rem","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}},"layout":{"selfStretch":"fill","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"textColor":"bur-fg-alt","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group has-bur-fg-alt-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:bigup-services/service-icon {"width":"60","height":"60"} /-->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
						<!-- wp:post-title {"level":3,"fontSize":"xx-large"} /-->
						<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":30} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"color":{"duotone":["#094850","#f9644e"]},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"var:preset|spacing|50"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"bur-bg-alt"} -->
					<div class="wp-block-button">
						<a class="wp-block-button__link has-bur-bg-alt-background-color has-background wp-element-button"><?php echo esc_html( $strings['button'] ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
