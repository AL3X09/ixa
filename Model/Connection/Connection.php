<?php

//include_once $_SERVER["DOCUMENT_ROOT"].'\Inspecciautos\Utils\Constants.php';
include_once '../Utils/Constants.php';

class Connection {

    private $objectPdo;

    public function connect() {
        try {
            $this->objectPdo = new PDO("mysql:dbname=" . Constants::DB_INSPECCIAUTOS . ";host=" . Constants::SERVER, Constants::USER, Constants::PASSWORD);
            $this->objectPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->objectPdo;
        } catch (PDOException $e) {
            die("No se pudo establecer Conexion con la base de datos" . $e);
        }
    }

    public function disconnect() {
        $this->objectPdo = null;
        return $this->objectPdo;
    }

}

?>