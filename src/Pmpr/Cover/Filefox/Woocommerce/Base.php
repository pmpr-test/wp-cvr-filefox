<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853bd2c7b3             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WC_Product; class Base extends Template { public function kgewmaycsoykyaso() { $this->kuieicsuscgmwigg('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20)->kuieicsuscgmwigg('woocommerce_before_main_content', 'woocommerce_output_content_wrapper')->kuieicsuscgmwigg('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end'); parent::kgewmaycsoykyaso(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_main_content', [$this, 'oiqwaqokiooqwgso'], 0)->qcsmikeggeemccuu('woocommerce_sidebar', [$this, 'oaukoisuwcsqyuug'], PHP_INT_MAX); $this->waqewsckuayqguos('render_free_version_alert', [$this, 'euqmsmskeuusuwka']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_currency_symbol', [$this, 'gmcywuuwgkccsekc'], 999, 2)->cecaguuoecmccuse('woocommerce_get_star_rating_html', [$this, 'ewgesyuiawoaoskg'], 99, 3); $this->aqaqisyssqeomwom('get_product_metadata', [$this, 'owsakiuqkmsoaokq'], 10, 3)->aqaqisyssqeomwom('get_product_text_metadata', [$this, 'kmeseqwqqqkqukoq'], 10, 2)->aqaqisyssqeomwom('get_product_numeric_metadata', [$this, 'yssoucgoesaekusw'], 10, 2)->aqaqisyssqeomwom('get_product_taxonomies_metadata', [$this, 'imiywqoakkueiqkc'], 10, 2); } public function euqmsmskeuusuwka($product = null) { if ($product) { $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); if (empty($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ygqycmmkoiuocoia($umkkkaqkwugkemce))) { if ($this->gqesccceoueeewwg($product) || $usmsssmiougymckk->wemwokaqkmgaycsq($product)) { $sqeykgyoooqysmca = Constants::ckcawaoawwioqecq; $ewgwqamkygiqaawc = __('Has a free version', PR__CVR__FILEFOX); } else { $sqeykgyoooqysmca = Constants::SECONDARY; $ewgwqamkygiqaawc = __('No free version', PR__CVR__FILEFOX); } echo $this->caokeucsksukesyo()->kugiyqykwaskawsc()->oockkqiqsssakuug(['classes' => 'text-center p-2 fw-bold fs-14 rounded-0 border-0 mb-0', Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::ssmskyqgcmeiayco => $ewgwqamkygiqaawc, Constants::qaioykeumkssukis => true]); } } } public function ewgesyuiawoaoskg($nsmgceoqaqogqmuw, $qqyuqswckkcomeak, $gaeqamemwmwsyukm) { return $this->iuygowkemiiwqmiw('rating_stars', ['icons' => ['half' => IconInterface::wikauwmckmkcemco, 'full' => IconInterface::asaomwmaicuoeekg], 'rate' => $qqyuqswckkcomeak], [Constants::qaacaqioeyiuakeu => false]); } public function gmcywuuwgkccsekc($kmooseagagygqskw, $wwigiesyquoeawog) { if ($wwigiesyquoeawog === 'IRT') { $kmooseagagygqskw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq('svg', ['viewBox' => '0 0 14 14', 'xmlns' => 'http://www.w3.org/2000/svg'], '<path fill-rule="evenodd" d="M3.057 1.742L3.821 1l.78.75-.776.741-.768-.749zm3.23 2.48c0 .622-.16 1.111-.478 1.467-.201.221-.462.39-.783.505a3.251 3.251 0 01-1.083.163h-.555c-.421 0-.801-.074-1.139-.223a2.045 2.045 0 01-.9-.738A2.238 2.238 0 011 4.148c0-.059.001-.117.004-.176.03-.55.204-1.158.525-1.827l1.095.484c-.257.532-.397 1-.419 1.403-.002.04-.004.08-.004.12 0 .252.055.458.166.618a.887.887 0 00.5.354c.085.028.178.048.278.06.079.01.16.014.243.014h.555c.458 0 .769-.081.933-.244.14-.139.21-.383.21-.731V2.02h1.2v2.202zm5.433 3.184l-.72-.7.709-.706.735.707-.724.7zm-2.856.308c.542 0 .973.19 1.293.569.297.346.445.777.445 1.293v.364h.18v-.004h.41c.221 0 .377-.028.467-.084.093-.055.14-.14.14-.258v-.069c.004-.243.017-1.044 0-1.115L13 8.05v1.574a1.4 1.4 0 01-.287.863c-.306.405-.804.607-1.495.607h-.627c-.061.733-.434 1.257-1.117 1.573-.267.122-.58.21-.937.265a5.845 5.845 0 01-.914.067v-1.159c.612 0 1.072-.082 1.38-.247.25-.132.376-.298.376-.499h-.515c-.436 0-.807-.113-1.113-.339-.367-.273-.55-.667-.55-1.18 0-.488.122-.901.367-1.24.296-.415.728-.622 1.296-.622zm.533 2.226v-.364c0-.217-.048-.389-.143-.516a.464.464 0 00-.39-.187.478.478 0 00-.396.187.705.705 0 00-.136.449.65.65 0 00.003.067c.008.125.066.22.177.283.093.054.21.08.352.08h.533zM9.5 6.707l.72.7.724-.7L10.209 6l-.709.707zm-6.694 4.888h.03c.433-.01.745-.106.937-.29.024.012.065.035.12.068l.074.039.081.042c.135.073.261.133.379.18.345.146.67.22.977.22a1.216 1.216 0 00.87-.34c.3-.285.449-.714.449-1.286a2.19 2.19 0 00-.335-1.145c-.299-.457-.732-.685-1.3-.685-.502 0-.916.192-1.242.575-.113.132-.21.284-.294.456-.032.062-.06.125-.084.191a.504.504 0 00-.03.078 1.67 1.67 0 00-.022.06c-.103.309-.171.485-.205.53-.072.09-.214.14-.427.147-.123-.005-.209-.03-.256-.076-.057-.054-.085-.153-.085-.297V7l-1.201-.5v3.562c0 .261.048.496.143.703.071.158.168.296.29.413.123.118.266.211.43.28.198.084.42.13.665.136v.001h.036zm2.752-1.014a.778.778 0 00.044-.353.868.868 0 00-.165-.47c-.1-.134-.217-.201-.35-.201-.18 0-.33.103-.447.31-.042.071-.08.158-.114.262a2.434 2.434 0 00-.04.12l-.015.053-.015.046c.142.118.323.216.544.293.18.062.325.092.433.092.044 0 .086-.05.125-.152z" clip-rule="evenodd"></path>'); } return $kmooseagagygqskw; } public function imiywqoakkueiqkc($kuguwoaesuqsqysu, $umkkkaqkwugkemce) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $mcgqeeqeooscmkqq = __('Number of content of this type: %s', PR__CVR__FILEFOX); if ($uycaaqiuaswwyamg = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, 'material', [Constants::yewiqemgmmucemey => true])) { $kuguwoaesuqsqysu[] = [Constants::qgqyauaqwqmqseim => IconInterface::cgaumaacsaeauwqy, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($uycaaqiuaswwyamg), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($uycaaqiuaswwyamg->count), Constants::qsskmqwcucisywqy => sprintf($mcgqeeqeooscmkqq, $icwkuwimswoisqss->eusockqasqqmoess($uycaaqiuaswwyamg->count))]; } if ($kgakyqmaiuwqwwyo = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, 'application', [Constants::yewiqemgmmucemey => true])) { $kuguwoaesuqsqysu[] = [Constants::qgqyauaqwqmqseim => IconInterface::iwgmmyumeaaewawo, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($kgakyqmaiuwqwwyo), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($kgakyqmaiuwqwwyo->count), Constants::qsskmqwcucisywqy => sprintf($mcgqeeqeooscmkqq, $icwkuwimswoisqss->eusockqasqqmoess($kgakyqmaiuwqwwyo->count))]; } if ($guwumyyyakswawas = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, Constants::qgciomgukmcwscqw, [Constants::yewiqemgmmucemey => true])) { $kuguwoaesuqsqysu[] = [Constants::qgqyauaqwqmqseim => IconInterface::weegooqcgkoeeqec, Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($guwumyyyakswawas->count), Constants::qsskmqwcucisywqy => sprintf($mcgqeeqeooscmkqq, $icwkuwimswoisqss->eusockqasqqmoess($guwumyyyakswawas->count))]; } return $kuguwoaesuqsqysu; } public function owsakiuqkmsoaokq($kuguwoaesuqsqysu, $umkkkaqkwugkemce, array $yemgmmgogcwccuky = []) : array { $kuguwoaesuqsqysu = array_merge($this->kmeseqwqqqkqukoq($kuguwoaesuqsqysu, $umkkkaqkwugkemce), $this->yssoucgoesaekusw($kuguwoaesuqsqysu, $umkkkaqkwugkemce)); if ($yemgmmgogcwccuky) { foreach ($yemgmmgogcwccuky as $uusmaiomayssaecw) { unset($kuguwoaesuqsqysu[$uusmaiomayssaecw]); } } return $kuguwoaesuqsqysu; } public function yssoucgoesaekusw($kuguwoaesuqsqysu, $umkkkaqkwugkemce) { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); $gqumacwamusueoqa = $seumokooiykcomco->ygqycmmkoiuocoia($umkkkaqkwugkemce); if (empty($gqumacwamusueoqa)) { $gqumacwamusueoqa = $umkkkaqkwugkemce; } $gosysykeqkauccmw = $seumokooiykcomco->ymgsgecsiqeegseg($umkkkaqkwugkemce); $kuguwoaesuqsqysu[Constants::COMMENT] = [Constants::qescuiwgsyuikume => __('Comment', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wyigokgygqasciwc, Constants::ciyoccqkiamemcmm => $mkcicuowyumccgew->readable($gosysykeqkauccmw), Constants::TEXT => sprintf(_n('%s Comment', '%s Comments', $gosysykeqkauccmw, PR__CVR__FILEFOX), $mkcicuowyumccgew->readable($gosysykeqkauccmw)), Constants::qsskmqwcucisywqy => __('Comment', PR__CVR__FILEFOX)]; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $omwmuycmeqcqokom = $usmsssmiougymckk->get($gqumacwamusueoqa); if ($omwmuycmeqcqokom) { $ogycymwmyguqcqim = number_format($omwmuycmeqcqokom->get_average_rating(), 1); if ($ogycymwmyguqcqim <= 0) { $ogycymwmyguqcqim = '-'; } $cuuoikwwmimyowyi = $omwmuycmeqcqokom->get_review_count(''); $kuguwoaesuqsqysu['score'] = [Constants::qescuiwgsyuikume => __('Score', PR__CVR__FILEFOX), Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess($ogycymwmyguqcqim), Constants::qgqyauaqwqmqseim => IconInterface::asaomwmaicuoeekg, Constants::TEXT => $icwkuwimswoisqss->eusockqasqqmoess($ogycymwmyguqcqim), Constants::qsskmqwcucisywqy => sprintf(__('from %s rate', PR__CVR__FILEFOX), $mkcicuowyumccgew->readable($cuuoikwwmimyowyi))]; } $aoqiksscgmooieem = 124; $kuguwoaesuqsqysu[Constants::kucuwimmakgiieom] = [Constants::qescuiwgsyuikume => __('Download', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::msyqysqykouywsua, Constants::ciyoccqkiamemcmm => $icwkuwimswoisqss->eusockqasqqmoess(789), Constants::TEXT => sprintf(__('%s Downloaded', PR__CVR__FILEFOX), $mkcicuowyumccgew->readable($aoqiksscgmooieem)), Constants::qsskmqwcucisywqy => __('Downloaded', PR__CVR__FILEFOX)]; $qoiukcoammosekoa = $this->ocksiywmkyaqseou('ff_traffic_get_post_daily_count', 0, $gqumacwamusueoqa, date('Y-m-d', strtotime('yesterday', current_time('U')))); $kuguwoaesuqsqysu[Constants::uwycywkimsycqwcy] = [Constants::qescuiwgsyuikume => __('Visit', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::kewkscykymocemki, Constants::ciyoccqkiamemcmm => $qoiukcoammosekoa > 0 ? $mkcicuowyumccgew->readable($qoiukcoammosekoa) : '-', Constants::TEXT => sprintf(__('%s visit in last %s hours', PR__CVR__FILEFOX), ($qoiukcoammosekoa > 0 ? '+' : '') . $mkcicuowyumccgew->readable($qoiukcoammosekoa), $icwkuwimswoisqss->eusockqasqqmoess(24)), Constants::qsskmqwcucisywqy => sprintf(__('Today Visit', PR__CVR__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess(24))]; return $kuguwoaesuqsqysu; } public function kmeseqwqqqkqukoq($kuguwoaesuqsqysu, $umkkkaqkwugkemce) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wqcgysiimueiweea = $this->caokeucsksukesyo()->sgqicqeoumwmsmyw()->ikuqieqosemkwuio($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->oukqamgqowciwoum('', $umkkkaqkwugkemce)); return ['free_version' => [Constants::gsqoooskigukokks => $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->ciuuiyckmsygceis(__('Free', PR__CVR__FILEFOX)), ['class' => 'pr-has-free-version']), Constants::TEXT => __('Has Free Version', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu(IconInterface::emqsgcwaeysamiya, ['class' => 'icon-danger icon-md me-2'])], 'last_update_simple' => [Constants::gsqoooskigukokks => $swqimwqeweekeusq->ciuuiyckmsygceis($wqcgysiimueiweea, ['class' => 'pr-last-update'])], 'last_update' => [Constants::qescuiwgsyuikume => __('Last Update', PR__CVR__FILEFOX), Constants::ciyoccqkiamemcmm => $wqcgysiimueiweea, Constants::qgqyauaqwqmqseim => IconInterface::uaukqiccmgkacyms]]; } }
