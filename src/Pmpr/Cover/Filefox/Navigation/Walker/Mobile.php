<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cf387269310             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox\Navigation\Walker; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Mobile extends Walker { public function __construct() { $this->seqmucuwuueuqekq(['class' => 'list-unstyled collapse border-none bg-white rounded p-3 mt-4']); } public function wmimcogcoiqoagkm($igqsaukqcqscimok, $kkisyguyosoyymqs) : string { $egkyssmuqcwaciya = 'fw-bold p-0 text-nowrap'; if (!empty($igqsaukqcqscimok->icon)) { $egkyssmuqcwaciya .= ' d-flex'; } if (!empty($igqsaukqcqscimok->menu_item_parent)) { $egkyssmuqcwaciya .= ' text-gray-600 fs-14'; } else { $egkyssmuqcwaciya .= ' fs-sm text-gray-700'; } return $egkyssmuqcwaciya; } public function qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs) { return parent::qcgmmmeokuequagy($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs); } public function ksosuqqukyweqiao($iwywmkygwewiamwm, $igqsaukqcqscimok, $kkisyguyosoyymqs) { if ($kkisyguyosoyymqs) { $omwieegygisoswgw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $cgceiiqaamkmsaim = $omwieegygisoswgw->cuoygaaeqeqcuggu(IconInterface::ckqgusoqoosqqwyo, ['class' => 'icon-light rotate-180']); $iwywmkygwewiamwm = $omwieegygisoswgw->gmqyuaqwgiayskei($iwywmkygwewiamwm . $cgceiiqaamkmsaim, ['class' => 'd-flex justify-content-between rotate-on-show as-link', 'aria-controls' => $this->amqewiesyqeqiuai(), 'aria-expanded' => 'false', 'data-bs-toggle' => 'collapse', 'data-bs-target' => "#{$this->amqewiesyqeqiuai()}"]); } return $iwywmkygwewiamwm; } public function yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum = 0) { $siquossayskcwkea = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($siquossayskcwkea, 'class', 'me-2 my-auto icon-md'); return parent::yukwcwcsqoswwium($siquossayskcwkea, $igqsaukqcqscimok, $kkisyguyosoyymqs, $gquaqgsmiuqsaoum); } }
