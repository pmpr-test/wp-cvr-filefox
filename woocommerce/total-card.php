<?php

defined('ABSPATH') || exit;

if (!isset($items)) {
	$cart = WC()->cart;

	$items = [];

	$t_regular  = 0;
	$t_discount = 0;
	foreach ($cart->get_cart() as $key => $item) {

		$_product = apply_filters('woocommerce_cart_item_product', $item['data'], $item, $key);

		$qty     = (int)$item['quantity'];
		$sale    = (int)$_product->get_sale_price('');
		$price   = (int)$_product->get_price('');
		$regular = (int)$_product->get_regular_price('');

		$t_regular += $regular;
		if ($price !== $regular) {

			$t_discount += ($regular - $sale) * $qty;
		}
	}

	if ($t_regular) {

		$items['cart-regular'] = [
			'label' => __('Total Regular Price', PR__CVR__FILEFOX),
			'value' => wc_price($t_regular),
		];
	}

	if ($t_discount) {

		$items['cart-discount'] = [
			'label' => __('Total Discount', PR__CVR__FILEFOX),
			'value' => wc_price($t_discount),
		];
	}

	foreach ($cart->get_coupons() as $code => $coupon) {
		$key                    = sanitize_title($code);
		$items["coupon-{$key}"] = [
			'label' => wc_cart_totals_coupon_label($coupon, false),
			'value' => 'wc_cart_totals_coupon_html',
			'args'  => [$coupon],
		];
	}

	$items['cart-subtotal'] = [
		'label' => __('Total Sale Price', PR__CVR__FILEFOX),
		'value' => 'wc_cart_totals_subtotal_html',
	];

	if ($cart->needs_shipping()) {

		if ($cart->show_shipping()) {

			$items['shipping-total'] = [
				'value' => 'wc_cart_totals_shipping_html',
			];

		} else if ('yes' === get_option('woocommerce_enable_shipping_calc')) {

			$items['shipping-calc'] = [
				'label' => __('Shipping', PR__CVR__FILEFOX),
				'value' => 'woocommerce_shipping_calculator',
			];
		}
	}

	foreach ($cart->get_fees() as $key => $fee) {
		$items["fee-{$key}"] = [
			'label' => $fee->name,
			'value' => 'wc_cart_totals_fee_html',
			'args'  => [$fee],
		];
	}

	if (wc_tax_enabled() && !$cart->display_prices_including_tax()) {

		$customer        = WC()->customer;
		$taxable_address = $customer->get_taxable_address();
		$estimated_text  = '';
		if (WC()->customer->is_customer_outside_base() && !$customer->has_calculated_shipping()) {

			$estimated_text = sprintf(
				' <small>' . __('(estimated for %s)', PR__CVR__FILEFOX) . '</small>',
				WC()->countries->estimated_for_prefix($taxable_address[0]) . WC()->countries->countries[$taxable_address[0]]
			);
		}
		if ('itemized' === get_option('woocommerce_tax_total_display')) {
			foreach ($cart->get_tax_totals() as $code => $tax) {

				$key                      = sanitize_title($code);
				$items["tax-rate-{$key}"] = [
					'label' => $tax->label . $estimated_text,
					'value' => wp_kses_post($tax->formatted_amount),
				];
			}
		} else {

			$items['tax-total'] = [
				'label' => WC()->countries->tax_or_vat() . $estimated_text,
				'value' => 'wc_cart_totals_taxes_total_html',
			];
		}

	}

	$items['order-total'] = [
		'label' => __('Total Cart', PR__CVR__FILEFOX),
		'value' => 'wc_cart_totals_order_total_html',
	];
}

?>

<div class="card shadow-sm">
    <div class="card-body">
        <ul class="list-group list-group-flush">
			<?php
			$count = count($items);
			$index = 0;
			foreach ($items as $key => $item) {

				if ($key === 'order-total') {
					do_action('woocommerce_cart_totals_before_order_total');
				} else if ($key === 'shipping-total') {
					do_action('woocommerce_cart_totals_before_shipping');
				}

				$label       = $item['label'] ?? '';
				$value       = $item['value'];
				$class       = "list-group-item px-0 py-2 bg-transparent d-flex justify-content-between {$key}";
				$label_class = "fw-sm";
				if ($index === 0) {
					$class .= ' pt-0 text-muted';
				}
				if ($index == $count - 1) {
					$class       .= ' pb-0 pt-3 border-0 fw-bold fs-md';
					$label_class = '';
				} else if ($index == $count - 2) {
					$class .= ' pb-3 fs-sm';
				} else {
					$class .= ' fs-sm border-0';
				}
				$isDiscount = $key == 'cart-discount' || str_starts_with($key, 'coupon-');
				if ($isDiscount) {
					$class .= ' text-primary';
				}
				?>

                <li class="<?php echo $class; ?>">
					<?php if ($label): ?>
                        <div class="my-auto <?php echo $label_class ?>">
							<?php echo esc_html($label) ?>
                        </div>
					<?php endif ?>
                    <div class="price<?php echo $isDiscount ? ' pr-discount as-price' : ''; ?><?php echo $index === 0 ? ' pr-regular-price' : ''; ?>">
						<?php
						if (is_callable($value)) {

							$args = $item['args'] ?? [];
							call_user_func($value, ...$args);
						} else {

							echo $value;
						}
						?>
                    </div>
                </li>

				<?php
				if ($key === 'order-total') {
					do_action('woocommerce_cart_totals_after_order_total');
				} else if ($key === 'shipping-total') {
					do_action('woocommerce_cart_totals_after_shipping');
				}
				$index++;
			}
			?>
        </ul>
        <div class="wc-proceed-to-checkout">
			<?php
			//			wc_get_template('checkout/terms.php');
			switch ($target) {
				case 'cart':
					do_action('woocommerce_proceed_to_checkout');
					break;
				case 'checkout':
					?>
                    <noscript>
						<?php printf(esc_html__('Since your browser does not support JavaScript, or it is disabled, please ensure you click the %1$sUpdate Totals%2$s button before placing your order. You may be charged more than the amount stated above if you fail to do so.', PR__CVR__FILEFOX), '<em>', '</em>'); ?>

                        <br/>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-lg main-action button alt mt-3"
                                    name="woocommerce_checkout_update_totals"
                                    value="<?php esc_attr_e('Update totals', PR__CVR__FILEFOX); ?>"><?php esc_html_e('Update totals', PR__CVR__FILEFOX); ?></button>
                        </div>
                    </noscript>
					<?php
					do_action('woocommerce_review_order_before_submit');
					wc_get_template('order-submit.php', [
						'type' => 'order',
						'form' => 'checkout',
					]);
					do_action('woocommerce_review_order_after_submit');
					break;
				case 'form-pay':
					echo '<input type="hidden" name="woocommerce_pay" value="1" />';
					do_action('woocommerce_pay_order_before_submit');
					wc_get_template('order-submit.php', [
						'type' => 'order_pay',
						'form' => 'order_review',
					]);
					do_action('woocommerce_pay_order_after_submit');
					wp_nonce_field('woocommerce-pay', 'woocommerce-pay-nonce');
					break;
			}
			?>
        </div>
    </div>
</div>

