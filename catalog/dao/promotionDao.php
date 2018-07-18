<?php
class PromotionDAO 
{
	private static $connect;

	public static function save($promotion) {
		try {
			$statement = "insert into promotion (image) values('{$promotion->getImage()}')";
			self::$connect = Connect::getInstance();
			$stmt = self::$connect->prepare ( $statement );
			$stmt->execute ();
			if ($stmt->rowCount () > 0) {
				return true;
			} else {
				return false;
			}
		} catch(Exception $e) {
			echo "error: " . $e->getMessage();
		}

		
	}

	

	public static function getAllPromotions($offset=0) 
	{
		self::$connect = Connect::getInstance ();
		$response = self::$connect->query ( "select * from promotion" );
		$promotions = $response->fetchAll ( PDO::FETCH_ASSOC );
		self::$connect = null;
		return $promotions;
	}

	// public static function getImage($idPromotion){
	// 	self::$connect = Connect::getInstance ();
	// 	$q = "select image from promotion where idpromotion = '{$idPromotion}'";
	// 	$response = self::$connect->query ( $q );
	// 	$promotion = $response->fetchAll ( PDO::FETCH_ASSOC );
	// 	self::$connect = null;
	// 	return $promotion['image'];
	// }
}
?>