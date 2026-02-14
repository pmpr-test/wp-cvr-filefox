<?php
/**
 * Output a single payment method
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/payment-method.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$classes = 'list-group-item bg-transparent px-0';
if (isset($first) && $first) {
	$classes .= ' pb-3 pt-0';
} else if (isset($last) && $last) {
	$classes .= ' pb-0 pt-3';
} else {
    $classes .= ' py-3';
}
?>
<li class=" py-3 wc_payment_method <?php echo $classes;?> payment_method_<?php echo esc_attr( $gateway->id ); ?>">
    <div class="form-check d-flex">
        <input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>" type="radio" class="input-radio form-check-input my-auto" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />
        <label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>" class="form-check-label d-flex ms-3">
            <?php
            $icon = $gateway->get_icon();
            echo $icon;
            ?>
            <strong class="my-auto lh-lg<?php echo $icon ? ' ms-2' : ''?>"><?php echo $gateway->get_title(); ?></strong>
        </label>
    </div>
	<?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
		<div class="payment_box no-margin mb-0 mt-2 fs-sm alert alert-info payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) : /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>style="display:none;"<?php endif; /* phpcs:ignore Squiz.ControlStructures.ControlSignature.NewlineAfterOpenBrace */ ?>>
			<?php $gateway->payment_fields(); ?>
		</div>
	<?php endif; ?>
</li>

