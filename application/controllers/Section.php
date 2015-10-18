<?php
require('Entity.php');

class Section extends Entity {
	/*public function __construct()
	{
        parent::__construct();
	}*/
	public function api_get($id,$name=NULL)
	{
		$this->response(['id'=>$id,'name'=>$name]);
		//var_dump($this->output->get_output());
	}
}
