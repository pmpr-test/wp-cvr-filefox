<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cf35056cd4c             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Filefox\Setting; use WC_Product; class Single extends Template { public function kgewmaycsoykyaso() { $this->iiawasmesusioauo('woocommerce_single_product_summary')->iiawasmesusioauo('woocommerce_after_single_product_summary')->iiawasmesusioauo('woocommerce_before_single_product_summary'); $this->kuieicsuscgmwigg('woocommerce_before_single_product', 'woocommerce_output_all_notices'); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_main_content', 'woocommerce_output_all_notices', 0); $this->qcsmikeggeemccuu('woocommerce_single_product_summary', [$this, 'ciwggqamauysguiu'], 1)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'cuekgigmkgkskaek'], 5)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'mwowusocuweeimca'], 5)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'oaukoisuwcsqyuug'], 99)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'qswemesciqgieaus'], 999)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'qqmaiimsgsoeuoua'], 9999)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'oaukoisuwcsqyuug'], PHP_INT_MAX); parent::wigskegsqequoeks(); } public function ciwggqamauysguiu() { global $product; if ($product instanceof WC_Product) { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $qmsqgukcgeeooswc = $this->ocksiywmkyaqseou('get_product_text_metadata', [], $product->get_id()); $oiaiyqwisqosimiw = [$qmsqgukcgeeooswc['last_update']]; $eckksaswcscqaesa = $this->ocksiywmkyaqseou('get_product_numeric_metadata', [], $product->get_id()); $eckksaswcscqaesa += [$qmsqgukcgeeooswc['free_version'] ?? []]; $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($product->get_id()); $qookweymeqawmcwo = ['free_icon' => IconInterface::ggokgkyiweugsokc, 'update_html' => $oiaiyqwisqosimiw, 'left_metadata' => $this->ocksiywmkyaqseou('get_product_taxonomies_metadata', [], $product->get_id()), 'right_metadata' => $eckksaswcscqaesa, Constants::qescuiwgsyuikume => $product->get_title(), Constants::oguseymmyyoyaako => $product]; if ($this->weysguygiseoukqw(Setting::yuyioiwacciomwyy, false)) { $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = [Constants::TEXT => $this->weysguygiseoukqw(Setting::ikucmmmicawsasqq, ''), Constants::qgqyauaqwqmqseim => $this->weysguygiseoukqw(Setting::skueeqeqqiiswmqk, IconInterface::cakimsccucqweeqq), Constants::oeouaqyskusqoasi => $this->weysguygiseoukqw(Setting::omksgckscsemoiew, '')]; } if (empty($omwmuycmeqcqokom)) { $qqscaoyqikuyeoaw = 'parent'; $qookweymeqawmcwo['version_icon'] = IconInterface::oueeaikgccskysea; $qookweymeqawmcwo['version_count_text'] = sprintf(__('%s different versions available', PR__CVR__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess(8)); $qookweymeqawmcwo['version_count_subtext'] = __('Different versions of the same file', PR__CVR__FILEFOX); $qookweymeqawmcwo[Constants::oeouaqyskusqoasi] = __('View Versions', PR__CVR__FILEFOX); } else { $qqscaoyqikuyeoaw = 'child'; $qookweymeqawmcwo['preview_icon'] = IconInterface::cyqogogyqcuimaqc; $qookweymeqawmcwo['preview_text'] = __('Preview', PR__CVR__FILEFOX); $qookweymeqawmcwo[Constants::oeouaqyskusqoasi] = __('Download File', PR__CVR__FILEFOX); } $this->iuygowkemiiwqmiw("summary/{$qqscaoyqikuyeoaw}", $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } } public function qswemesciqgieaus() { $this->ewwyesacokusqmcc('aside'); } }
