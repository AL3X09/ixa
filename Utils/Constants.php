<?php

class Constants {

    // Constantes de conexion
    const SERVER = "localhost";
    const DB_INSPECCIAUTOS = "inspexiautos"; // Ambiente de pruebas
    const USER = "root"; // Ambiente de pruebas
    const PASSWORD = ""; // ambiente de pruebas
// 	const DB_INSPECCIAUTOS = "inspexiautos";//Ambiente de produccion
// 	const USER = "inspexiautos";//Ambiente de produccion
// 	const PASSWORD = "1nsp3x14ut0s.2016";//ambiente de produccion
    // Caracteres especiales en codigos html
    const aACUTE = "&aacute;";
    const eACUTE = "&aacute;";
    const iACUTE = "&iacute;";
    const oACUTE = "&oacute;";
    const uACUTE = "&uacute;";
    const nTILDE = "&ntilde;";
    const AACUTE = "&Aacute;";
    const EACUTE = "&Eacute;";
    const IACUTE = "&Iacute;";
    const OACUTE = "&Oacute;";
    const UACUTE = "&Uacute;";
    const NTILDE = "&Ntilde;";
    const QUOT = "&quot;";
    const SPACE = "$#32;";
    const ENTER = "\n";
    const ROUTE_FILES = "../Files/";
    // Constantes de mensajes
    const MSS_QUERY_NO_EXECUTED = "No se pudo ejecutar la consulta, por favor intente mas tarde.";
    // MSS de login
    const MSS_USER_UNREGISTERED = 'No se ecuentra registrado el usuario.';
    const MSS_WRONG_DATA = 'Los datos ingresados no corresponden, por favor intente otra vez.';
    const MSS_INACTIVE_USER = 'Usuario inactivo, por favor comuniquese con el administrador e intente nuevamente.';
    // constantes de errores
    const ERR_NO_ACTION = "Atenci�n no se pudo realiza la accion, Error:";
    // CONSTANTES DE CONSULTAS
    // Consultas de Usuario
    const SP_SELECT_ALL_USER = "CALL sp_select_all_user();";
    const SP_SELECT_USER = "CALL sp_select_user(:name_user);";
    const SP_SELECT_MENU_BY_ROL = "CALL sp_select_menu_by_rol( :rol )";
    // Consulta de configuracion
    const SP_SELECT_DOCUMENT_TYPE = "CALL sp_select_all_document_type();"; // Tipos de documentos
    const SP_SELECT_ALL_CITY = "CALL sp_select_all_city();"; // cuidades
    const SP_SELECT_ALL_TYPE_CLIENT = "CALL sp_select_all_type_client();"; // TUPOS DE USUARIO
    const SP_SELECT_ALL_TYPE_SERVICE = "CALL sp_select_all_type_service();"; // TIPOS DE SERVICIO
    const SP_SELECT_LAST_FASECOLDA_FILE = "CALL sp_select_last_fasecolda_file();";
    const SP_SELECT_BRAND_FASECOLDA_CODE = "CALL sp_select_brand_fasecolda_codes();";
    const SP_SELECT_LINE_BY_BRAND = "CALL sp_select_line_by_brand(:brand);";
    const SP_SELECT_TYPE_REFERENCE = "CALL sp_select_type_reference(:brand, :line);";
    const SP_SELECT_CYLINDER_CAPACITY = "CALL sp_select_cylinder_capacity(:brand, :line, :type_reference);";
    const SP_SELECT_BODYWORK = "CALL sp_select_bodywork(:brand, :line, :type_reference, :cylinder_capacity);";
    const SP_SELECT_ALL_SERVICE = "CALL sp_select_all_service();";
    const SP_SELECT_ALL_GAS = "CALL sp_select_all_gas();";
    const SP_SELECT_FASECOLDA_STRUCTURE = "CALL sp_select_fasecolda_structure();";
    const SP_INSERT_CLIENT = "CALL sp_insert_client (:name, :lastname, :id_document_type, :identification_number, :id_expedition_city, :phone,:extention, :cellphone, :address);";
    const SP_SELECT_CLIENT_BY_IDENTIFICATION_NUMBER = "CALL sp_select_client_by_identification_number(:identification_number);";
    const SP_INSERT_VEHICLE = "CALL sp_insert_vehicle( :identification_number, :license_plate, :brand, :line, :type_reference, :cylinder_capacity, :service, :bodywork, :gas, :capacity, :model, :color, :motor_number, :serie_number, :chasis_number);";
    const SP_INSERT_REQUEST = "CALL sp_insert_request(:id_client,:id_type_client,:id_type_service,:id_vehicle,:turn,:headquarters,:requested_by,:insured,:intermediary,:fasecolda_code,:value_fasecolda,:digitation,:inspection,:vta,:tecnical_control,:status,:id_user);";
    const SP_INSERT_FILES = "CALL sp_insert_files(:identification_number, :license_plate, :route, :files);";
    const SP_SELECT_ALL_REQUEST = "CALL sp_select_binnacle();";
    const SP_SELECT_FASECOLDA_VALUE_CODE = "CALL sp_select_fasecolda_value_code(:brand, :line, :type_reference, :cylinder_capacity, :class, :year)";
    const SP_SELECT_REQUEST_INSPECTION_BY_ID = "CALL sp_select_request_inspection_by_id(:id);";
    const SP_SELECT_ITEM_INSPECTION = "CALL sp_select_item_inspection();";
    const SP_SELECT_BODYWORK_STATUS = "CALL sp_select_bodywork_status();";
    const SP_SELECT_ELECTRIC_TEAM_STATUS = "CALL sp_select_electric_team_status();";
    const SP_SELECT_ALL_TYPE_VEHICLE = "CALL sp_select_all_type_vehicle();";
    const SP_SELECT_INSPECTION_LIGHTWEIGHT = "CALL sp_select_inspection_lightweight();";
    const SP_SELECT_INSPECTION_HEAVY = "CALL sp_select_inspection_heavy();";
    const SP_SELECT_INSPECTION_MOTORCYCLE = "CALL sp_select_inspection_motorcycle();";
    const SP_SELECT_STRUCTURE_STATUS = "CALL sp_select_structure_status();";
    const SP_SELECT_LEAKAGE_STATUS = "CALL sp_select_leakage_status();";
    const SP_SELECT_LIGTHS_STATUS = "CALL sp_select_ligths_status();";
    const SP_SELECT_INTERIOR_STATUS = "CALL sp_select_interior_status();";
    const SP_SELECT_RIMS_STATUS = "CALL sp_select_rims_status();";
    const SP_SELECT_FLUID_LEVELS_STATUS = "CALL sp_select_fluid_levels_status();";
    const SP_SELECT_GLASSES_STATUS = "CALL sp_select_glasses_status();";
    const SP_SELECT_PAINT_STATUS = "CALL sp_select_paint_status();";
    const SP_SELECT_TYPE_PAINT_STATUS = "CALL sp_select_type_paint_status();";
    // CONSTANTE DE INSPECCCION
    const SP_INSERT_INSPECTION = "CALL sp_insert_inspection(:id_request, :id_type_vehicle, :mileage, :discount, :observations, :files_systems, :files_vehicle, :approved);";
    const SP_INSERT_INSPECTION_BODYWORK = "CALL sp_insert_inspection_bodywork(:trunk,:front_bumper,:back_bumper,:cowling,:soft_top,:right_side,:left_side,:right_fender,:left_fender,:right_front_door,:left_front_door,:right_back_door,:left_back_door,:total);";
    const SP_INSERT_INSPECTION_ELECTRIC_TEAM = "CALL sp_insert_inspection_electric_team(:conditioner_air,:midblock,:heating,:rises_glasses,:electric_mirrors,:front_windshield_wipers,:back_windshield_wipers,:whistle,:radio,:temperature_witness,:speedometer,:total);";
    const SP_INSERT_INSPECTION_STRUCTURE = "CALL sp_insert_inspection_structure(:engine_cradle,:right_stirrup,:left_strirrup, :front, :right_front_metal_dust, :left_front_metal_dust, :right_back_metal_dust, :left_back_metal_dust, :right_bar, :left_bar, :panel_back, :right_central_paral, :left_central_paral, :right_panoramic_paral, :left_panoramic_paral, :right_front_paral_door, :left_front_paral_door, :floor_bodywork, :right_front_tip_chasis, :left_front_tip_chasis, :right_back_tip_chassis, :left_back_tip_chassis, :right_scissors, :left_scissors, :torpedo, :right_tower, :left_tower, :total);";
    const SP_INSERT_INSPECTION_FLUID_LEVELS = "CALL sp_insert_inspection_fluid_levels(:oil_motor, :hydraulic_direction, :hydraulic_clutch, :breaks, :windshield, :refrigerant, :total);";
    const SP_INSERT_INSPECTION_GLASSES = "CALL sp_insert_inspection_glasses( :right_custodian, :left_custodian, :interior_mirror, :right_moon, :left_moon, :front_panoramic, :back_panoramic, :right_side, :left_side, :right_front, :left_front, :right_back, :left_back, :total);";
    const SP_INSERT_INSPECTION_INTERIOR = "CALL sp_insert_inspection_interior( :carpet_floor, :carpet_ceiling, :partment_tray, :purse_doors, :seat_belt, :chair_state, :glove_box, :millare, :parasol, :upholstery, :upholstery_chair, :total);";
    const SP_INSERT_INSPECTION_LEAKAGE = "CALL sp_insert_inspection_leakage( :steering_box, :clutch, :dampers, :gear_box, :velocity_box, :hydra_address, :oil_motor, :gas, :breaks, :clutch_bomb, :total);";
    const SP_INSERT_INSPECTION_LIGHT = "CALL sp_insert_inspection_lights( :right_front_turn, :left_front_turn, :right_back_turn, :left_back_turn, :scouts, :right_streetlight, :left_streetlight, :high_light, :fog, :turn, :parking, :break, :right_middle, :left_middle, :ceiling, :reverse, :right_stop, :left_stop, :witness_abc, :witness_airbag, :total);";
    const SP_INSERT_INSPECTION_PAINT = "CALL sp_insert_inspection_paint( :paint, :total);";
    const SP_INSERT_INSPECTION_RIMS = "CALL sp_insert_inspection_rims( :right_front, :left_front, :replacement, :right_back, :left_back, :right_interior_back, :left_interior_back, :total)";
    const SP_INSERT_INSPECTION_TYPE_PAINT = "CALL sp_insert_inspection_type_paint( :type_paint, :total);";
    //
    const SP_UPDATE_REQUEST_INSPECTION = "CALL sp_update_request_inspection(:request);";
    const SP_INSERT_VTA = "CALL sp_insert_vta(:id_request, :system_files, :comment);";
    const SP_UPDATE_REQUEST_VTA = "CALL sp_update_request_vta(:request);";
    const SP_SELECT_REQUEST_INFORMATION = "CALL sp_select_request_information(:request);";

}

?>