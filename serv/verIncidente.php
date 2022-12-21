<?php



$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("select * from incidentes,usuario where asignacion=cedula_usuario order by id_incidente DESC;");

$datos=array();

foreach ($res as $row){
	$datos[]=$row;
}

echo json_encode($datos);