<?php
/*
*
*/

class Inputer
{
	public function __construct()
	{

	}

	public function json_input($string = '')
	{
		$json = json_decode($string, TRUE);
		if(FALSE == $json)
		{
			return FALSE;
		}
		else
		{
			return $json;
		}
	}
}


//End Inputer.php