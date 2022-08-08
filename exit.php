
<?php
	session_start();
	unset($_SESSION['user']);
	$_SESSION['user']="false";
	header('Location: index1.php');

?>