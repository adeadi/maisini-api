<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array(
            'Category_model',
            'Common'
        ));
        /*
        $check_auth_client = $this->MyModel->check_auth_client();
		if($check_auth_client != true){
			die($this->output->get_output());
		}
		*/
    }
	public function index()
	{
		$method = $_SERVER['REQUEST_METHOD'];
		if($method != 'GET'){
			json_output(400,array('status' => 400,'message' => 'Bad request.'));
		} else {
			$check_auth_client = $this->Common->check_auth_client();
			if($check_auth_client == true){
		        $response = $this->Category_model->get_category_list();
		        json_output(200,$response);
			}
		}
	}
}
