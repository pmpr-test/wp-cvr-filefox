<?php

defined('ABSPATH') || exit;

$page_name = is_cart() ? 'cart' : 'checkout';
?>
<?php do_action('woocommerce_before_coupon'); ?>
<div class="input-group mb-2">
    <div class="form-floating mb-0">
        <input type="text" name="coupon_code" class="input-text form-control"
               id="coupon_code" value="" autocomplete="false"
               placeholder="<?php _e('Coupon Code', PR__CVR__FILEFOX); ?>"
        />
        <label for="coupon_code"><?php _e('Coupon Code', PR__CVR__FILEFOX); ?></label>
    </div>
    <button type="submit" class="button btn light-primary" name="apply_coupon"
            value="<?php esc_attr_e('Apply coupon', PR__CVR__FILEFOX); ?>">
		<?php esc_html_e('Apply coupon', PR__CVR__FILEFOX); ?>
    </button>
</div>
<p class="fs-sm text-muted"><?php esc_html_e('If you have a coupon code, please apply it above.', PR__CVR__FILEFOX); ?></p>
<?php do_action('woocommerce_after_coupon'); ?>

