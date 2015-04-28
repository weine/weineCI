<?php
ini_set("display_errors", "1");
ERROR_REPORTING(E_ALL);

include_once('MobileSniffer.php');

class Pc
{
	private $mobSniff;
	public function __construct()
	{
		$this->mobSniff = new MobileSniffer();

		echo "Device = " . $this->mobSniff->findDevice() . "<BR/>";
		echo "Browser = " . $this->mobSniff->findBrowser() . "<BR/>";
		echo $_SERVER['HTTP_USER_AGENT'];exit;
	}
}

//End