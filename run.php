<?php
require "simpleGrab.php";

$url = "https://www.jadwalsholat.org/adzan/monthly.php";

$teks = file_get_contents($url);

// echo $teks;
$listKota = getStringBetween($teks, 'class="inputcity">', '</select>');
// $kota = [];
$kota = explode("</option>", $listKota);
$c = count($kota)-1;

for($i=0; $i<$c; $i++) {
	$listNamaKota = explode(">", $kota[$i]);
	$valKota = explode('"', $listNamaKota[0])[1];
	$namaKota = $listNamaKota[1];
	// echo $kota[$i]."\n";
	// print_r($namaKota."\n");
	print_r($valKota." -> ".$namaKota."\n");
}
// print_r($c);