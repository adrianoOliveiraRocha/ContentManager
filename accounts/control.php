<?php
include '../config.php';
include_once ACCOUNTS . 'models/user.php';


if ($_GET['key'] == 'login') {
	echo "do login";
} else{
	echo "do not login";
}



