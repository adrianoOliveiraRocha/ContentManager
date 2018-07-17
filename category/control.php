<?php
include_once '../config.php';
include_once CATEGORY_MODELS . 'category.php'; 
include_once CATEGORY_DAO . 'categoryDao.php';

if (isset($_GET['key'])) {
	switch ($_GET['key']) {
		case 'save_category':
			save_category($_POST['category_name']);
			break;
		
		default:
			# code...
			break;
	}
}

function save_category($name){
	$category = new Category();
	$category->setName($name);
	if ($category->save()) {
		header('location: admin?alert=success');
	} else {
		header('location: admin?alert=error');
	}
}

?>