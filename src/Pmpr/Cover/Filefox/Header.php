<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b46d111             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Header extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('widgets_init', [$this, 'ymaywccaiscsmsik'])->qcsmikeggeemccuu('widgets_init', [$this, 'mysamweggamekgow']); $this->waqewsckuayqguos('render_header', [$this, 'render'])->waqewsckuayqguos('after_header', [$this, 'gkqgqimuscuakuys'])->waqewsckuayqguos('after_mobile_menu', [$this, 'ioqqqqwaoooacwac'])->waqewsckuayqguos('render_header_top_menu', [$this, 'oqciyuyakamguuqc']); } public function render() { [$qqscaoyqikuyeoaw, $qookweymeqawmcwo] = $this->sscegwueamckwmcy('cover_template_requirements', [$this->eskggqsasgsiommy('index'), []]); echo $this->iuygowkemiiwqmiw($qqscaoyqikuyeoaw, $qookweymeqawmcwo); } public function aycessgueogkawag() { $mksyucucyswaukig = $this->ocksiywmkyaqseou('url_structure_get_subdomain_object', null); return $mksyucucyswaukig && Constants::oeeqisiiqoswqqmy === $this->caokeucsksukesyo()->kckogqkiycqeumoa()->yyoeeseewqmmyaee($mksyucucyswaukig) ? $mksyucucyswaukig : null; } public function ccgeysqsyiggwmie() : array { $oammesyieqmwuwyi = []; $uycaaqiuaswwyamg = $this->aycessgueogkawag(); if ($uycaaqiuaswwyamg) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $yqwiacmaycousiim = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($uycaaqiuaswwyamg); $oammesyieqmwuwyi = [Constants::wwoeeogswkgeqack => [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->igawqaomowicuayw($uycaaqiuaswwyamg, Constants::mmieaueggwwaokig), Constants::ogigqueukwysusii => $yqwiacmaycousiim], Constants::oaeygseeeegmooyk => [Constants::qescuiwgsyuikume => __('Articles', PR__CVR__FILEFOX), Constants::ogigqueukwysusii => untrailingslashit($yqwiacmaycousiim) . '/article/']]; } return [$oammesyieqmwuwyi, $uycaaqiuaswwyamg]; } public function ioqqqqwaoooacwac() { [$oammesyieqmwuwyi, $mksyucucyswaukig] = $this->ccgeysqsyiggwmie(); if ($oammesyieqmwuwyi) { $nsmgceoqaqogqmuw = ''; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $geecqyososceumsk = $igqsaukqcqscimok[Constants::ogigqueukwysusii] ?? ''; $meqocwsecsywiiqs = $igqsaukqcqscimok[Constants::qescuiwgsyuikume] ?? ''; $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $geecqyososceumsk, ['class' => 'fw-bold mb-4 text-gray-700']); } echo $swqimwqeweekeusq->iaaacsuskiakkwui($nsmgceoqaqogqmuw, ['class' => 'd-flex flex-column px-4']); } } public function gkqgqimuscuakuys() { [$oammesyieqmwuwyi, $mksyucucyswaukig] = $this->ccgeysqsyiggwmie(); if ($oammesyieqmwuwyi) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $iwiewowoqmoekyqi = $aoskwucuugeuaeus->igawqaomowicuayw($mksyucucyswaukig, 'search_placeholder'); if (empty($iwiewowoqmoekyqi)) { $iwiewowoqmoekyqi = __('Type something', PR__CVR__FILEFOX); } else { $iwiewowoqmoekyqi = sprintf(__('Like %s', PR__CVR__FILEFOX), $iwiewowoqmoekyqi); } $ceweicsewkcmkkou = [[Constants::qgqyauaqwqmqseim => IconInterface::joiasqqgaewiagyy, Constants::qescuiwgsyuikume => sprintf(__('%s Suggestions', PR__CVR__FILEFOX), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME))], [Constants::qgqyauaqwqmqseim => IconInterface::joiasqqgaewiagyy, Constants::qescuiwgsyuikume => __('Popular Searches', PR__CVR__FILEFOX)]]; $this->iuygowkemiiwqmiw('header/submenu', [Constants::qwumqqyuasyskkkc => $oammesyieqmwuwyi, Constants::oeeqisiiqoswqqmy => $aoskwucuugeuaeus->iooowgsqoyqseyuu($mksyucucyswaukig), 'search_text' => sprintf(__('%s Search', PR__CVR__FILEFOX), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis($aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig))), 'view_all_text' => __('View All Result of', PR__CVR__FILEFOX), 'search_icon' => IconInterface::ymyiywwagwqmmuuk, 'search_sections' => $ceweicsewkcmkkou, 'search_placeholder' => $iwiewowoqmoekyqi], [Constants::qaacaqioeyiuakeu => true]); } } public function oqciyuyakamguuqc() { $nsmgceoqaqogqmuw = ''; $cucagwqokeieoecu = ['class' => 'icon-xl']; $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $cgceoyqmmwumqyqa = $this->uwkmaywceaaaigwo()->wikusamwomuogoau(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $oammesyieqmwuwyi = [Constants::yayciqueeakqwese => [Constants::TEXT => __('Search', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::ymyiywwagwqmmuuk, Constants::iccwcygaeqmomooo => !empty($this->aycessgueogkawag())], Setting::mycgkcgmqgikqogk => [Constants::TEXT => __('Cart', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => Setting::giesgyymgqsuoqwm, Constants::auqoykcmsiauccao => $ekymkycgewkiouqe->geoemsmuouqcqmei()], Setting::cwuosgacqkwaikee => [Constants::TEXT => __('Account', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => Setting::eecasioqmcyaiqce, Constants::auqoykcmsiauccao => $ekymkycgewkiouqe->gauymgyqasaqyqam()]]; $ksgkoukcicwkkaum = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum(); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!empty($igqsaukqcqscimok[Constants::iccwcygaeqmomooo]) || $this->weysguygiseoukqw($uusmaiomayssaecw . Constants::yyicwqsqaecyqwco)) { $wmqwkwyuqwksiiqk = $uusmaiomayssaecw === Setting::mycgkcgmqgikqogk; $gouusicsisumuiei = $uusmaiomayssaecw === Constants::yayciqueeakqwese; $aygskauusuymmkgq = $uusmaiomayssaecw === Setting::cwuosgacqkwaikee; if ($ksgkoukcicwkkaum && $aygskauusuymmkgq) { if ($this->weysguygiseoukqw(Setting::squceagkyimasiqg)) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $kcyoesmigeeiiqgo = $yoiguusocukqeayg->ogcwgigqwycqswms($yoiguusocukqeayg->get(), 30, ['class' => 'rounded-circle']); } else { $kcyoesmigeeiiqgo = $swqimwqeweekeusq->cuoygaaeqeqcuggu($this->weysguygiseoukqw(Setting::oqoaescwoagoimae), $cucagwqokeieoecu); } } else { $wkaqekwwgqsqwcoi = $igqsaukqcqscimok[Constants::qgqyauaqwqmqseim]; if (!$gouusicsisumuiei) { $wkaqekwwgqsqwcoi = $this->weysguygiseoukqw($wkaqekwwgqsqwcoi); } $kcyoesmigeeiiqgo = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $cucagwqokeieoecu); } $kcyoesmigeeiiqgo = $this->ocksiywmkyaqseou("header_left_{$uusmaiomayssaecw}menu_icon", $kcyoesmigeeiiqgo, $igqsaukqcqscimok); $wwgucssaecqekuek = ['class' => 'd-flex position-relative as-link']; if ($gouusicsisumuiei) { $wwgucssaecqekuek = $swqimwqeweekeusq->sueyawuweyoqyeaq($wwgucssaecqekuek, ['data-bs-target' => '#search_modal', 'data-bs-toggle' => 'modal', 'class' => 'd-lg-none']); } else { if ($aygskauusuymmkgq && ($ksgkoukcicwkkaum && !$cgceoyqmmwumqyqa->ckeyeaouokcgeqeq()) || $wmqwkwyuqwksiiqk && !$cgceoyqmmwumqyqa->gqoskmoekogyqwsc()) { $wwgucssaecqekuek = $swqimwqeweekeusq->sueyawuweyoqyeaq($wwgucssaecqekuek, ['class' => 'cart-aside-toggle aside-toggle', 'data-target' => "#{$uusmaiomayssaecw}aside"]); } } if (!$ksgkoukcicwkkaum && $aygskauusuymmkgq) { $wwgucssaecqekuek['data-link'] = $igqsaukqcqscimok[Constants::auqoykcmsiauccao]; $wwgucssaecqekuek['data-type'] = 'link'; } $smuwyouaickeusue = $swqimwqeweekeusq->gmqyuaqwgiayskei($kcyoesmigeeiiqgo, $wwgucssaecqekuek); $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->iaaacsuskiakkwui($smuwyouaickeusue, ['class' => 'position-relative my-auto ms-3']); } } echo $nsmgceoqaqogqmuw; } } public function ymaywccaiscsmsik() { $wyemmogwicicgauy = $this->caokeucsksukesyo()->ogciwyoqgciosgcw(); $wyemmogwicicgauy->ymaywccaiscsmsik('mobile-aside', __('Mobile Aside', PR__CVR__FILEFOX), [Constants::ckyiayyeksyqosei => '', Constants::gkkeyqoigqiukkqk => '']); $wyemmogwicicgauy->ymaywccaiscsmsik('header-bottom-left', __('Header Bottom Left', PR__CVR__FILEFOX), [Constants::ckyiayyeksyqosei => '', Constants::gkkeyqoigqiukkqk => '']); } public function mysamweggamekgow() { global $wp_widget_factory; $this->kuieicsuscgmwigg('wp_head', [$wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style']); } }
