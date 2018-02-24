<?php
require 'Core.php';
class Chat extends Core{

	public function fetchMessage(){

		$this->query("
				SELECT   `chat`.`message`,
					     `users`.`username`,
					     `users`.`user_id`
				FROM     `chat`
				JOIN     `users`
				ON	     `chat`.`user_id`=`user`.`user_id`
				ORDER BY `chat`.`timespamp`
				DESC

			");
		return $this->rows();
	}

	public function throwMessage($user_id, $message){ //insert into db

	}
}