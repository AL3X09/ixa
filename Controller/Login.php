<?php

include '../Model/UserModel.php';
include '../Utils/Utils.php';

class Login {

    private $classUtils;
    private $classUserModel;
    private $responseUserModel;
    private $responseJson;
    private $dataJson;
    private $messageJson;
    //variables recibidas
    private $method;
    private $nameUser;
    private $password;

    public function __construct() {
        $this->classUserModel = new UserModel();
        $this->classUtils = new Utils();
        $this->method = $_POST["method"];
        switch ($this->method) {
            case 1:
                $this->nameUser = $_POST["name-user"];
                $this->password = $_POST["password"];
                $this->login($this->nameUser, $this->password);
                break;
            case 2:
                $this->logout();
                break;
        }
    }

    public function login($nameUser, $password) {
        try {
            $this->responseUserModel = $this->classUserModel->selectUserByNameuser($nameUser); //obtencion de los datos.
//            var_dump($this->responseUserModel);
            if (is_array($this->responseUserModel) && !is_string($this->responseUserModel) && !empty($this->responseUserModel)) {//validar si es un arrglo que no esta vacio y que no sea un mensaje de error
                if (md5($password) != trim($this->responseUserModel[0][4])) {//validar si las contrase�as son incorrectas
                    $this->dataJson = 'null';
                    $this->responseJson = 'false';
                    $this->messageJson = '"' . Constants::MSS_WRONG_DATA . '"';
                } elseif ($this->responseUserModel[0][17] == 1) {
                    $this->dataJson = 'null';
                    $this->responseJson = 'true';
                    $this->messageJson = '"Bienvenido ' . $this->responseUserModel[0][6] . '"';
                    session_start();
                    $_SESSION["id-user"] = $this->responseUserModel[0][0];
                    $_SESSION["id-employee"] = $this->responseUserModel[0][1];
                    $_SESSION["id-rol-user"] = $this->responseUserModel[0][2];
                    $_SESSION["name-user"] = $this->responseUserModel[0][3];
                    $_SESSION["id-person"] = $this->responseUserModel[0][5];
                    $_SESSION["name-person"] = $this->responseUserModel[0][6];
                    $_SESSION["lastname-person"] = $this->responseUserModel[0][7];
                    $_SESSION["document-type"] = $this->responseUserModel[0][8];
                    $_SESSION["identification-number"] = $this->responseUserModel[0][9];
                    $_SESSION["id-city-person"] = $this->responseUserModel[0][10];
                    $_SESSION["phone-number"] = $this->responseUserModel[0][11];
                    $_SESSION["cellphone-number"] = $this->responseUserModel[0][12];
                    $_SESSION["email"] = $this->responseUserModel[0][13];
                    $_SESSION["address"] = $this->responseUserModel[0][14];
                    $_SESSION["id-type-person"] = $this->responseUserModel[0][15];
                    $_SESSION["id-position"] = $this->responseUserModel[0][16];
                    $_SESSION["id-state"] = $this->responseUserModel[0][17];
                } else {
                    $this->dataJson = 'null';
                    $this->responseJson = 'false';
                    $this->messageJson = '"' . Constants::MSS_INACTIVE_USER . '"';
                }
            } else {
                $this->dataJson = 'null';
                $this->responseJson = 'false';
                $this->messageJson = '"' . Constants::MSS_USER_UNREGISTERED . '"';
            }
            $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
        } catch (Exception $e) {
            $this->dataJson = 'null';
            $this->responseJson = 'false';
            $this->messageJson = '"' . Constants::ERR_NO_ACTION . $e . '"';
            $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
        }
    }

    public function logout() {
        session_destroy();
    }

}

new Login();
?>