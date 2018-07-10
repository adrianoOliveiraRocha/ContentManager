<?php

namespace adr;

include_once RAIZ . 'include/connect.php';

class AdminDAO {
	private static $connect;
	public static function getSenha($email) {
		self::$connect = \Connect::getInstance ();
		$statement = "select senha from administrador where email = '$email'";
		$query = self::$connect->query ( $statement );
		$info = $query->fetch ( \PDO::FETCH_ASSOC );
		return $info['senha'];
	}
}