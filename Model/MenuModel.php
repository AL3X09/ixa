<?php
include '../Model/Connection/Connection.php';
class MenuModel {
	private $objectPdo;
	private $classConnection;
	private $statement;
	public function __construct() {
		$this->classConnection = new Connection ();
		$this->objectPdo = $this->classConnection->connect ();
	}
	public function getMenu($rolUser) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_MENU_BY_ROL );
			$this->statement->bindParam ( ":rol", $rolUser, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "menuModel" );
		}
	}
}