<?php

include_once '../config.php';
include_once RAIZ . 'include/connect.php';
include_once CATALOG_MODELS . 'category.php'; 
include_once CATALOG_DAO . 'categoryDao.php';
include_once CATALOG_MODELS . 'promotion.php'; 
include_once CATALOG_DAO . 'promotionDao.php';

if (isset($_GET['key'])) {
	switch ($_GET['key']) {
		case 'save_category':
			save_category($_POST['category_name']);
			break;

		case 'save_promotion':
			save_promotion($_FILES['promotion_image']);
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


function save_promotion($file){
	$errors = []; // Store all foreseen and unforseen errors here
	$fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

	$fileName = $file['name'];
	$fileTmpName  = $file['tmp_name'];
	$fileSize = $file['size'];
	$fileType = $file['type'];
	$fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

	$uploadPath = PROMOTION_IMAGES . basename($fileName);

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
    		$promotion->setImage($fileName);

    		if ($promotion->save()) {
    			//create thumbnail
    			$dest = PROMOTION_IMAGES_THUMB . basename($fileName);
    			Promotion::make_thumb($uploadPath, $dest);
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


function create_thumbnail($fileName, $fileTmpName,
	$fileSize, $fileExtension, $promotion){

	$porcentagem_altura = 0.3;
	$porcentagem_largura = 0.3;

	switch($fileName['type']):
		case 'image/jpeg';
		case 'image/pjpeg';
			$imagem_temporaria = imagecreatefromjpeg($fileTmpName);
			
			$largura_original = imagesx($imagem_temporaria);
			
			$altura_original = imagesy($imagem_temporaria);
			
			$nova_largura = floor($largura_original * $porcentagem_largura);
			
			$nova_altura = floor($altura_original * $porcentagem_altura);
			
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			imagejpeg($imagem_redimensionada, PROMOTION_IMAGES_THUMB . $fileName);
			
			
			
			
		break;
		
		//Caso a imagem seja extensão PNG cai nesse CASE
		case 'image/png':
		case 'image/x-png';
			$imagem_temporaria = imagecreatefrompng($fileTmpName);
			
			$largura_original = imagesx($imagem_temporaria);
			$altura_original = imagesy($imagem_temporaria);
			
			$nova_largura = floor($largura_original * $porcentagem_largura);
			
			$nova_altura = floor($altura_original * $porcentagem_altura);
			
			/* Retorna a nova imagem criada */
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			
			/* Copia a nova imagem da imagem antiga com o tamanho correto */
			//imagealphablending($imagem_redimensionada, false);
			//imagesavealpha($imagem_redimensionada, true);

			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			//função imagejpeg que envia para o browser a imagem armazenada no parâmetro passado
			imagepng($imagem_redimensionada, PROMOTION_IMAGES_THUMB . $_FILES['arquivo']['name']);
			
			
		break;
	endswitch;


}

?>