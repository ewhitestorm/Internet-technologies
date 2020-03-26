<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="format.css" rel="stylesheet" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" 
		integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
		<title>Задание 6</title>
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
			<h2>Ajax</h2>
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
						<input name="namex" type="text" class="form-control" placeholder="X:"><br />
						<input name="namey" type="text" class="form-control" placeholder="Y:"><br />
					</div>
					<div class="col-1-2">
					</div>
					<div class="btn-group">
						<button class="btn btn-primary" type="submit">Отправить</button>
						<button class="btn btn-primary" type="reset">Очистить</button>
					</div>
				</div>
			</form>
		</div>
		<div class="container">
			<div class="row">
				<div class="table" id="calc"></div>
			</div>
		</div>
		<script> 
			let form = document.getElementById('form');
			form.addEventListener('submit', function(event) {
			let namex = this.querySelector('[name="namex"]').value;
			let namey = this.querySelector('[name="namey"]').value;
			let calc = document.getElementById("calc");
			let promise = fetch('function-calc-ajax.php/?namex=' + namex + '&namey=' + namey);
			promise.then(
				response => {
					return response.text();
				}
			).then(
				text => {
					calc.innerHTML = text
				}
			);
			event.preventDefault();
			});
		</script>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" 
		integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" 
		integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" 
		integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
	</body>
</html>