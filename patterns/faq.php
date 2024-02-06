<?php
/**
 * Title: Frequently Asked Questions
 * Slug: burley/faq
 * Categories: burley
 * Keywords: faq, questions
 * Block Types: core/details
 *
 * @package burley
 */

$strings = array(
	'title'  => __( 'Frequently asked Questions', 'burley' ),
	'byline' => __( 'Have questions? We have the answers!', 'burley' ),
	'button' => __( 'Ask another question', 'burley' ),
);

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","className":"is-style-default"} -->
	<h2 class="wp-block-heading has-text-align-center is-style-default"><?php echo esc_html( $strings['title'] ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"normal"} -->
	<p class="has-text-align-center has-normal-font-size"><?php echo esc_html( $strings['byline'] ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
	<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-fg-alt","className":"has-border-radius-medium","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-radius-medium has-bur-fg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:details -->
			<details class="wp-block-details">
				<summary>What is Lorem Ipsum?</summary>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1rem"}},"backgroundColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-bur-fg-alt-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|bur-fg"}}}},"textColor":"bur-fg"} -->
					<p class="has-bur-fg-color has-text-color has-link-color">
						<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-fg-alt","className":"has-border-radius-medium","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-radius-medium has-bur-fg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:details -->
			<details class="wp-block-details">
				<summary>Where does it come from?</summary>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1rem"}},"backgroundColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-bur-fg-alt-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|bur-fg"}}}},"textColor":"bur-fg"} -->
					<p class="has-bur-fg-color has-text-color has-link-color">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-fg-alt","className":"has-border-radius-medium","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-radius-medium has-bur-fg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:details -->
			<details class="wp-block-details">
				<summary>Why do we use it?</summary>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1rem"}},"backgroundColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-bur-fg-alt-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|bur-fg"}}}},"textColor":"bur-fg"} -->
					<p class="has-bur-fg-color has-text-color has-link-color">
						<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-fg-alt","className":"has-border-radius-medium","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-radius-medium has-bur-fg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:details -->
			<details class="wp-block-details">
				<summary>Where does it come from?</summary>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1rem"}},"backgroundColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-bur-fg-alt-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|bur-fg"}}}},"textColor":"bur-fg"} -->
					<p class="has-bur-fg-color has-text-color has-link-color">
						<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|bur-fg-alt"}}}},"backgroundColor":"bur-bg-alt","textColor":"bur-fg-alt","className":"has-border-radius-medium","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-radius-medium has-bur-fg-alt-color has-bur-bg-alt-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
			<!-- wp:details -->
			<details class="wp-block-details">
				<summary>Lorem ipsum sit dolor?</summary>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"border":{"radius":"1rem"}},"backgroundColor":"bur-fg-alt","layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-bur-fg-alt-background-color has-background" style="border-radius:1rem;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:paragraph {"placeholder":"Type / to add a hidden block","style":{"elements":{"link":{"color":{"text":"var:preset|color|bur-fg"}}}},"textColor":"bur-fg"} -->
					<p class="has-bur-fg-color has-text-color has-link-color">
						<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</details>
			<!-- /wp:details -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"textColor":"lonewolf-fg-alt"} -->
		<div class="wp-block-button">
			<a class="wp-block-button__link has-lonewolf-fg-alt-color has-text-color wp-element-button" href="#"><?php echo esc_html( $strings['button'] ); ?></a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
