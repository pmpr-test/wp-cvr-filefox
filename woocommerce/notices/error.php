<?php
/**
 * Show error messages
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/notices/error.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

if (!$notices) {
	return;
}

?>

<div class="woocommerce-error <?php pr_get_alert_class('error') ?>">
    <ul class="p-0 m-0 list-unstyled" role="list">
		<?php $count = count($notices) ?>
		<?php foreach ($notices as $index => $notice) : ?>
            <li<?php echo wc_get_notice_data_attr($notice); ?> class="<?= $count === $index + 1 ? '' : 'mb-3' ?>">
				<?php echo wc_kses_notice(pr_prepare_alert($notice['notice'])); ?>
            </li>
		<?php endforeach; ?>
    </ul>
	<?php pr_get_alert_close() ?>
</div>

