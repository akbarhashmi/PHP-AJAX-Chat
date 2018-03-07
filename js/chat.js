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

chat.entry = $('.chat.entry'); //selector for entry text area
//bind key down event handler
chat.entry = ('keydown', function(e) {
	if(e.keyCode === 13 && e.shiftKey === false){

		e.preventDefault();
	}
});

chat.fetchMessage(); //fetch currently stored messages
chat.interval = setInterval(chat.fetchMessage, 25000); // fetch new messages