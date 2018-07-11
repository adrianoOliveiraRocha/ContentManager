<?php
include_once '../config.php';
include_once ACCOUNTS_MODELS . 'user.php'; //ok
include_once ACCOUNTS_DAO . 'userDao.php'; //ok


if (isset($_GET['key'])) {
	if ($_GET['key'] == 'login') {
		header('Location: templates/entrar.php');
	} else if($_GET['key'] == 'runLogin'){
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		if (UserDAO::user_validation(CONNECT, $email, $password)) {
			echo "exists";
		} else {
			echo "no exists";
		}
	}
}
else {
	echo "key no was sended";
}




