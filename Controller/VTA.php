<?php

include "../Utils/Utils.php";
include '../Model/VTAModel.php';
include "../Model/RequestModel.php";

/**
 * Description of VTA
 *
 * @author bryan
 */
class VTA {

    private $method;
    private $classUtils;
    private $classVTAModel;
    private $classRequestModel;
    private $dataJson;
    private $responseJson;
    private $messageJson;
    // Variables de formulario
    private $idRequest;
    private $filesSystems;
    private $comments;
    private $licensePlate;

    function __construct() {
        $this->classUtils = new Utils();
        $this->classVTAModel = new VTAModel();
        $this->classRequestModel = new RequestModel();
        $this->method = $_POST["method"];
        switch ($this->method) {
            case 1:
                $this->idRequest = $_POST["id-request"];
                $this->comments = $_POST["comments"];
                $this->licensePlate = $_POST["license-plate"];
                $this->insertVTA($this->idRequest, $this->comments, $this->licensePlate);
                break;
            default:
                break;
        }
    }

    public function insertVTA($idRequest, $comments, $licensePlate) {
        $this->filesSystems = $this->classUtils->moveFiles("systems", "../Files/$licensePlate/", "system", $licensePlate);
        if ($this->classVTAModel->insertVTA($idRequest, $this->filesSystems, $comments)) {
            $this->classRequestModel->updateRequestVTA($idRequest);
            $this->dataJson = 'null';
            $this->responseJson = 'true';
            $this->messageJson = '"Consulta realizada con exito."';
        } else {
            $this->dataJson = 'null';
            $this->responseJson = 'true';
            $this->messageJson = '"Consulta realizada con exito."';
        }
        $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
    }

}

new VTA();
