<?php
define("WEB_ROOT", "D:/");
/*
 * 
 */
 
class File_handle extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
	}
	
	public function newfile()
	{
		$filename = date("YmdHis");
		$url = WEB_ROOT . $filename . ".txt";
		
		$content = "Hello!";
		
		if(!write_file($url, $content))
		{
			echo "Can not write or create a file!";
		}
	}
	
	public function delfile($filename)
	{
		$url = WEB_ROOT . $filename . ".txt";
		unlink($url);
	}
	
	public function check_file($filename)
	{
		$file = WEB_ROOT . $filename . ".txt";
		
		if(FALSE === get_file_info($file))
		{
			echo "File not found";	
		}
	}
}

//End