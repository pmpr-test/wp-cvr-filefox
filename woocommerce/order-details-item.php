<?php

defined('ABSPATH') || exit;

if (!isset($product, $name, $total)) {

    return;
}
$product = wc_get_product($product);
if (!$product instanceof WC_Product) {
    return;
}
$classes = 'list-group-item bg-transparent px-0';
?>
<li class="<?php echo $classes;?> <?php echo esc_attr(isset($item_class) ? " {$item_class}" : '') ?>">
    <div class="d-flex">
        <?php echo $product->get_image('small', ['class' => 'rounded']) ?>
        <div class="ms-3 d-flex justify-content-between w-100">
            <div class="d-flex flex-column justify-content-between">
                <?php if (isset($permalink)): ?>
                    <a href="<?php echo esc_url($permalink); ?>" class="text-decoration-none" target="_blank">
                        <?php echo $name; ?>
                    </a>
                <?php else: ?>
                    <div class="fs-sm product-name">
                        <?php echo $name; ?>
                    </div>
                <?php endif; ?>

                <?php do_action('woocommerce_render_variation', ['product' => $product]); ?>
            </div>
            <div class="product-total price text-center d-flex flex-column justify-content-end">
                <small class="text-muted mb-2">
                    <?php esc_html_e('Sale Price', PR__CVR__FILEFOX) ?>
                </small>
                <?php echo $total; ?>
            </div>
        </div>
    </div>
    <?php

    if (isset($after) && is_single($after)) {
        echo $after;
    }

    if (!isset($item)) {
        $item = null;
    }

    do_action('woocommerce_after_order_details_item', $product, $item);
    ?>
</li>

