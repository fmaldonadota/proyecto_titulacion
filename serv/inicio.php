<?php

include("conexion.php");
$db = getDB();

$hostname = explode(".", gethostbyaddr($_SERVER['REMOTE_ADDR']));
$nommaque=$hostname[0];  

$token = hash('sha256',$nommaque);

$_SESSION['token'] = $token;

$usu=$_REQUEST['usu'];
$pas=$_REQUEST['pas'];

$res=$db->query("select * from usuario,rol where email_usuario='$usu' and clave_usuario='$pas' and usuario.id_rol=rol.id_rol ");


while ($row = $res->fetch(PDO::FETCH_ASSOC) ) {
  $nombre_rol=$row['nombre_rol'];
  $nombre_usuario=$row['nombre_usuario'];
  $apellido_usuario=$row['apellido_usuario'];
  $cedula_usuario=$row['cedula_usuario'];





}


$datos=array();

$datos['nombre_rol']=utf8_encode($nombre_rol);
$datos['nombre_usuario']=utf8_encode($nombre_usuario);
$datos['apellido_usuario']=utf8_encode($apellido_usuario);
$datos['cedula_usuario']=utf8_encode($cedula_usuario);
$datos['key']=utf8_encode($token);


echo json_encode([$datos]);


