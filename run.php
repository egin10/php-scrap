<?php
require "simpleGrab.php";

if(sizeof($argv) == 1 || $argv[1] == NULL)
{
	echo "Use => run.php url_link(detik.com)";
}else{
	$url = "http://".$argv[1]."/";
	$ref = "http://www.google.com/";

	$run = new simpleGrab($url, $ref);

	echo $run->result();
}
