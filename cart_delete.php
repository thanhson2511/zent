<?php 
	session_start();
	if (isset($_GET['msp'])) {
		$msp = $_GET['msp'];
		unset($_SESSION['products'][$msp]);
		header('Location: cart_detail.php');
	}
 ?>