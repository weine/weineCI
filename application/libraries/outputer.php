<?php
/*
*
*/

class Outputer
{
	public function __construct()
	{

	}

	public function json_output($str_array = array())
	{
		if(is_array($str_array))
		{
			if(count($str_array) > 0)
			{
				return json_encode($str_array);
			}
		}
		else
		{
			echo 'Can not format to json !';
		}
	}
}


//End outputer.php