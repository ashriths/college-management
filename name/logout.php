<?php
require_once('redirect.php');
require_once('php/function.php');

	echo "<br/> id=",$_SESSION['id'];
	echo " logging out";
	
	$session -> destroySession();
	#$_SESSION= array();
	
	header('Location = cover.php');

?>