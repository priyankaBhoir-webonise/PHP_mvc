<?php
	class userView{
	function __construct(){
		echo 'User Data';	
	}
	public function display($arr){
		foreach($arr as $row){
			echo 'Record : <br>';
			foreach($row as $key=>$value){
				echo "$key : $value<br>";
			}
		}
	}
	}
?>
