<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecad8a1133             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation; use Pmpr\Cover\Filefox\Container; use Pmpr\Cover\Filefox\Navigation\Walker\Desktop; use Pmpr\Cover\Filefox\Navigation\Walker\Mobile; use Pmpr\Cover\Filefox\Navigation\Walker\Walker; class Navigation extends Container { const mscmiyagikmwygwk = 'mega_menu'; const eagmsgqygmiiqkmy = 'mobile-menu'; const euamyqcwoicakggg = 'desktop-menu'; const sagygwmewiosskgs = 'short_description'; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('init', [$this, 'qkakikuucsgikyqw']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('wp_nav_menu_args', [$this, 'wikmmcgykskyeeyy']); $this->aqaqisyssqeomwom('nav_menu_custom_fields', [$this, 'ukacqsocaokawsya']); } public function ukacqsocaokawsya($ikgwqyuyckaewsow) { $eockugooueoumkye = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ikgwqyuyckaewsow[] = $eockugooueoumkye->wcwmusaouiqaqeww(self::mscmiyagikmwygwk)->gswweykyogmsyawy(__('As MegaMenu', PR__CVR__FILEFOX)); $ikgwqyuyckaewsow[] = $eockugooueoumkye->uouyygwcgsmygaee(self::sagygwmewiosskgs)->qsecygiycssgacqs(2)->gswweykyogmsyawy(__('Short Description', PR__CVR__FILEFOX)); return $ikgwqyuyckaewsow; } public function wegieaiumwsmoywe() : array { return [self::euamyqcwoicakggg => __('Desktop Navigation Menu', PR__CVR__FILEFOX), self::eagmsgqygmiiqkmy => __('Mobile Navigation Menu', PR__CVR__FILEFOX)]; } public function qkakikuucsgikyqw() { $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); foreach ($this->wegieaiumwsmoywe() as $igscmsiuisqaqwkk => $ymqmyyeuycgmigyo) { $ewsqcacamuomwagw->uoieieeqeeowieyy($igscmsiuisqaqwkk, $ymqmyyeuycgmigyo); } } public function wikmmcgykskyeeyy($ywmkwiwkosakssii = []) : array { $igscmsiuisqaqwkk = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, 'theme_location'); $ggauoeuaesiymgee = [ 'echo' => true, 'menu' => '', 'depth' => 0, 'after' => '', 'walker' => new Walker(), 'before' => '', 'menu_id' => '', 'li_class' => '', 'container' => '', 'link_class' => '', 'items_wrap' => '', 'menu_class' => '', 'link_after' => '', 'link_before' => '', 'fallback_cb' => false, 'item_spacing' => 'discard', 'container_id' => '', 'container_class' => '', 'container_aria_label' => '', ]; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw(array_filter($ywmkwiwkosakssii), $ggauoeuaesiymgee); $egkiuiwyukscsgwk = ''; switch ($igscmsiuisqaqwkk) { case self::eagmsgqygmiiqkmy: $ywmkwiwkosakssii['walker'] = new Mobile(); break; case self::euamyqcwoicakggg: $egkiuiwyukscsgwk = 'navbar-nav me-auto d-none d-md-flex'; $ywmkwiwkosakssii['walker'] = new Desktop(); break; } $ywmkwiwkosakssii['items_wrap'] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui('%3$s', ['class' => $egkiuiwyukscsgwk]); return $ywmkwiwkosakssii; } }
