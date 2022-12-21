<?php
  
$token = $_REQUEST['key'];

include("conexion.php");
$db = getDB();


if($_SESSION['token'] == $token){

	$res=$db->query("select * from noticias");

	$datos=array();
	foreach ($res as $row){
		$datos[]=$row;
	}
	echo json_encode($datos);

}else{
    echo "Has intentado acceder sin cumplir con el token";
}

