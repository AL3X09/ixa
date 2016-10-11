<?php
include_once '../Model/Connection/Connection.php';
class FasecoldaFileModel{
	
	private $classConnection;
	private $objectPdo;
	private $statement;
	
	public function __construct() {
		$this->classConnection = new Connection ();
		$this->objectPdo = $this->classConnection->connect ();
	}
	
	public function getFasecoldaFile(){
		try {
			$this-> statement = $this->objectPdo->prepare(Constants::SP_SELECT_LAST_FASECOLDA_FILE);
			if (! $this->statement->execute()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			}else{
				return $this->statement->fetchAll();
			}
		} catch (PDOException $e) {
			die ( Constants::ERR_NO_ACTION . "SettingModel FasecoldaFile" );
		}
	}
}
?>