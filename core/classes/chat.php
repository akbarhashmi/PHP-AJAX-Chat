<?php
require 'Core.php';
class Chat extends Core{

	public function fetchMessages(){

		$this->query("
				SELECT   `chat`.`message`,
					     `users`.`username`,
					     `users`.`user_id`
				FROM     `chat`
				JOIN     `users`
				ON	     `chat`.`user_id` = `users`.`user_id`
				ORDER BY `chat`.`timestamp`
				DESC

			");
		return $this->rows();
	}

	public function throwMessages($user_id, $message){ //insert into db

	}
}