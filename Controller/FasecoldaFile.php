<?php
require_once ('../Libs/PHPExcel.php');
include '../Model/FasecoldaFileModel.php';
include '../Utils/Utils.php';

// require_once ('../Libs/excelvideo/reader.php');
class FasecoldaFile{

	private $file;
	private $objectPhpExcel;
	private $classFasecoldaFileModel;
	private $classUtils;
	private $lastFile;
	
	//Variables del Json
	private $messageJson;
	private $responseJson;
	private $dataJson;
	private $increase;
	private $arrayFile;
	
	
	//Variables del js
	private $method;
	
	public function __construct(){
		$this->classFasecoldaFileModel = new FasecoldaFileModel();
		$this->classUtils = new Utils();
		$this->increase = 0;
		$this->method = $_POST["method"];
		set_time_limit(180);
		ini_set('memory_limit', '-1');		
		$this->lastFile = $this->classFasecoldaFileModel->getFasecoldaFile();
		//$this->loadFile();
		switch ($this->method){
			case 1:
				$this->getBrand();
			break;
		}
	}
	
	
	
// 	public function loadFile(){	
// 		$this->objectPhpExcel = PHPExcel_IOFactory::load('../Files/Fasecolda/'.$this->lastFile[0][2]);
// 		$this->file=$this->objectPhpExcel->getActiveSheet()->toArray(null,true,true,true);
// 		$incremento = 0;
// 		$array=array();
// 		foreach ($this->file as $indice => $celda){
			
// 			if (!in_array($celda["B"], $array)) {
// 				$array[$indice]=$celda["B"];
// 				$incremento++;
// 			}
			
			
// 		}
// 		var_dump($array);
// 	}
	/**
	 * Obtener la marca desde el archivo fasecolda
	 * 
	 * 
	 */
	public function getBrand(){
		$this->objectPhpExcel = PHPExcel_IOFactory::load('../Files/Fasecolda/'.$this->lastFile[0][2]);//Prepara el archivo
		$this->file=$this->objectPhpExcel->getActiveSheet()->toArray(null,false,true,true);//Obtienen las formulas y valores arreglados por excel
		
		
		
		$this->arrayFile=$this->classUtils->buildArray($this->file, "B");
		//var_dump($this->arrayFile);
		$this->dataJson.='{';
		for($i=0;$i<=(sizeof($this->arrayFile)-1);$i++){
			$this->dataJson .= '"'.$this->arrayFile[$i].'":{"increment":"'.$i.'","brand":"'.$this->arrayFile[$i].'"}';
			$this->increase++;
			$this->dataJson.= $this->classUtils->printComma($this->increase, $this->arrayFile);
		}
		$this->dataJson.='}';
		$this->responseJson = 'true';
		$this->messageJson = 'null';
		$this->classUtils->buildJson($this->responseJson, $this->dataJson, $this->messageJson);
	}
	
	
// 	public function loadFile(){
// 		$data = new Spreadsheet_Excel_Reader();
// 		//$data->setOutputEncoding('CP1251');
// 		$data->read("../Files/Fasecolda/Fasecolda.xls");
		
// 		$celdas = $data->sheets[0]['cells'];
		
// 		/* Luego, mediante un echo, empezamos a construir una tabla en HTML */
		
// 		echo "";
		
// 		/* Luego, mediante un ciclo, seguiremos armando nuestra tabla y concatenamos con el contenido de las celdas. Estos valores se almacenan en la variable en una forma de array de 2 dimensiones. La primera corresponde a la fila y la segunda a la columna, siempre empezando de 1 , poniendo como condición que cuando lea una celda vacía se detenga */
		
// 		$i = 1;
// 		while($celdas[$i][1]!='') {
// 			echo "";
// 			$i++;
// 		}
		
// 		/* Cerramos la tabla */
		
// 		echo '<table width="300" align="center"><tbody><tr><td width="150" align="center">'.$celdas[$i][1].'</td><td width="150" align="center">'.$celdas[$i][2].'</td></tr></tbody></table>';
		
		
// // 		error_reporting(E_ALL ^ E_NOTICE);
// // 		echo $data->sheets[0]['cells'][1][1];
// 	}
}

new FasecoldaFile();
?>