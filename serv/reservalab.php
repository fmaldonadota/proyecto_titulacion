<?php


$ci=$_REQUEST['ci'];

$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");

$res=$cnx->query("select *
from public.reservlaboratorios,usuarios
where usuarios.cedula=reservlaboratorios.cedulareserva
and reservlaboratorios.cedulareserva='$ci'
ORDER BY id_reserva DESC;");

$datos=array();
foreach ($res as $row){
	$datos[]=$row;
}
echo json_encode($datos);