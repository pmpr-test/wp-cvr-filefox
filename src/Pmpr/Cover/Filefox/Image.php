<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cf32909ca5f             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Image extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('delete_attachment', [$this, 'qycmiaiqyscyymsk']); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('get_cover_image_sizes', [$this, 'wgogyccwcysggaig']); } public function qycmiaiqyscyymsk($gcqseksiskwueksc) { $ugugimquukqwogge = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->kymakekgqcqyqgmy($gcqseksiskwueksc); $qogsmwakwacwqogk = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ckoygqywcuqasqea($gcqseksiskwueksc); $usuwmommwquwiiia = $this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(); if (isset($ugugimquukqwogge['sizes']) && is_array($ugugimquukqwogge['sizes'])) { $skgkwagkuiasmqmg = path_join($usuwmommwquwiiia['basedir'], dirname($qogsmwakwacwqogk)); foreach ($ugugimquukqwogge['sizes'] as $oiegiwogmwmawkeo => $eseouqwaqgckwoow) { if (!in_array($oiegiwogmwmawkeo, ['16x9', '4x3', '1x1'])) { continue; } $miawkwqioaeasiig = path_join($skgkwagkuiasmqmg, $oiegiwogmwmawkeo); $egomqeoaekcymeai = path_join($miawkwqioaeasiig, wp_basename($qogsmwakwacwqogk)); if (!empty($egomqeoaekcymeai)) { wp_delete_file_from_directory($egomqeoaekcymeai, $skgkwagkuiasmqmg); } } } } public function wgogyccwcysggaig() : array { return [Constants::coiowssmsymuaiis => [Constants::jkiyuoygceaaogoq => 1, Constants::qomookamaskuoswk => 1200, Constants::sogmkkcwuamuqegw => 675, Constants::kqeokggqcsesmqco => 1], Constants::meugkwqwuyoyeeqs => [Constants::jkiyuoygceaaogoq => 1, Constants::qomookamaskuoswk => 80, Constants::sogmkkcwuamuqegw => 80, Constants::kqeokggqcsesmqco => 1], Constants::qisqmmesuewemeqg => [Constants::jkiyuoygceaaogoq => 1, Constants::qomookamaskuoswk => 400, Constants::sogmkkcwuamuqegw => 400, Constants::kqeokggqcsesmqco => 0], Constants::MEDIUM => [Constants::jkiyuoygceaaogoq => 1, Constants::qomookamaskuoswk => 250, Constants::sogmkkcwuamuqegw => 250, Constants::kqeokggqcsesmqco => 0]]; } }
