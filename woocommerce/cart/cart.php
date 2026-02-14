<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 10.1.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_cart'); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
	<?php do_action('woocommerce_before_cart_table'); ?>
    <div class="row cart woocommerce-cart-form__contents">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <ul class="list-group list-group-flush">
				<?php
				do_action('woocommerce_before_cart_contents');

				$count = WC()->cart->get_cart_contents_count();
				$index = 0;
				foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
					$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
					$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
					/**
					 * Filter the product name.
					 *
					 * @param string $product_name Name of the product in the cart.
					 * @param array $cart_item The product in the cart.
					 * @param string $cart_item_key Key for the product in the cart.
					 *
					 * @since 2.1.0
					 */
					$product_name = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);

					if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
						$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
						$item_class        = 'list-group-item bg-transparent px-0 d-flex flex-column py-3';
						$deleteAction      = apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
							'woocommerce_cart_item_remove_link',
							sprintf(
								'<a role="button" href="%s" class="remove d-block my-auto" aria-label="%s" data-product_id="%s" data-product_sku="%s">%s</a>',
								esc_url(wc_get_cart_remove_url($cart_item_key)),
								/* translators: %s is the product name */
								esc_attr(sprintf(__('Remove %s from cart', 'woocommerce'), wp_strip_all_tags($product_name))),
								esc_attr($product_id),
								esc_attr($_product->get_sku()),
								pr_get_icon('trash-can', ['class' => 'icon-md icon-primary'], ['markup' => true])
							),
							$cart_item_key
						);
						?>
                        <li class="woocommerce-cart-form__cart-item <?php echo $item_class; ?> <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                            <div class="d-flex mb-3">
                                <figure class="product-thumbnail mb-0">
									<?php
									/**
									 * Filter the product thumbnail displayed in the WooCommerce cart.
									 *
									 * This filter allows developers to customize the HTML output of the product
									 * thumbnail. It passes the product image along with cart item data
									 * for potential modifications before being displayed in the cart.
									 *
									 * @param string $thumbnail The HTML for the product image.
									 * @param array $cart_item The cart item data.
									 * @param string $cart_item_key Unique key for the cart item.
									 *
									 * @since 2.1.0
									 */
									$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image([120, 120], ['class' => 'flex-shrink-0 rounded-1 img-fluid']), $cart_item, $cart_item_key);

									if (!$product_permalink) {
										echo $thumbnail;
									} else {
										printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail);
									}
									?>
                                </figure>
                                <div class="product-name ms-3">
                                    <strong class="lh-lg">
										<?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $product_name, $_product) . '&nbsp;'); ?>
                                    </strong>
									<?php
									do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);
									echo wc_get_formatted_cart_item_data($cart_item);
									// Backorder notification.
									if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
										echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
									}
									?>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-price">
									<?php
									echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
									?>
                                </div>
                                <div class="product-remove my-auto"><?php echo $deleteAction; ?></div>
                            </div>
                        </li>
						<?php
					}
				}

				do_action('woocommerce_after_cart_contents');
				?>
            </ul>
        </div>
        <div class="actions col-12 col-xl-4">

			<?php if (wc_coupons_enabled()) { ?>
                <div class="card shadow-sm mb-4">
                    <div class="coupon card-body no-margin">
	                    <?php wc_get_template('coupon.php'); ?>
	                    <?php do_action('woocommerce_cart_coupon'); ?>
                    </div>
                </div>
			<?php } ?>

            <div class="cart-collaterals">
				<?php
				/**
				 * Cart collaterals hook.
				 *
				 * @hooked woocommerce_cross_sell_display
				 * @hooked woocommerce_cart_totals - 10
				 */
				do_action('woocommerce_cart_collaterals');
				?>
            </div>

            <div class="mb-4">
                <button type="submit" name="update_cart"
                        class="btn btn-primary d-none <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>"
                        value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>

				<?php do_action('woocommerce_cart_actions'); ?>

				<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
            </div>
        </div>
    </div>
	<?php do_action('woocommerce_after_cart_table'); ?>
</form>

<?php do_action('woocommerce_before_cart_collaterals'); ?>

<?php do_action('woocommerce_after_cart'); ?>

