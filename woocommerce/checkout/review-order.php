<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;
?>
<div class="shop_table woocommerce-checkout-review-order-table card shadow-sm">
    <div class="card-body">
		<?php do_action('woocommerce_review_order_before_cart_contents'); ?>
        <h2 class="mb-3"><?php _e('Order Summary', PR__CVR__FILEFOX); ?></h2>
        <ul class="list-group list-group-flush list-group-compact">

			<?php
			$items = WC()->cart->get_cart();
			$index = 1;
			foreach ($items as $cart_item_key => $cart_item) {
				$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

				$name     = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
				$price    = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
				$class    = apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key);
				$total    = apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
				$quantity = apply_filters('woocommerce_widget_cart_item_quantity', sprintf('%s <span class="text-muted">|</span> %s', sprintf(__('%s Number', PR__CVR__FILEFOX), $cart_item['quantity']), $price), $cart_item, $cart_item_key);

				wc_get_template(
					'order-details-item.php',
					[
						'index'      => $index,
						'first'      => $index === 1,
						'last'       => $index === count($items),
						'name'       => $name,
						'item'       => $cart_item,
						'total'      => $total,
						'product'    => $_product,
						'quantity'   => $quantity,
						'item_class' => $class,
					]
				);
				$index++;
			}
			?>
        </ul>
		<?php do_action('woocommerce_review_order_after_cart_contents'); ?>
    </div>
</div>
