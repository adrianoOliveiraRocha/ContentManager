<?php

include_once '../config.php';
include_once RAIZ . 'include/connect.php';
include_once CATALOG_MODELS . 'category.php';
include_once CATALOG_DAO . 'categoryDao.php';
include_once CATALOG_MODELS . 'promotion.php';
include_once CATALOG_DAO . 'promotionDao.php';

require '../vendor/autoload.php';


if (isset($_GET['key'])) {

	switch ($_GET['key']) {

		case 'save_category':
			save_category($_POST['category_name']);
			break;

		case 'save_promotion':
			save_promotion($_FILES['promotion_image']);
			break;

		case 'delete_category':
			delete_category($_GET['id']);
			break;

		default:
			echo "we are in default";
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


function save_promotion($file){
	$errors = []; // Store all foreseen and unforseen errors here
	$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

	$fileName = $file['name'];
	$fileTmpName  = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileType = $file['type'];
	$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

	$date = new DateTime();
	$fileNameUploaded = $date->getTimestamp() . basename($fileName);

	$uploadPath = PROMOTION_IMAGES . $fileNameUploaded;

	if (! in_array($fileExtension, $fileExtensions)) {
        $errors[] = "Esse tipo de arquivo não é permitido " .
        "Por favor! envie um arquivo jpg, jpeg ou png";
    }

    if ($fileSize > 2000000) {
        $errors[] = "Esse arquivo tem mais de 2MB. Por favor! envie um " .
        "arquivo com tamanho menor ou igual a 2MB";
    }

    if (empty($errors)){
    	$didUpload = move_uploaded_file($fileTmpName, $uploadPath);

    	if ($didUpload) {
    		$promotion = new Promotion();
    		$promotion->setImage($fileNameUploaded);

    		if ($promotion->save()) {
    			//create thumbnail
    			$dest = PROMOTION_IMAGES;
    			echo Promotion::make_thumb($uploadPath, $dest, $fileNameUploaded);
					header('location: admin?alert=success');
			} else {
				header('location: admin?alert=error');
			}

        } else {
            foreach ($errors as $error) {
	            echo "<div style='color: red;'>{$error}</div> </br>";
	        }
        }
    }
}

function delete_category($idcategory){
	if (Category::delete($idcategory)) {
		header('location: /ContentManager/admin?alert=success');
	} else {
		header('location: /ContentManager/admin?alert=error');
	}
}

?>
