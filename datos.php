<?php
include 'conexion.php';

$pdo = new Conexion();

//Listar registros y consultar registro
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	$sql = $pdo->prepare("SELECT * FROM grado ");
	$sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);

	// Establece el encabezado Content-Type
	header('Content-Type: application/json');

	echo json_encode($sql->fetchAll());
	exit;
}
?>