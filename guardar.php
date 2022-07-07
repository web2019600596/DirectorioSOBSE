<?php
	include( "conexion.php" );

	$idusuario = $_POST["idusuario"];
	$nombre = $_POST["nombre"];
	$area = $_POST["area"];
	$extension = $_POST["extension"];
	$inmueble = $_POST["inmueble"];
	$jerarquia = $_POST["jerarquia"];
	$puesto = $_POST["puesto"];
	$correo = $_POST["correo"];
	$d3 = $_POST["d3"];
	$opcion = $_POST["opcion"];
	$informacion = [];

	switch ( $opcion ){
		case 'modificar':
		
	}

	function modificar( $nombre, $area, $extension, $inmueble, $jerarquia, $puesto, $correo, $d3, $idusuario, $conexion ){
		$query = "UPDATE directorio SET 	nombre = '$nombre',
										area = '$area',
										extension = '$extension',
										inmueble = '$inmueble',
										jerarquia = '$jerarquia',
										puesto = '$puesto',
										correo = '$correo',
										d3 = '$d3'
								WHERE 	idusuario = $idusuario";
		$resultado = mysqli_query( $conexion, $query );
		verificar_resultado( $resultado );
		cerrar( $conexion );
	}

	function eliminar( $idusuario, $conexion ){
		$query = "UPDATE directorio SET estado = 0 WHERE idusuario = $idusuario";
		$resultado = mysqli_query( $conexion, $query );
		verificar_resultado( $resultado );
		cerrar( $conexion );
	}

	function verificar_resultado( $resultado ){
		if( !resultado ) $informacion["respuesta"] = "ERROR";
		else $informacion["respuesta"] = "BIEN";
		echo json_encode( $informacion );
	}

	function cerrar( $conexion ){
		mysqli_close( $conexion );
	}

?>