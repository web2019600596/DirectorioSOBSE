<?php

	include ( "conexion.php" );

	// $query = "SELECT * FROM directorio WHERE estado = 1 ORDER BY idusuario DESC";
	$query = "SELECT * FROM directorio WHERE d3 = 1 ORDER BY idusuario ASC";
	$resultado = mysqli_query ( $conexion, $query );

	if ( !$resultado ){
		die ( "Error" );
	} else {
		while ( $data = mysqli_fetch_assoc ( $resultado )){
			$arreglo["data"][] = array_map( "utf8_encode", $data );
			//$arreglo["data"][] = $data;
		}
		echo json_encode ( $arreglo );
	}

	mysqli_free_result ( $resultado );
	mysqli_close ( $conexion );