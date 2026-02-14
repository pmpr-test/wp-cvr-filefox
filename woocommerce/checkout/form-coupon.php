<?php
/**
 * Checkout coupon form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-coupon.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.8.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! wc_coupons_enabled() ) {
	return;
}

?>
<div class="card shadow-sm mb-4 " id="checkout_coupon">
    <form class="woocommerce-form-coupon card-body no-margin" method="post" style="display: block">
		<?php wc_get_template('coupon.php'); ?>
    </form>
</div>
