<?php
include_once RAIZ . 'include/connect.php';


class CategoryDAO {
	private static $connect;

	public static function save($category) {
		$statement = "insert into category (name) values('{$category->getName()}')";
		self::$connect = Connect::getInstance();
		$stmt = self::$connect->prepare ( $statement );
		$stmt->execute ();
		if ($stmt->rowCount () > 0) {
			return true;
		} else {
			return false;
		}
	}

	// public static function getNome($id) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$response = self::$connect->query ( "select nome from categoria where id = {$id}" );
	// 	$info = $response->fetch ( \PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $info ['nome'];
	// }

	// public static function getCategorias($offset) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$response = self::$connect->query ( "select * from Categoria order by nome 
	// 			limit 5 offset {$offset}" );
	// 	$info = $response->fetchAll ( \PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $info;
	// }

	// public static function getNomes() {
	// 	self::$connect = \Connect::getInstance ();
	// 	$response = self::$connect->query ( "select nome from Categoria order by nome" );
	// 	$info = $response->fetchAll ( \PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $info;
	// }

	// public static function getCategoria($id) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$stmt = self::$connect->prepare ( "select * from categoria where id = :id" );
	// 	$stmt->execute ( array (
	// 			':id' => $id 
	// 	) );
	// 	self::$connect = null;
	// 	if ($stmt->rowCount () > 0) {
	// 		$info = $stmt->fetch ( \PDO::FETCH_ASSOC );
	// 		return $info;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public static function update($q) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$stmt = self::$connect->prepare ( $q );
	// 	$stmt->execute ();
	// 	self::$connect = null;
	// 	if ($stmt->rowCount () > 0) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function delete($id) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$stmt = self::$connect->prepare ( "delete from categoria where id = {$id}" );
	// 	$stmt->execute ();
	// 	self::$connect = null;
	// 	if ($stmt->rowCount () > 0) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }
	
	// public static function quantidadeProdutos($id) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$query = self::$connect->query ( "select estoque from produto where idcategoria = {$id}" );
	// 	$info = $query->fetch ( \PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $info ['estoque'];
	// }

	// public static function deletar($id) {
	// 	self::$connect = \Connect::getInstance ();
	// 	$stmt = self::$connect->prepare ( "delete from categoria where id = :id" );
	// 	$stmt->execute ( array (
	// 			':id' => $id 
	// 	) );
	// 	self::$connect = null;
	// 	if ($stmt->rowCount () > 0) {
	// 		return true;
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public static function getQuantidadeCategorias() {
	// 	self::$connect = \Connect::getInstance ();
	// 	$stmt = self::$connect->prepare ( "select count(*) as quantidade from categoria" );
	// 	$stmt->execute ();
	// 	$info = $stmt->fetch ( \PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $info ['quantidade'];
	// }

	// public static function getIdNome() {
	// 	self::$connect = \Connect::getInstance ();
	// 	$response = self::$connect->query ( "select id, nome from categoria order by nome" );
	// 	$info = $response->fetchAll ( \PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $info;
	// }

}