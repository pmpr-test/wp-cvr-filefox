<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 10.0.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_mini_cart'); ?>

<?php if (WC()->cart && !WC()->cart->is_empty()) : ?>
    <ul class="woocommerce-mini-cart cart_list product_list_widget list-group list-group-flush <?php echo esc_attr($args['list_class']); ?>">
		<?php
		do_action('woocommerce_before_mini_cart_contents');
		$count = WC()->cart->get_cart_contents_count();
		$index = 0;
		foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
			$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
			$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

			if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
				/**
				 * This filter is documented in woocommerce/templates/cart/cart.php.
				 *
				 * @since 2.1.0
				 */
				$product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
				$thumbnail         = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image('small', ['class' => 'flex-shrink-0 rounded-1 img-fluid']), $cart_item, $cart_item_key);
				$product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
				$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
				$item_class        = 'list-group-item bg-transparent px-0 ';
				if ($index === 0) {
					$item_class .= 'pt-0 pb-3';
				} else if ($index + 1 === $count) {
					$item_class .= 'pb-0 pt-3';
				} else {
					$item_class .= 'py-3';
				}
				?>
                <li class="woocommerce-mini-cart-item <?php echo esc_attr($item_class); ?> <?php echo esc_attr(apply_filters('woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key)); ?>">
					<?php
					$deleteAction = apply_filters(
						'woocommerce_cart_item_remove_link',
						sprintf(
							'<a role="button" href="%s" class="remove remove_from_cart_button d-block my-auto" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s" data-success_message="%s">%s</a>',
							esc_url(wc_get_cart_remove_url($cart_item_key)),
							/* translators: %s is the product name */
							esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
							esc_attr($product_id),
							esc_attr($cart_item_key),
							esc_attr($_product->get_sku()),
							/* translators: %s is the product name */
							esc_attr(sprintf(__('&ldquo;%s&rdquo; has been removed from your cart', 'woocommerce'), wp_strip_all_tags($product_name))),
							pr_get_icon('trash-can', ['class' => 'icon-md icon-primary'], ['markup' => true])
						),
						$cart_item_key
					);
					?>
                    <div class="d-flex mb-3">
						<?php if (!empty($product_permalink)) : ?>
                            <a href="<?php echo esc_url($product_permalink); ?>">
								<?php echo $thumbnail ?>
                            </a>
						<?php else: ?>
							<?php echo $thumbnail ?>
						<?php endif; ?>
                        <div class="ms-3">
                            <strong class="lh-lg"><?php echo wp_kses_post($product_name); ?></strong>
							<?php echo wc_get_formatted_cart_item_data($cart_item); ?>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
						<?php echo $product_price; ?>
						<?php echo $deleteAction; ?>
                    </div>
                </li>
				<?php
			}
			$index++;
		}

		do_action('woocommerce_mini_cart_contents');
		?>
    </ul>
<?php else : ?>

    <p class="woocommerce-mini-cart__empty-message text-center"><?php esc_html_e('No products in the cart.', 'woocommerce'); ?></p>

<?php endif; ?>

<?php do_action('woocommerce_after_mini_cart'); ?>

