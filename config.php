<?php
define ( "RAIZ", __DIR__ . DIRECTORY_SEPARATOR );
define ( "PROMOTION_IMAGES", RAIZ . 'images/promotions_images' .
	DIRECTORY_SEPARATOR);
define ( "PROMOTION_IMAGES_THUMB", PROMOTION_IMAGES . 'thumb' );
define ( 'Nome_Empresa', 'Mercadinho Online' );
define('CONNECT', RAIZ . 'include' . DIRECTORY_SEPARATOR . 'connect.php');

// ACCOUNTS
define ( "ACCOUNTS", RAIZ . 'accounts' . DIRECTORY_SEPARATOR );
define ( "ACCOUNTS_MODELS", RAIZ . 'accounts' . DIRECTORY_SEPARATOR . 'models' .
DIRECTORY_SEPARATOR);
define ( "ACCOUNTS_DAO", RAIZ . 'accounts' . DIRECTORY_SEPARATOR . 'dao' .
DIRECTORY_SEPARATOR );
// END ACCOUNTS

// Category
define ( "CATEGORY", RAIZ . 'catalog' . DIRECTORY_SEPARATOR );
define ( "CATALOG_MODELS", RAIZ . 'catalog' . DIRECTORY_SEPARATOR . 'models' .
DIRECTORY_SEPARATOR);
define ( "CATALOG_DAO", RAIZ . 'catalog' . DIRECTORY_SEPARATOR . 'dao' .
DIRECTORY_SEPARATOR );
// Category

define ( "UPLOAD", RAIZ . 'upload' . DIRECTORY_SEPARATOR );

function getDominio(){
	$a = explode('/', RAIZ);
	$dominio = '/' . $a[count($a) - 2] . '/';
	return $dominio;
}
