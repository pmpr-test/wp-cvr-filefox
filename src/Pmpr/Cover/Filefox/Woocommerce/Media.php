<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e9a8db28034             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Cover\Filefox\Container; class Media extends Container { const oomgaogyuiksiwag = [Constants::cwswygwykwgsqiwu => Constants::qisqmmesuewemeqg, Constants::egwoacukmsioosum => Constants::qisqmmesuewemeqg, 'gallery_thumbnail' => Constants::meugkwqwuyoyeeqs]; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('intermediate_image_sizes_advanced', [$this, 'eacakakmqgccsyyw'], 99)->cecaguuoecmccuse('single_product_archive_thumbnail_size', [$this, 'mekwqsyuqqguouas'], 999); foreach (self::oomgaogyuiksiwag as $ymqmyyeuycgmigyo => $oiegiwogmwmawkeo) { $this->cecaguuoecmccuse("woocommerce_get_image_size_{$ymqmyyeuycgmigyo}", [$this, 'wmymmoesqugiuwey']); } } public function eacakakmqgccsyyw($wyicceigkekkkwgs) { $weyusigueygyeuio = array_keys(self::oomgaogyuiksiwag); foreach ($weyusigueygyeuio as $oiegiwogmwmawkeo) { remove_image_size($oiegiwogmwmawkeo); unset($wyicceigkekkkwgs[$oiegiwogmwmawkeo]); } return $wyicceigkekkkwgs; } public function wmymmoesqugiuwey($oiegiwogmwmawkeo, $ymqmyyeuycgmigyo = null) : array { if (!$ymqmyyeuycgmigyo) { $ymqmyyeuycgmigyo = str_replace('woocommerce_get_image_size_', '', current_filter()); } $wyicceigkekkkwgs = $this->ocksiywmkyaqseou('get_cover_image_sizes', []); $gkiuoymeukweiaaw = $wyicceigkekkkwgs[self::oomgaogyuiksiwag[$ymqmyyeuycgmigyo] ?? ''] ?? []; if ($gkiuoymeukweiaaw) { $oiegiwogmwmawkeo = $gkiuoymeukweiaaw; } return $oiegiwogmwmawkeo; } public function mekwqsyuqqguouas() : string { return Constants::egwoacukmsioosum; } }
