<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e9a7a40dd35             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Single extends Container { public function wigskegsqequoeks() { $this->waqewsckuayqguos('render_post_tags', [$this, 'zoagwiiuucqcaqga'], 10, 2)->waqewsckuayqguos('render_post_author', [$this, 'vkoussmggmyoieey'], 10, 2)->waqewsckuayqguos('render_post_references', [$this, 'euykooooimoamomo'], 10, 2); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('the_content', [$this, 'eeqyuewwyoqkcsmk'], 11); } public function eeqyuewwyoqkcsmk($ewgwqamkygiqaawc) { global $post; if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post); $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); preg_match_all('/(<h2.*?>.*?<\\/h2>)/s', $ewgwqamkygiqaawc, $ymcousskmscsyees, PREG_OFFSET_CAPTURE); $oqcammciwimcumac = $swqimwqeweekeusq->uuccukgasskgimsq('section', ['class' => 'single-content %1$s-content'], '%2$s'); if (!empty($ymcousskmscsyees[0])) { $mgiqqesweuqmsymo = []; if (isset($ymcousskmscsyees[0][0][1]) && $ymcousskmscsyees[0][0][1] > 0) { $moeykakukagycacg = $swqimwqeweekeusq->uuccukgasskgimsq('h2', ['class' => 'visually-hidden'], __('Intro', PR__CVR__FILEFOX)); $omeaioegesioikss = substr($ewgwqamkygiqaawc, 0, $ymcousskmscsyees[0][0][1]); $mgiqqesweuqmsymo[] = sprintf($oqcammciwimcumac, $useksmwkuswkwcqg, $moeykakukagycacg . trim($omeaioegesioikss)); } try { foreach ($ymcousskmscsyees[0] as $momcykaoccoymeig => $iuimqckcgwwkgygo) { $ggkaciewmeqmgckg = $iuimqckcgwwkgygo[1]; $qmeuaeiseuacgiqc = isset($ymcousskmscsyees[0][$momcykaoccoymeig + 1]) ? $ymcousskmscsyees[0][$momcykaoccoymeig + 1][1] : strlen($ewgwqamkygiqaawc); $osykqueyuiqkukcw = substr($ewgwqamkygiqaawc, $ggkaciewmeqmgckg, $qmeuaeiseuacgiqc - $ggkaciewmeqmgckg); $mgiqqesweuqmsymo[] = sprintf($oqcammciwimcumac, $useksmwkuswkwcqg, trim($osykqueyuiqkukcw)); } $ewgwqamkygiqaawc = implode('', $mgiqqesweuqmsymo); } catch (Exception $wgaoewqkwgomoaai) { } } } return $ewgwqamkygiqaawc; } public function zoagwiiuucqcaqga($post, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => __('Tags', PR__CVR__FILEFOX)]); $kmmywmgcgwceeqii = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->weescwwgqgiyumyw($post, Constants::ocsomysosuqaimuc); if ($kmmywmgcgwceeqii) { $oammesyieqmwuwyi = []; $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($kmmywmgcgwceeqii as $scwiymciagumsuiw) { $oammesyieqmwuwyi[] = [Constants::qescuiwgsyuikume => $aoskwucuugeuaeus->qcgakseyaikigqco($scwiymciagumsuiw), Constants::ogigqueukwysusii => $aoskwucuugeuaeus->qmgcisuuikgmqcsu($scwiymciagumsuiw)]; } if ($oammesyieqmwuwyi) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $oammesyieqmwuwyi; $this->iuygowkemiiwqmiw('common/single/tags', $ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => true]); } } } public function euykooooimoamomo($post, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qescuiwgsyuikume => __('References', PR__CVR__FILEFOX), Constants::qgqyauaqwqmqseim => IconInterface::ukewyicuomgckamy]); $ykqcceqiqygieeks = $this->ocksiywmkyaqseou('structured_data_get_citation_data', [], $post); if ($ykqcceqiqygieeks) { $ywmkwiwkosakssii[Constants::qwumqqyuasyskkkc] = $ykqcceqiqygieeks; $this->iuygowkemiiwqmiw('common/post/references', $ywmkwiwkosakssii, [Constants::qaacaqioeyiuakeu => true]); } } public function vkoussmggmyoieey($post, array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['avatar_size' => 32, 'full_version' => false, Constants::oeouaqyskusqoasi => __('View All Published Articles', PR__CVR__FILEFOX)]); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $qaqgaqikqmcmukem = $seumokooiykcomco->mguqscccckuywsya($post); if ($qaqgaqikqmcmukem) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $ymqmyyeuycgmigyo = $yoiguusocukqeayg->ygwimyogyaqgumam($qaqgaqikqmcmukem); $guwumyyyakswawas = $seumokooiykcomco->kckogqkiycqeumoa($post, Constants::qgciomgukmcwscqw); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); $cgqogwmuwomaeuyy = $aoskwucuugeuaeus->qcgakseyaikigqco($guwumyyyakswawas); $ogeqcwqqsuwkoaos = $aoskwucuugeuaeus->igawqaomowicuayw($guwumyyyakswawas, Constants::sagygwmewiosskgs); $iaeyeowsqwasuuoq = $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->mkaiaewoyaimieqg($qaqgaqikqmcmukem); $this->iuygowkemiiwqmiw('common/single/author', array_merge($ywmkwiwkosakssii, ['follow_icon' => IconInterface::eiiekwemqsqemgao, 'follow_text' => __('Follow', PR__CVR__FILEFOX), 'socials' => ['x' => [Constants::qescuiwgsyuikume => __('X (Twitter)', PR__CVR__FILEFOX), Constants::ogigqueukwysusii => '#', Constants::qgqyauaqwqmqseim => IconBrandInterface::skeokecosgmasmkw], 'reddit' => [Constants::qescuiwgsyuikume => __('X (Twitter)', PR__CVR__FILEFOX), Constants::ogigqueukwysusii => '#', Constants::qgqyauaqwqmqseim => IconBrandInterface::kkkaessgguiiocqy], 'stackoverflow' => [Constants::qescuiwgsyuikume => __('X (Twitter)', PR__CVR__FILEFOX), Constants::ogigqueukwysusii => '#', Constants::qgqyauaqwqmqseim => IconBrandInterface::gqmsscwywmuoscww], 'quora' => [Constants::qescuiwgsyuikume => __('X (Twitter)', PR__CVR__FILEFOX), Constants::ogigqueukwysusii => '#', Constants::qgqyauaqwqmqseim => IconBrandInterface::lokmkwageyswysuq]], Constants::auqoykcmsiauccao => $iaeyeowsqwasuuoq, Constants::NAME => $ymqmyyeuycgmigyo, Constants::iwascisiiokuackw => $qaqgaqikqmcmukem, Constants::eqkeooqcsscoggia => sprintf('%s %s %s', $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(sprintf(__('%s is a %s expert', PR__CVR__FILEFOX), $ymqmyyeuycgmigyo, $cgqogwmuwomaeuyy), $iaeyeowsqwasuuoq), sprintf(__('and has published more than %s pages of specialized content on %s so far.', PR__CVR__FILEFOX), $this->caokeucsksukesyo()->gagsyqagguwwauac()->eusockqasqqmoess($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ogueawoqwakkosau($qaqgaqikqmcmukem), $seumokooiykcomco->gueasuouwqysmomu($post)), $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->ciqkaakiwsgqwiqu(Constants::NAME)), $ogeqcwqqsuwkoaos)]), [Constants::qaacaqioeyiuakeu => true]); } } }
