"use strict";
let form = document.getElementById('form');
let button = document.getElementById('button');
let submit = document.getElementById('submit');
button.addEventListener('click', () => form.reset());

/*function multi(){
alert(document.getElementById('name-x').value*document.getElementById('name-y').value);
}*/

function buildTable() {
    let htm = '';
    for (let i=1; i<=(document.getElementById('name-x').value); i++) {
		htm += '<tr>';
        for(let j=1; j<=(document.getElementById('name-y').value); j++) {
			htm += '<td>'+ (i*j) + ' </td>'; 
        }
        htm += '</tr>';
    }
    document.getElementById('myTable').innerHTML = htm;
}
submit.addEventListener('click', () => buildTable());


 
