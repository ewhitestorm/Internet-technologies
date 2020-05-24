$('#submit').click(function(elem){
	Send();
	elem.preventDefault();
	var val = $('#message').val();
	if(val.length >= 1){
		$('#message').val('');
	}
});

function Send(){
	$.ajax({ 
        type: 'post',
        url: 'ajax.php',
        data: $('#form').serialize(),
        success: function(response) {
			$('#chat').html(response);
        }
	});
}

