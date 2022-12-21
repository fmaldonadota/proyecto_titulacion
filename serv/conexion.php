<?php 
session_start();

function getDB() 
{

$host='localhost';
$dbname='appcecasis';
$user='postgres';
$pass='1234';

try {
  $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname;", $user, $pass);
  $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  return $pdo;
}
catch(PDOException $e) {
    echo "Se ha producido un error al intentar conectar al servidor Postgres: ".$e->getMessage();

    }
}
 
?>