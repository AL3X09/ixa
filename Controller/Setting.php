<?php
include '../Model/SettingModel.php';
include '../Utils/Utils.php';
class Setting {
	private $method;
	private $responseModel;
	private $classSettingModel;
	private $increase;
	
	// Respuesta al js
	private $json;
	private $responseJson;
	private $dataJson;
	private $messageJson;
	private $classUtils;
	private $brand;
	private $line;
	private $typeReference;
	private $cylinderCapacity;
	private $bodywork;
	private $model;
	private $typeVehicle;
	public function __construct() {
		$this->classSettingModel = new SettingModel ();
		$this->classUtils = new Utils ();
		$this->method = $_POST ["method"];
		$this->increase = 0;
		
		switch ($this->method) {
			case 1 :
				$this->getAllDocumentType ();
				break;
			case 2 :
				$this->getAllCity ();
				break;
			case 3 :
				$this->getAllTypeClient ();
				break;
			case 4 :
				$this->getAllTypeService ();
				break;
			case 5 :
				$this->getBrandFromFasecolda ();
				break;
			case 6 :
				$this->brand = $_POST ["brand"];
				$this->getLineByBrand ( $this->brand );
				break;
			
			case 7 :
				$this->brand = $_POST ["brand"];
				$this->line = $_POST ["line"];
				$this->getTypeReference ( $this->brand, $this->line );
				break;
			
			case 8 :
				$this->brand = $_POST ["brand"];
				$this->line = $_POST ["line"];
				$this->typeReference = $_POST ["type_reference"];
				$this->getCylinderCapacity ( $this->brand, $this->line, $this->typeReference );
				break;
			case 9 :
				$this->getAllGas ();
				break;
			case 10 :
				$this->getAllService ();
				break;
			case 11 :
				$this->brand = $_POST ["brand"];
				$this->line = $_POST ["line"];
				$this->typeReference = $_POST ["type_reference"];
				$this->cylinderCapacity = $_POST ["cylinder_capacity"];
				$this->getBodywork ( $this->brand, $this->line, $this->typeReference, $this->cylinderCapacity );
				break;
			case 12 :
				$this->getModel ();
				break;
			case 13 :
				$this->brand = $_POST ["brand"];
				$this->line = $_POST ["line"];
				$this->typeReference = $_POST ["type_reference"];
				$this->cylinderCapacity = $_POST ["cylinder_capacity"];
				$this->bodywork = $_POST ["bodywork"];
				$this->model = $_POST ["model"];
				$this->getValueCodeFasecolda ( $this->brand, $this->line, $this->typeReference, $this->cylinderCapacity, $this->bodywork, $this->model );
				break;
			case 14 :
				$this->getAllItemInspection ();
				break;
			case 15 :
				$this->getAllBodyworkStatus ();
				break;
			case 16 :
				$this->getAllElectricTeamStatus ();
				break;
			case 17 :
				$this->getAllTypeVehicle ();
				break;
			case 18 :
				$this->typeVehicle = $_POST ["type_vehicle"];
				$this->getItemByVehicle ( $this->typeVehicle );
				break;
			case 19 :
				$this->getStructureStatus ();
				break;
			case 20 :
				$this->getLeakageStatus ();
				break;
			case 21 :
				$this->getLigthsStatus ();
				break;
			case 22 :
				$this->getInteriorStatus ();
				break;
			case 23 :
				$this->getRimsStatus ();
				break;
			case 24 :
				$this->getFluidLevelStatus ();
				break;
			case 25: 
				$this->getGlassesStatus();
				break;
			case 26:
				$this->getPaintStatus();
				break;
			case 27:
				$this->getTypePaintStatus();
				break;
		}
	}
	public function getAllDocumentType() {
		try {
			$this->responseModel = $this->classSettingModel->getAllDocumentType ();
			if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
				$this->dataJson .= '{';
				foreach ( $this->responseModel as $row => $data ) {
					$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","document_type":"' . $data [1] . '"}';
					$this->increase ++;
					$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
				}
				$this->dataJson .= '}';
				$this->responseJson .= 'true';
				$this->messageJson .= '"Consulta realizada con exito."';
			} else {
				$this->dataJson .= 'null';
				$this->responseJson .= 'false';
				$this->messageJson .= '"Consulta realizada con exito."';
			}
			$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
		} catch ( Exception $e ) {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"error"';
			$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
		}
	}
	public function getAllCity() {
		$this->responseModel = $this->classSettingModel->getAllCity ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","city":"' . $data [2] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllTypeClient() {
		$this->responseModel = $this->classSettingModel->getAllTypeClient ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","type_client":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'flase';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllTypeService() {
		$this->responseModel = $this->classSettingModel->getAllTypeService ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","type_service":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getBrandFromFasecolda() {
		$this->responseModel = $this->classSettingModel->getBrandFromFasecolda ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","brand":"' . $data [0] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getLineByBrand($brand) {
		$this->responseModel = $this->classSettingModel->getLineByBrand ( $brand );
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","line":"' . $data [0] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getTypeReference($brand, $line) {
		$this->responseModel = $this->classSettingModel->getTypeReference ( $brand, $line );
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","type_reference":"' . $data [0] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getCylinderCapacity($brand, $line, $typeReference) {
		$this->responseModel = $this->classSettingModel->getCylinderCapacity ( $brand, $line, $typeReference );
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","cylinder_capacity":"' . $data [0] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getBodywork($brand, $line, $typeReference, $cylinderCapacity) {
		$this->responseModel = $this->classSettingModel->getBodywork ( $brand, $line, $typeReference, $cylinderCapacity );
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","bodywork":"' . $data [0] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllGas() {
		$this->responseModel = $this->classSettingModel->getAllGas ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","gas":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllService() {
		$this->responseModel = $this->classSettingModel->getAllService ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","service":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getModel() {
		$this->responseModel = $this->classSettingModel->getStructureFasecolda ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				if (is_numeric ( $data [0] )) {
					$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","model":"' . $data [0] . '"}';
					$this->increase ++;
					$this->dataJson .= $this->classUtils->printCommaSize ( $this->increase, (sizeof ( $this->responseModel ) - 28) );
				}
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getValueCodeFasecolda($brand, $line, $typeReference, $cylinderCapacity, $class, $model) {
		$this->responseModel = $this->classSettingModel->getValueCodeFasecolda ( $brand, $line, $typeReference, $cylinderCapacity, $class, $model );
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"code":"' . $data [0] . '","value":"' . $data [$model] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllItemInspection() {
		$this->responseModel = $this->classSettingModel->getItemInspection ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","item":"' . $data [1] . '","route":"' . $data [2] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllBodyworkStatus() {
		$this->responseModel = $this->classSettingModel->getAllBodyworkStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllElectricTeamStatus() {
		$this->responseModel = $this->classSettingModel->getAllElectricTeamStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	public function getAllTypeVehicle() {
		$this->responseModel = $this->classSettingModel->getAllTypeVehicle ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","vehicle":"' . $data [1] . '","prefix":"' . $data [2] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getItemByVehicle($vehicle) {
		switch ($vehicle) {
			case 1 :
				$this->responseModel = $this->classSettingModel->getInspectionLightweight ();
				break;
			case 2 :
				$this->responseModel = $this->classSettingModel->getInspectionHeavy ();
				break;
			case 3 :
				$this->responseModel = $this->classSettingModel->getInspectionMotorcycle ();
				break;
		}
		
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","item":"' . $data [1] . '","route":"' . $data [2] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getStructureStatus() {
		$this->responseModel = $this->classSettingModel->getStructureStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getLeakageStatus() {
		$this->responseModel = $this->classSettingModel->getLeakageStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getLigthsStatus() {
		$this->responseModel = $this->classSettingModel->getLigthsStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getInteriorStatus() {
		$this->responseModel = $this->classSettingModel->getInteriorStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getRimsStatus() {
		$this->responseModel = $this->classSettingModel->getRimsStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getFluidLevelStatus() {
		$this->responseModel = $this->classSettingModel->getFluidLevelsStatus ();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getGlassesStatus() {
		$this->responseModel = $this->classSettingModel->getGlassesStatus();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getPaintStatus() {
		$this->responseModel = $this->classSettingModel->getPaintStatus();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
	private function getTypePaintStatus() {
		$this->responseModel = $this->classSettingModel->getTypePaintStatus();
		if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
			$this->dataJson .= '{';
			foreach ( $this->responseModel as $row => $data ) {
				$this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","status":"' . $data [1] . '"}';
				$this->increase ++;
				$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
			}
			$this->dataJson .= '}';
			$this->responseJson .= 'true';
			$this->messageJson .= '"Consulta realizada con exito."';
		} else {
			$this->dataJson .= 'null';
			$this->responseJson .= 'false';
			$this->messageJson .= '"No hay registros"';
		}
		$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
	}
}

new Setting ();
?>
