<?php

class WeightedLightweight {

    public function __construct() {
        
    }

    // --------------------CARROCERIA----------------------------
    /*
     * Baul
     */
    public function setBodyworkTrunk($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 1;
                break;
        }
    }

    /*
     * Bomper delantero
     */

    public function setBodyworkBumperBack($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 8;
                break;
            case 2 : // Golpe fuerte
                return 10;
                break;
            case 3 : // reparacion mala
                return 5;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 1;
                break;
        }
    }

    /*
     * bomper trasero
     */

    public function setBodyworkBumperFront($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 8;
                break;
            case 2 : // Golpe fuerte
                return 10;
                break;
            case 3 : // reparacion mala
                return 5;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 1;
                break;
        }
    }

    /*
     * capot
     */

    public function setBodyworkCowling($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * capota
     */

    public function setBodyworkSoftTop($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 20;
                break;
            case 2 : // Golpe fuerte
                return 22;
                break;
            case 3 : // reparacion mala
                return 20;
                break;
            case 4 : // repintado
                return 2;
                break;
            case 5 : // sumido
                return 1;
                break;
        }
    }

    /*
     * costado derecho
     */

    public function setBodyworkRightSide($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 17;
                break;
            case 2 : // Golpe fuerte
                return 19;
                break;
            case 3 : // reparacion mala
                return 15;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * costado isquierdo
     */

    public function setBodyworkLeftSide($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 17;
                break;
            case 2 : // Golpe fuerte
                return 19;
                break;
            case 3 : // reparacion mala
                return 15;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * guardafando derecho
     */

    public function setBodyworkRightFender($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * guardafango izquierdo
     */

    public function setBodyworkLeftFender($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * Puerta delantera derecha
     */

    public function setBodyworkRightFrontDoor($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * Puerta delantera Izquierda
     */

    public function setBodyworkLeftFrontDoor($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * Puerta trasera derecha
     */

    public function setBodyworkRightBackDoor($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    /*
     * Puerta trasera Izquierda
     */

    public function setBodyworkLeftBackDoor($value) {
        switch ($value) {
            case 0 : // Sin da�os
                return 0;
                break;
            case 1 : // Golpe medio
                return 12;
                break;
            case 2 : // Golpe fuerte
                return 14;
                break;
            case 3 : // reparacion mala
                return 10;
                break;
            case 4 : // repintado
                return 1;
                break;
            case 5 : // sumido
                return 2;
                break;
        }
    }

    // --------------------EQUIPO ELECTRICO----------------------
    /*
     * Aire acondicionado
     */
    public function setElectricTeamConditionerAir($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * Bloqueo central
     */

    public function setElectricTeamMidblock($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * Calefaccion
     */

    public function setElectricTeamHeating($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * Elevavidrios electrico
     */

    public function setElectricTeamRisesGlasses($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * Espejos electricos
     */

    public function setElectricTeamElectricMirrors($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * Limpia brisas delantero
     */

    public function setElectricTeamFrontWindshieldWipers($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * limpiabrisas trasero
     */

    public function setElectricTeamBackWindshieldWipers($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * pito
     */

    public function setElectricTeamWhistle($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * Radio
     */

    public function setElectricTeamRadio($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * testigo temperatura
     */

    public function setElectricTeamTemperatureWitness($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    /*
     * velocimetro
     */

    public function setElectricTeamSpeedometer($value) {
        switch ($value) {
            case 0 :
                return 0;
                break;
            case 6 :
                return 10;
                break;
        }
    }

    // --------------------- ESTRUCTURA ---------------------------
    /*
     * Cuan Motor
     */
    public function setStructureEngineCraddle($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 42;
                break;
            case 8 : // Deformacion medio
                return 44;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 0;
                break;
            case 11 : // Reparacion Buena
                return 1;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 10;
                break;
        }
    }

    /*
     * Estribo derecho
     */

    public function setStructureRightStrirrup($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 19;
                break;
            case 8 : // Deformacion medio
                return 17;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 15;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Estrivo Izquierdo
     */

    public function setStructureLeftStirrup($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 24;
                break;
            case 8 : // Deformacion medio
                return 17;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 15;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * frontal
     */

    public function setStructureFront($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 25;
                break;
            case 8 : // Deformacion medio
                return 24;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 23;
                break;
            case 13 : // Sumido
                return 1;
                break;
        }
    }

    /*
     * Guarda polvo metalico frontal derecho
     */

    public function setStructureRightFrontMetalDust($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 14;
                break;
            case 8 : // Deformacion medio
                return 12;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 10;
                break;
            case 13 : // Sumido
                return 2;
                break;
        }
    }

    /*
     * Guarda polvo metalico frontal izquierdo
     *
     */

    public function setStructureLeftFrontMetalDust($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 14;
                break;
            case 8 : // Deformacion medio
                return 12;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 10;
                break;
            case 13 : // Sumido
                return 2;
                break;
        }
    }

    /*
     * guardapolvo metalico trasero derecho
     */

    public function setStructureRightBackMetalDust($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 14;
                break;
            case 8 : // Deformacion medio
                return 12;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 10;
                break;
            case 13 : // Sumido
                return 2;
                break;
        }
    }

    /*
     * Guardapolvo metalico trasero izquierdo
     */

    public function setStructureLeftBackMetalDust($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 14;
                break;
            case 8 : // Deformacion medio
                return 12;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 10;
                break;
            case 13 : // Sumido
                return 2;
                break;
        }
    }

    /*
     * Larguero derecho
     */

    public function setStructureRightBar($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Larguero Izquierdo
     */

    public function setStructureLeftBar($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Panel Trasero
     */

    public function setStructurePanelBack($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 25;
                break;
            case 8 : // Deformacion medio
                return 24;
                break;
            case 6 : // Malo
                return 20;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 1;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 23;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * paral central derecho
     */

    public function setStructureRightCentralParal($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * paral central izquierdo
     */

    public function setStructureLeftCentalParal($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Paral panoramico derecho
     */

    public function setStructureRightParalPanoramic($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * paral panoramico izquierdo
     */

    public function setStructureLeftParalPanoramic($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Paral Puerta delantera derecha
     */

    public function setStructureRightParalFrontDoor($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Paral Puerta delantera izquierda
     */

    public function setStructureLeftParalFrontDoor($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Piso Carroceria
     */

    public function setStructureFloorBodywork($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 21;
                break;
            case 8 : // Deformacion medio
                return 19;
                break;
            case 6 : // Malo
                return 21;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 17;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Punta chasis delantero derecho
     */

    public function setStructureRightFrontTipChasis($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Punta chasis delantero izquierdo
     */

    public function setStructureLeftFrontTipChasis($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Punta chasis trasero derecho
     */

    public function setStructureRightBackTipChasis($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Punta chasis trasero Izauiqerdo
     */

    public function setStructureLeftBackTipChasis($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Tijera derecha
     */

    public function setStructureRightScissors($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 10;
                break;
            case 8 : // Deformacion medio
                return 10;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 9 : // Golpe
                return 10;
                break;
            case 10 : // Rayon
                return 10;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 10;
                break;
            case 13 : // Sumido
                return 10;
                break;
        }
    }

    /*
     * Tijera Izquierda
     */

    public function setStructureLeftScissors($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 10;
                break;
            case 8 : // Deformacion medio
                return 10;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 9 : // Golpe
                return 10;
                break;
            case 10 : // Rayon
                return 10;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 10;
                break;
            case 13 : // Sumido
                return 10;
                break;
        }
    }

    /*
     * torpedo
     */

    public function setStructureTorpedo($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Torre derecha
     */

    public function setStructureRightTower($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    /*
     * Torre izquierda
     */

    public function setStructureLeftTower($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 7 : // Deformacion Fuerte
                return 44;
                break;
            case 8 : // Deformacion medio
                return 42;
                break;
            case 6 : // Malo
                return 50;
                break;
            case 9 : // Golpe
                return 0;
                break;
            case 10 : // Rayon
                return 2;
                break;
            case 11 : // Reparacion Buena
                return 0;
                break;
            case 12 : // Reparacion Mala
                return 40;
                break;
            case 13 : // Sumido
                return 5;
                break;
        }
    }

    // ------------------------- FUGAS -----------------------

    /*
     * Caja direccion
     */
    public function setLeakageSteeringBox($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Embrague
     */

    public function setLeakageClutch($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga aceites amortiguadores
     */

    public function setLeakageDampers($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga aceite caja transmision
     */

    public function setLeakageGearbox($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga aceite caja de velocidad
     */

    public function setLeakageVelocityBox($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga aceite diteccion hydra
     */

    public function setLeakageHydraAddress($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga aceite motor
     */

    public function setLeakageOilMotor($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga gasolina
     */

    public function setLeakageGas($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga liquido de frenos
     */

    public function setLeakageBreaks($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * fuga liquido bomba embrague
     */

    public function setLeakageBombClutch($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    // ----------------- INTERIORES ------------------------

    /*
     * Alfombra Piso
     */
    public function setInteriorCarpetFloor($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * alfombra techo
     */

    public function setInteriorCarpetCeiling($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Bandeja porta objetos
     */

    public function setInteriorPartmentTray($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * carteras puertas
     */

    public function setInteriorPurseDoors($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * cinturones de seguridad
     */

    public function setInteriorSeatBelt($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * estado sillas
     */

    public function setInteriorChairState($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * guantera
     */

    public function setInteriorGloveBox($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * millare
     */

    public function setInteriorMillare($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * parasoles
     */

    public function setInteriorParasol($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * tapiceria
     */

    public function setInteriorUpholstery($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Tapiceria asientos
     */

    public function setInteriorChairUpholstery($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    // ---------------- RUEDAS O LLANTAS ----------------------
    /*
     * Delantera trasera
     */
    public function setRimsFrontRight($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    /*
     *
     * Delantera Izquierda
     */

    public function setRimsFrontLeft($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    /*
     * Repuesto
     */

    public function setRimsReplacement($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    /*
     * Trasera derecha
     */

    public function setRimsBackRight($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    /*
     * Trasera Izquierda
     */

    public function setRimsBackLeft($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    /*
     * Trasera interio derecha
     */

    public function setRimsBackInteriorRight($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    /*
     * Trasera interior izquierda
     */

    public function setRimsBackInteriorLeft($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 14 : // 10
                return 10;
                break;
            case 15 : // 20
                return 20;
                break;
            case 16 : // 30
                return 30;
                break;
            case 17 : // 40
                return 40;
                break;
            case 18 : // 50
                return 50;
                break;
            case 19 : // 60
                return 60;
                break;
            case 20 : // 70
                return 70;
                break;
            case 21 : // 80
                return 80;
                break;
            case 22 : // 90
                return 90;
                break;
        }
    }

    // ---------------------------LUCES ---------------------------------

    /*
     * Direccional delantera derecha
     */
    public function setLigthsRightFrontTurn($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Direccional delantera Izquierda
     */

    public function setLigthsLeftFrontTurn($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Direccional trasera derecha
     */

    public function setLigthsRightBackTurn($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Direccional trasera Izquierda
     */

    public function setLigthsLeftBackTurn($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Exploradoras
     */

    public function setLigthsScouts($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Farola derecha
     */

    public function setLigthsRightStreelight($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Farola izquierda
     */

    public function setLigthsLeftStreelight($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Lu Alta
     */

    public function setLigthsHighLight($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Luz antiniebla
     */

    public function setLigthsFog($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Luz Direccionales
     */

    public function setLigthsTurn($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Luz estacionamiento
     */

    public function setLigthsParking($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * luz freno
     */

    public function setLigthsBreak($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Luz Media derecha
     */

    public function setLigthsRightMiddle($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * luz media izquierda
     */

    public function setLigthsLeftMiddle($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Luz techo
     */

    public function setLigthsCeiling($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Luz reversa
     */

    public function setLigthsReverse($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Stop derecho
     */

    public function setLigthsRightStop($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * Stop Izquierdo
     */

    public function setLigthsLeftStop($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * tertigo abc
     */

    public function setLigthsWitnessAbc($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    /*
     * testigo airbag
     */

    public function setLigthsWitnessAirbag($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
            case 23 : // Fisura
                return 10;
                break;
            case 24 : // Picado
                return 10;
                break;
        }
    }

    // ------------------------NIVEL DE FLUIDOS -----------------------------

    /*
     * Aceite Motor
     */
    public function setFluidsOilMotor($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Direccion hidraulica
     */

    public function setFluidsHidraulicAddress($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Embregue hidrulico
     */

    public function setFluidsHydraulicClutch($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * frenos
     */

    public function setFluidsBreaks($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * parabrisas
     */

    public function setFluidsWindshield($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * refrigerante
     */

    public function setFluidsRefrigerant($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    // ------------------------ Pinturas ------------------------

    /*
     * Pintura
     */
    public function setPaint($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * pintura tipo
     */

    public function setPaintType($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 25 : // Agua
                return 10;
                break;
            case 26 : // Metalizada
                return 10;
                break;
            case 27 : // perlada
                return 10;
                break;
            case 28 : // plana
                return 10;
                break;
        }
    }

    // ------------------------ VIDRIOS -------------------

    /*
     * Custodio derecho
     */
    public function setGlassesRightCustodian($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Custodio izquierdo
     */

    public function setGlassesLeftCustodian($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Espejo interior
     */

    public function setGlassesInteriorMirror($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Luneta derecha
     */

    public function setGlassesRightMoon($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * luneta izquierda
     */

    public function setGlassesLeftMoon($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Panoramico delantero
     */

    public function setGlassesFrontPanoramic($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Panoramico trasero
     */

    public function setGlassesBackPanoramic($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * vidrio costado derecho
     */

    public function setGlassesRightSide($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Costado Izquierod
     */

    public function setGlassesLeftSide($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Vidrio delantero derecho
     */

    public function setGlassesRightFront($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * vidrio delantero izquierdo
     */

    public function setGlassesLeftFront($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Vidrio trasero derecho
     */

    public function setGlassesRightBack($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

    /*
     * Vidrio trasero izquierdo
     */

    public function setGlassesLeftBack($value) {
        switch ($value) {
            case 0 : // Sin da�o
                return 0;
                break;
            case 6 : // Malo
                return 10;
                break;
        }
    }

}
