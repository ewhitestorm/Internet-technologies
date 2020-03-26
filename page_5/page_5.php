<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<link href="format.css" rel="stylesheet" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" 
		integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
		<title>Задание 5</title>
	</head>
	
	
	
	<body>
		<!--Заголовок-->
		<div class="header-content">
			<div class="page-header">
				<h1>Добро пожаловать!</h1>
			</div>
		</div>
		<!--Название-->
		<div class="header-content">
			<h2>Калькулятор</h2>
			<h2>PHP</h2>
			<p>Вывести на экран таблицу умножения заданного размера. </p>
		</div>
		<div class="row">
			<a href="../index.html">Главная страница</a>
		</div>
		<div class="container">
			<form method = "GET" id="form">
				<div class="row">
					<div class="col-1-1">
						<label class="for">Размер таблицы:</label>
						<br />
						<input name="name-x" class="form-control" placeholder="X:"><br />
						<input name="name-y" class="form-control" placeholder="Y:"><br />
					</div>
					<div class="col-1-2">
					</div>
					<div class="btn-group">
						<button class="btn btn-primary" type="submit" id="submit">Отправить</button>
						<button class="btn btn-primary" type="reset">Очистить</button>
					</div>
				</div>
			</form>
		</div>
		<div class="container">
			<table onclick="table__alert(event)" border="2" cellpadding="10">
						<?php
				if(isset($_GET['name-x']) and isset($_GET['name-y'])) {
					$col = $_GET['name-x'];
					$row= $_GET['name-y'];
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
				}
			?>
			</table>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" 
		integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" 
		integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" 
		integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
	</body>
	
	
</html>