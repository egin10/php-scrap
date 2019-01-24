<?php
/**
 * Simple Grab
 */
class simpleGrab
{
    /**
     * https://github.com/egin10
     * params $url => tujuan url yg ingin di ambil
     * params $ref => http referer
     */
    public function __construct($url, $ref = '')
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        if(!empty($ref)) {
        	curl_setopt($ch, CURLOPT_REFERER, $ref);
        	$this->res = curl_exec($ch);
        	curl_close($ch);
        }
    }

    function hasil()
    {
    	if(!empty($this->res))
    		return $this->res;
    }
}