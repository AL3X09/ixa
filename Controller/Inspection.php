<?php

//ini_set("display_errors", "on");
include "../Controller/WeightedLightweight.php";
include "../Model/InspectionModel.php";
include "../Utils/Utils.php";
include '../Model/RequestModel.php';

class Inspection {

    private $method;
    private $classWeightedLightweight;
    private $classInspectionModel;
    private $classUtils;
    private $classRequestModel;
    private $dataJson;
    private $responseJson;
    private $messageJson;
    // Variables desde el formulario
    // Varibles de inspeccion
    private $idRequest;
    private $idInspection;
    private $licensePlate; ///Bryan
    private $typeVehicle;
    private $mileage;
    private $discount;
    private $observations;
    private $filesSystems;
    private $filesVehicle;
    private $aproved;
    // Variables de carrocer�a
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
    private $leakageDampers;
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
    private $glassesFrontPanoramic;
    private $glassesRightSide;
    private $glassesLeftSide;
    private $glassesRightFront;
    private $glassesLeftFront;
    private $glassesRightBack;
    private $glassesLeftBack;

    public function __construct() {
        $this->classInspectionModel = new InspectionModel ();
        $this->classWeightedLightweight = new WeightedLightweight ();
        $this->classUtils = new Utils();
        $this->classRequestModel = new RequestModel();
        $this->method = $_POST ["method"];
        switch ($this->method) {
            case 1 :
                $this->idRequest = $_POST ["id-request"];
                $this->licensePlate = $_POST["license-plate"];
                $this->typeVehicle = $_POST ["type-vehicle"];
                $this->mileage = $_POST ["mileage"];
                $this->discount = $_POST ["discount"];
                $this->observations = $_POST ["observations"];
                $this->aproved = $_POST ["aproved"];
                $this->filesVehicle = $this->classUtils->moveFiles("vehicle", "../Files/$this->licensePlate/", "vehi", $this->licensePlate);
                $this->filesSystems = $this->classUtils->moveFiles("systems", "../Files/$this->licensePlate/", "sys", $this->licensePlate);
//                var_dump($_FILES);
                if ($this->insertInspection($this->idRequest, $this->typeVehicle, $this->mileage, $this->discount, $this->observations, $this->aproved, $this->filesSystems, $this->filesVehicle)) {
                    if ($this->classRequestModel->updateRequestInspection($this->idRequest)) {
                        $this->dataJson = 'null';
                        $this->responseJson = 'true';
                        $this->messageJson = '"Consulta realizada con exito."';
                    } else {
                        $this->dataJson = 'null';
                        $this->responseJson = 'true';
                        $this->messageJson = '"No se pudo actualizar el estado de la inspeccion"';
                    }
                } else {
                    $this->dataJson = 'null';
                    $this->responseJson = 'false';
                    $this->messageJson = '"No se pudo realizar la inspeccion, por favor intente mas tarde."';
                }
                $this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
                break;
            case 2 : // vta

                break;
            default :
                ;
                break;
        }
    }

    private function insertInspection($idRequest, $typeVehicle, $mileage, $discount, $observations, $aproved, $filesSystems, $filesVehicle) {
        switch ($typeVehicle) {
            case 1 :

// 				var_dump ( $this->classInspectionModel->insertInspection ( $idRequest, $typeVehicle, $mileage, $discount, $observations, $filesSystems, $filesVehicle, $aproved ) );
                if ($this->classInspectionModel->insertInspection($idRequest, $typeVehicle, $mileage, $discount, $observations, $filesSystems, $filesVehicle, $aproved)) {
                    $this->idInspection = 1;
                    // -----------------Variables de carrocer�a-----------------------//
                    $this->bodyworkTrunk = $_POST ["bodywork-trunk"];
                    $this->bodyworkBumperFront = $_POST ["bodywork-bumper-front"];
                    $this->bodyworkBumperBack = $_POST ["bodywork-bumper-back"];
                    $this->bodyworkCowling = $_POST ["bodywork-cowling"];
                    $this->bodyworkSoftTop = $_POST ["bodywork-soft-top"];
                    $this->bodyworkRightSide = $_POST ["bodywork-right-side"];
                    $this->bodyworkLeftSide = $_POST ["bodywork-left-side"];
                    $this->bodyworkRightFender = $_POST ["bodywork-right-fender"];
                    $this->bodyworkLeftFender = $_POST ["bodywork-left-fender"];
                    $this->bodyworkRightFrontDoor = $_POST ["bodywork-right-front-door"];
                    $this->bodyworkLeftFrontDoor = $_POST ["bodywork-left-front-door"];
                    $this->bodyworkRightBackDoor = $_POST ["bodywork-right-back-door"];
                    $this->bodyworkLeftBackDoor = $_POST ["bodywork-left-back-door"];
                    // ---------------Variables de equipo electrico-----------------------//
                    $this->electricTeamConditionesAir = $_POST ["electric-team-conditioner-air"];
                    $this->electricTeamMidblock = $_POST ["electric-team-midblock"];
                    $this->electricTeamHeating = $_POST ["electric-team-heating"];
                    $this->electricTeamRisesGlasses = $_POST ["electric-team-rises-glases"];
                    $this->electricTeamElectricMirrors = $_POST ["electric-team-electric-mirrors"];
                    $this->electricTeamFrontWindshieldWipers = $_POST ["electric-team-front-windshield-wipers"];
                    $this->electricTeamBackWindshieldWipers = $_POST ["electric-team-back-windshield-wipers"];
                    $this->electricTeamWhistle = $_POST ["electric-team-whistle"];
                    $this->electricTeamRadio = $_POST ["electric-team-radio"];
                    $this->electricTeamTemperatureWitness = $_POST ["electric-team-temperature-witness"];
                    $this->electricTeamSpeedometer = $_POST ["electric-team-speedometer"];
                    // -------------Variables de estructura--------------------------//
                    $this->structureEngineCradle = $_POST ["structure-engine-cradle"];
                    $this->structureRightStrirrup = $_POST ["structure-right-stirrup"];
                    $this->structureLeftStrirrup = $_POST ["structure-left-stirrup"];
                    $this->structureFront = $_POST ["structure-front"];
                    $this->structureRightFrontMetalDust = $_POST ["structure-right-front-metal-dust"];
                    $this->structureLeftFrontMetalDust = $_POST ["structure-left-front-metal-dust"];
                    $this->structureRightBackMetalDust = $_POST ["structure-right-back-metal-dust"];
                    $this->structureLeftBackMetalDust = $_POST ["structure-left-back-metal-dust"];
                    $this->structureRightBar = $_POST ["structure-right-bar"];
                    $this->structureLeftBar = $_POST ["structure-left-bar"];
                    $this->structureBackPanel = $_POST ["structure-panel-back"];
                    $this->structureRightCentralParal = $_POST ["structure-central-paral-right"];
                    $this->structureLeftCentralParal = $_POST ["structure-central-paral-left"];
                    $this->structureRightParalPanoramic = $_POST ["structure-panoramic-paral-right"];
                    $this->structureLeftParalPanoramic = $_POST ["structure-panoramic-paral-left"];
                    $this->structureRightFrontParalDoor = $_POST ["structure-paral-door-front-right"];
                    $this->structureLeftFrontParalDoor = $_POST ["structure-paral-door-front-left"];
                    $this->structureBodyworkFloor = $_POST ["structure-floor-bodywork"];
                    $this->structureRightFrontTipChassis = $_POST ["structure-tip-chassis-front-right"];
                    $this->structureLeftFrontTipChassis = $_POST ["structure-tip-chassis-front-left"];
                    $this->structureRightBackTipChassis = $_POST ["structure-tip-chassis-back-right"];
                    $this->structureLeftBackTipChassis = $_POST ["structure-tip-chassis-back-left"];
                    $this->structureRightScissors = $_POST ["structure-scissors-right"];
                    $this->structureLeftScissors = $_POST ["structure-scissors-left"];
                    $this->structureTorpedo = $_POST ["structure-torpedo"];
                    $this->structureRightTower = $_POST ["structure-tower-right"];
                    $this->structureLeftTower = $_POST ["structure-tower-left"];
                    // --------------Variables de fugas---------------------------//
                    $this->leakageSteeringBox = $_POST ["leakage-steering-box"];
                    $this->leakageClutch = $_POST ["leakage-clutch"];
                    $this->leakageDampers = $_POST ["leakage-dampers"];
                    $this->leakageGearbox = $_POST ["leakage-gearbox"];
                    $this->leakageVelocityBox = $_POST ["leakage-velocity-box"];
                    $this->leakageHydraAddress = $_POST ["leakage-hydra-address"];
                    $this->leakageOilMotor = $_POST ["leakage-oil-motor"];
                    $this->leakageGas = $_POST ["leakage-gas"];
                    $this->leakageBreaks = $_POST ["leakage-liquid-breaks"];
                    $this->leakageClutchBomb = $_POST ["leakage-clutch-bomb"];
                    // ------------------Variables de interiores--------------------//
                    $this->interiorCarpetFloor = $_POST ["interior-carpet-floor"];
                    $this->interiorCarpetCeiling = $_POST ["interior-carpet-ceiling"];
                    $this->interiorPartmentTray = $_POST ["interior-partment-tray"];
                    $this->interiorPurseDoors = $_POST ["interior-purse-doors"];
                    $this->interiorSeatBelt = $_POST ["interior-seat-belt"];
                    $this->interiorChairState = $_POST ["interior-chair-state"];
                    $this->interiorGloveBox = $_POST ["interior-glove-box"];
                    $this->interiorMillare = $_POST ["interior-millare"];
                    $this->interiorParasol = $_POST ["interior-parasol"];
                    $this->interiorUpholstery = $_POST ["interior-upholstery"];
                    $this->interiorUpholsteryChair = $_POST ["interior-upholstery-chair"];
                    // ----------------Variables Llantas--------------------------//
                    $this->rimsRightFront = $_POST ["rims-front-right"];
                    $this->rimsLeftFront = $_POST ["rims-front-left"];
                    $this->rimsreplacement = $_POST ["rims-replacement"];
                    $this->rimsRightBack = $_POST ["rims-back-right"];
                    $this->rimsLeftBack = $_POST ["rims-back-interior-right"];
                    $this->rimsRightInteriorBack = $_POST ["rims-back-right"];
                    $this->rimsLeftInteriorBack = $_POST ["rims-back-left"];
                    // -----------------Variables de Luces-------------------------//
                    $this->lightsRightFrontTurn = $_POST ["ligths-front-right-turn"];
                    $this->lightsLeftFrontTurn = $_POST ["ligths-front-left-turn"];
                    $this->lightsRightBackTurn = $_POST ["ligths-back-right-turn"];
                    $this->lightsLeftBackTurn = $_POST ["ligths-back-left-turn"];
                    $this->lightsScouts = $_POST ["ligths-scouts"];
                    $this->lightsRightStreetlight = $_POST ["ligths-streetlight-right"];
                    $this->lightsLeftStreetlight = $_POST ["ligths-streetlight-left"];
                    $this->lightsHighLight = $_POST ["ligths-high-light"];
                    $this->lightsFog = $_POST ["ligths-fog"];
                    $this->lightsTurn = $_POST ["ligths-turn"];
                    $this->lightsParking = $_POST ["ligths-parking"];
                    $this->lightsBreak = $_POST ["ligths-break"];
                    $this->lightsRightMiddle = $_POST ["ligths-middle-right"];
                    $this->lightsLeftMiddle = $_POST ["ligths-middle-left"];
                    $this->lightsCeiling = $_POST ["ligths-ceiling"];
                    $this->lightsReverse = $_POST ["ligths-reverse"];
                    $this->lightsRightStop = $_POST ["ligths-stop-right"];
                    $this->lightsLeftStop = $_POST ["ligths-stop-left"];
                    $this->lightsWitnessAbc = $_POST ["ligths-witness-abc"];
                    $this->lightsWitnessAirbag = $_POST ["ligths-witness-airbag"];
                    // -------------------Variables Nivel de fluidos-----------------------//
                    $this->fluidLevelsOilMotor = $_POST ["fluid-levels-oil-motor"];
                    $this->fluidLevelsHydraulicDirection = $_POST ["fluid-levels-hydraulic-direction"];
                    $this->fluidLevelsHydraulicClutch = $_POST ["fluid-levels-hydraulic-clutch"];
                    $this->fluidLevelsBreak = $_POST ["fluid-levels-break"];
                    $this->fluidLevelsWindshield = $_POST ["fluid-levels-windshield"];
                    $this->fluidLevelsRefrigerant = $_POST ["fluid-levels-refrigerant"];
                    // --------------variable de pintura-------------------------//
                    $this->paint = $_POST ["paint"];
                    $this->typePaint = $_POST ["type-paint"];
                    // --------------variables de vidrios----------------------------//
                    $this->glassesRightCustodian = $_POST ["glasses-custodian-right"];
                    $this->glassesLeftCustodian = $_POST ["glasses-custodian-left"];
                    $this->glassesInteriorMirror = $_POST ["glasses-interior-mirror"];
                    $this->glassesRightMoon = $_POST ["glasses-moon-right"];
                    $this->glassesLeftMoon = $_POST ["glasses-moon-left"];
                    $this->glassesBackPanoramic = $_POST ["glasses-panoramic-back"];
                    $this->glassesFrontPanoramic = $_POST ["glasses-panoramic-front"];
                    $this->glassesRightSide = $_POST ["glasses-right-side"];
                    $this->glassesLeftSide = $_POST ["glasses-left-side"];
                    $this->glassesRightFront = $_POST ["glasses-front-right"];
                    $this->glassesLeftFront = $_POST ["glasses-front-left"];
                    $this->glassesRightBack = $_POST ["glasses-back-right"];
                    $this->glassesLeftBack = $_POST ["glasses-back-left"];

                    $this->insertBodywork($this->bodyworkTrunk, $this->bodyworkBumperFront, $this->bodyworkBumperBack, $this->bodyworkCowling, $this->bodyworkSoftTop, $this->bodyworkRightSide, $this->bodyworkLeftSide, $this->bodyworkRightFender, $this->bodyworkLeftFender, $this->bodyworkRightFrontDoor, $this->bodyworkLeftFrontDoor, $this->bodyworkRightBackDoor, $this->bodyworkLeftBackDoor);
                    $this->insertElectricTeam($this->electricTeamConditionesAir, $this->electricTeamMidblock, $this->electricTeamHeating, $this->electricTeamRisesGlasses, $this->electricTeamElectricMirrors, $this->electricTeamFrontWindshieldWipers, $this->electricTeamBackWindshieldWipers, $this->electricTeamWhistle, $this->electricTeamRadio, $this->electricTeamTemperatureWitness, $this->electricTeamSpeedometer);
                    $this->insertStructure($this->structureEngineCradle, $this->structureRightStrirrup, $this->structureLeftStrirrup, $this->structureFront, $this->structureRightFrontMetalDust, $this->structureLeftFrontMetalDust, $this->structureRightBackMetalDust, $this->structureLeftBackMetalDust, $this->structureRightBar, $this->structureLeftBar, $this->structureBackPanel, $this->structureRightCentralParal, $this->structureLeftCentralParal, $this->structureRightParalPanoramic, $this->structureLeftParalPanoramic, $this->structureRightFrontParalDoor, $this->structureLeftFrontParalDoor, $this->structureBodyworkFloor, $this->structureRightFrontTipChassis, $this->structureLeftFrontTipChassis, $this->structureRightBackTipChassis, $this->structureLeftBackTipChassis, $this->structureRightScissors, $this->structureLeftScissors, $this->structureTorpedo, $this->structureRightTower, $this->structureLeftTower);
                    $this->insertLeakage($this->leakageSteeringBox, $this->leakageClutch, $this->leakageDampers, $this->leakageGearbox, $this->leakageVelocityBox, $this->leakageHydraAddress, $this->leakageOilMotor, $this->leakageGas, $this->leakageBreaks, $this->leakageClutchBomb);
                    $this->insertInterior($this->interiorCarpetFloor, $this->interiorCarpetCeiling, $this->interiorPartmentTray, $this->interiorPurseDoors, $this->interiorSeatBelt, $this->interiorChairState, $this->interiorGloveBox, $this->interiorMillare, $this->interiorParasol, $this->interiorUpholstery, $this->interiorUpholsteryChair);
                    $this->insertRims($this->rimsRightFront, $this->rimsLeftFront, $this->rimsreplacement, $this->rimsRightBack, $this->rimsLeftBack, $this->rimsRightInteriorBack, $this->rimsLeftInteriorBack);
                    $this->insertLigths($this->lightsRightFrontTurn, $this->lightsLeftFrontTurn, $this->lightsRightBackTurn, $this->lightsLeftBackTurn, $this->lightsScouts, $this->lightsRightStreetlight, $this->lightsLeftStreetlight, $this->lightsHighLight, $this->lightsFog, $this->lightsTurn, $this->lightsParking, $this->lightsBreak, $this->lightsRightMiddle, $this->lightsLeftMiddle, $this->lightsCeiling, $this->lightsReverse, $this->lightsRightStop, $this->lightsLeftStop, $this->lightsWitnessAbc, $this->lightsWitnessAirbag);
                    $this->insertFluidLevels($this->fluidLevelsOilMotor, $this->fluidLevelsHydraulicDirection, $this->fluidLevelsHydraulicClutch, $this->fluidLevelsBreak, $this->fluidLevelsWindshield, $this->fluidLevelsRefrigerant);
                    $this->insertPaint($this->paint);
                    $this->insertTypePaint($this->typePaint);
                    $this->insertGlasses($this->glassesRightCustodian, $this->glassesLeftCustodian, $this->glassesInteriorMirror, $this->glassesRightMoon, $this->glassesLeftMoon, $this->glassesFrontPanoramic, $this->glassesBackPanoramic, $this->glassesRightSide, $this->glassesLeftSide, $this->glassesRightFront, $this->glassesLeftFront, $this->glassesRightBack, $this->glassesLeftBack);
                    return true;
                } else {
                    return false;
                }
                break;
            case 2 :

                break;
            default :
                return false;
        }
    }

    private function insertBodywork($bodyworkTrunk, $bodyworkBumperFront, $bodyworkBumperBack, $bodyworkCowling, $bodyworkSoftTop, $bodyworkRightSide, $bodyworkLeftSide, $bodyworkRightFender, $bodyworkLeftFender, $bodyworkRightFrontDoor, $bodyworkLeftFrontDoor, $bodyworkRightBackDoor, $bodyworkLeftBackDoor) {
        $total = 100 - (($this->classWeightedLightweight->setBodyworkTrunk($bodyworkTrunk) +
                $this->classWeightedLightweight->setBodyworkBumperFront($bodyworkBumperFront) +
                $this->classWeightedLightweight->setBodyworkBumperBack($bodyworkBumperBack) +
                $this->classWeightedLightweight->setBodyworkCowling($bodyworkCowling) +
                $this->classWeightedLightweight->setBodyworkSoftTop($bodyworkSoftTop) +
                $this->classWeightedLightweight->setBodyworkRightSide($bodyworkRightSide) +
                $this->classWeightedLightweight->setBodyworkLeftSide($bodyworkLeftSide) +
                $this->classWeightedLightweight->setBodyworkRightFender($bodyworkRightFender) +
                $this->classWeightedLightweight->setBodyworkLeftFender($bodyworkLeftFender) +
                $this->classWeightedLightweight->setBodyworkRightFrontDoor($bodyworkRightFrontDoor) +
                $this->classWeightedLightweight->setBodyworkLeftFrontDoor($bodyworkLeftFrontDoor) +
                $this->classWeightedLightweight->setBodyworkRightBackDoor($bodyworkRightBackDoor) +
                $this->classWeightedLightweight->setBodyworkLeftBackDoor($bodyworkLeftBackDoor)) / 13);
        return $this->classInspectionModel->insertInspectionBodywork($this->classWeightedLightweight->setBodyworkTrunk($bodyworkTrunk), $this->classWeightedLightweight->setBodyworkBumperFront($bodyworkBumperFront), $this->classWeightedLightweight->setBodyworkBumperBack($bodyworkBumperBack), $this->classWeightedLightweight->setBodyworkCowling($bodyworkCowling), $this->classWeightedLightweight->setBodyworkSoftTop($bodyworkSoftTop), $this->classWeightedLightweight->setBodyworkRightSide($bodyworkRightSide), $this->classWeightedLightweight->setBodyworkLeftSide($bodyworkLeftSide), $this->classWeightedLightweight->setBodyworkRightFender($bodyworkRightFender), $this->classWeightedLightweight->setBodyworkLeftFender($bodyworkLeftFender), $this->classWeightedLightweight->setBodyworkRightFrontDoor($bodyworkRightFrontDoor), $this->classWeightedLightweight->setBodyworkLeftFrontDoor($bodyworkLeftFrontDoor), $this->classWeightedLightweight->setBodyworkRightBackDoor($bodyworkRightBackDoor), $this->classWeightedLightweight->setBodyworkLeftBackDoor($bodyworkLeftBackDoor), $total);
    }

    private function insertElectricTeam($electricTeamConditionesAir, $electricTeamMidblock, $electricTeamHeating, $electricTeamRisesGlasses, $electricTeamElectricMirrors, $electricTeamFrontWindshieldWipers, $electricTeamBackWindshieldWipers, $electricTeamWhistle, $electricTeamRadio, $electricTeamTemperatureWitness, $electricTeamSpeedometer) {
        $total = 100 - (($this->classWeightedLightweight->setElectricTeamConditionerAir($electricTeamConditionesAir) +
                $this->classWeightedLightweight->setElectricTeamMidblock($electricTeamMidblock) +
                $this->classWeightedLightweight->setElectricTeamHeating($electricTeamHeating) +
                $this->classWeightedLightweight->setElectricTeamRisesGlasses($electricTeamRisesGlasses) +
                $this->classWeightedLightweight->setElectricTeamElectricMirrors($electricTeamElectricMirrors) +
                $this->classWeightedLightweight->setElectricTeamFrontWindshieldWipers($electricTeamFrontWindshieldWipers) +
                $this->classWeightedLightweight->setElectricTeamBackWindshieldWipers($electricTeamBackWindshieldWipers) +
                $this->classWeightedLightweight->setElectricTeamWhistle($electricTeamWhistle) +
                $this->classWeightedLightweight->setElectricTeamRadio($electricTeamRadio) +
                $this->classWeightedLightweight->setElectricTeamTemperatureWitness($electricTeamTemperatureWitness) +
                $this->classWeightedLightweight->setElectricTeamSpeedometer($electricTeamSpeedometer)) / 11);
        return $this->classInspectionModel->insertInspectionElectricTeam($this->classWeightedLightweight->setElectricTeamConditionerAir($electricTeamConditionesAir), $this->classWeightedLightweight->setElectricTeamMidblock($electricTeamMidblock), $this->classWeightedLightweight->setElectricTeamHeating($electricTeamHeating), $this->classWeightedLightweight->setElectricTeamRisesGlasses($electricTeamRisesGlasses), $this->classWeightedLightweight->setElectricTeamElectricMirrors($electricTeamElectricMirrors), $this->classWeightedLightweight->setElectricTeamFrontWindshieldWipers($electricTeamFrontWindshieldWipers), $this->classWeightedLightweight->setElectricTeamBackWindshieldWipers($electricTeamBackWindshieldWipers), $this->classWeightedLightweight->setElectricTeamWhistle($electricTeamWhistle), $this->classWeightedLightweight->setElectricTeamRadio($electricTeamRadio), $this->classWeightedLightweight->setElectricTeamTemperatureWitness($electricTeamTemperatureWitness), $this->classWeightedLightweight->setElectricTeamSpeedometer($electricTeamSpeedometer), $total);
    }

    private function insertStructure($structureEngineCradle, $structureRightStrirrup, $structureLeftStrirrup, $structureFront, $structureRightFrontMetalDust, $structureLeftFrontMetalDust, $structureRightBackMetalDust, $structureLeftBackMetalDust, $structureRightBar, $structureLeftBar, $structureBackPanel, $structureRightCentralParal, $structureLeftCentralParal, $structureRightParalPanoramic, $structureLeftParalPanoramic, $structureRightFrontParalDoor, $structureLeftFrontParalDoor, $structureBodyworkFloor, $structureRightFrontTipChassis, $structureLeftFrontTipChassis, $structureRightBackTipChassis, $structureLeftBackTipChassis, $structureRightScissors, $structureLeftScissors, $structureTorpedo, $structureRightTower, $structureLeftTower) {
        $total = 100 - (($this->classWeightedLightweight->setStructureEngineCraddle($structureEngineCradle) +
                $this->classWeightedLightweight->setStructureRightStrirrup($structureRightStrirrup) +
                $this->classWeightedLightweight->setStructureLeftStirrup($structureLeftStrirrup) +
                $this->classWeightedLightweight->setStructureFront($structureFront) +
                $this->classWeightedLightweight->setStructureRightFrontMetalDust($structureRightFrontMetalDust) +
                $this->classWeightedLightweight->setStructureLeftFrontMetalDust($structureLeftFrontMetalDust) +
                $this->classWeightedLightweight->setStructureRightBackMetalDust($structureRightBackMetalDust) +
                $this->classWeightedLightweight->setStructureLeftBackMetalDust($structureLeftBackMetalDust) +
                $this->classWeightedLightweight->setStructureRightBar($structureRightBar) +
                $this->classWeightedLightweight->setStructureLeftBar($structureLeftBar) +
                $this->classWeightedLightweight->setStructurePanelBack($structureBackPanel) +
                $this->classWeightedLightweight->setStructureRightCentralParal($structureRightCentralParal) +
                $this->classWeightedLightweight->setStructureLeftCentalParal($structureLeftCentralParal) +
                $this->classWeightedLightweight->setStructureRightParalPanoramic($structureRightParalPanoramic) +
                $this->classWeightedLightweight->setStructureLeftParalPanoramic($structureLeftParalPanoramic) +
                $this->classWeightedLightweight->setStructureRightParalFrontDoor($structureRightFrontParalDoor) +
                $this->classWeightedLightweight->setStructureLeftParalFrontDoor($structureLeftFrontParalDoor) +
                $this->classWeightedLightweight->setStructureFloorBodywork($structureBodyworkFloor) +
                $this->classWeightedLightweight->setStructureRightFrontTipChasis($structureRightFrontTipChassis) +
                $this->classWeightedLightweight->setStructureLeftFrontTipChasis($structureLeftFrontTipChassis) +
                $this->classWeightedLightweight->setStructureRightBackTipChasis($structureRightBackTipChassis) +
                $this->classWeightedLightweight->setStructureLeftBackTipChasis($structureLeftBackTipChassis) +
                $this->classWeightedLightweight->setStructureRightScissors($structureRightScissors) +
                $this->classWeightedLightweight->setStructureLeftScissors($structureLeftScissors) +
                $this->classWeightedLightweight->setStructureTorpedo($structureTorpedo) +
                $this->classWeightedLightweight->setStructureRightTower($structureRightTower) +
                $this->classWeightedLightweight->setStructureLeftTower($structureLeftTower)) / 27);
        return $this->classInspectionModel->insertInspectionStructure($this->classWeightedLightweight->setStructureEngineCraddle($structureEngineCradle), $this->classWeightedLightweight->setStructureRightStrirrup($structureRightStrirrup), $this->classWeightedLightweight->setStructureLeftStirrup($structureLeftStrirrup), $this->classWeightedLightweight->setStructureFront($structureFront), $this->classWeightedLightweight->setStructureRightFrontMetalDust($structureRightFrontMetalDust), $this->classWeightedLightweight->setStructureLeftFrontMetalDust($structureLeftFrontMetalDust), $this->classWeightedLightweight->setStructureRightBackMetalDust($structureRightBackMetalDust), $this->classWeightedLightweight->setStructureLeftBackMetalDust($structureLeftBackMetalDust), $this->classWeightedLightweight->setStructureRightBar($structureRightBar), $this->classWeightedLightweight->setStructureLeftBar($structureLeftBar), $this->classWeightedLightweight->setStructurePanelBack($structureBackPanel), $this->classWeightedLightweight->setStructureRightCentralParal($structureRightCentralParal), $this->classWeightedLightweight->setStructureLeftCentalParal($structureLeftCentralParal), $this->classWeightedLightweight->setStructureRightParalPanoramic($structureRightParalPanoramic), $this->classWeightedLightweight->setStructureLeftParalPanoramic($structureLeftParalPanoramic), $this->classWeightedLightweight->setStructureRightParalFrontDoor($structureRightFrontParalDoor), $this->classWeightedLightweight->setStructureLeftParalFrontDoor($structureLeftFrontParalDoor), $this->classWeightedLightweight->setStructureFloorBodywork($structureBodyworkFloor), $this->classWeightedLightweight->setStructureRightFrontTipChasis($structureRightFrontTipChassis), $this->classWeightedLightweight->setStructureLeftFrontTipChasis($structureLeftFrontTipChassis), $this->classWeightedLightweight->setStructureRightBackTipChasis($structureRightBackTipChassis), $this->classWeightedLightweight->setStructureLeftBackTipChasis($structureLeftBackTipChassis), $this->classWeightedLightweight->setStructureRightScissors($structureRightScissors), $this->classWeightedLightweight->setStructureLeftScissors($structureLeftScissors), $this->classWeightedLightweight->setStructureTorpedo($structureTorpedo), $this->classWeightedLightweight->setStructureRightTower($structureRightTower), $this->classWeightedLightweight->setStructureLeftTower($structureLeftTower), $total);
    }

    private function insertLeakage($steeringBox, $clutch, $dampers, $gearBox, $velocityBox, $hydraAddress, $oilMotor, $gas, $breaks, $clutchBomb) {
        $total = 100 - (($this->classWeightedLightweight->setLeakageSteeringBox($steeringBox) +
                $this->classWeightedLightweight->setLeakageClutch($clutch) +
                $this->classWeightedLightweight->setLeakageDampers($dampers) +
                $this->classWeightedLightweight->setLeakageGearbox($gearBox) +
                $this->classWeightedLightweight->setLeakageVelocityBox($velocityBox) +
                $this->classWeightedLightweight->setLeakageHydraAddress($hydraAddress) +
                $this->classWeightedLightweight->setLeakageOilMotor($oilMotor) +
                $this->classWeightedLightweight->setLeakageGas($gas) +
                $this->classWeightedLightweight->setLeakageBreaks($breaks) +
                $this->classWeightedLightweight->setLeakageBombClutch($clutchBomb)) / 10);
        return $this->classInspectionModel->insertInspectionLeakage($this->classWeightedLightweight->setLeakageSteeringBox($steeringBox), $this->classWeightedLightweight->setLeakageClutch($clutch), $this->classWeightedLightweight->setLeakageDampers($dampers), $this->classWeightedLightweight->setLeakageGearbox($gearBox), $this->classWeightedLightweight->setLeakageVelocityBox($velocityBox), $this->classWeightedLightweight->setLeakageHydraAddress($hydraAddress), $this->classWeightedLightweight->setLeakageOilMotor($oilMotor), $this->classWeightedLightweight->setLeakageGas($gas), $this->classWeightedLightweight->setLeakageBreaks($breaks), $this->classWeightedLightweight->setLeakageBombClutch($clutchBomb), $total);
    }

    private function insertInterior($carpetFloor, $carpetCeiling, $partmentTray, $purseDoors, $seatBelt, $chairState, $gloveBox, $millare, $parasol, $upholstery, $upholsteryChair) {
        $total = 100 - (($this->classWeightedLightweight->setInteriorCarpetFloor($carpetFloor) +
                $this->classWeightedLightweight->setInteriorCarpetCeiling($carpetCeiling) +
                $this->classWeightedLightweight->setInteriorPartmentTray($partmentTray) +
                $this->classWeightedLightweight->setInteriorPurseDoors($purseDoors) +
                $this->classWeightedLightweight->setInteriorSeatBelt($seatBelt) +
                $this->classWeightedLightweight->setInteriorChairState($chairState) +
                $this->classWeightedLightweight->setInteriorGloveBox($gloveBox) +
                $this->classWeightedLightweight->setInteriorMillare($millare) +
                $this->classWeightedLightweight->setInteriorParasol($parasol) +
                $this->classWeightedLightweight->setInteriorUpholstery($upholstery) +
                $this->classWeightedLightweight->setInteriorChairUpholstery($upholsteryChair)) / 11);
        return $this->classInspectionModel->insertInspectionInterior($this->classWeightedLightweight->setInteriorCarpetFloor($carpetFloor), $this->classWeightedLightweight->setInteriorCarpetCeiling($carpetCeiling), $this->classWeightedLightweight->setInteriorPartmentTray($partmentTray), $this->classWeightedLightweight->setInteriorPurseDoors($purseDoors), $this->classWeightedLightweight->setInteriorSeatBelt($seatBelt), $this->classWeightedLightweight->setInteriorChairState($chairState), $this->classWeightedLightweight->setInteriorGloveBox($gloveBox), $this->classWeightedLightweight->setInteriorMillare($millare), $this->classWeightedLightweight->setInteriorParasol($parasol), $this->classWeightedLightweight->setInteriorUpholstery($upholstery), $this->classWeightedLightweight->setInteriorChairUpholstery($upholsteryChair), $total);
    }

    private function insertRims($rightFront, $leftFront, $replacement, $rightBack, $leftBack, $rightInteriorBack, $leftInteriorBack) {
        $total = 100 - (($this->classWeightedLightweight->setRimsFrontRight($rightFront) +
                $this->classWeightedLightweight->setRimsFrontLeft($leftFront) +
                $this->classWeightedLightweight->setRimsReplacement($replacement) +
                $this->classWeightedLightweight->setRimsBackRight($rightBack) +
                $this->classWeightedLightweight->setRimsBackLeft($leftBack) +
                $this->classWeightedLightweight->setRimsBackInteriorRight($rightInteriorBack) +
                $this->classWeightedLightweight->setRimsBackInteriorLeft($leftInteriorBack)) / 7);
        return $this->classInspectionModel->insertInspectionRims($this->classWeightedLightweight->setRimsFrontRight($rightFront), $this->classWeightedLightweight->setRimsFrontLeft($leftFront), $this->classWeightedLightweight->setRimsReplacement($replacement), $this->classWeightedLightweight->setRimsBackRight($rightBack), $this->classWeightedLightweight->setRimsBackLeft($leftBack), $this->classWeightedLightweight->setRimsBackInteriorRight($rightInteriorBack), $this->classWeightedLightweight->setRimsBackInteriorLeft($leftInteriorBack), $total);
    }

    private function insertLigths($rightFrontTurn, $leftFrontTurn, $rightBackTurn, $leftBackTurn, $scouts, $rightStreetlight, $leftStreetlight, $highLight, $fog, $turn, $parking, $break, $rightMiddle, $leftMiddle, $ceiling, $reverse, $rightStop, $leftStop, $witnessAbc, $witnesAirbaag) {
        $total = 100 - (($this->classWeightedLightweight->setLigthsRightFrontTurn($rightFrontTurn) +
                $this->classWeightedLightweight->setLigthsLeftFrontTurn($leftFrontTurn) +
                $this->classWeightedLightweight->setLigthsRightBackTurn($rightBackTurn) +
                $this->classWeightedLightweight->setLigthsLeftBackTurn($leftBackTurn) +
                $this->classWeightedLightweight->setLigthsScouts($scouts) +
                $this->classWeightedLightweight->setLigthsRightStreelight($rightStreetlight) +
                $this->classWeightedLightweight->setLigthsLeftStreelight($leftStreetlight) +
                $this->classWeightedLightweight->setLigthsHighLight($highLight) +
                $this->classWeightedLightweight->setLigthsFog($fog) +
                $this->classWeightedLightweight->setLigthsTurn($turn) +
                $this->classWeightedLightweight->setLigthsParking($parking) +
                $this->classWeightedLightweight->setLigthsBreak($break) +
                $this->classWeightedLightweight->setLigthsRightMiddle($rightMiddle) +
                $this->classWeightedLightweight->setLigthsLeftMiddle($leftMiddle) +
                $this->classWeightedLightweight->setLigthsCeiling($ceiling) +
                $this->classWeightedLightweight->setLigthsReverse($reverse) +
                $this->classWeightedLightweight->setLigthsRightStop($rightStop) +
                $this->classWeightedLightweight->setLigthsLeftStop($leftStop) +
                $this->classWeightedLightweight->setLigthsWitnessAbc($witnessAbc) +
                $this->classWeightedLightweight->setLigthsWitnessAirbag($witnesAirbaag)) / 20);
        return $this->classInspectionModel->insertInspectionLight($this->classWeightedLightweight->setLigthsRightFrontTurn($rightFrontTurn), $this->classWeightedLightweight->setLigthsLeftFrontTurn($leftFrontTurn), $this->classWeightedLightweight->setLigthsRightBackTurn($rightBackTurn), $this->classWeightedLightweight->setLigthsLeftBackTurn($leftBackTurn), $this->classWeightedLightweight->setLigthsScouts($scouts), $this->classWeightedLightweight->setLigthsRightStreelight($rightStreetlight), $this->classWeightedLightweight->setLigthsLeftStreelight($leftStreetlight), $this->classWeightedLightweight->setLigthsHighLight($highLight), $this->classWeightedLightweight->setLigthsFog($fog), $this->classWeightedLightweight->setLigthsTurn($turn), $this->classWeightedLightweight->setLigthsParking($parking), $this->classWeightedLightweight->setLigthsBreak($break), $this->classWeightedLightweight->setLigthsRightMiddle($rightMiddle), $this->classWeightedLightweight->setLigthsLeftMiddle($leftMiddle), $this->classWeightedLightweight->setLigthsCeiling($ceiling), $this->classWeightedLightweight->setLigthsReverse($reverse), $this->classWeightedLightweight->setLigthsRightStop($rightStop), $this->classWeightedLightweight->setLigthsLeftStop($leftStop), $this->classWeightedLightweight->setLigthsWitnessAbc($witnessAbc), $this->classWeightedLightweight->setLigthsWitnessAirbag($witnesAirbaag), $total);
    }

    private function insertFluidLevels($oilMotor, $hydraulicDirection, $hydraulicClutch, $breaks, $windshield, $refrigerant) {
        $total = 100 - (($this->classWeightedLightweight->setFluidsOilMotor($oilMotor) +
                $this->classWeightedLightweight->setFluidsHidraulicAddress($hydraulicDirection) +
                $this->classWeightedLightweight->setFluidsHydraulicClutch($hydraulicClutch) +
                $this->classWeightedLightweight->setFluidsBreaks($breaks) +
                $this->classWeightedLightweight->setFluidsWindshield($windshield) +
                $this->classWeightedLightweight->setFluidsRefrigerant($refrigerant)) / 6);
        return $this->classInspectionModel->insertInspectionFluidLevels($this->classWeightedLightweight->setFluidsOilMotor($oilMotor), $this->classWeightedLightweight->setFluidsHidraulicAddress($hydraulicDirection), $this->classWeightedLightweight->setFluidsHydraulicClutch($hydraulicClutch), $this->classWeightedLightweight->setFluidsBreaks($breaks), $this->classWeightedLightweight->setFluidsWindshield($windshield), $this->classWeightedLightweight->setFluidsRefrigerant($refrigerant), $total);
    }

    private function insertPaint($paint) {
        $total = 100 - ($this->classWeightedLightweight->setPaint($paint) / 1);
        return $this->classInspectionModel->insertInspectionPaint($this->classWeightedLightweight->setPaint($paint), $total);
    }

    private function insertTypePaint($typePaint) {
        //$total = 100 - ($this->classWeightedLightweight->setPaintType($typePaint) / 1);
        $total = 90;
        return $this->classInspectionModel->insertInspectionTypePaint($typePaint, $total);
    }

    private function insertGlasses($right_custodian, $leftCustodian, $interiorMirror, $rightMoon, $leftMoon, $frontPanoramic, $backPanoramic, $rightSide, $leftSide, $rightFront, $leftFront, $rightBack, $leftBack) {
        $total = 100 - (($this->classWeightedLightweight->setGlassesRightCustodian($right_custodian) +
                $this->classWeightedLightweight->setGlassesLeftCustodian($leftCustodian) +
                $this->classWeightedLightweight->setGlassesInteriorMirror($interiorMirror) +
                $this->classWeightedLightweight->setGlassesRightMoon($rightMoon) +
                $this->classWeightedLightweight->setGlassesLeftMoon($leftMoon) +
                $this->classWeightedLightweight->setGlassesFrontPanoramic($frontPanoramic) +
                $this->classWeightedLightweight->setGlassesBackPanoramic($backPanoramic) +
                $this->classWeightedLightweight->setGlassesRightSide($rightSide) +
                $this->classWeightedLightweight->setGlassesLeftSide($leftSide) +
                $this->classWeightedLightweight->setGlassesRightFront($rightFront) +
                $this->classWeightedLightweight->setGlassesLeftFront($leftFront) +
                $this->classWeightedLightweight->setGlassesRightBack($rightBack) +
                $this->classWeightedLightweight->setGlassesLeftBack($leftBack)) / 13);
        return $this->classInspectionModel->insertInspectionGlasses($this->classWeightedLightweight->setGlassesRightCustodian($right_custodian), $this->classWeightedLightweight->setGlassesLeftCustodian($leftCustodian), $this->classWeightedLightweight->setGlassesInteriorMirror($interiorMirror), $this->classWeightedLightweight->setGlassesRightMoon($rightMoon), $this->classWeightedLightweight->setGlassesLeftMoon($leftMoon), $this->classWeightedLightweight->setGlassesFrontPanoramic($frontPanoramic), $this->classWeightedLightweight->setGlassesBackPanoramic($backPanoramic), $this->classWeightedLightweight->setGlassesRightSide($rightSide), $this->classWeightedLightweight->setGlassesLeftSide($leftSide), $this->classWeightedLightweight->setGlassesRightFront($rightFront), $this->classWeightedLightweight->setGlassesLeftFront($leftFront), $this->classWeightedLightweight->setGlassesRightBack($rightBack), $this->classWeightedLightweight->setGlassesLeftBack($leftBack), $total);
    }

}

new Inspection ();
?>