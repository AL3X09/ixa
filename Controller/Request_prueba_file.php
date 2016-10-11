<?php
class Request_prueba_file {
	public function __construct() {
		// comprobamos que sea una petición ajax
		if (! empty ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) && strtolower ( $_SERVER ['HTTP_X_REQUESTED_WITH'] ) == 'xmlhttprequest') {
			
			// obtenemos el archivo a subir
			$file = $_FILES ['archivo'] ['name'];
			//var_dump($_POST);
			
			// comprobamos si existe un directorio para subir el archivo
			// si no es así, lo creamos
			if (! is_dir ( "../Files/".$_POST["placa"] )){
				mkdir ( "../Files/".$_POST["placa"]."/", 0777 );
			}
				// comprobamos si el archivo ha subido
			if ($file && move_uploaded_file ( $_FILES ['archivo'] ['tmp_name'], "../Files/".$_POST["placa"]."/" . $file )) {
				sleep ( 3 ); // retrasamos la petición 3 segundos
				echo $file; // devolvemos el nombre del archivo para pintar la imagen
			}
		} else {
			throw new Exception ( "Error Processing Request_prueba_file", 1 );
		}
	}
}
new Request_prueba_file();
?>