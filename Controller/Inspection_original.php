<?php
include "../Controller/WeightedLightweight.php";
include "../Model/InspectionModel.php";
class Inspection {
	private $method;
	private $classWeightedLightweight;
	private $classInspectionModel;
	
	// Variables desde el formulario
	
	// Varibles de inspeccion
	private $idRequest;
	private $idIspection;
	private $typeVehicle;
	private $mileage;
	private $discount;
	private $observations;
	private $filesSystems;
	private $filesVehicle;
	private $aproved;
	
	// Variables de carrocería
	private $bodyworkTrunk;
	private $bodyworkBumperFront;
	private $bodyworkBumperBack;
	private $bodyworkCowling;
	private $bodyworkSoftTop;
	private $bodyworkRightSide;
	private $bodyworkLeftSide;
	private $bodyworkRightFender;
	private $bodyworkLeftFender;
	private $bodyworkRightFrontDoor;
	private $bodyworkLeftFrontDoor;
	private $bodyworkRightBackDoor;
	private $bodyworkLeftBackDoor;
	// Variables de equipo electrico
	private $electricTeamConditionesAir;
	private $electricTeamMidblock;
	private $electricTeamHeating;
	private $electricTeamRisesGlasses;
	private $electricTeamElectricMirrors;
	private $electricTeamFrontWindshieldWipers;
	private $electricTeamBackWindshieldWipers;
	private $electricTeamWhistle;
	private $electricTeamRadio;
	private $electricTeamTemperatureWitness;
	private $electricTeamSpeedometer;
	// Variables de estructura
	private $structureEngineCradle;
	private $structureRightStrirrup;
	private $structureLeftStrirrup;
	private $structureFront;
	private $structureRightFrontMetalDust;
	private $structureLeftFrontMetalDust;
	private $structureRightBackMetalDust;
	private $structureLeftBackMetalDust;
	// private $structureRightFrontMetalDust;
	private $structureRightBar;
	private $structureLeftBar;
	private $structureBackPanel;
	private $structureRightCentralParal;
	private $structureLeftCentralParal;
	private $structureRightParalPanoramic;
	private $structureLeftParalPanoramic;
	private $structureRightFrontParalDoor;
	private $structureLeftFrontParalDoor;
	private $structureBodyworkFloor;
	private $structureRightFrontTipChassis;
	private $structureLeftFrontTipChassis;
	private $structureRightBackTipChassis;
	private $structureLeftBackTipChassis;
	private $structureRightScissors;
	private $structureLeftScissors;
	private $structureTorpedo;
	private $structureRightTower;
	private $structureLeftTower;
	// Variables de fugas
	private $leakageSteeringBox;
	private $leakageClutch;
	private $leakage;
	private $leakageGearbox;
	private $leakageVelocityBox;
	private $leakageHydraAddress;
	private $leakageOilMotor;
	private $leakageGas;
	private $leakageBreaks;
	private $leakageClutchBomb;
	// Variables de interiores
	private $interiorCarpetFloor;
	private $interiorCarpetCeiling;
	private $interiorPartmentTray;
	private $interiorPurseDoors;
	private $interiorSeatBelt;
	private $interiorChairState;
	private $interiorGloveBox;
	private $interiorMillare;
	private $interiorParasol;
	private $interiorUpholstery;
	private $interiorUpholsteryChair;
	// Variables Llantas
	private $rimsRightFront;
	private $rimsLeftFront;
	private $rimsreplacement;
	private $rimsRightBack;
	private $rimsLeftBack;
	private $rimsRightInteriorBack;
	private $rimsLeftInteriorBack;
	// Variables de Luces
	private $lightsRightFrontTurn;
	private $lightsLeftFrontTurn;
	private $lightsRightBackTurn;
	private $lightsLeftBackTurn;
	private $lightsScouts;
	private $lightsRightStreetlight;
	private $lightsLeftStreetlight;
	private $lightsHighLight;
	private $lightsFog;
	private $lightsTurn;
	private $lightsParking;
	private $lightsBreak;
	private $lightsRightMiddle;
	private $lightsLeftMiddle;
	private $lightsCeiling;
	private $lightsReverse;
	private $lightsRightStop;
	private $lightsLeftStop;
	private $lightsWitnessAbc;
	private $lightsWitnessAirbag;
	// Variables Nivel de fluidos
	private $fluidLevelsOilMotor;
	private $fluidLevelsHydraulicDirection;
	private $fluidLevelsHydraulicClutch;
	private $fluidLevelsBreak;
	private $fluidLevelsWindshield;
	private $fluidLevelsRefrigerant;
	// variable de pintura
	private $paint;
	private $typePaint;
	// variables de vidrios
	private $glassesRightCustodian;
	private $glassesLeftCustodian;
	private $glassesInteriorMirror;
	private $glassesRightMoon;
	private $glassesLeftMoon;
	private $glassesBackPanoramic;
	private $glassesRightSide;
	private $glassesLeftSide;
	private $glassesRightFront;
	private $glassesLeftFront;
	private $glassesRightBack;
	private $glassesLeftBack;
	public function __construct() {
		$this->classInspectionModel = new InspectionModel ();
		$this->classWeightedLightweight = new WeightedLightweight ();
		$this->method = $_POST ["method"];
		switch ($this->method) {
			case 1 :
				$this->idRequest = $_POST ["id-request"];
				$this->typeVehicle = $_POST ["type-vehicle"];
				$this->mileage = $_POST ["mileage"];
				$this->discount = $_POST ["discount"];
				$this->observations = $_POST ["observations"];
				$this->aproved = $_POST ["aproved"];
				($this->insertInspection ( $this->idRequest, $this->typeVehicle, $this->mileage, $this->discount, $this->observations, $this->aproved )) ? "" : "";
				break;
			
			default :
				;
				break;
		}
	}
	private function insertInspection($idRequest, $typeVehicle, $mileage, $discount, $observations, $aproved) {
		switch ($typeVehicle) {
			case 1 :
				if ($this->classInspectionModel->insertInspection ( $idRequest, $typeVehicle, $mileage, $discount, $observations, $filesSystems, $filesVehicle, $aproved )) {
					return true;
				} else {
					return false;
				}
				break;
			case 2 :
				
				break;
		}
	}
	private function insertBodywork($idInspection, $bodyworkTrunk, $bodyworkBumperFront, $bodyworkBumperBack, $bodyworkCowling, $bodyworkSoftTop, $bodyworkRightSide, $bodyworkLeftSide, $bodyworkRightFender, $bodyworkLeftFender, $bodyworkRightFrontDoor, $bodyworkLeftFrontDoor, $bodyworkRightBackDoor, $bodyworkLeftBackDoor) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionBodywork ( $idInspection, $this->classWeightedLightweight->setBodyworkTrunk ( $bodyworkTrunk ), $this->classWeightedLightweight->setBodyworkBumperFront ( $bodyworkBumperFront ), $this->classWeightedLightweight->setBodyworkBumperBack ( $bodyworkBumperBack ), $this->classWeightedLightweight->setBodyworkCowling ( $bodyworkCowling ), $this->classWeightedLightweight->setBodyworkSoftTop ( $bodyworkSoftTop ), $this->classWeightedLightweight->setBodyworkRightSide ( $bodyworkRightSide ), $this->classWeightedLightweight->setBodyworkLeftSide ( $bodyworkLeftSide ), $this->classWeightedLightweight->setBodyworkRightFender ( $bodyworkRightFender ), $this->classWeightedLightweight->setBodyworkLeftFender ( $bodyworkLeftFender ), $this->classWeightedLightweight->setBodyworkRightFrontDoor ( $bodyworkRightFrontDoor ), $this->classWeightedLightweight->setBodyworkLeftFrontDoor ( $bodyworkLeftFrontDoor ), $this->classWeightedLightweight->setBodyworkRightBackDoor ( $bodyworkRightBackDoor ), $this->classWeightedLightweight->setBodyworkLeftBackDoor ( $bodyworkLeftBackDoor ), $total );
	}
	private function insertElectricTeam($idInspection, $electricTeamConditionesAir, $electricTeamMidblock, $electricTeamHeating, $electricTeamRisesGlasses, $electricTeamElectricMirrors, $electricTeamFrontWindshieldWipers, $electricTeamBackWindshieldWipers, $electricTeamWhistle, $electricTeamRadio, $electricTeamTemperatureWitness, $electricTeamSpeedometer) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionElectricTeam ( $idInspection, $this->classWeightedLightweight->setElectricTeamConditionerAir ( $electricTeamConditionesAir ), $this->classWeightedLightweight->setElectricTeamMidblock ( $electricTeamMidblock ), $this->classWeightedLightweight->setElectricTeamHeating ( $electricTeamHeating ), $this->classWeightedLightweight->setElectricTeamRisesGlasses ( $electricTeamRisesGlasses ), $this->classWeightedLightweight->setElectricTeamElectricMirrors ( $electricTeamElectricMirrors ), $this->classWeightedLightweight->setElectricTeamFrontWindshieldWipers ( $electricTeamFrontWindshieldWipers ), $this->classWeightedLightweight->setElectricTeamBackWindshieldWipers ( $electricTeamBackWindshieldWipers ), $this->classWeightedLightweight->setElectricTeamWhistle ( $electricTeamWhistle ), $this->classWeightedLightweight->setElectricTeamRadio ( $electricTeamRadio ), $this->classWeightedLightweight->setElectricTeamTemperatureWitness ( $electricTeamTemperatureWitness ), $this->classWeightedLightweight->setElectricTeamSpeedometer ( $electricTeamSpeedometer ), $total );
	}
	private function insertStructure($idInspection, $structureEngineCradle, $structureRightStrirrup, $structureLeftStrirrup, $structureFront, $structureRightFrontMetalDust, $structureLeftFrontMetalDust, $structureRightBackMetalDust, $structureLeftBackMetalDust, $structureRightBar, $structureLeftBar, $structureBackPanel, $structureRightCentralParal, $structureLeftCentralParal, $structureRightParalPanoramic, $structureLeftParalPanoramic, $structureRightFrontParalDoor, $structureLeftFrontParalDoor, $structureBodyworkFloor, $structureRightFrontTipChassis, $structureLeftFrontTipChassis, $structureRightBackTipChassis, $structureLeftBackTipChassis, $structureRightScissors, $structureLeftScissors, $structureTorpedo, $structureRightTower, $structureLeftTower) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionStructure ( $idInspection, $this->classWeightedLightweight->setStructureEngineCraddle ( $structureEngineCradle ), $this->classWeightedLightweight->setStructureRightStrirrup ( $structureRightStrirrup ), $this->classWeightedLightweight->setStructureLeftStirrup ( $structureLeftStrirrup ), $this->classWeightedLightweight->setStructureFront ( $structureFront ), $this->classWeightedLightweight->setStructureRightFrontMetalDust ( $structureRightFrontMetalDust ), $this->classWeightedLightweight->setStructureLeftFrontMetalDust ( $structureLeftFrontMetalDust ), $this->classWeightedLightweight->setStructureRightBackMetalDust ( $structureRightBackMetalDust ), $this->classWeightedLightweight->setStructureLeftBackMetalDust ( $structureLeftBackMetalDust ), $this->classWeightedLightweight->setStructureRightBar ( $structureRightBar ), $this->classWeightedLightweight->setStructureLeftBar ( $structureLeftBar ), $this->classWeightedLightweight->setStructurePanelBack ( $structureBackPanel ), $this->classWeightedLightweight->setStructureRightCentralParal ( $structureRightCentralParal ), $this->classWeightedLightweight->setStructureLeftCentalParal ( $structureLeftCentralParal ), $this->classWeightedLightweight->setStructureRightParalPanoramic ( $structureRightParalPanoramic ), $this->classWeightedLightweight->setStructureLeftParalPanoramic ( $structureLeftParalPanoramic ), $this->classWeightedLightweight->setStructureRightParalFrontDoor ( $structureRightFrontParalDoor ), $this->classWeightedLightweight->setStructureLeftParalFrontDoor ( $structureLeftFrontParalDoor ), $this->classWeightedLightweight->setStructureFloorBodywork ( $structureBodyworkFloor ), $this->classWeightedLightweight->setStructureRightFrontTipChasis ( $structureRightFrontTipChassis ), $this->classWeightedLightweight->setStructureLeftFrontTipChasis ( $structureLeftFrontTipChassis ), $this->classWeightedLightweight->setStructureRightBackTipChasis ( $structureRightBackTipChassis ), $this->classWeightedLightweight->setStructureLeftBackTipChasis ( $structureLeftBackTipChassis ), $this->classWeightedLightweight->setStructureRightScissors ( $structureRightScissors ), $this->classWeightedLightweight->setStructureLeftScissors ( $structureLeftScissors ), $this->classWeightedLightweight->setStructureTorpedo ( $structureTorpedo ), $this->classWeightedLightweight->setStructureRightTower ( $structureRightTower ), $this->classWeightedLightweight->setStructureLeftTower ( $structureLeftTower ), $total );
	}////
	private function insertLeakage($idInspection, $steeringBox, $clutch, $dampers, $gearBox, $velocityBox, $hydraAddress, $oilMotor, $gas, $breaks, $clutchBomb) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionLeakage ( $idInspection, $this->classWeightedLightweight->setLeakageSteeringBox($steeringBox), $clutch, $dampers, $gearBox, $velocityBox, $hydraAddress, $oilMotor, $gas, $breaks, $clutchBomb, $total );
	}
	private function insertInterior($idInspection, $carpetFloor, $carpetCeiling, $partmentTray, $purseDoors, $seatBelt, $chairState, $gloveBox, $millare, $parasol, $upholstery, $upholsteryChair) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionInterior ( $idInspection, $carpetFloor, $carpetCeiling, $partmentTray, $purseDoors, $seatBelt, $chairState, $gloveBox, $millare, $parasol, $upholstery, $upholsteryChair, $total );
	}
	private function insertRims($idInspection, $rightFront, $leftFront, $replacement, $rightBack, $leftBack, $rightInteriorBack, $leftInteriorBack) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionRims ( $idInspection, $rightFront, $leftFront, $replacement, $rightBack, $leftBack, $rightInteriorBack, $leftInteriorBack, $total );
	}
	private function insertLigths($idInspection, $rightFrontTurn, $leftFrontTurn, $rightBackTurn, $leftBackTurn, $scouts, $rightStreetlight, $leftStreetlight, $highLight, $fog, $turn, $parking, $break, $rightMiddle, $leftMiddle, $ceiling, $reverse, $rightStop, $leftStop, $witnessAbc, $witnesAirbaag) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionLight ( $idInspection, $rightFrontTurn, $leftFrontTurn, $rightBackTurn, $leftBackTurn, $scouts, $rightStreetlight, $leftStreetlight, $highLight, $fog, $turn, $parking, $break, $rightMiddle, $leftMiddle, $ceiling, $reverse, $rightStop, $leftStop, $witnessAbc, $witnesAirbaag, $total );
	}
	private function insertFluidLevels($idInspection, $oilMotor, $hydraulicDirection, $hydraulicClutch, $breaks, $windshield, $refrigerant) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionFluidLevels ( $idInspection, $oilMotor, $hydraulicDirection, $hydraulicClutch, $breaks, $windshield, $refrigerant, $total );
	}
	private function insertPaint($idInspection, $paint) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionPaint ( $idInspection, $paint, $total );
	}
	private function insertTypePaint($idInspection, $typePaint) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionTypePaint ( $idInspection, $typePaint, $total );
	}
	private function insertGlasses($idInspection, $right_custodian, $leftCustodian, $interiorMirror, $rightMoon, $leftMoon, $frontPanoramic, $backPanoramic, $rightSide, $leftSide, $rightFront, $leftFront, $rightBack, $leftBack) {
		$total = 0;
		return $this->classInspectionModel->insertInspectionGlasses ( $idInspection, $right_custodian, $leftCustodian, $interiorMirror, $rightMoon, $leftMoon, $frontPanoramic, $backPanoramic, $rightSide, $leftSide, $rightFront, $leftFront, $rightBack, $leftBack, $total );
	}
}
new Inspection ();
?>