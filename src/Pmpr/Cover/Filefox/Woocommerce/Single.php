<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b46d111             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Cover\Filefox\Setting; use Pmpr\Custom\Filefox\Salary\Model\Team; use WC_Product; class Single extends Template { public function kgewmaycsoykyaso() { $this->iiawasmesusioauo('woocommerce_single_product_summary')->iiawasmesusioauo('woocommerce_after_single_product_summary')->iiawasmesusioauo('woocommerce_before_single_product_summary'); $ommuyaqaugcwycuc = Base::symcgieuakksimmu(); $this->kuieicsuscgmwigg('woocommerce_before_single_product', 'woocommerce_output_all_notices')->kuieicsuscgmwigg('woocommerce_before_main_content', [$ommuyaqaugcwycuc, 'oiqwaqokiooqwgso'], 0)->kuieicsuscgmwigg('woocommerce_sidebar', [$ommuyaqaugcwycuc, 'oaukoisuwcsqyuug'], PHP_INT_MAX); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('woocommerce_before_main_content', 'woocommerce_output_all_notices', 0); $this->qcsmikeggeemccuu('woocommerce_single_product_summary', [$this, 'ciwggqamauysguiu'], 1)->qcsmikeggeemccuu('woocommerce_after_single_product_summary', [$this, 'ywoucyskcquysiwc'], 1); $this->waqewsckuayqguos('render_product_thumbnails', [$this, 'ymwoewqeiuuuckwa']); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_product_tabs', [$this, 'oqcougyuqwycquwi']); } public function ciwggqamauysguiu() { global $product; if ($product instanceof WC_Product) { $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $umkkkaqkwugkemce = $product->get_id(); $omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($umkkkaqkwugkemce); $qaqgaqikqmcmukem = $seumokooiykcomco->mguqscccckuywsya($umkkkaqkwugkemce); $gsqycqmccqgwosck = $this->uwkmaywceaaaigwo()->mguqscccckuywsya(); $wcoccwywkoykaags = $gsqycqmccqgwosck->igawqaomowicuayw('expertise', $qaqgaqikqmcmukem); $iseoqmmuokyweokw = Team::symcgieuakksimmu()->awouqscoqmqkcgus([Constants::meksegaoamowuwoq => $qaqgaqikqmcmukem, Constants::aisguagukaewucii => Constants::aaaesuouquiygige]); $iqmqasoccmisssyw = $seumokooiykcomco->kckogqkiycqeumoa($umkkkaqkwugkemce, Constants::oeeqisiiqoswqqmy, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $eyscsimwcyaqakqg = []; if (isset($iseoqmmuokyweokw[$iqmqasoccmisssyw])) { $ymigguaaogqyesik = $iseoqmmuokyweokw[$iqmqasoccmisssyw]; foreach ($ymigguaaogqyesik as $uqkumqymcswwyeim) { $guwumyyyakswawas = $aoskwucuugeuaeus->get($uqkumqymcswwyeim, Constants::qgciomgukmcwscqw); $eyscsimwcyaqakqg[] = $swqimwqeweekeusq->ciuuiyckmsygceis($aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas)); } } $gwaqswgosguyaeic = sprintf(__('%s with more than %s years experience in %s and ...', PR__CVR__FILEFOX), $wcoccwywkoykaags, $icwkuwimswoisqss->eusockqasqqmoess(23), implode($icwkuwimswoisqss->aoaesiikusqamcqc(', '), $eyscsimwcyaqakqg)); $qookweymeqawmcwo = [Constants::qescuiwgsyuikume => $product->get_title(), Constants::iwascisiiokuackw => $qaqgaqikqmcmukem, Constants::oguseymmyyoyaako => $product, 'author_description' => $gwaqswgosguyaeic, Constants::ckcuiukmyisueqeo => $this->ocksiywmkyaqseou('get_product_numeric_metadata', [], $umkkkaqkwugkemce)]; if ($this->weysguygiseoukqw(Setting::yuyioiwacciomwyy, false)) { $qookweymeqawmcwo[Constants::imiuwqeccyaimyaw] = [Constants::TEXT => $this->weysguygiseoukqw(Setting::ikucmmmicawsasqq, ''), Constants::qgqyauaqwqmqseim => $this->weysguygiseoukqw(Setting::skueeqeqqiiswmqk, IconInterface::cakimsccucqweeqq), Constants::oeouaqyskusqoasi => $this->weysguygiseoukqw(Setting::omksgckscsemoiew, '')]; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, $this->cikkiscaukgyesow($product)); $qqscaoyqikuyeoaw = empty($omwmuycmeqcqokom) ? Constants::qioguuqkouiccqig : Constants::oiqeqkmmmuyaccou; $this->iuygowkemiiwqmiw("summary/{$qqscaoyqikuyeoaw}", $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } } public function ywoucyskcquysiwc() { global $product; if ($product instanceof WC_Product) { $qookweymeqawmcwo = $this->cikkiscaukgyesow($product); $qookweymeqawmcwo['tabs'] = $this->sscegwueamckwmcy('woocommerce_product_tabs', []); $this->iuygowkemiiwqmiw('tabs', $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } } private function cikkiscaukgyesow($product) : array { static $qookweymeqawmcwo = []; $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $umkkkaqkwugkemce = $usmsssmiougymckk->iooowgsqoyqseyuu($product); if (!isset($qookweymeqawmcwo[$umkkkaqkwugkemce]) && $product instanceof WC_Product) { $qsqwqsymmqeoqwcu = []; $icwkuwimswoisqss = $this->caokeucsksukesyo()->gagsyqagguwwauac(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); $omwmuycmeqcqokom = $seumokooiykcomco->ygqycmmkoiuocoia($umkkkaqkwugkemce); $qsqwqsymmqeoqwcu['has_preview'] = false; $qsqwqsymmqeoqwcu['preview_icon'] = IconInterface::cyqogogyqcuimaqc; $qsqwqsymmqeoqwcu['preview_text'] = __('Preview', PR__CVR__FILEFOX); $qsqwqsymmqeoqwcu[Constants::qscwcyiaqccoayqk] = $this->weysguygiseoukqw(Setting::siqgqmugewmwuaqa, [], [Constants::wosqwewmqmyweqea => Constants::cwswygwykwgsqiwu, Constants::wkweqssoakmmmguq => [Constants::qescuiwgsyuikume, Constants::qgqyauaqwqmqseim], Constants::kyyscqqmsikeuaea => Setting::ueqkmssmyskqkesk, Constants::aisguagukaewucii => Constants::kgmecoswscqqsymg]); if (empty($omwmuycmeqcqokom)) { $smgaqoosquqiqmmo = $seumokooiykcomco->uoaamyooqkiyowsc([Constants::uouymeyqasaeckso => Constants::oguseymmyyoyaako, Constants::isukysauqkiecswi => $umkkkaqkwugkemce, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::gymyumsakeoqquag => true, Constants::kymceekcoyyeuocm => [[Constants::gmmygyiecgmggaam => Constants::ekqyoaoqcqugsuua, Constants::ucoiewcoucauqwko => Constants::quumiuygmqeaackw, Constants::gueokgaoyascgeqe => Constants::NAME]]], Constants::oyaoekcogwkcekcc); $muiaiuymwoiaiwwm = count($seumokooiykcomco->mmoaikqueyiwcesm($umkkkaqkwugkemce, [Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm], Constants::oyaoekcogwkcekcc)); $qsqwqsymmqeoqwcu['versions_text'] = sprintf(__('%s version available', PR__CVR__FILEFOX), $icwkuwimswoisqss->eusockqasqqmoess($muiaiuymwoiaiwwm)); $qsqwqsymmqeoqwcu['versions_action_text'] = __('View All', PR__CVR__FILEFOX); if ($smgaqoosquqiqmmo) { $umiamiqsiiwoeaus = $usmsssmiougymckk->get($smgaqoosquqiqmmo); $qsqwqsymmqeoqwcu['recommendation'] = [Constants::qgqyauaqwqmqseim => IconInterface::uwykoocikuusgwyw, Constants::TEXT => $usmsssmiougymckk->qcgakseyaikigqco($umiamiqsiiwoeaus), Constants::kmukkqeayickugew => $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->gmqyuaqwgiayskei(__('Version', PR__CVR__FILEFOX)), $swqimwqeweekeusq->gmqyuaqwgiayskei(__('Elected', PR__CVR__FILEFOX))], ['class' => 'd-flex flex-column text-white bg-success rounded me-2 text-center fw-bold fs-12 p-1 lh-sm']), Constants::oeouaqyskusqoasi => __('View Details', PR__CVR__FILEFOX)]; if ($usmsssmiougymckk->sywcyoouayqkqisk($umiamiqsiiwoeaus)) { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __('', PR__CVR__FILEFOX); $qsqwqsymmqeoqwcu[Constants::geuiiqgcsemyckgm] = ''; } else { global $product; $iweqoomkgkccmuyg = $product; $product = $umiamiqsiiwoeaus; $qsqwqsymmqeoqwcu[Constants::ueasagmikqewqcay] = $this->agoiskwswoomuqoa($product); $qsqwqsymmqeoqwcu[Constants::uookioyeieiswoew] = $cgwqqcukiasoicmi->qqoqcyiesoksueqy('woocommerce_template_single_add_to_cart'); $product = $iweqoomkgkccmuyg; } } else { } } else { $qsqwqsymmqeoqwcu[Constants::oeouaqyskusqoasi] = __('Download File', PR__CVR__FILEFOX); } $qookweymeqawmcwo[$umkkkaqkwugkemce] = $qsqwqsymmqeoqwcu; } return $qookweymeqawmcwo[$umkkkaqkwugkemce] ?? []; } public function oqcougyuqwycquwi($ywoucyskcquysiwc) { $ywoucyskcquysiwc['versions'] = [Constants::qescuiwgsyuikume => __('Available Versions', PR__CVR__FILEFOX), Constants::iuqumwggccmcuyem => 10, Constants::wwgusigoaksqmwsm => [$this, 'ummaiywwwkckgyum']]; return $ywoucyskcquysiwc; } public function ummaiywwwkckgyum() { $this->iuygowkemiiwqmiw('versions_tab', [Constants::qescuiwgsyuikume => __('Available Versions', PR__CVR__FILEFOX)], [Constants::qaacaqioeyiuakeu => true]); } public function qswemesciqgieaus() { $this->ewwyesacokusqmcc('aside'); } public function ymwoewqeiuuuckwa($product) { $ggscaiukeywauqec = []; $ieuiysqwqwgwaqow = []; $siquossayskcwkea = ['class' => 'img-fluid']; $eaeiswmwiqewicoc = $this->caokeucsksukesyo()->iqsmaqoiukeasukw(); $aieaqakyuyewkkwe = $product->get_gallery_image_ids(); foreach ($aieaqakyuyewkkwe as $aiooqyausygaasqm) { if ($aiooqyausygaasqm && $eaeiswmwiqewicoc->aauyuieeeaakygki($aiooqyausygaasqm)) { $ieuiysqwqwgwaqow[$aiooqyausygaasqm] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($aiooqyausygaasqm, Constants::meugkwqwuyoyeeqs, ['class' => 'img-fluid rounded mx-auto d-block']); $ggscaiukeywauqec[$aiooqyausygaasqm] = $eaeiswmwiqewicoc->qaeeusqkgwagwaqc($aiooqyausygaasqm, Constants::qisqmmesuewemeqg, ['class' => 'img-fluid w-100']); } } if ($ieuiysqwqwgwaqow) { $this->iuygowkemiiwqmiw('gallery', ['attributes' => $siquossayskcwkea, 'thumbnails' => $ieuiysqwqwgwaqow, 'main_images' => $ggscaiukeywauqec], [Constants::qaacaqioeyiuakeu => true]); } else { if ($product->get_image_id()) { echo $product->get_image(Constants::qisqmmesuewemeqg, $siquossayskcwkea); } } } public function ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea = [], $ugugagoguiycqeys = []) : array { switch ($ymqmyyeuycgmigyo) { case self::iuageuuiomiyqqya: case self::yysqkoqcckeqcaum: case self::eqguyksmocqqmcec: case self::wwqmieuuuaiuiwsq: case self::cygiimmgqiaesamy: $ugugagoguiycqeys = ['form > button.single_add_to_cart_button' => ['class' => $this->ikkussiqikuiuusi('w-100')], '.woocommerce-variation-add-to-cart > button.single_add_to_cart_button' => ['class' => $this->ikkussiqikuiuusi('w-100')], '.quantity.hidden' => ['class' => 'd-none']]; break; case self::acgowwwocisuiuag: case self::uimeoaewgayqkyei: $ugugagoguiycqeys = ['h2' => ['class' => 'section-title']]; break; } return parent::ikckqoqkgcewiwcq($ymqmyyeuycgmigyo, $aqykuigiuwmmcieu, $ymkomoccmymcoiea, $ugugagoguiycqeys); } }
