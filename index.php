<?php
session_start();


$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

require './core/classes/chat.php';
//echo $_SESSION['user'] ;	
$chat= new Chat();
print_r($chat->fetchMessage());


?>


<!DOCTYPE html>
<html>
<head>
	<title>
		AJAX Chat
	</title>
	<link rel="stylesheet" type = "text/css" href="./css/styles.css">
</head>
<body>
    
	<div class="chat"> 
		<div class="messages">
            <div class="message">
                <a href="#">Akbar</a> says:
                <p>The message will display here</p>
            </div>
        </div>
		<textarea class="entry" placeholder="Type here"></textarea>
	</div>
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/chat.js" ></script>
</body>
</html>