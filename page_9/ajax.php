<?php
	if(isset($_POST['username']) && isset($_POST['message'])){
		$uname = strip_tags($_POST['username']);
		$mes = strip_tags($_POST['message']);
			
		$username = substr($uname, 0, 20);
		$message = substr($mes, 0, 200);
	
		if(empty($message) or empty($username)){
			Exxit();
		}
		else if(isset($message) and isset($username)){
			$usname = ('<b>' . $username . '</b> ');
			$str = fopen('data.csv', 'a');
			fwrite($str, date("d-m-Y h:i:s") . ' ' . $usname . ': ' . trim(htmlentities($message)) . PHP_EOL);
			fclose($str);
		}
	}
	$str = fopen('data.csv', 'r');
	while (!feof($str)){
		echo fgets($str) . "<br />";
	}
		
	fclose($str);
			
	function Exxit(){
		echo "Данные введены некорректно!" . "<br />";
	}
?>