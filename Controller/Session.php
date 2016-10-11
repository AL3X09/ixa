<?php
class Session{
	
	private $response;
	
	public function __construct() {
		session_start();
		if (!isset($_SESSION["id-user"])) {
			$this->response = '{"response":false}';
			
		}else {
			$this->response = '{"response":true}';
		}
		echo $this->response;
	}
}
new Session();
?>