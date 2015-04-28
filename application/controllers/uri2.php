<?php
/*
*
*/

class Uri2 extends CI_controller {

	public function __construct(){
		parent::__construct();
	}

	public function test($id, $param, $param2, $param3){
		echo $id;
		echo '<br>';
		echo $param;
		echo '<br>';
		echo $param2;
		echo '<br>';
		echo $param3;
	}
}


//End uri2.php