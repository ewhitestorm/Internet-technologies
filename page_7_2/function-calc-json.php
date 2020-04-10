<?php
	$col = $_GET["namex"];
	$row = $_GET["namey"];
	$data = array();
	for ($i = 0; $i < $col; $i++)
	{
		$data[$i] = array();
		for($j = 0; $j < $row; $j++)
			$data[$i][$j] = ($i+1)*($j+1); 
	}
	echo json_encode($data);
?>