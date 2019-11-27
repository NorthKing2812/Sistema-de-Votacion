<?php

function conectar(){
	$user = "root";
	$pass = "";
	$server = "localhost";
	$bd = "cedula";
	$con = mysqli_connect($server, $user, $pass, $bd) or die ("Error al conectar a la base de datos" . mysqli_error());

	if ($con) {

	}
	else{
		echo "sj";
	}
	mysqli_query($con, "SET NAMES utf8");

	return $con;
}


?>