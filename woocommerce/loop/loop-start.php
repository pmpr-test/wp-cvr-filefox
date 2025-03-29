<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
	exit;
}
?>
<div class="placeholder-items mt-4">
    <div class="row">
	    <?php for ($i = 1; $i <= 6; $i++): ?>
            <div class="placeholder-item col-12 col-md-6 col-xl-4 mb-4 d-flex">
			    <?php pmpr_do_action('render_product_loop_item', ['placeholder' => 1]); ?>
            </div>
	    <?php endfor; ?>
    </div>
</div>
<div class="products list mt-4 row">

