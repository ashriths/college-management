<?php
//require_once('redirect.php');
require_once('php/function.php');
if(isset($_POST['name'])){
	// add that user to the database
	$user = new User();
	$result = $user->addUser($_POST['name'],$_POST['usn'],$_POST['password']);
	if($result>0){
		$session->createSession($result);
		header("Location: home.php");
	}
}
print_r($_SESSION);
?><!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
</head>
<body>
	<form action="signup.php" method="POST">
		<input type="text" name="name" placeholder="Name"/>
		<input type="text" name="usn" placeholder="USN"/>
		<input type="password" name="password" placeholder="password"/>
		<input type="submit" value="Submit"/>
	</form>

</body>
</html>