<?php
/*
as the classes will be called from the controllers and they already call the config file,
the CONNECT constant must be passed to the dao class from the controller
*/
class UserDAO {
	public static function test($CONNECT){
		return $CONNECT;
	}
}


// function test(){
// 	return 'I am a programmer python';
// }
// include_once RAIZ . 'include/connect.php';

// class AdminDAO {
// 	private static $connect;
// 	public static function getSenha($email) {
// 		self::$connect = Connect::getInstance ();
// 		$statement = "select senha from administrador where email = '$email'";
// 		$query = self::$connect->query ( $statement );
// 		$info = $query->fetch ( \PDO::FETCH_ASSOC );
// 		return $info['senha'];
// 	}
// }