<?php
include_once '../Model/Connection/Connection.php';
class SettingModel {
	private $classConnection;
	private $objectPdo;
	private $statement;
	public function __construct() {
		$this->classConnection = new Connection ();
		$this->objectPdo = $this->classConnection->connect ();
	}
	public function getAllDocumentType() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_DOCUMENT_TYPE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "SettingModel Document Type" );
		}
	}
	public function getAllCity() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_CITY );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "SettingModel City" );
		}
	}
	public function getAllTypeService() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_TYPE_SERVICE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "SettingModel TypeService" );
		}
	}
	public function getAllTypeClient() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_TYPE_CLIENT );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "SettingModel TypeClient" );
		}
	}
	public function getFasecoldaFile() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_TYPE_CLIENT );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
			die ( Constants::ERR_NO_ACTION . "SettingModel FasecoldaFile" );
		}
	}
	public function getBrandFromFasecolda() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_BRAND_FASECOLDA_CODE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getLineByBrand($brand) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_LINE_BY_BRAND );
			$this->statement->bindParam ( ":brand", $brand, PDO::PARAM_STR );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getTypeReference($brand, $line) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_TYPE_REFERENCE );
			$this->statement->bindParam ( ":brand", $brand, PDO::PARAM_STR );
			$this->statement->bindParam ( ":line", $line, PDO::PARAM_STR );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getCylinderCapacity($brand, $line, $typeReference) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_CYLINDER_CAPACITY );
			$this->statement->bindParam ( ":brand", $brand, PDO::PARAM_STR );
			$this->statement->bindParam ( ":line", $line, PDO::PARAM_STR );
			$this->statement->bindParam ( ":type_reference", $typeReference, PDO::PARAM_STR );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getBodywork($brand, $line, $typeReference, $cylinderCapacity) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_BODYWORK );
			$this->statement->bindParam ( ":brand", $brand, PDO::PARAM_STR );
			$this->statement->bindParam ( ":line", $line, PDO::PARAM_STR );
			$this->statement->bindParam ( ":type_reference", $typeReference, PDO::PARAM_STR );
			$this->statement->bindParam ( ":cylinder_capacity", $cylinderCapacity, PDO::PARAM_STR );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getValueCodeFasecolda($brand, $line, $typeReference, $cylinderCapacity, $class, $model) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_FASECOLDA_VALUE_CODE );
			$this->statement->bindParam ( ":brand", $brand, PDO::PARAM_STR );
			$this->statement->bindParam ( ":line", $line, PDO::PARAM_STR );
			$this->statement->bindParam ( ":type_reference", $typeReference, PDO::PARAM_STR );
			$this->statement->bindParam ( ":cylinder_capacity", $cylinderCapacity, PDO::PARAM_STR );
			$this->statement->bindParam ( ":class", $class, PDO::PARAM_STR );
			$this->statement->bindParam ( ":year", $model, PDO::PARAM_STR );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getAllGas() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_GAS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getAllService() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_SERVICE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getStructureFasecolda() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_FASECOLDA_STRUCTURE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( Exception $e ) {
		}
	}
	public function getItemInspection() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ITEM_INSPECTION);
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( Exception $e ) {
		}
	}
	public function getAllBodyworkStatus() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_BODYWORK_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	public function getAllElectricTeamStatus() {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ELECTRIC_TEAM_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch ( PDOException $e ) {
		}
	}
	
	public function getAllTypeVehicle(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_ALL_TYPE_VEHICLE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	
	public function getInspectionLightweight(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_INSPECTION_LIGHTWEIGHT );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	
	public function getInspectionHeavy(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_INSPECTION_HEAVY );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	
	public function getInspectionMotorcycle(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_INSPECTION_MOTORCYCLE );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getStructureStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_STRUCTURE_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getleakageStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_LEAKAGE_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getligthsStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_LIGTHS_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getInteriorStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_INTERIOR_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getRimsStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_RIMS_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getFluidLevelsStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_FLUID_LEVELS_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getGlassesStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_GLASSES_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getPaintStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_PAINT_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
	public function getTypePaintStatus(){
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_SELECT_TYPE_PAINT_STATUS );
			if (! $this->statement->execute ()) {
				return Constants::MSS_QUERY_NO_EXECUTED;
			} else {
				return $this->statement->fetchAll ();
			}
		} catch (PDOException $e) {
		}
	}
}
?>