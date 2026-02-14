<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.1.0
 *
 * @var WC_Order $order
 */

defined('ABSPATH') || exit;

$isFailed = $order->has_status('failed');
?>

<div class="woocommerce-order">
    <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
			<?php if ($order) : ?>

				<?php do_action('woocommerce_before_thankyou', $order->get_id()); ?>

				<?php if ($isFailed) : ?>
                    <div class="woocommerce-thankyou-order-failed alert alert-warning">
                        <p class="mb-3 lh-lg fs-sm"><?php esc_html_e('Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce'); ?></p>
                        <a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>"
                           class="button pay btn btn-primary"><?php esc_html_e('Pay', 'woocommerce'); ?></a>
						<?php if (is_user_logged_in()) : ?>
                            <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"
                               class="button pay btn btn-secondary"><?php esc_html_e('My account', 'woocommerce'); ?></a>
						<?php endif; ?>
                    </div>
				<?php else : ?>

					<?php wc_get_template('checkout/order-received.php', ['order' => $order]); ?>

				<?php endif; ?>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
						<?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
                    </div>
                </div>
				<?php do_action('woocommerce_thankyou', $order->get_id()); ?>

			<?php else : ?>

				<?php wc_get_template('checkout/order-received.php', ['order' => false]); ?>

			<?php endif; ?>
        </div>
		<?php if (!$isFailed): ?>
            <div class="col-12 col-xl-4">
				<?php $orderDetails = pr_get_wc_order_details($order); ?>
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="mb-3"><?php esc_html_e('Order Information', PR__CVR__FILEFOX); ?></h2>
                        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details list-group list-group-flush list-group-trim">
							<?php foreach ($orderDetails as $key => $orderDetail): ?>
                                <li class="list-group-item d-flex px-0 justify-content-between woocommerce-order-overview__<?= $key; ?> <?= $key; ?>">
                                    <span><?= esc_html($orderDetail['title']); ?></span>
                                    <strong><?= $orderDetail['value'] ?></strong>
                                </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
		<?php endif; ?>
    </div>
</div>

