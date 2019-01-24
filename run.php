<?php
require "simpleGrab.php";

$url = "http://www.detik.com/";
$ref = "http://www.google.com/";

$run = new simpleGrab($url, $ref);

echo $run->hasil();