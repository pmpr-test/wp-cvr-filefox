<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aac431b1f             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; use Pmpr\Common\Foundation\Interfaces\Constants; class Desktop extends Walker { protected $rowOpened = false; public function start_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = []) { parent::start_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); if ($gquaqgsmiuqsaoum === 1 && $this->preElement && !$this->rowOpened) { $aqykuigiuwmmcieu .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('div', ['class' => 'megamenu-items d-flex flex-column flex-wrap']); $this->rowOpened = $this->preElement; } } public function end_lvl(&$aqykuigiuwmmcieu, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { if ($gquaqgsmiuqsaoum === 1 && $this->rowOpened) { $aqykuigiuwmmcieu .= "</div>"; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $ucicuwcaawugkseg = $this->ouqouwemcymaqoqc($this->rowOpened); if ($ucicuwcaawugkseg) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($ucicuwcaawugkseg, Constants::mmieaueggwwaokig); if (!$meqocwsecsywiiqs) { $meqocwsecsywiiqs = $this->syiamqaugssemesg($this->rowOpened, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } $meqocwsecsywiiqs = sprintf(__('See all %s', PR__CVR__FILEFOX), $meqocwsecsywiiqs); $aqykuigiuwmmcieu .= $swqimwqeweekeusq->iaaacsuskiakkwui($swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $this->womgoiuoesugioqa($this->rowOpened), ['class' => 'btn btn-primary mt-3'])); } $this->rowOpened = false; } parent::end_lvl($aqykuigiuwmmcieu, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } public function usmoayqaggagwuua($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) { $iykuucyqscmsqccc = ''; if ($gquaqgsmiuqsaoum < 2) { $iykuucyqscmsqccc = parent::usmoayqaggagwuua($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $iykuucyqscmsqccc; } public function usaequuoiqiccgqe($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if ($gquaqgsmiuqsaoum < 2) { $muiegiugiocacqkm = parent::usaequuoiqiccgqe($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $muiegiugiocacqkm; } public function kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $iykuucyqscmsqccc = ''; if ($gquaqgsmiuqsaoum < 2) { $iykuucyqscmsqccc = parent::kkgyiaeggsggwioy($igqsaukqcqscimok, $gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $iykuucyqscmsqccc; } public function mocasmqewmcioccg($gquaqgsmiuqsaoum = 0, $ywmkwiwkosakssii = null) : string { $muiegiugiocacqkm = ''; if ($gquaqgsmiuqsaoum < 2) { $muiegiugiocacqkm = parent::mocasmqewmcioccg($gquaqgsmiuqsaoum, $ywmkwiwkosakssii); } return $muiegiugiocacqkm; } public function iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs) { $cmkqisoeyioisqaw = []; if ($kkisyguyosoyymqs) { if ($igqsaukqcqscimok->menu_item_parent) { $cmkqisoeyioisqaw[] = 'has-megasubmenu'; } else { $cmkqisoeyioisqaw[] = 'nav-item'; $cmkqisoeyioisqaw[] = 'dropdown'; } } else { if ($igqsaukqcqscimok->menu_item_parent) { $cmkqisoeyioisqaw[] = 'p-0'; } else { $cmkqisoeyioisqaw[] = 'nav-item'; } } if ($cmkqisoeyioisqaw) { $igqsaukqcqscimok->classes = $cmkqisoeyioisqaw; } return parent::iiooycqcyoueusky($igqsaukqcqscimok, $kkisyguyosoyymqs); } public function oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii) { if ($kywcekcsigagsimc == 0) { $siquossayskcwkea['class'] = 'megamenu dropdown-menu p-0 border-0 border-top'; } else { if ($kywcekcsigagsimc == 1) { $siquossayskcwkea['class'] = 'megasubmenu dropdown-menu py-3 px-4 m-0 border-0 border-top'; } } return parent::oaqwemmqmiqqmaie($siquossayskcwkea, $kywcekcsigagsimc, $ywmkwiwkosakssii); } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { if (!$igqsaukqcqscimok->menu_item_parent) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'nav-link d-flex'); if ($kkisyguyosoyymqs) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'data-bs-toggle', 'dropdown'); $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'aria-expanded', 'false'); } } else { if ($gquaqgsmiuqsaoum > 1) { if ($kkisyguyosoyymqs) { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-block mb-2 text-gray-800 fw-bold fs-6'); } else { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-block mb-2 text-gray-600'); } } else { $siquossayskcwkea = $this->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'd-flex text-nowrap'); } } return parent::smkqamusaugagkwi($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = ''; if (!$igqsaukqcqscimok->menu_item_parent && $kkisyguyosoyymqs) { $egkyssmuqcwaciya .= 'fw-bold'; } return $egkyssmuqcwaciya; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $cmkqisoeyioisqaw = 'me-2 my-auto '; if ($gquaqgsmiuqsaoum == 0 && $kkisyguyosoyymqs) { $cmkqisoeyioisqaw .= ' icon-md'; } $siquossayskcwkea['class'] = $cmkqisoeyioisqaw; return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } public function gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum) { $wkaqekwwgqsqwcoi = parent::gosgyweqsacaocog($igqsaukqcqscimok, $ywmkwiwkosakssii, $gquaqgsmiuqsaoum); if (empty($wkaqekwwgqsqwcoi)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (Constants::gmmygyiecgmggaam === $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi) && Constants::oeeqisiiqoswqqmy === $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::ckmqoekmugkggeym)) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::eggygikowgywcayq), Constants::qgqyauaqwqmqseim); } } return $wkaqekwwgqsqwcoi; } }
