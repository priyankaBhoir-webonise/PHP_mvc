
<?php
	// URL : http://pols7.weboniselab.com/assignment_7/?controller=user&method=insert_new&username=abc&password=qqqqq&address=mumbai

	$keys=array();
	$values=array();
	if(array_key_exists('controller',$_GET) and count($_GET)==5){
		$controller=$_GET['controller'];
		
		require_once 'controller/'.$controller.'Controller.php';

		if(array_key_exists('method',$_GET)){
			$method=$_GET['method'];
			foreach($_GET as $key=>$value){
				if($key !== 'controller' and $key !== 'method'){
						array_push($keys,$key);
						array_push($values,$value);			
				}
			}
			
			$input_array=array_combine($keys,$values);
			$control=$controller.'Controller';
			$obj=new $control($controller,$input_array);
			$obj->call_model($method);
			
		}
		else
			echo 'please mention method name';
	}
	else{
		if(count($_GET)!=5)
			echo 'URL is wrong <br> Sample URL: http://pols7.weboniselab.com/assignment_7/?controller=user&method=insert_new&username=abc&password=qqqqq&address=mumbai';
		else
			echo 'please mention controller name';
	}
?>
