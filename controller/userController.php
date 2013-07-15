<?php
	
	
  	include 'model/'.$controller . 'Model.php';
	include 'view/'.$controller.'View.php';
	
	class userController{
		private $user_mod,$user_view;
		function __construct($name_model,$array_data)
		{
			$modelname=$name_model.'Model';
			$viewname=$name_model.'View';
			$this->user_mod = new $modelname($array_data);
			$this->user_view = new $viewname();
		}
		function call_model($method_name){
			$this->user_mod->$method_name();
			$arr=$this->user_mod->show_data();
			$this->user_view->display($arr);
		}
	}
?>
