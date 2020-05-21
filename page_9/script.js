$('#submit').click(function(elem){
	$.ajax({ 
        type: 'post',
        url: 'ajax.php',
        data: $('#form').serialize(),
        success: function(response) {
			$('#chat').html(response);
        }
	});
	
	elem.preventDefault();
	var val = $('#message').val();
	if(val.length >= 1){
		$('#message').val('');
	}
});

setInterval("Send();", 20000);
function Send(){
	$.ajax({ 
        type: 'post',
        url: 'ajax.php',
        success: function(response) {
			$('#chat').html(response);
        }
	});
}