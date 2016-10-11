<?php
include 'Model/UserModel.php';
include 'Utils/Utils.php';

class UserController{
	
	private $classUserModel;
	private $responseModel;
	private $method;
	
	//Respuesta a la vistaColombia2015.
	
	private $json;
	private $dataJson;
	private $responseJson;
	private $messageJson;
	
	//datos del usuario
	
	
		
	public function __construct() {
		$this->json = '"response": _response, "message": _message, "data": _data';
		$this->method = $_POST["method"];
		$this->classUserModel = new UserModel();
		switch ($this->method){
			case 1 :
				$this->selectUserByNameuser($nameUser);
				
				break;
		}
	}
	
	public function selectUserByNameuser($nameUser,$password){
		try {
			$this->responseModel = $this->classUserModel->selectUserByNameuser($nameUser);
			if (!empty($this->responseModel) && is_array($this->responseModel)) {
								
			}else{
				
			}
		} catch (Exception $e) {
			die();
		}
	}
}
new UserController();
?>