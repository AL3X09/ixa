<?php
include '../Model/MenuModel.php';
include '../Utils/Utils.php';
class Menu {
	private $classMenuModel;
	private $classUtils;
	private $responseModel;
	private $responseJson;
	private $dataJson;
	private $messageJson;
	private $sessionJson;
	private $increase;
	public function __construct() {
		session_start ();
		$this->classMenuModel = new MenuModel ();
		$this->classUtils = new Utils ();
		$this->increase = 0;
		$this->sessionJson = ',"session":{"name-user":"' . $_SESSION ["name-person"] . ' ' . $_SESSION ["lastname-person"] . '","id_user":"' . $_SESSION ["id-user"] . '"}';
		
		$this->getMenu ( $_SESSION ["id-rol-user"] );
	}
	public function getMenu($rolUser) {
		try {
			$this->responseModel = $this->classMenuModel->getMenu ( $rolUser );
			if (is_array ( $this->responseModel ) && ! empty ( $this->responseModel ) && ! is_string ( $this->responseModel )) {
				$this->dataJson .= '{';
				foreach ( $this->responseModel as $menus => $menu ) {
					
					$this->dataJson .= '"' . $menu [0] . '":{"menu":"' . $menu [0] . '","prefix":"' . $menu [1] . '"}';
					$this->increase ++;
					$this->dataJson .= $this->classUtils->printComma ( $this->increase, $this->responseModel );
				}
				$this->dataJson .= '}' . $this->sessionJson;
				$this->responseJson = 'true';
				$this->messageJson = '"algo"';
			} else {
				$this->dataJson .= 'null';
				$this->responseJson = 'false';
				$this->messageJson = '"algo malo"';
			}
			$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
		} catch ( Exception $e ) {
			$this->dataJson .= 'null';
			$this->responseJson = 'false';
			$this->messageJson = 'exeption';
			$this->classUtils->buildJson ( $this->responseJson, $this->dataJson, $this->messageJson );
		}
	}
}
new Menu ();
?>