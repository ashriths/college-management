<?php
echo 'hello1';
print_r($_REQUEST);
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