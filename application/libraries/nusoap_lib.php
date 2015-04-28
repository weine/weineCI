<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Nusoap_lib{
	
	public function Nusoap_lib(){
		require_once(str_replace("\\","/",APPPATH).'libraries/NuSOAP/nusoap'.EXT); //If we are executing this script on a Windows server
	}
}

//End of Nusoap_lib.php