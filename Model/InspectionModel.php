<?php
include "../Model/Connection/Connection.php";
class InspectionModel {
	private $classConnection;
	private $objectPdo;
	private $statement;
	public function __construct() {
            $this->classConnection = new Connection ();
        $this->objectPdo = $this->classConnection->connect();
    }
	/*
	 * INSPECCION PARA LIVIANOS
	 */
	public function insertInspection($idRequest, $idTypeVehicle, $mileage, $discount, $observations, $filesSystems, $filesVehicle, $approved) {
		try {
			
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION );
			$this->statement->bindParam ( ":id_request", $idRequest, PDO::PARAM_INT );
			$this->statement->bindParam ( ":id_type_vehicle", $idTypeVehicle, PDO::PARAM_INT );
			$this->statement->bindParam ( ":mileage", $mileage, PDO::PARAM_STR );
			$this->statement->bindParam ( ":discount", $discount, PDO::PARAM_STR );
			$this->statement->bindParam ( ":observations", $observations, PDO::PARAM_STR );
			$this->statement->bindParam ( ":files_systems", $filesSystems, PDO::PARAM_STR );
			$this->statement->bindParam ( ":files_vehicle", $filesVehicle, PDO::PARAM_STR );
			$this->statement->bindParam ( ":approved", $approved, PDO::PARAM_INT );
;
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionBodywork($trunk, $frontBumper, $backBumper, $cowling, $softtop, $rightSide, $leftSide, $rightFender, $leftFender, $rightFrontDoor, $leftFrontDoor, $rightBackDoor, $leftBackDoor, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_BODYWORK );
			$this->statement->bindParam ( ":trunk", $trunk, PDO::PARAM_INT );
			$this->statement->bindParam ( ":front_bumper", $frontBumper, PDO::PARAM_INT );
			$this->statement->bindParam ( ":back_bumper", $backBumper, PDO::PARAM_INT );
			$this->statement->bindParam ( ":cowling", $cowling, PDO::PARAM_INT );
			$this->statement->bindParam ( ":soft_top", $softtop, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_side", $rightSide, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_side", $leftSide, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_fender", $rightFender, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_fender", $leftFender, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_front_door", $rightFrontDoor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front_door", $leftFrontDoor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_back_door", $rightBackDoor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_back_door", $leftBackDoor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionElectricTeam( $conditionerAir, $midblock, $heating, $risesGlasses, $electricMirrors, $frontWindshieldWipers, $backWindshieldWipers, $whistle, $radio, $temperatureWitness, $speedometer, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_ELECTRIC_TEAM );
			$this->statement->bindParam ( ":conditioner_air", $conditionerAir, PDO::PARAM_INT );
			$this->statement->bindParam ( ":midblock", $midblock, PDO::PARAM_INT );
			$this->statement->bindParam ( ":heating", $heating, PDO::PARAM_INT );
			$this->statement->bindParam ( ":rises_glasses", $risesGlasses, PDO::PARAM_INT );
			$this->statement->bindParam ( ":electric_mirrors", $electricMirrors, PDO::PARAM_INT );
			$this->statement->bindParam ( ":front_windshield_wipers", $frontWindshieldWipers, PDO::PARAM_INT );
			$this->statement->bindParam ( ":back_windshield_wipers", $backWindshieldWipers, PDO::PARAM_INT );
			$this->statement->bindParam ( ":whistle", $whistle, PDO::PARAM_INT );
			$this->statement->bindParam ( ":radio", $radio, PDO::PARAM_INT );
			$this->statement->bindParam ( ":temperature_witness", $temperatureWitness, PDO::PARAM_INT );
			$this->statement->bindParam ( ":speedometer", $speedometer, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e->getMessage() );
		}
	}
	public function insertInspectionStructure( $engineCradle, $rightStirrup, $leftStrirrup, $front, $rightFrontMetalDust, $leftFrontMetalDust, $rightBackMetalDust, $leftBackMetalDust, $rightBar, $leftBar, $panelBack, $rightCentralParal, $leftCentralParal, $rightPanoramicParal, $leftPanoramicParal, $rightFrontParalDoor, $leftFrontParalDoor, $floorBodywork, $rightFrontTipChasis, $leftFrontTipChasis, $rightBackTipChassis, $leftBackTipChassis, $rightScissors, $leftScissors, $torpedo, $rightTower, $leftTower, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_STRUCTURE );
			$this->statement->bindParam ( ":engine_cradle", $engineCradle, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_stirrup", $rightStirrup, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_strirrup", $leftStrirrup, PDO::PARAM_INT );
			$this->statement->bindParam ( ":front", $front, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_front_metal_dust", $rightFrontMetalDust, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front_metal_dust", $leftFrontMetalDust, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_back_metal_dust", $rightBackMetalDust, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_back_metal_dust", $leftBackMetalDust, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_bar", $rightBar, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_bar", $leftBar, PDO::PARAM_INT );
			$this->statement->bindParam ( ":panel_back", $panelBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_central_paral", $rightCentralParal, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_central_paral", $leftCentralParal, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_panoramic_paral", $rightPanoramicParal, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_panoramic_paral", $leftPanoramicParal, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_front_paral_door", $rightFrontParalDoor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front_paral_door", $leftFrontParalDoor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":floor_bodywork", $floorBodywork, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_front_tip_chasis", $rightFrontTipChasis, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front_tip_chasis", $leftFrontTipChasis, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_back_tip_chassis", $rightBackTipChassis, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_back_tip_chassis", $leftBackTipChassis, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_scissors", $rightScissors, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_scissors", $leftScissors, PDO::PARAM_INT );
			$this->statement->bindParam ( ":torpedo", $torpedo, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_tower", $rightTower, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_tower", $leftTower, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionFluidLevels( $oilMotor, $hydraulicDirection, $hydraulicClutch, $breaks, $windshield, $refrigerant, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_FLUID_LEVELS );
			$this->statement->bindParam ( ":oil_motor", $oilMotor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":hydraulic_direction", $hydraulicDirection, PDO::PARAM_INT );
			$this->statement->bindParam ( ":hydraulic_clutch", $hydraulicClutch, PDO::PARAM_INT );
			$this->statement->bindParam ( ":breaks", $breaks, PDO::PARAM_INT );
			$this->statement->bindParam ( ":windshield", $windshield, PDO::PARAM_INT );
			$this->statement->bindParam ( ":refrigerant", $refrigerant, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionGlasses( $right_custodian, $leftCustodian, $interiorMirror, $rightMoon, $leftMoon, $frontPanoramic, $backPanoramic, $rightSide, $leftSide, $rightFront, $leftFront, $rightBack, $leftBack, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_GLASSES );
			$this->statement->bindParam ( ":right_custodian", $right_custodian, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_custodian", $leftCustodian, PDO::PARAM_INT );
			$this->statement->bindParam ( ":interior_mirror", $interiorMirror, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_moon", $rightMoon, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_moon", $leftMoon, PDO::PARAM_INT );
			$this->statement->bindParam ( ":front_panoramic", $frontPanoramic, PDO::PARAM_INT );
			$this->statement->bindParam ( ":back_panoramic", $backPanoramic, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_side", $rightSide, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_side", $leftSide, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_front", $rightFront, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front", $leftFront, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_back", $rightBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_back", $leftBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionInterior( $carpetFloor, $carpetCeiling, $partmentTray, $purseDoors, $seatBelt, $chairState, $gloveBox, $millare, $parasol, $upholstery, $upholsteryChair, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_INTERIOR );
			$this->statement->bindParam ( ":carpet_floor", $carpetFloor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":carpet_ceiling", $carpetCeiling, PDO::PARAM_INT );
			$this->statement->bindParam ( ":partment_tray", $partmentTray, PDO::PARAM_INT );
			$this->statement->bindParam ( ":purse_doors", $purseDoors, PDO::PARAM_INT );
			$this->statement->bindParam ( ":seat_belt", $seatBelt, PDO::PARAM_INT );
			$this->statement->bindParam ( ":chair_state", $chairState, PDO::PARAM_INT );
			$this->statement->bindParam ( ":glove_box", $gloveBox, PDO::PARAM_INT );
			$this->statement->bindParam ( ":millare", $millare, PDO::PARAM_INT );
			$this->statement->bindParam ( ":parasol", $parasol, PDO::PARAM_INT );
			$this->statement->bindParam ( ":upholstery", $upholstery, PDO::PARAM_INT );
			$this->statement->bindParam ( ":upholstery_chair", $upholsteryChair, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionLeakage( $steeringBox, $clutch, $dampers, $gearBox, $velocityBox, $hydraAddress, $oilMotor, $gas, $breaks, $clutchBomb, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_LEAKAGE );
			$this->statement->bindParam ( ":steering_box", $steeringBox, PDO::PARAM_INT );
			$this->statement->bindParam ( ":clutch", $clutch, PDO::PARAM_INT );
			$this->statement->bindParam ( ":dampers", $dampers, PDO::PARAM_INT );
			$this->statement->bindParam ( ":gear_box", $gearBox, PDO::PARAM_INT );
			$this->statement->bindParam ( ":velocity_box", $velocityBox, PDO::PARAM_INT );
			$this->statement->bindParam ( ":hydra_address", $hydraAddress, PDO::PARAM_INT );
			$this->statement->bindParam ( ":oil_motor", $oilMotor, PDO::PARAM_INT );
			$this->statement->bindParam ( ":gas", $gas, PDO::PARAM_INT );
			$this->statement->bindParam ( ":breaks", $breaks, PDO::PARAM_INT );
			$this->statement->bindParam ( ":clutch_bomb", $clutchBomb, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionLight( $rightFrontTurn, $leftFrontTurn, $rightBackTurn, $leftBackTurn, $scouts, $rightStreetlight, $leftStreetlight, $highLight, $fog, $turn, $parking, $break, $rightMiddle, $leftMiddle, $ceiling, $reverse, $rightStop, $leftStop, $witnessAbc, $witnesAirbaag, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_LIGHT );
			$this->statement->bindParam ( ":right_front_turn", $rightFrontTurn, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front_turn", $leftFrontTurn, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_back_turn", $rightBackTurn, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_back_turn", $leftBackTurn, PDO::PARAM_INT );
			$this->statement->bindParam ( ":scouts", $scouts, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_streetlight", $rightStreetlight, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_streetlight", $leftStreetlight, PDO::PARAM_INT );
			$this->statement->bindParam ( ":high_light", $highLight, PDO::PARAM_INT );
			$this->statement->bindParam ( ":fog", $fog, PDO::PARAM_INT );
			$this->statement->bindParam ( ":turn", $turn, PDO::PARAM_INT );
			$this->statement->bindParam ( ":parking", $parking, PDO::PARAM_INT );
			$this->statement->bindParam ( ":break", $break, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_middle", $rightMiddle, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_middle", $leftMiddle, PDO::PARAM_INT );
			$this->statement->bindParam ( ":ceiling", $ceiling, PDO::PARAM_INT );
			$this->statement->bindParam ( ":reverse", $reverse, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_stop", $rightStop, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_stop", $leftStop, PDO::PARAM_INT );
			$this->statement->bindParam ( ":witness_abc", $witnessAbc, PDO::PARAM_INT );
			$this->statement->bindParam ( ":witness_airbag", $witnesAirbaag, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionPaint( $paint, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_PAINT );
			$this->statement->bindParam ( ":paint", $paint, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( Constants::MSS_QUERY_NO_EXECUTED + "-" + $e );
		}
	}
	public function insertInspectionRims( $rightFront, $leftFront, $replacement, $rightBack, $leftBack, $rightInteriorBack, $leftInteriorBack, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_RIMS );
			$this->statement->bindParam ( ":right_front", $rightFront, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_front", $leftFront, PDO::PARAM_INT );
			$this->statement->bindParam ( ":replacement", $replacement, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_back", $rightBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_back", $leftBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":right_interior_back", $rightInteriorBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":left_interior_back", $leftInteriorBack, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	public function insertInspectionTypePaint($typePaint, $total) {
		try {
			$this->statement = $this->objectPdo->prepare ( Constants::SP_INSERT_INSPECTION_TYPE_PAINT );
			$this->statement->bindParam ( ":type_paint", $typePaint, PDO::PARAM_INT );
			$this->statement->bindParam ( ":total", $total, PDO::PARAM_INT );
			if (! $this->statement->execute ()) {
				return false;
			} else {
				return true;
			}
		} catch ( PDOException $e ) {
			die ( $e );
		}
	}
	
	/*
	 * TODO INSPECCION PARA PESADOS
	 */
	
	/*
	 * TODO INSPECCION PARA MOTOCICLETA
	 */
}
?>