<?php





$cnx=new PDO("pgsql:host=localhost;port=5432;dbname=appcecasis","postgres","1234");
$res=$cnx->query("select id_reserva,nombre_hora,descripcion_estado,nombre_sw,nombre_dia,nombre_lab,usuarios.nombre,usuarios.apellido,dfrom
from reservacionlaboratorios,horario,estadoreservacion,software,dias,laboratorio,usuarios
where reservacionlaboratorios.id_hora=horario.id_hora
and estadoreservacion.id_estado=reservacionlaboratorios.id_estado
and software.id_sw=reservacionlaboratorios.id_sw
and reservacionlaboratorios.id_dia=dias.id_dia
and laboratorio.id_lab=reservacionlaboratorios.id_lab
and usuarios.cedula=reservacionlaboratorios.cedulareserva");

$datos=array();

foreach ($res as $row){
	$datos[]=$row;
}

echo json_encode($datos);