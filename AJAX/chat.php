<?php

echo'Hello';

require '../core/init.php';

if(isset($_POST['method']) === true && empty($_POST['method']) === false) {

	$chat = new chat();
	$method = trim($_POST['method']);

	if($method === 'fetch'){
		//fetch messsages and output if true
		$messages = $chat-> fetchMessages();
		if(empty($messages) === true)
			echo 'Chat is currently empty';
		else{
			foreach($messages as $message){
				?>
					<div class="message">
						<a href="#"><?php echo $message['username']; ?></a> says:
						<p><?php echo $message['message']; ?></p>
					</div>

				<?php
			}
		}
	}
	else if($method === 'throw'){
		//throw message into DB
	}


}
?>