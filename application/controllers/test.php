<?php
    class Test extends CI_Controller{
    	
    	public $db_json;

    	public function __construct() {
    		parent::__construct();
    	}
		
		public function get_list() {
			$this->load->model('test_model');
			$result = $this->test_model->get_data();
			
			if(FALSE === $result)
			{
				echo 'Can not connect DB!';
			}
			else
			{
				$json = $this->outputer->json_output($result);

				if(FALSE === $json)
				{
					echo 'No output';
				}
				else
				{
					$this->db_json = $json;
				}
				
			}
		}

		public function get_detail($id)
		{
			$this->get_list();
			$data = $this->inputer->json_input($this->db_json);
			if(FALSE == $data)
			{
				echo 'Can not get!';
			}
			else
			{
				echo '<pre>';
				print_r($data[$id-1]);
				echo '</pre>';
			}
		}
    }

//End of test.php
//