<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a3e27327             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Form; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Button; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Frontend\Field\Text; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Search extends Container { public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('search_form_object', [$this, 'qiiyiosewcgwegei'])->aqaqisyssqeomwom('search_form_fields', [$this, 'ysmoiikkyikwgwey'])->aqaqisyssqeomwom('allow_to_render_header_search', [$this, 'ekeiykoawwkamuqo']); } public function ekeiykoawwkamuqo() : bool { return !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw(); } public function qiiyiosewcgwegei($eaoumsseceiowgsk) { if ($eaoumsseceiowgsk instanceof Form) { $takycgcamoacksqw = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw(); $aeaqgysgaeowagug = $eaoumsseceiowgsk->ygwimyogyaqgumam('search_submit'); if ($aeaqgysgaeowagug instanceof Button) { $aeaqgysgaeowagug->gswweykyogmsyawy(__('Search', PR__CVR__FILEFOX))->qigsyyqgewgskemg('rounded-0 rounded-end'); if ($takycgcamoacksqw) { $aeaqgysgaeowagug->qigsyyqgewgskemg('btn-lg'); } } if ($takycgcamoacksqw) { $eaoumsseceiowgsk->qigsyyqgewgskemg('search-form m-auto d-flex justify-content-center'); } else { $eaoumsseceiowgsk->qigsyyqgewgskemg('search-form my-auto col-12 col-md order-4 order-md-2 d-flex'); } } return $eaoumsseceiowgsk; } public function ysmoiikkyikwgwey($ikgwqyuyckaewsow) { $takycgcamoacksqw = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->takycgcamoacksqw(); $ccamueccusigaaio = $ikgwqyuyckaewsow[Constants::mgsccwumkcawaqcy] ?? null; if ($ccamueccusigaaio instanceof Select) { $ccamueccusigaaio->jyumyyugiwwiqomk(5)->gkkgsyeumismsyse('visually-hidden')->qigsyyqgewgskemg('w-auto bg-gray-300 rounded-start'); } $qwcmueausqgiwigy = $ikgwqyuyckaewsow[Constants::yayciqueeakqwese] ?? null; if ($qwcmueausqgiwigy instanceof Text) { $qwcmueausqgiwigy->gkkgsyeumismsyse('visually-hidden')->kyiucygqsgequoys(__('Enter a keyword...', PR__CVR__FILEFOX)); if ($takycgcamoacksqw) { $qwcmueausqgiwigy->qigsyyqgewgskemg('border-0'); } } return $ikgwqyuyckaewsow; } }
