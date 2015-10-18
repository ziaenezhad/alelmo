<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class Entity extends REST_Controller {
	public function index_get(){
		show_404();
	}
	public function view_get($id = NULL)
	{
		if(!$id){
			show_404();
		}
		var_dump($id);
		$this->load->view('welcome_message');
	}
	public function api_get($id)
	{
		$this->response(['id'=>$id]);
		//var_dump($this->output->get_output());
	}
}
