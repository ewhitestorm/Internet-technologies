<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="format.css" rel="stylesheet" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" 
		integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
		<title>Задание 8</title>
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
			<h2>Заявление on-line</h2>
			<p>PHP сценарий, который позволяет генерировать форму заявления.</p>
		</div>
		<div class="row-1">
			<a href="../index.html">Главная страница</a>
		</div>
			<div class="row-2">
				<form method = "POST" id="form">
					<div class="col-1-1">
						<td><label class="for">Форма для заполнения:</label></td>
						<br>
						<td><input name="fio" type="text" value="" size="50" class="form-control" placeholder="ФИО (в родительном падеже)"><br></td>
						<td><select name="group" class="form-control">
							<option value=""></option>
							<option value="MT-201">MT-201</option>
							<option value="MT-202">MT-202</option>
							<option value="МП-201">МП-201</option>
						</select><br></td>
						<td><textarea name="text" rows="10" cols="50" class="form-control" placeholder="Текст заявления"></textarea></td><br>
						<input type="submit" class="btn btn-primary" value="Создать заявление">
					</div>
				</form>
			</div>
			<div class="row-3">
				<table width="800">
				<?php
				if(isset($_POST["fio"]) and isset($_POST["group"]) and isset($_POST["text"])) {
					$fio = htmlentities($_POST["fio"]);
					$group = htmlentities($_POST["group"]);
					$text = htmlentities($_POST["text"]);
					$time = date("d-m-Y");
					$err = "Заполните поля формы!";
					$output ="
					<tr>
						<td>Ректору ЧелГУ<br>
							<i>Таскаеву Сергею Валерьевичу</i><br>
							от студента группы <i>$group</i><br>
							<i>$fio</i><br><br>
						</td>
					</tr>
					<tr>
						<td>
							<h3>ЗАЯВЛЕНИЕ</h3><br>
							<p>$text</p><br><br><br><br><br>
						</td>
					</tr>
					<tr>
						<td>$time<br><br><br><br>
							<i>Подпись: ______________</i><br><br><br><br>
						</td>
					</tr>";
					if(	$fio != "" and preg_match("/^[а-яА-ЯЁё]/", $fio) and 
						$group != "" and 
						$text != "" and preg_match("/^[а-яА-ЯЁё]/", $text)) echo $output;
					
					else echo '<span style="color: red">'.$err.'</span>';
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