<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cf387269310             |
    |_______________________________________|
*/
 namespace Pmpr\Cover\Filefox; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Container { public function wigskegsqequoeks() { $this->iqkqummseggmikgo('pr_ff_search_posts', [$this, 'okmcowkkkyyqigqy']); } public function okmcowkkkyyqigqy() { $sogksuscggsicmac = []; $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $gqgemcmoicmgaqie = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::meieskyuuegwwcsy, ''); $uycaaqiuaswwyamg = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::oeeqisiiqoswqqmy, ''); if (!empty($gqgemcmoicmgaqie) && !empty($uycaaqiuaswwyamg)) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $sciomagaqmgggsiu = [Constants::oguseymmyyoyaako => ['traffic'], Constants::sususqikkuaoqeco => ['publish', 'study']]; foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg => $kuguwoaesuqsqysu) { $wyoiwuqokyeeuguk = $seumokooiykcomco->kmegaqgyciwwmegk($gqgemcmoicmgaqie, $useksmwkuswkwcqg, [Constants::isukysauqkiecswi => 0, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::goqgcigmiawyauai => 3, Constants::kymceekcoyyeuocm => [[Constants::gmmygyiecgmggaam => Constants::oeeqisiiqoswqqmy, Constants::gueokgaoyascgeqe => Constants::ooqggksagkoaeeke, Constants::ucoiewcoucauqwko => $uycaaqiuaswwyamg]]]); if ($wyoiwuqokyeeuguk) { $sogksuscggsicmac[$useksmwkuswkwcqg] = $this->iuygowkemiiwqmiw('posts', [Constants::qgmuskygocwmouos => $wyoiwuqokyeeuguk, Constants::qescuiwgsyuikume => $cskucqcumqsyimye->uikgwcuascgeissw($useksmwkuswkwcqg, Constants::NAME), Constants::ckcuiukmyisueqeo => $kuguwoaesuqsqysu], [Constants::qaacaqioeyiuakeu => false, Constants::wkskqwewyowocccu => true]); } } } if (empty($sogksuscggsicmac)) { $sogksuscggsicmac = $this->caokeucsksukesyo()->euekiyuksecoccus()->gosmqcmmomkqwmis($this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui(__('No results found!', PR__CVR__FILEFOX), ['class' => 'align-content-center text-center'])); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($sogksuscggsicmac); } }
