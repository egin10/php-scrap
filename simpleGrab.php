<?php
/**
 * Simple Grab
 */

function getStringBetween($teks, $sebelum, $sesudah)
{
    $teks = ' '.$teks;
    $ini = strpos($teks, $sebelum);
    if($ini == 0) return '';
    $ini += strlen($sebelum);
    $panjang = strpos($teks, $sesudah, $ini) - $ini;

    return substr($teks, $ini, $panjang);
}

function getKota($listKota)
{
	$kota = explode("</option>", $listKota);
	$c = count($kota)-1;
	$arrKota = [];
	for($i=0; $i<$c; $i++) {
		$listNamaKota = explode(">", $kota[$i]);
		$valKota = explode('"', $listNamaKota[0])[1];
		$namaKota = $listNamaKota[1];
		// print_r($valKota." -> ".$namaKota."\n");
		$arrKota[] = [$valKota, $namaKota];
	}

	return $arrKota;
}