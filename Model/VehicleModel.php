<?php
include '../Model/Connection/Connection.php';
class VehicleModel {
	private $classConnection;
	private $objectPdo;
	private $statement;
	public function __construct() {
		$this->classConnection = new Connection ();
		$this->objectPdo = $this->classConnection->connect ();
	}
	public function insertVehicle($identification_number, $license_plate, $brand, $line, $type_reference, $cylinder_capacity, $service, $bodywork, $gas, $capacity, $model, $color, $motor_number, $serie_number, $chasis_number) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_VEHICLE );
			$this->statement->bindParam(":identification_number", $identification_number ,pdo::PARAM_STR);
			$this->statement->bindParam(":license_plate", $license_plate ,pdo::PARAM_STR);
			$this->statement->bindParam(":brand", $brand ,pdo::PARAM_STR);
			$this->statement->bindParam(":line", $line ,pdo::PARAM_STR);
			$this->statement->bindParam(":type_reference", $type_reference ,pdo::PARAM_STR);
			$this->statement->bindParam(":cylinder_capacity", $cylinder_capacity ,pdo::PARAM_STR);
			$this->statement->bindParam(":service", $service ,pdo::PARAM_STR);
			$this->statement->bindParam(":bodywork", $bodywork ,pdo::PARAM_STR);
			$this->statement->bindParam(":gas", $gas ,pdo::PARAM_STR);
			$this->statement->bindParam(":capacity", $capacity ,pdo::PARAM_STR);
			$this->statement->bindParam(":model", $model ,pdo::PARAM_STR);
			$this->statement->bindParam(":color", $color ,pdo::PARAM_STR);
			$this->statement->bindParam(":motor_number", $motor_number ,pdo::PARAM_STR);
			$this->statement->bindParam(":serie_number", $serie_number ,pdo::PARAM_STR);
			$this->statement->bindParam(":chasis_number", $chasis_number ,pdo::PARAM_STR);
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch (PDOException $e) {
			die($e);
		}
	}
}
?>