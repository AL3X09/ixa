<?php
include '../Model/VehicleModel.php';
include '../Utils/Utils.php';
class Vehicle {
	private $classVehicleModel;
	private $method;
	private $responseModel;
	private $increase;
	
	// Respuesta al js
	private $json;
	private $responseJson;
	private $dataJson;
	private $messageJson;
	private $classUtils;
	
	// Datos del formulario
	private $identification_number;
	private $licensePlate;
	private $brand;
	private $line;
	private $typeReference;
	private $cylinderCapacity;
	private $service;
	private $bodywork;
	private $gas;
	private $capacity;
	private $model;
	private $color;
	private $motorNumber;
	private $serieNumber;
	private $chasisNumber;
	public function __construct() {
		$this->classVehicleModel = new VehicleModel ();
		$this->method = $_POST ["method"];
		$this->classUtils = new Utils ();
		$this->increase = 0;
		switch ($this->method) {
			case 1 :
				$this->identification_number = $_POST[""];
				$this->licensePlate = $_POST[""];
				$this->brand = $_POST[""];
				$this->line = $_POST[""];
				$this->typeReference = $_POST[""];
				$this->cylinderCapacity = $_POST[""];
				$this->service = $_POST[""];
				$this->bodywork = $_POST[""];
				$this->gas = $_POST[""];
				$this->capacity = $_POST[""];
				$this->model = $_POST[""];
				$this->color = $_POST[""];
				$this->motorNumber = $_POST[""];
				$this->serieNumber = $_POST[""];
				$this->chasisNumber = $_POST[""];
				$this->insertVehicle ( $this->identificationNumber, $this->licensePlate, $this->brand, $this->line, $this->typeReference, $this->cylinderCapacity, $this->service, $this->bodywork, $this->gas, $this->capacity, $this->model, $this->color, $this->motorNumber, $this->serieNumber, $this->chasisNumber );
				break;
			
			default :
				
				break;
		}
	}
	public function insertVehicle($identificationNumber, $licensePlate, $brand, $line, $typeReference, $cylinderCapacity, $service, $bodywork, $gas, $capacity, $model, $color, $motorNumber, $serieNumber, $chasisNumber) {
		$this->responseModel = $this->classVehicleModel->insertVehicle ( $identificationNumber, $licensePlate, $brand, $line, $typeReference, $cylinderCapacity, $service, $bodywork, $gas, $capacity, $model, $color, $motorNumber, $serieNumber, $chasisNumber );
		if ($this->responseModel) {
			$this->dataJson .= 'null';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Vehiculo Ingresado con exito"';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No se pudo ingresar el Vehiculo"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
}
new Vehicle ();
?>