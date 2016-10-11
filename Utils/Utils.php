<?php

class Utils {

    /**
     * Reemplaza caracteres especiales por los codigos html
     * 
     * @param unknown $string
     */
    public function specialCharacters($string) {
        $string = str_replace("�", Constants::aACUTE, $string);
        $string = str_replace("�", Constants::eACUTE, $string);
        $string = str_replace("�", Constants::iACUTE, $string);
        $string = str_replace("�", Constants::oACUTE, $string);
        $string = str_replace("�", Constants::uACUTE, $string);
        $string = str_replace("�", Constants::AACUTE, $string);
        $string = str_replace("�", Constants::EACUTE, $string);
        $string = str_replace("�", Constants::IACUTE, $string);
        $string = str_replace("�", Constants::OACUTE, $string);
        $string = str_replace("�", Constants::UACUTE, $string);
        $string = str_replace("�", Constants::NTILDE, $string);
        $string = str_replace("�", Constants::nTILDE, $string);
        $string = str_replace('"', Constants::QUOT, $string);
        $string = str_replace("	", Constants::SPACE, $string);
        $string = str_replace("  ", Constants::SPACE, $string);
        $string = str_replace("
				", Constants::ENTER, $string);

        return $string;
    }

    public function buildJson($responseJson, $dataJson, $messageJson) {
        $json = '{"response": _response,"message":_message,"data":_data}';
        $json = str_replace("_data", $dataJson, $json);
        $json = str_replace("_message", $messageJson, $json);
        $json = str_replace("_response", $responseJson, $json);
        echo $json;
    }

    public function printComma($increase, $array) {
        if ($increase < sizeof($array)) {
            return ",";
        }
    }

    public function printCommaSize($increase, $size) {
        if ($increase < $size) {
            return ",";
        }
    }

    public function buildArray($array, $position) {
        $result = array();
        $increase = 0;
        foreach ($array as $index => $cell) {
            if (!in_array($cell[$position], $result)) {
                $result[$increase] = $cell[$position];
                $increase++;
            }
        }
        return $result;
    }

    public function validateRoute($route) {
        if (!is_dir($route)) {
//            echo $route;
            mkdir($route, 0777);
        }
    }

    public function moveFiles($input, $route, $prefix, $licesePlate) {
        $quantityFiles = 0;
        $filesString = "";
        if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER ['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            if (isset($_FILES) && !empty($_FILES)) {
                $this->validateRoute($route);
                foreach ($_FILES[$input]["name"] as $files) {
                    $fileName = explode(".", $files);
                    $extension = end($fileName);
                    $temporalRoute = $_FILES[$input]["tmp_name"][$quantityFiles];
                    $name = $prefix . "_" . $licesePlate . "_" . $quantityFiles . "." . $extension;
                    $dest = $route . $name;
                    if (copy($temporalRoute, $dest)) {
                        $filesString .= $name . "#";
                    }
                    $quantityFiles++;
                }
                return $filesString;
            } ELSE {
                return null;
            }
        } ELSE {
            return null;
        }
    }

}

?>