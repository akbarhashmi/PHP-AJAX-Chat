var chat = {} //global object

chat.fetchMessage = function () {

	//AJAX request to chat.php file, which will return the data

	//jquery ajax method
	$.ajax({

		url: 'AJAX/chat.php',
		type: 'post',
		data: {method: 'fetch'},  //Variables which we send to the page
		success: function(data){ //callback if successfull 
			$('.chat .messages').html(data);
		}
	});
}

chat.interval = setInterval(chat.fetchMessage, 5000);