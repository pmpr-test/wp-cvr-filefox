<?php
/**
 * Proceed to checkout button
 *
 * Contains the markup for the proceed to checkout button on the cart.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/proceed-to-checkout-button.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
?>

<div class="d-none d-xl-grid mt-3">
    <a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
       class="btn btn-lg main-action checkout-button button alt wc-forward<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
	    <?php esc_html_e('Proceed to checkout', PR__CVR__FILEFOX); ?>
    </a>
</div>
<div class="d-xl-none position-fixed bottom-0 start-0 bg-white vw-100 z-sm rounded-top shadow">
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
                <strong class="text-muted"><?php _e('Total Cart', PR__CVR__FILEFOX); ?></strong>
                <div class="price d-flex justify-content-start">
			        <?php wc_cart_totals_subtotal_html() ?>
                </div>
            </div>
            <a href="<?php echo esc_url(wc_get_checkout_url()); ?>"
               class="btn btn-lg main-action checkout-button button alt wc-forward<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>">
		        <?php esc_html_e('Proceed to checkout', PR__CVR__FILEFOX); ?>
            </a>
        </div>
    </div>
</div>

