<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cf2e6001025             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Base extends Template { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20)->kuieicsuscgmwigg('woocommerce_before_main_content', 'woocommerce_output_content_wrapper')->kuieicsuscgmwigg('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end'); parent::kgewmaycsoykyaso(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'oiqwaqokiooqwgso'], 0)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'oaukoisuwcsqyuug'], PHP_INT_MAX); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('get_product_text_metadata', [$this, 'kmeseqwqqqkqukoq'], 10, 2)->aqaqisyssqeomwom('get_product_numeric_metadata', [$this, 'yssoucgoesaekusw'], 10, 2)->aqaqisyssqeomwom('get_product_taxonomies_metadata', [$this, 'imiywqoakkueiqkc'], 10, 2); } public function imiywqoakkueiqkc($kuguwoaesuqsqysu, $umkkkaqkwugkemce) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $mcgqeeqeooscmkqq = __('Number of content of this type: %s', PR__CVR__FILEFOX); if ($uycaaqiuaswwyamg = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, 'material', [Constants::yewiqemgmmucemey => true])) { $kuguwoaesuqsqysu[] = [Constants::qgqyauaqwqmqseim => IconInterface::cgaumaacsaeauwqy, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($uycaaqiuaswwyamg), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($uycaaqiuaswwyamg->count), Constants::qsskmqwcucisywqy => sprintf($mcgqeeqeooscmkqq, $icwkuwimswoisqss->eusockqasqqmoess($uycaaqiuaswwyamg->count))]; } if ($kgakyqmaiuwqwwyo = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, 'application', [Constants::yewiqemgmmucemey => true])) { $kuguwoaesuqsqysu[] = [Constants::qgqyauaqwqmqseim => IconInterface::iwgmmyumeaaewawo, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($kgakyqmaiuwqwwyo), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($kgakyqmaiuwqwwyo->count), Constants::qsskmqwcucisywqy => sprintf($mcgqeeqeooscmkqq, $icwkuwimswoisqss->eusockqasqqmoess($kgakyqmaiuwqwwyo->count))]; } if ($guwumyyyakswawas = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, Constants::qgciomgukmcwscqw, [Constants::yewiqemgmmucemey => true])) { $kuguwoaesuqsqysu[] = [Constants::qgqyauaqwqmqseim => IconInterface::weegooqcgkoeeqec, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($guwumyyyakswawas->count), Constants::qsskmqwcucisywqy => sprintf($mcgqeeqeooscmkqq, $icwkuwimswoisqss->eusockqasqqmoess($guwumyyyakswawas->count))]; } return $kuguwoaesuqsqysu; } public function yssoucgoesaekusw($kuguwoaesuqsqysu, $umkkkaqkwugkemce) { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $omwmuycmeqcqokom = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce); if (empty($omwmuycmeqcqokom)) { $gaeqamemwmwsyukm = $this->ocksiywmkyaqseou('ff_traffic_get_post_aggregate_count', 0, $umkkkaqkwugkemce); if ($gaeqamemwmwsyukm > 0) { $gaeqamemwmwsyukm = $icwkuwimswoisqss->eusockqasqqmoess($gaeqamemwmwsyukm); } else { $gaeqamemwmwsyukm = '-'; } $kuguwoaesuqsqysu[Constants::uwycywkimsycqwcy] = [Constants::qescuiwgsyuikume => __('Visit', PR__CVR__FILEFOX), Constants::ciyoccqkiamemcmm => $gaeqamemwmwsyukm]; } $kuguwoaesuqsqysu[Constants::kucuwimmakgiieom] = [Constants::qescuiwgsyuikume => __('Download', PR__CVR__FILEFOX), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess(789)]; $kuguwoaesuqsqysu['score'] = [Constants::qescuiwgsyuikume => __('Score', PR__CVR__FILEFOX), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess(4.3)]; return $kuguwoaesuqsqysu; } public function kmeseqwqqqkqukoq($kuguwoaesuqsqysu, $umkkkaqkwugkemce) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wqcgysiimueiweea = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->ikuqieqosemkwuio($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum('', $umkkkaqkwugkemce)); return ['free_version' => [Constants::gsqoooskigukokks => $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->ciuuiyckmsygceis(__('Free', PR__CVR__FILEFOX)), ['class' => 'pr-has-free-version'])], 'last_update_simple' => [Constants::gsqoooskigukokks => $swqimwqeweekeusq->ciuuiyckmsygceis($wqcgysiimueiweea, ['class' => 'pr-last-update'])], 'last_update' => [Constants::qescuiwgsyuikume => __('Last Update', PR__CVR__FILEFOX), Constants::ciyoccqkiamemcmm => $wqcgysiimueiweea, Constants::qgqyauaqwqmqseim => IconInterface::uaukqiccmgkacyms]]; } }
