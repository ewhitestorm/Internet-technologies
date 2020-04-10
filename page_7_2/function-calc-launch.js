"use strict";
var form = document.getElementById('form');
form.addEventListener('submit', function(event) {
	var namex = this.querySelector('[name="namex"]').value;
	var namey = this.querySelector('[name="namey"]').value;
	var promise = fetch("function-calc-json.php/?namex=" + namex + "&namey=" + namey);
	promise.then(
		response => {
			return response.text();
		}		
	).then(
		data => {
			var mult = JSON.parse(data);
			console.log(JSON.parse(data));
			/*calc.innerHTML = mult[0][0];*/
			let table = document.createElement('table');
			for (let i=0; i<mult.length; i++)
			{
				let tr = document.createElement('tr'); 
				for(let j=0; j<mult[i].length; j++)
				{
					let td = document.createElement('td');
					td.innerHTML = mult[i][j];
					tr.appendChild(td);
				}
				table.appendChild(tr);
				console.log("OK!!!!!");
			}
			calc.appendChild(table);
		});
	event.preventDefault();
});



