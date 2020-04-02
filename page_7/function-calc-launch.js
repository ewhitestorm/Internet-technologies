"use strict";
var form = document.getElementById('form');
form.addEventListener('submit', function(event) {
	var namex = this.querySelector('[name="namex"]').value;
	var namey = this.querySelector('[name="namey"]').value;
	var promise = fetch("function-calc-ajax.php/?namex=" + namex + "&namey=" + namey);
	promise.then(
		function(response) {
			var TEXT_promise = response.text();
			return TEXT_promise;
		}
	).then(
		function(text) {
			console.log("OK TEXT");
			calc.innerHTML = text;
			//array to string
			var myJSON = JSON.stringify(text);
			console.log("OK JSON");
			console.log(myJSON);
			//string to array
			console.log(JSON.parse(myJSON));
		}
	);
	event.preventDefault();
});

