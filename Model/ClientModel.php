<?php
include_once '../Model/Connection/Connection.php';
class ClientModel {
	private $classConnection;
	private $objectPdo;
	private $statement;
	public function __construct() {
		$this->classConnection = new Connection ();
		$this->objectPdo = $this->classConnection->connect ();
	}
	public function insertClient($name, $lastname, $idDocumentType, $identificationNumber, $idExpeditionCity, $phone, $extention, $cellphone, $address) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_CLIENT );
			$this->statement->bindParam ( ":name", $name, PDO::PARAM_STR );
			$this->statement->bindParam ( ":lastname", $lastname, PDO::PARAM_STR );
			$this->statement->bindParam ( ":id_document_type", $idDocumentType, PDO::PARAM_STR );
			$this->statement->bindParam ( ":identification_number", $identificationNumber, PDO::PARAM_STR );
			$this->statement->bindParam ( ":id_expedition_city", $idExpeditionCity, PDO::PARAM_STR );
			$this->statement->bindParam ( ":phone", $phone, PDO::PARAM_STR );
			$this->statement->bindParam ( ":extention", $extention, PDO::PARAM_STR );
			$this->statement->bindParam ( ":cellphone", $cellphone, PDO::PARAM_STR );
			$this->statement->bindParam ( ":address", $address, PDO::PARAM_STR );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function getClientByIdentificationNumber($identificationNumber) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_CLIENT_BY_IDENTIFICATION_NUMBER );
			$this->statement->bindParam ( ":identification_number", $identificationNumber, pdo::PARAM_STR );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "SettingModel Client" );
		}
	}
}