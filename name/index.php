<?php
require('redirect.php');
require_once('php/function.php');
require_once('design.php');

if(isset($_SESSION['id'])){
	//redirect to homepage
	#Redirect::redirectTo('home.php');
	echo 'redirecting to homepage';

	header("Location: home.php");
}
else
{	
	echo 'redirecting to cover';
	header("Location: cover.php");
}
	
?>



