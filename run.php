<?php
require "simpleGrab.php";

$url = "https://www.jadwalsholat.org/adzan/monthly.php";
// https://www.jadwalsholat.org/adzan/monthly.php?id=224

$teks = file_get_contents($url);
$listKota = getStringBetween($teks, 'class="inputcity">', '</select>');
$arrKota = getKota($listKota);

// print_r($c);
var_dump($arrKota);