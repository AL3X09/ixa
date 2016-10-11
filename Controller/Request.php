<?php

include '../Model/VehicleModel.php';
include '../Model/ClientModel.php';
include '../Model/RequestModel.php';
include '../Utils/Utils.php';

class Request {

    private $classUtils;
    private $classResquestModel;
    private $classVehicleModel;
    private $classClientModel;
    private $responseJson;
    private $responseModel;
    private $dataJson;
    private $messageJson;
    private $method;
    private $increase;
    // VARIABLES DEL FORMUALRIO
    private $licensePlate;
    private $identificationNumber;
    private $idTypeClient;
    private $idTypeService;
    private $turn;
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
    private $headquarters;
    private $requestedBy;
    private $insured;
    private $intermediary;
    private $fasecoldaCode;
    private $valueFasecolda;
    private $digitation;
    private $inspection;
    private $vta;
    private $tecnicalControl;
    private $status;
    private $idUser;
    private $idRequest;
    //
    private $route;
    private $file;
    private $typeFile;
    private $temporalRoute;
    private $size;
    private $dimensions;
    private $width;
    private $height;
    private $files;

    public function __construct() {

        session_start();
        $this->classClientModel = new ClientModel ();
        $this->classVehicleModel = new VehicleModel ();
        $this->classResquestModel = new RequestModel ();
        $this->classUtils = new Utils ();
        $this->method = $_POST ["method"];
        $this->increase = 0;
        switch ($this->method) {
            case 1 :
                $this->identificationNumber = $_POST ["identification_number"];
                $this->idTypeClient = $_POST ["type_client"];
                $this->idTypeService = $_POST ["type_service"];
                $this->licensePlate = $_POST ["license_plate"];
                $this->turn = 1; //$_POST ["turn"];
                $this->brand = $_POST ["brand"];
                $this->line = $_POST ["line"];
                $this->typeReference = $_POST ["type_refetence"];
                $this->cylinderCapacity = $_POST ["cylinder_capacity"];
                $this->service = $_POST ["service"];
                $this->bodywork = $_POST ["bodywork"];
                $this->gas = $_POST ["gas"];
                $this->capacity = $_POST ["capacity"];
                $this->model = $_POST ["model"];
                $this->color = $_POST ["color"];
                $this->motorNumber = $_POST ["motor_number"];
                $this->serieNumber = $_POST ["serie_number"];
                $this->chasisNumber = $_POST ["chasis_number"];
                $this->headquarters = $_POST ["headquarters"];
                $this->requestedBy = $_POST ["requested_by"];
                $this->insured = $_POST ["insured"];
                $this->intermediary = $_POST ["intermediary"];
                $this->fasecoldaCode = $_POST["fasecolda_code"];
                $this->valueFasecolda = $_POST["fasecolda_value"];
                $this->digitation = 1;
                $this->idUser = $_SESSION["id-user"];
                switch ($this->idTypeService) {
                    case 1 :
                        $this->inspection = 3;
                        $this->vta = 3;
                        $this->tecnicalControl = 3;
                        $this->status = 3;
                        break;
                    case 2 :
                        $this->inspection = 2;
                        $this->vta = 3;
                        $this->tecnicalControl = 3;
                        $this->status = 3;
                        break;
                    case 3 :
                        $this->inspection = 3;
                        $this->vta = 2;
                        $this->tecnicalControl = 3;
                        $this->status = 3;
                        break;

                    default :
                        break;
                }

                // var_dump($_POST);

                $this->insertRequest($this->classUtils->specialCharacters($this->identificationNumber), $this->classUtils->specialCharacters($this->idTypeClient), $this->classUtils->specialCharacters($this->idTypeService), $this->classUtils->specialCharacters($this->licensePlate), $this->classUtils->specialCharacters($this->turn), $this->classUtils->specialCharacters($this->brand), $this->classUtils->specialCharacters($this->line), $this->classUtils->specialCharacters($this->typeReference), $this->classUtils->specialCharacters($this->cylinderCapacity), $this->classUtils->specialCharacters($this->service), $this->classUtils->specialCharacters($this->bodywork), $this->classUtils->specialCharacters($this->gas), $this->classUtils->specialCharacters($this->capacity), $this->classUtils->specialCharacters($this->model), $this->classUtils->specialCharacters($this->color), $this->classUtils->specialCharacters($this->motorNumber), $this->classUtils->specialCharacters($this->serieNumber), $this->classUtils->specialCharacters($this->chasisNumber), $this->classUtils->specialCharacters($this->headquarters), $this->classUtils->specialCharacters($this->requestedBy), $this->classUtils->specialCharacters($this->insured), $this->classUtils->specialCharacters($this->intermediary), $this->classUtils->specialCharacters($this->fasecoldaCode), $this->classUtils->specialCharacters($this->valueFasecolda), $this->classUtils->specialCharacters($this->digitation), $this->classUtils->specialCharacters($this->inspection), $this->classUtils->specialCharacters($this->vta), $this->classUtils->specialCharacters($this->tecnicalControl), $this->classUtils->specialCharacters($this->status), $this->classUtils->specialCharacters($this->idUser));
                break;
            case 2 :
                $this->identificationNumber = $_POST ["identification_number"];
                $this->licensePlate = $_POST ["license_plate"];
                $this->route = Constants::ROUTE_FILES . $this->licensePlate . "/";
                // comprobamos que sea una petici�n ajax
                if (!empty($_SERVER ['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER ['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                    //var_dump ( $_FILES ["file"] );
                    if (isset($_FILES)) {
                        $this->classUtils->validateRoute($this->route);
                        $this->messageJson .= '"';

                        foreach ($_FILES as $archivos) {

                            if ($archivos ['error'] == UPLOAD_ERR_OK) {
                                $nombre = $archivos ["name"];
                                $temporal = $archivos ["tmp_name"];
                                // chmod("../../Files", 0755);
                                $destino = $this->route . basename($nombre);
                                $movida = move_uploaded_file($temporal, $destino);
                                $this->files .= $nombre . "#";
                            } else {
                                echo $archivos ["error"];
                            }
                        }
                        $this->messageJson .= '"';
                        $this->dataJson = 'null';
                        $this->responseJson = 'true';
                        $this->insertFiles($this->identificationNumber, $this->licensePlate, $this->route, $this->files);
                    } else {
                        $this->messageJson .= 'No hay archivos a enviar';
                        $this->dataJson = 'null';
                        $this->responseJson = 'false';
                    }
                    $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
                } else {
                    throw new Exception("Error Processing Request_prueba_file", 1);
                }

                break;

            case 3 :
                $this->selectAllRequest();
                break;
            case 4:
                $this->idRequest = $_POST["id_request"];
                $this->selectRequestInspectionById($this->idRequest);
                break;
            case 5 :
                $this->idRequest = $_POST["id_request"];
                $this->selectRequestInformation($this->idRequest);
                break;
            default :
                ;
                break;
        }
    }

    public function insertRequest($identificationNumber, $idTypeClient, $idTypeService, $licensePlate, $turn, $brand, $line, $typeReference, $cylinderCapacity, $service, $bodywork, $gas, $capacity, $model, $color, $motorNumber, $serieNumber, $chasisNumber, $headquarters, $requestedBy, $insured, $intermediary, $fasecoldaCode, $valueFasecolda, $digitation, $inspection, $vta, $tecnicalControl, $status, $idUser) {

        if ($this->classVehicleModel->insertVehicle($identificationNumber, $licensePlate, $brand, $line, $typeReference, $cylinderCapacity, $service, $bodywork, $gas, $capacity, $model, $color, $motorNumber, $serieNumber, $chasisNumber)) {
            $response = $this->classResquestModel->insertRequest($identificationNumber, $idTypeClient, $idTypeService, $licensePlate, $turn, $headquarters, $requestedBy, $insured, $intermediary, $fasecoldaCode, $valueFasecolda, $digitation, $inspection, $vta, $tecnicalControl, $status, $idUser);
            if ($response) {
                $this->dataJson = 'null';
                $this->responseJson = 'true';
                $this->messageJson = '"Solicitud Ingresada con Exito"';
            } else {
                $this->dataJson = 'null';
                $this->responseJson = 'false';
                $this->messageJson = '"' . Constants::MSS_QUERY_NO_EXECUTED . '"';
            }
        } else {
            $this->dataJson = 'null';
            $this->responseJson = 'false';
            $this->messageJson = '"' . Constants::MSS_QUERY_NO_EXECUTED . '"';
        }
        $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
    }

    public function insertFiles($identificationNumber, $licensePlate, $route, $files) {
        if ($this->classResquestModel->insertFiles($identificationNumber, $licensePlate, $route, $files)) {
            return true;
        } else {
            return false;
        }
    }

    public function selectAllRequest() {
        $this->responseModel = $this->classResquestModel->selectRequest();
        if (is_array($this->responseModel) && !empty($this->responseModel) && !is_string($this->responseModel)) {
            $this->dataJson .= '{';
            foreach ($this->responseModel as $row => $data) {
                $this->dataJson .= '"' . $data [0] . '":{"id":"' . $data [0] . '","license_plate":"' . $data [1] . '","digitation":"' . $data [2] . '","inspection":"' . $data [3] . '","vta":"' . $data [4] . '","tecnical_control":"' . $data [5] . '","status":"' . $data [6] . '"}';
                $this->increase ++;
                $this->dataJson .= $this->classUtils->printComma($this->increase, $this->responseModel);
            }
            $this->dataJson .= '},"session":"' . $_SESSION["id-rol-user"] . '"';
            $this->responseJson .= 'true';
            $this->messageJson .= '"Consulta realizada con exito."';
        } else {
            $this->dataJson .= 'null';
            $this->responseJson .= 'false';
            $this->messageJson .= '"No hay solicitudes radicadas."';
        }
        $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
    }

    public function selectRequestInspectionById($id) {
        $this->responseModel = $this->classResquestModel->selectRequestInspectionById($id);
        if (is_array($this->responseModel) && !empty($this->responseModel) && !is_string($this->responseModel)) {
            $this->dataJson .= '{';
            foreach ($this->responseModel as $row => $data) {
                $this->dataJson .= '"' . $id . '":{"fasecolda_code":"' . $data [0] . '","fasecolda_value":"' . $data [1] . '","license_plate":"' . $data [2] . '","brand":"' . $data [3] . '","line":"' . $data [4] . '","type_reference":"' . $data [5] . '","cylinder_capacity":"' . $data [6] . '","service":"' . $data [7] . '","bodywork":"' . $data [8] . '","gas":"' . $data [9] . '","capacity":"' . $data [10] . '","model":"' . $data [11] . '"}';
                $this->increase ++;
                $this->dataJson .= $this->classUtils->printComma($this->increase, $this->responseModel);
            }
            $this->dataJson .= '},"session":"' . $_SESSION["id-rol-user"] . '"';
            $this->responseJson .= 'true';
            $this->messageJson .= '"Consulta realizada con exito."';
        } else {
            $this->dataJson .= 'null';
            $this->responseJson .= 'false';
            $this->messageJson .= '"No hay solicitudes radicadas."';
        }
        $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
    }

    public function selectRequestInformation($idRequest) {
        $this->responseModel = $this->classResquestModel->selectRequestInformation($idRequest);

        if (is_array($this->responseModel) && !empty($this->responseModel) && !is_null($this->responseModel)) {
            $this->dataJson .= json_encode($this->responseModel, true);
            $this->responseJson .= 'true';
            $this->messageJson .= '"Datos ingresados con exito"';
        }else{
            $this->dataJson .= json_encode($this->responseModel, true);
            $this->responseJson .= 'false';
            $this->messageJson .= '"No tiene informacion asociada al vehiculo"';
        }
        $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
    }

}

new Request ();
?>