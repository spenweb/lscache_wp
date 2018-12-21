<?php
if ( ! defined( 'WPINC' ) ) die ;
?>
<div class="litespeed-wrap notice notice-info litespeed-banner-promo">
	<div class="litespeed-banner-promo-logo"></div>

	<div class="litespeed-banner-promo-content">

		<h2><?php echo __( 'Thank You for Using the LiteSpeed Cache for WordPress Plugin!', 'litespeed-cache' ) ; ?></h2>

		<p>
			<?php echo sprintf(
				__( 'If you have any questions, please do not hesitate to let us know in <a %s>our support forum</a> or by <a %s>submitting a ticket with us</a>.', 'litespeed-cache' ),
				'href="https://wordpress.org/support/plugin/litespeed-cache" target="_blank"',
				'href="https://www.litespeedtech.com/support" target="_blank"'
			) ; ?>
		</p>

		<p>
			<?php echo __( 'This plugin is created with ❤️ by LiteSpeed. Your rating is the simplest way to support us. We really appreciate it!', 'litespeed-cache' ) ; ?>
		</p>

		<a class="litespeed-btn-success litespeed-btn-xs" href="https://wordpress.org/support/plugin/litespeed-cache/reviews/?filter=5#new-post" target="_blank">
			👍
			<?php echo __( 'Sure I\'d love to!', 'litespeed-cache' ) ; ?>
			⭐⭐⭐⭐⭐
		</a>
		<button type="button" class="litespeed-btn-primary litespeed-btn-xs" id="litespeed-promo-done">👌 <?php echo __( 'I\'ve already left a review', 'litespeed-cache' ) ; ?></button>
		<button type="button" class="litespeed-btn-warning litespeed-btn-xs" id="litespeed-promo-later">❤️ <?php echo __( 'Maybe later', 'litespeed-cache' ) ; ?></button>

		<?php $dismiss_url = LiteSpeed_Cache_Utility::build_url( LiteSpeed_Cache::ACTION_DISMISS, LiteSpeed_Cache_GUI::TYPE_DISMISS_PROMO, false, null, array( 'promo_tag' => 'banner_promo' ) ) ; ?>
	</div>
</div>
