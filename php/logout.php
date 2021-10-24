
<?php
include '../../stock/php/global.php';
	session_start();

	session_destroy();

	unset($_SESSION['profile']);

	

	header("location:".plogin);
?>