<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4b46d111             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Filefox\Salary\Model\Team; use WC_Product; use WP_Query; class Archive extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('excerpt_more', '__return_empty_string'); $this->aqaqisyssqeomwom('get_author_metadata', [$this, 'faeueaukquwscogu'], 10, 2)->aqaqisyssqeomwom('get_author_used_tags', [$this, 'kwiooiakcqcqqakk'], 10, 3)->aqaqisyssqeomwom('get_author_posts_list', [$this, 'eqsisimymqusqkue'], 10, 2)->aqaqisyssqeomwom('get_author_cornerstones_text', [$this, 'oeecmymoaqiyqeqm'], 10, 2); } public function wigskegsqequoeks() { $this->waqewsckuayqguos('post_archive_item', [$this, 'mwaseweqgcocogwc'])->waqewsckuayqguos('post_archive_item_before', [$this, 'aykiqkcykywsskio'])->waqewsckuayqguos('post_archive_item_after', [$this, 'mmwaamoaggwkwkes']); $this->waqewsckuayqguos('render_post_metadata', [$this, 'isgyswsyaiyoisek'], 10, 2)->waqewsckuayqguos('render_post_taxonomies', [$this, 'eqiugioqaemamocc'], 10, 2); $this->qcsmikeggeemccuu('pre_get_posts', [$this, 'wweiicucqiqcowwa']); } public function wweiicucqiqcowwa($gqgemcmoicmgaqie) { if ($gqgemcmoicmgaqie instanceof WP_Query && $gqgemcmoicmgaqie->is_main_query() && ($gqgemcmoicmgaqie->is_home() || $gqgemcmoicmgaqie->is_post_type_archive(Constants::sususqikkuaoqeco))) { $makqwyywwomeeges = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $this->caokeucsksukesyo()->skckwsgymkimyuwo()->ccwowuakmqoemoem($gqgemcmoicmgaqie, [Constants::goqgcigmiawyauai => $makqwyywwomeeges + 5]); } return $gqgemcmoicmgaqie; } public function oeecmymoaqiyqeqm($cmwygeyygwqaemaq, $qscaoekmoooeuyqg) { if ($qscaoekmoooeuyqg) { $wyoiwuqokyeeuguk = $this->caokeucsksukesyo()->umiwkmuuoaqmkwig()->uckuueecsucykcaa([Constants::sususqikkuaoqeco, Constants::mswoacegomcucaik], [Constants::iwascisiiokuackw => 1], 10, false); $aquuecykqwyukece = [__('%1$s has written an insightful article titled %2$s discussing %3$s. Another great read is %4$s, which covers %5$s.', PR__CVR__FILEFOX), __('In %2$s, %1$s explores %3$s, while in %4$s, they delve into %5$s.', PR__CVR__FILEFOX), __('One of the key articles by %1$s is %2$s, which talks about %3$s. Another interesting piece is %4$s, focused on %5$s.', PR__CVR__FILEFOX), __('Among %1$s\'s works, %2$s stands out for its insights on %3$s. Similarly, %4$s provides a detailed look at %5$s.', PR__CVR__FILEFOX)]; $cmwygeyygwqaemaq = ''; $sgamogaqcgkgciws = $this->caokeucsksukesyo()->issssuygyewuaswa()->ygwimyogyaqgumam($qscaoekmoooeuyqg, Constants::cuyqkgecokgmcwqu, true); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); foreach (array_chunk($wyoiwuqokyeeuguk, 2) as $momcykaoccoymeig => $kaooqmiqseuywacu) { if (count($kaooqmiqseuywacu) < 2) { continue; } $gmuiqugscsccywwi = [$sgamogaqcgkgciws]; $gcqseksiskwueksc = 0; foreach ($kaooqmiqseuywacu as $post) { $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); $gmuiqugscsccywwi[] = $swqimwqeweekeusq->yuawgssgauywkiia($seumokooiykcomco->qcgakseyaikigqco($post), $seumokooiykcomco->ycqquoiyyuesegsy($post, true)); $ciwggqamauysguiu = $seumokooiykcomco->igawqaomowicuayw('post_summary', $post); if (empty($ciwggqamauysguiu)) { $ciwggqamauysguiu = $yyauwyaeewsickwk->kogyygyqqyqcioeg($seumokooiykcomco->masoymaamekuykso($post), 100); } $gmuiqugscsccywwi[] = $swqimwqeweekeusq->ciuuiyckmsygceis(trim($ciwggqamauysguiu)); } if ($momcykaoccoymeig === 0) { $msogswmcyucqeeww = 0; } else { $msogswmcyucqeeww = crc32($gcqseksiskwueksc) % count($aquuecykqwyukece); } $qqscaoyqikuyeoaw = $aquuecykqwyukece[$msogswmcyucqeeww]; $cmwygeyygwqaemaq .= sprintf($qqscaoyqikuyeoaw, ...$gmuiqugscsccywwi) . ' '; } } return $cmwygeyygwqaemaq; } public function kwiooiakcqcqqakk($kmmywmgcgwceeqii, $qscaoekmoooeuyqg, int $uuyoeicyoayimaoa = 10) : array { $oammesyieqmwuwyi = $this->caokeucsksukesyo()->mguqscccckuywsya()->uqwkkcooiakyeimy($qscaoekmoooeuyqg, Constants::ocsomysosuqaimuc, $uuyoeicyoayimaoa); if ($oammesyieqmwuwyi) { $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ucicuwcaawugkseg = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ooqggksagkoaeeke); if ($ucicuwcaawugkseg) { $kmmywmgcgwceeqii[] = [Constants::ogigqueukwysusii => $aoskwucuugeuaeus->qmgcisuuikgmqcsu($ucicuwcaawugkseg), Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($ucicuwcaawugkseg)]; } } } return $kmmywmgcgwceeqii; } public function eqsisimymqusqkue($suuagcecoyuweoqk, $qscaoekmoooeuyqg) : array { $qaqgaqikqmcmukem = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($qscaoekmoooeuyqg); if ($qaqgaqikqmcmukem) { $kiiwisywuumqcwsu = 4; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas(Constants::mswoacegomcucaik, [Constants::iwascisiiokuackw => $qaqgaqikqmcmukem, Constants::goqgcigmiawyauai => $kiiwisywuumqcwsu]); $aisqsoicsocqoogy = __('View All', PR__CVR__FILEFOX); $swugsikiiewamomi = IconInterface::qggkwmcgqagcouci; $suuagcecoyuweoqk[] = [Constants::squoamkioomemiyi => Constants::mswoacegomcucaik, Constants::qescuiwgsyuikume => __('Latest Posts', PR__CVR__FILEFOX), Constants::qgmuskygocwmouos => $wyoiwuqokyeeuguk, Constants::geuiiqgcsemyckgm => '#', Constants::oeouaqyskusqoasi => $aisqsoicsocqoogy, Constants::ksiswygussyugiue => $swugsikiiewamomi]; $iseoqmmuokyweokw = Team::symcgieuakksimmu()->awouqscoqmqkcgus([Constants::meksegaoamowuwoq => $qaqgaqikqmcmukem, Constants::aisguagukaewucii => Constants::oeeqisiiqoswqqmy]); $wamcomkuwysqgwgk = __('Latest %1$s in %2$s', PR__CVR__FILEFOX); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $sciomagaqmgggsiu = [Constants::sususqikkuaoqeco => $cskucqcumqsyimye->imgymusqgccqsqqq(Constants::sususqikkuaoqeco), Constants::oguseymmyyoyaako => $cskucqcumqsyimye->imgymusqgccqsqqq(Constants::oguseymmyyoyaako)]; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($iseoqmmuokyweokw as $kswgossgkuekessw) { $uycaaqiuaswwyamg = $aoskwucuugeuaeus->get($kswgossgkuekessw, Constants::oeeqisiiqoswqqmy); if ($uycaaqiuaswwyamg) { foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg => $kgioguqigccoiyca) { $wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas($useksmwkuswkwcqg, [Constants::goqgcigmiawyauai => $kiiwisywuumqcwsu, Constants::iwascisiiokuackw => $qaqgaqikqmcmukem, Constants::kymceekcoyyeuocm => [[Constants::gmmygyiecgmggaam => Constants::oeeqisiiqoswqqmy, Constants::gueokgaoyascgeqe => Constants::ooqggksagkoaeeke, Constants::ucoiewcoucauqwko => $kswgossgkuekessw]]]); if ($wyoiwuqokyeeuguk) { switch ($useksmwkuswkwcqg) { case Constants::oguseymmyyoyaako: $yowggsumsmeoeiqc = __('Files', PR__CVR__FILEFOX); break; default: $yowggsumsmeoeiqc = $cskucqcumqsyimye->uikgwcuascgeissw($kgioguqigccoiyca, Constants::mmieaueggwwaokig); break; } $meqocwsecsywiiqs = sprintf($wamcomkuwysqgwgk, $yowggsumsmeoeiqc, $aoskwucuugeuaeus->qcgakseyaikigqco($uycaaqiuaswwyamg)); $suuagcecoyuweoqk[] = [Constants::squoamkioomemiyi => $useksmwkuswkwcqg === Constants::oguseymmyyoyaako ? Constants::oguseymmyyoyaako : Constants::mswoacegomcucaik, Constants::qescuiwgsyuikume => $meqocwsecsywiiqs, Constants::qgmuskygocwmouos => $wyoiwuqokyeeuguk, Constants::geuiiqgcsemyckgm => '#', Constants::oeouaqyskusqoasi => $aisqsoicsocqoogy, Constants::ksiswygussyugiue => $swugsikiiewamomi]; } } } } } return $suuagcecoyuweoqk; } public function faeueaukquwscogu($kuguwoaesuqsqysu, $qscaoekmoooeuyqg) : array { $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); return ['membership' => [Constants::TEXT => __('نویسنده فایل فاکس بوده', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wqqgoiyyqicsycmm, Constants::ciyoccqkiamemcmm => '۱ سال'], 'posts' => [Constants::TEXT => __('مطلب نوشته', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::sqomikyigsmkymsk, Constants::ciyoccqkiamemcmm => $mkcicuowyumccgew->readable(126)], 'traffic' => [Constants::TEXT => __('بازدید مطالب', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::cyqogogyqcuimaqc, Constants::ciyoccqkiamemcmm => $mkcicuowyumccgew->readable(123545)], 'comment' => [Constants::TEXT => __('دیدگاه نوشته', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wyigokgygqasciwc, Constants::ciyoccqkiamemcmm => $mkcicuowyumccgew->readable(568)], 'like' => [Constants::TEXT => __('پسندیده شده', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wyigokgygqasciwc, Constants::ciyoccqkiamemcmm => $mkcicuowyumccgew->readable(45689)], 'follow' => [Constants::TEXT => __('دنبال شده', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::wyigokgygqasciwc, Constants::ciyoccqkiamemcmm => $mkcicuowyumccgew->readable(898)]]; } public function isgyswsyaiyoisek($kuguwoaesuqsqysu, array $ywmkwiwkosakssii = []) { $qookweymeqawmcwo = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['margin' => 3, 'bg_color' => 'gray-100', 'has_icon' => true, 'icon_size' => 'lg', 'key_value' => false, 'value_key' => Constants::ciyoccqkiamemcmm, 'icon_color' => 'gray-500', 'text_color' => 'gray-700', 'show_title' => false, 'item_class' => '', 'border_color' => '', 'divider_color' => 'gray-500', 'divider_space' => 2, 'wrapper_class' => '', Constants::soquiwyuimckgiow => [], Constants::auugqowqueaocgsu => 1, Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu]); $kqagasmwymmuiksq = $qookweymeqawmcwo[Constants::auugqowqueaocgsu] ?? 1; $this->iuygowkemiiwqmiw("common/metadata/list_version_{$kqagasmwymmuiksq}", $qookweymeqawmcwo, [Constants::qaacaqioeyiuakeu => true]); } public function eqiugioqaemamocc($post, array $ywmkwiwkosakssii = []) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ysskgssgwuwmqwym => []]); if ($post instanceof WC_Product) { $gcqseksiskwueksc = $post->get_id(); } else { $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); } $seyqqsmuaiegkeeq = [Constants::oeeqisiiqoswqqmy => '%s', Constants::qgciomgukmcwscqw => __(' in %s category', PR__CVR__FILEFOX)]; $ykwocskgogekuiog = false; switch ($seumokooiykcomco->gueasuouwqysmomu($gcqseksiskwueksc)) { case Constants::oguseymmyyoyaako: $seyqqsmuaiegkeeq[Constants::syuccqmowioeosuc] = sprintf('<div class="d-inline-block mx-1">%s</div>%s', __('for', PR__CVR__FILEFOX), '%s'); $ykwocskgogekuiog = true; break; case Constants::mswoacegomcucaik: $seyqqsmuaiegkeeq = [Constants::qgciomgukmcwscqw => __('in %s category', PR__CVR__FILEFOX)]; break; } $nsmgceoqaqogqmuw = ''; foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $wamcomkuwysqgwgk) { if ($iwewcwusemqaiggk = $seumokooiykcomco->kckogqkiycqeumoa($gcqseksiskwueksc, $kesssewsiegssiya, [Constants::yewiqemgmmucemey => $ykwocskgogekuiog])) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); switch ($kesssewsiegssiya) { case Constants::oeeqisiiqoswqqmy: $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk), ['class' => 'fw-bolder text-secondary']); break; default: $iwywmkygwewiamwm = $swqimwqeweekeusq->ciuuiyckmsygceis($meqocwsecsywiiqs); break; } $nsmgceoqaqogqmuw .= sprintf($wamcomkuwysqgwgk, $iwywmkygwewiamwm); } } if ($nsmgceoqaqogqmuw) { $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym], 'class', 'mb-2 text-muted'); echo $swqimwqeweekeusq->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $wwgucssaecqekuek); } } public function aykiqkcykywsskio($post) { $this->eqiugioqaemamocc($post); } public function mwaseweqgcocogwc($post) { $this->aykiqkcykywsskio($post); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post instanceof WC_Product) { $migiiksoiymissge = $post->get_permalink(); $meqocwsecsywiiqs = $post->get_title(); } else { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); } echo $swqimwqeweekeusq->yuawgssgauywkiia($swqimwqeweekeusq->uuccukgasskgimsq('h2', [], $meqocwsecsywiiqs), $migiiksoiymissge, [], $meqocwsecsywiiqs); $this->mmwaamoaggwkwkes($post); } public function mmwaamoaggwkwkes($post) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $nsmgceoqaqogqmuw = ''; $ukwokcuqauuosmoo = ''; if ($post instanceof WC_Product) { $gcqseksiskwueksc = $post->get_id(); $ukwokcuqauuosmoo = wpautop($post->get_short_description()); } else { $gcqseksiskwueksc = $seumokooiykcomco->iooowgsqoyqseyuu($post); } if (!$ukwokcuqauuosmoo) { $ukwokcuqauuosmoo = $seumokooiykcomco->masoymaamekuykso($gcqseksiskwueksc); } if ($ukwokcuqauuosmoo) { echo $swqimwqeweekeusq->iaaacsuskiakkwui($ukwokcuqauuosmoo, ['class' => 'line-limit-2']); } switch ($seumokooiykcomco->gueasuouwqysmomu($gcqseksiskwueksc)) { case Constants::oguseymmyyoyaako: $ksqoaysmuacuamug = Constants::eycyqsgokewiswum; break; default: $ksqoaysmuacuamug = Constants::ocsomysosuqaimuc; } $kckgeiewycayggwu = 'icon-md my-auto me-2'; if ($kmmywmgcgwceeqii = $seumokooiykcomco->weescwwgqgiyumyw($gcqseksiskwueksc, $ksqoaysmuacuamug)) { $msiqkuocogiyiaki[] = $swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::uaimoioocayauuca, ['class' => $kckgeiewycayggwu]); foreach ($kmmywmgcgwceeqii as $scwiymciagumsuiw) { $msiqkuocogiyiaki[] = $swqimwqeweekeusq->gmqyuaqwgiayskei($aoskwucuugeuaeus->qcgakseyaikigqco($scwiymciagumsuiw), ['class' => 'badge bg-secondary lh-sm me-1']); } $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->iaaacsuskiakkwui($msiqkuocogiyiaki, ['class' => 'd-flex']); } $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->gmqyuaqwgiayskei([$swqimwqeweekeusq->cuoygaaeqeqcuggu(IconInterface::cyqogogyqcuimaqc, ['class' => $kckgeiewycayggwu]), sprintf(__('%s view', PR__CVR__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess(150))], ['class' => 'd-flex']); $swqimwqeweekeusq->sykissckqqccoiqs('div', ['class' => 'd-flex justify-content-between mt-3'], $nsmgceoqaqogqmuw); } }
