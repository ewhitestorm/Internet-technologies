<?php
require_once 'myhosts.php';

$link = mysqli_connect($hostname, $username, $password, $dbname) 
		or die("Ошибка " . mysqli_error($link)); 
mysqli_query($link, "SET NAMES 'utf8'");

if(isset($_POST['name']) && isset($_POST['message'])){
    $nam = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $messa = htmlentities(mysqli_real_escape_string($link, $_POST['message']));
	
	$name = substr(strip_tags($nam), 0, 20);
	$message = substr(strip_tags($messa), 0, 200);
			
    $query ="INSERT INTO messages VALUES(NULL, '$name','$message')";
    $res = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
}
$query ="SELECT * FROM messages";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

while($data = mysqli_fetch_assoc($result))
	echo '<b>' . '<span style="color:green;">' . $data['name'] . '</span>' . '</b> ' . ': ' . $data['text'] . '<br />';
mysqli_close($link);
?>