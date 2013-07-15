<?php
	require_once 'db_operations.php';
	class userModel{
		private $username,$password,$address,$table;
		private $values;
		function __construct($array_data){
				$this->username=$array_data['username'];
				$this->password=$array_data['password'];
				$this->address=$array_data['address'];
				$this->table='users';	
				$this->values=$array_data;
		}
		function insert_new(){
			$new_db=DButil::get_instance();
			$new_db->insertData($this->table,$this->values);			
		}
		function show_data(){
			$new_db=DButil::get_instance();
			$arr=$new_db->fetch_all($this->table);
			return $arr;
		}
	}
?>
