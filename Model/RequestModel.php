<?php

include_once '../Model/Connection/Connection.php';

class RequestModel {

    private $classConnection;
    private $objectPdo;
    private $statement;

    public function __construct() {
        $this->classConnection = new Connection ();
        $this->objectPdo = $this->classConnection->connect();
    }

    public function insertRequest($identificationNumber, $idTypeClient, $idTypeService, $licensePlate, $turn, $headquarters, $requestedBy, $insured, $intermediary, $fasecoldaCode, $valueFasecolda, $digitation, $inspection, $vta, $tecnicalControl, $status, $idUser) {
        try {

            $this->statement = $this->objectPdo->prepare(Constants::SP_INSERT_REQUEST);
            $this->statement->bindParam(":id_client", $identificationNumber, PDO::PARAM_STR);
            $this->statement->bindParam(":id_type_client", $idTypeClient, PDO::PARAM_STR);
            $this->statement->bindParam(":id_type_service", $idTypeService, PDO::PARAM_STR);
            $this->statement->bindParam(":id_vehicle", $licensePlate, PDO::PARAM_STR);
            $this->statement->bindParam(":turn", $turn, PDO::PARAM_STR);
            $this->statement->bindParam(":headquarters", $headquarters, PDO::PARAM_STR);
            $this->statement->bindParam(":requested_by", $requestedBy, PDO::PARAM_STR);
            $this->statement->bindParam(":insured", $insured, PDO::PARAM_STR);
            $this->statement->bindParam(":intermediary", $intermediary, PDO::PARAM_STR);
            $this->statement->bindParam(":fasecolda_code", $fasecoldaCode, PDO::PARAM_STR);
            $this->statement->bindParam(":value_fasecolda", $valueFasecolda, PDO::PARAM_STR);
            $this->statement->bindParam(":digitation", $digitation, PDO::PARAM_STR);
            $this->statement->bindParam(":inspection", $inspection, PDO::PARAM_STR);
            $this->statement->bindParam(":vta", $vta, PDO::PARAM_STR);
            $this->statement->bindParam(":tecnical_control", $tecnicalControl, PDO::PARAM_STR);
            $this->statement->bindParam(":status", $status, PDO::PARAM_STR);
            $this->statement->bindParam(":id_user", $idUser, PDO::PARAM_INT);
            if (!$this->statement->execute()) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function insertFiles($identificationNumber, $licensePlate, $route, $files) {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_INSERT_FILES);
            $this->statement->bindParam(":identification_number", $identificationNumber);
            $this->statement->bindParam(":license_plate", $licensePlate);
            $this->statement->bindParam(":route", $route);
            $this->statement->bindParam(":files", $files);
            if (!$this->statement->execute()) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function selectRequest() {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_SELECT_ALL_REQUEST);
            if (!$this->statement->execute()) {
                return Constants::MSS_QUERY_NO_EXECUTED;
            } else {
                return $this->statement->fetchAll();
            }
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function selectRequestInspectionById($id) {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_SELECT_REQUEST_INSPECTION_BY_ID);
            $this->statement->bindParam(":id", $id, PDO::PARAM_INT);
            if (!$this->statement->execute()) {
                return Constants::MSS_QUERY_NO_EXECUTED;
            } else {
                return $this->statement->fetchAll();
            }
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function updateRequestInspection($idRequest) {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_UPDATE_REQUEST_INSPECTION);
            $this->statement->bindParam(":request", $idRequest, PDO::PARAM_INT);

            if (!$this->statement->execute()) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            die($e);
        }
    }

    public function updateRequestVTA($idRequest) {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_UPDATE_REQUEST_VTA);
            $this->statement->bindParam(":request", $idRequest, PDO::PARAM_INT);

            if (!$this->statement->execute()) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo ("No se pudo actualizar la solicitud, Error: " . $e->getTraceAsString());
        }
    }

    public function selectRequestInformation($idRequest) {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_SELECT_REQUEST_INFORMATION);
            $this->statement->bindParam(":request", $idRequest, PDO::PARAM_INT);
            if (!$this->statement->execute()) {
                return null;
            } else {
                return $this->statement->fetchAll();
            }
        } catch (PDOException $exc) {
            echo ("No se pudo actualizar la solicitud, Error: " . $exc->getTraceAsString());
        }
    }

}

?>