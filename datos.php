<?php
include 'conexion.php';

$pdo = new Conexion();

//Listar registros y consultar registro
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$sql = $pdo->prepare("SELECT * FROM grado ");
	$sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	header("HTTP/1.1 200 hay datos");
	echo json_encode($sql->fetchAll());
	exit;
}

?>