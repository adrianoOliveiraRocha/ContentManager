<?php
include_once '../config.php';
include_once ACCOUNTS_MODELS . 'user.php'; 
include_once ACCOUNTS_DAO . 'userDao.php'; 


if (isset($_GET['key'])) {
	
	if ($_GET['key'] == 'login') {
		header('Location: login');
	} else if($_GET['key'] == 'runLogin'){
		$email = $_POST['email'];
		$password = $_POST['pwd'];
		if (UserDAO::user_validation(CONNECT, $email, $password)) {
			session_start();
			
			$_SESSION['loged'] = true;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			header("location: admin");
		} else {
			echo "no exists";
		}
	} else if($_GET['key'] == 'logout'){
		session_start();
		$_SESSION['loged'] = false;
		$_SESSION['email'] = null;
		$_SESSION['password'] = null;
		header("location: home");
	} else if ($_GET['key'] == 'new_category') {
		echo "New Category";
	}
}
else {
	echo "key no was sended";
}




