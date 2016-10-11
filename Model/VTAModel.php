<?php

include "../Model/Connection/Connection.php";

class VTAModel {

    private $classConnection;
    private $objectPdo;
    private $statement;

    public function __construct() {
        $this->classConnection = new Connection ();
        $this->objectPdo = $this->classConnection->connect();
    }

    public function insertVTA($idRequest, $filesSystems, $comments) {
        try {
            $this->statement = $this->objectPdo->prepare(Constants::SP_INSERT_VTA);
            $this->statement->bindParam(":id_request", $idRequest, PDO::PARAM_INT);
            $this->statement->bindParam(":system_files", $filesSystems, PDO::PARAM_STR);
            $this->statement->bindParam(":comment", $comments, PDO::PARAM_STR);
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
