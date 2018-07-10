<?php
include '../config.php';
include_once MODEL . 'user.php';

if ($_GET['key'] == 'login') {
	echo "do login";
} else{
	echo "do not login";
}



