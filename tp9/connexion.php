<?php
require_once("dbconfig.php");
class Connexion
{
	private static $instance;
	private $cnx = null;
	private function __construct()
	{
		$connection_str = "mysql:host=" . HOST . ";dbname=" . DB_NAME . "," . USER . "," . PASSWORD;
		try {
			$this->cnx = new PDO($connection_str);
		} catch (PDOException $except) {
			echo "Echec de la connexion";
			$except->getMessage();
			exit();
		}
	}

	static function getInstance()
	{
		if (!(self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
	public function getConnexion()
	{
		return $this->cnx;
	}
}
