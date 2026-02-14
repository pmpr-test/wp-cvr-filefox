<?php
/**
 * Pay for order form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-pay.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.2.0
 */

defined('ABSPATH') || exit;

?>
<form id="order_review" method="post">

    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0 shop_table">
			<?php
			/**
			 * Triggered from within the checkout/form-pay.php template, immediately before the payment section.
			 *
			 * @since 8.2.0
			 */
			do_action('woocommerce_pay_order_before_payment');
			?>

			<?php if ($order->needs_payment()) : ?>
                <div id="payment" class="card shadow-sm mb-4">
                    <div class="card-body">
                        <ul class="wc_payment_methods payment_methods methods list-group list-group-flush">
							<?php
							if (!empty($available_gateways)) {
								foreach ($available_gateways as $gateway) {
									wc_get_template('checkout/payment-method.php', ['gateway' => $gateway]);
								}
							} else {
								echo '<li>';
								wc_print_notice(apply_filters('woocommerce_no_available_payment_methods_message', esc_html__('Sorry, it seems that there are no available payment methods for your location. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce')), 'notice'); // phpcs:ignore WooCommerce.Commenting.CommentHooks.MissingHookComment
								echo '</li>';
							}
							?>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>
			<?php if (count($order->get_items()) > 0) : ?>
                <div class="woocommerce-checkout-review-order-table card shadow-sm">
                    <div class="card-body">
                        <h2 class="mb-3"><?php _e('Order Summary', PR__CVR__FILEFOX); ?></h2>
                        <ul class="list-group list-group-flush list-group-compact">

							<?php
							$items = $order->get_items();
							$index = 1;
							foreach ($items as $item_id => $item) {

								if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
									continue;
								}

								wc_get_template(
									'order-details-item.php',
									[
										'index'      => $index,
										'first'      => $index === 1,
										'last'       => $index === count($items),

                                        'name'       => $item->get_name(),
										'item'       => $item,
										'total'      => $order->get_formatted_line_subtotal($item),
										'product'    => $item->get_product(),
										'quantity'   => $item->get_quantity(),
										'item_class' => '',
									]
								);
								$index++;
							}
							?>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>
        </div>
        <div class="col-12 col-xl-4">
			<?php do_action('woocommerce_checkout_sidebar', 'form-pay'); ?>
			<?php
            $items = $order->get_order_item_totals();
            $orderTotal = $items['order_total'];
            unset($items['order_total']);
            $items['order_total'] = $orderTotal;
            wc_get_template('total-card.php', [
				'target' => 'form-pay',
				'items'  => $items,
			]);
            ?>
        </div>
    </div>
</form>

