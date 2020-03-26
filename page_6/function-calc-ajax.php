<table border="2">
<?php
	$col = $_GET['namex'];
	$row = $_GET['namey'];
	for ($i = 1; $i <= $col; $i++) {
		echo '<tr>';
		if($i == '1') {
			$b = '<b>';
			$end_b = '</b>';
		}
		for($j = 1; $j <= $row; $j++) {
			if(($i != '1') && ($j == '1')) {
				$b = '<b>';
				$end_b = '</b>';
			}
			echo "<td>" . $b . $i * $j . $end_b . "</td>\n";
			if($i != 1 && $j == 1) {
				$b = '';
				$end_b = '';
			}
		}
	$b = '';
	$end_b = '';
	echo "</tr>\n";
	}
?>
</table>