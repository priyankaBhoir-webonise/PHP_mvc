<?php
	function __autoload($class_name) {
  		include 'model/'$class_name . 'Model.php';
	}
	
	class userController{
		private $user_mod;
		function __construct($name_model)
		{
			$user_mod = new $name_model.'Model';
		}
	}
?>
