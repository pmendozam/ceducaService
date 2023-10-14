<?php
class Conexion extends PDO
{
	private $hostBd = 'server0751.hostilimitado.com';
	private $nombreBd = 'avilades_ceduca_bd';
	private $usuarioBd = 'avilades_ceduca_user';
	private $passwordBd = 'adminUmg23..#';



	public function __construct()
	{
		try {
			parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->
				nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		} catch (PDOException $e) {
			echo 'Error al conectarse a la Base de Datos: ' . $e->getMessage();
			exit;
		}
	}
}
?>