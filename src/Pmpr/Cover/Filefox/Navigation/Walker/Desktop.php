<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e92d0a5e4e0             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; use Pmpr\Common\Foundation\Interfaces\Constants; class Desktop extends Walker { protected $rowOpened = false; public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { parent::start_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); if (!$this->rowOpened && $this->yqowmuqgaqygmwks($this->preElement)) { $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('div', ['class' => 'megamenu-items overflow-y-auto custom-scrollbar px-5 pt-5 pb-0 rounded mt-1 bg-white shadow']); $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('div', ['class' => 'row']); $this->rowOpened = $this->preElement; } } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if ($this->yqowmuqgaqygmwks($this->rowOpened)) { $aqykuigiuwmmcieu .= "</div>"; $aqykuigiuwmmcieu .= "</div>"; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ucicuwcaawugkseg = $this->ouqouwemcymaqoqc($this->rowOpened); if ($ucicuwcaawugkseg) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($ucicuwcaawugkseg, Constants::mmieaueggwwaokig); if (!$meqocwsecsywiiqs) { $meqocwsecsywiiqs = $this->syiamqaugssemesg($this->rowOpened, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } $meqocwsecsywiiqs = sprintf(__('See all %s', PR__CVR__FILEFOX), $meqocwsecsywiiqs); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->womgoiuoesugioqa($this->rowOpened), ['class' => 'btn btn-primary mt-3'])); } $this->rowOpened = false; } parent::end_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $iykuucyqscmsqccc = ''; if ($gquaqgsmiuqsaoum < 2) { $iykuucyqscmsqccc = parent::usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $iykuucyqscmsqccc; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if ($gquaqgsmiuqsaoum < 2) { $muiegiugiocacqkm = parent::usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $muiegiugiocacqkm; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $iykuucyqscmsqccc = parent::kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); return $iykuucyqscmsqccc; } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = parent::mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); return $muiegiugiocacqkm; } public function kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs) { $meqocwsecsywiiqs = parent::kysggmmcuwogskee($meqocwsecsywiiqs, $igqsaukqcqscimok, $kkisyguyosoyymqs); if (!empty($igqsaukqcqscimok->short_description) && $this->syguuyaekiycqqmk($igqsaukqcqscimok)) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $meqocwsecsywiiqs = $swqimwqeweekeusq->iaaacsuskiakkwui([$swqimwqeweekeusq->iaaacsuskiakkwui($meqocwsecsywiiqs, ['class' => 'fs-18 mb-1 megamenu-item-title']), $swqimwqeweekeusq->iaaacsuskiakkwui($igqsaukqcqscimok->short_description, ['class' => 'fs-14 text-muted line-limit-1'])], ['class' => 'd-flex flex-column']); } return $meqocwsecsywiiqs; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { if ($this->yqowmuqgaqygmwks($igqsaukqcqscimok)) { $cmkqisoeyioisqaw[] = 'has-megasubmenu'; } else { $cmkqisoeyioisqaw[] = 'nav-item'; } $cmkqisoeyioisqaw[] = 'dropdown'; if ($this->syguuyaekiycqqmk($igqsaukqcqscimok)) { $cmkqisoeyioisqaw[] = 'p-0'; } } else { if ($this->syguuyaekiycqqmk($igqsaukqcqscimok)) { $cmkqisoeyioisqaw[] = 'megamenu-item col-lg-6 col-xl-4 col-xxl-3 mb-5'; } else { $cmkqisoeyioisqaw[] = 'nav-item'; } } if ($cmkqisoeyioisqaw) { if (isset($igqsaukqcqscimok->classes)) { $cmkqisoeyioisqaw = array_merge($igqsaukqcqscimok->classes, $cmkqisoeyioisqaw); } $igqsaukqcqscimok->classes = $cmkqisoeyioisqaw; } return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function yqowmuqgaqygmwks($mwwsoasauceiwsmk) : bool { if (is_numeric($mwwsoasauceiwsmk)) { $mwwsoasauceiwsmk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get($mwwsoasauceiwsmk, Constants::ckmqoekmugkggeym, true); $mwwsoasauceiwsmk = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->csumkumkamiuyags($mwwsoasauceiwsmk); } return isset($mwwsoasauceiwsmk->mega_menu) && $this->caokeucsksukesyo()->gyecsegqciqykomu()->ascqkksqiiwaouic($mwwsoasauceiwsmk->mega_menu); } public function syguuyaekiycqqmk($mwwsoasauceiwsmk) : bool { return isset($mwwsoasauceiwsmk->menu_item_parent) && $this->yqowmuqgaqygmwks($mwwsoasauceiwsmk->menu_item_parent); } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { if ($kywcekcsigagsimc === 0) { $siquossayskcwkea['class'] = 'megamenu dropdown-menu pt-0 border-0'; } return parent::oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii); } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { if (!$igqsaukqcqscimok->menu_item_parent) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'nav-link d-flex'); if ($kkisyguyosoyymqs) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'data-bs-toggle', 'dropdown'); $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'aria-expanded', 'false'); } } else { if ($this->syguuyaekiycqqmk($igqsaukqcqscimok)) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-flex'); } else { if ($gquaqgsmiuqsaoum > 1) { if ($kkisyguyosoyymqs) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-block mb-2 text-gray-800 fw-bold'); } else { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-block mb-2 text-gray-600'); } } else { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-flex text-nowrap'); } } } return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if ($this->yqowmuqgaqygmwks($igqsaukqcqscimok)) { $egkyssmuqcwaciya = 'fw-bold'; } return $egkyssmuqcwaciya; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $cmkqisoeyioisqaw = 'my-auto '; if ($gquaqgsmiuqsaoum == 0 && $kkisyguyosoyymqs) { $cmkqisoeyioisqaw .= ' me-2 icon-md'; } else { if (!$kkisyguyosoyymqs && $this->syguuyaekiycqqmk($igqsaukqcqscimok)) { $cmkqisoeyioisqaw .= ' me-3 icon-3x miw-3rem'; } } $siquossayskcwkea['class'] = $cmkqisoeyioisqaw; return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } public function gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum) { $wkaqekwwgqsqwcoi = parent::gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); if (empty($wkaqekwwgqsqwcoi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (Constants::gmmygyiecgmggaam === $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi) && Constants::oeeqisiiqoswqqmy === $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ckmqoekmugkggeym)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eggygikowgywcayq), Constants::qgqyauaqwqmqseim); } } return $wkaqekwwgqsqwcoi; } }
