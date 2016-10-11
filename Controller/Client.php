<?php
include '../Model/ClientModel.php';
include '../Utils/Utils.php';
class Client {
	private $classClientModel;
	private $method;
	private $responseModel;
	private $increase;
	
	// Respuesta al js
	private $json;
	private $responseJson;
	private $dataJson;
	private $messageJson;
	private $classUtils;
	
	// Parametros desde la vista
	private $name;
	private $lastname;
	private $idDocumentType;
	private $identificationNumber;
	private $idExpeditionCity;
	private $phone;
	private $extention;
	private $cellphone;
	private $address;
	public function __construct() {
		$this->classClientModel = new ClientModel ();
		$this->method = $_POST ["method"];
		$this->classUtils = new Utils ();
		$this->increase = 0;
		
		switch ($this->method) {
			case 1 :
				$this->identificationNumber = $_POST ["identification_number"];
				$this->getClientByIdentificationNumber ( $this->identificationNumber );
				break;
			case 2 :
				$this->name = $_POST ["name"];
				$this->lastname = $_POST ["lastname"];
				$this->idDocumentType = $_POST ["document_type"];
				$this->idExpeditionCity = $_POST ["expedition_document"];
				$this->identificationNumber = $_POST ["identification_number"];
				$this->phone = $_POST ["phone"];
				$this->extention = $_POST ["extention"];
				$this->cellphone=$_POST["cellphone"];
				$this->address = $_POST ["address"];
				$this->insertClient (  $this->classUtils->specialCharacters($this->name),  $this->classUtils->specialCharacters($this->lastname), $this->classUtils->specialCharacters( $this->idDocumentType),  $this->classUtils->specialCharacters($this->identificationNumber),  $this->classUtils->specialCharacters($this->idExpeditionCity),  $this->classUtils->specialCharacters($this->phone),  $this->classUtils->specialCharacters($this->extention),  $this->classUtils->specialCharacters($this->cellphone),  $this->classUtils->specialCharacters($this->address) );
				break;
			default :
				;
				break;
		}
	}
	public function getClientByIdentificationNumber($identificationNumber) {
		$this->responseModel = $this->classClientModel->getClientByIdentificationNumber ( $identificationNumber );
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","name":"' . $data [1] . '","lastname":"' . $data [2] . '","id_document_type":"' . $data [3] . '","identification_number":"' . $data [4] . '","id_expedition_city":"' . $data [5] . '","phone":"' . $data [6] . '","extencion":"' . $data [7] . '","cellphone":"' . $data [8] . '","address":"' . $data [9] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No existe un usuario registrado"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function insertClient($name, $lastname, $idDocumentType, $identificationNumber, $idExpeditionCity, $phone, $extention, $cellphone, $address) {
		$this->responseModel = $this->classClientModel->insertClient ( $name, $lastname, $idDocumentType, $identificationNumber, $idExpeditionCity, $phone, $extention, $cellphone, $address );
		if ($this->responseModel) {
			$this->dataJson .= 'null';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Cliente Ingresado con exito"';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No existe un usuario registrado"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
}
new Client ();
?>