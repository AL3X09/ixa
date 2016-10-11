<?php

include '../Model/Connection/Connection.php';

class UserModel{
	
	private $classConnection;
	private $objectPdo;
	private $statement;
	
	public function __construct() {
		$this->classConnection = new Connection();
		$this->objectPdo = $this->classConnection->connect();
	}
	
	public function selectUserByNameuser($nameUser){
		try {
			$this->statement = $this->objectPdo->prepare(Constants::SP_SELECT_USER);
			$this->statement->bindParam(":name_user", $nameUser);
			$this->classConnection->disconnect();
			if (!$this->statement->execute()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			}else{
				return $this->statement->fetchAll();
			}
		}catch (PDOException $e){
			die(Constants::ERR_NO_ACTION."userModel");
		}
	}
}

?>