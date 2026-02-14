<?php $orderButtonText = __('Place order', PR__CVR__FILEFOX); ?>

<div class="d-none d-grid d-xl-grid mt-3">
	<?php echo apply_filters('woocommerce_' . $type . '_button_html', '<button type="submit" form="' . $form . '" class="btn btn-lg main-action button alt" name="woocommerce_checkout_place_order" id="place_order" data-value="' . esc_attr($orderButtonText) . '">' . esc_html($orderButtonText) . '</button>'); ?>
</div>
<div class="d-xl-none position-fixed bottom-0 start-0 bg-white w-100 z-sm rounded-top shadow">
	<div class="container py-3">
		<div class="d-flex justify-content-between">
			<div class="d-flex flex-column">
				<strong class="text-muted"><?php _e('Total Cart', PR__CVR__FILEFOX); ?></strong>
				<div class="price d-flex justify-content-start">
					<?php wc_cart_totals_subtotal_html() ?>
				</div>
			</div>
			<?php echo apply_filters('woocommerce_' . $type . '_button_html', '<button type="submit" form="' . $form . '" class="btn btn-lg main-action button alt" name="woocommerce_checkout_place_order" id="place_order" data-value="' . esc_attr($orderButtonText) . '">' . esc_html($orderButtonText) . '</button>'); ?>
		</div>
	</div>
</div>

