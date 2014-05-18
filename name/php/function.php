<?php
//require_once('dbconfig.php');

class User{
	
	public static function setupDatabase(){
		$db = new mysqli('localhost','root','','bmsce_app');
		if($db->connect_errno>0){
			die('Error:'.$db->connect_error.' ');
		}
		return $db;
	}

	public function addUser($name,$usn,$password){
		$db = User::setupDatabase();
		$name = $db->real_escape_string($name);
		$usn = $db->real_escape_string($usn);
		$password = $db->real_escape_string($password);
		$hashedPassword = sha1($password);
		$sql = "INSERT INTO student (name, usn ,password) VALUES ('$name', '$usn','$hashedPassword')";
		$result = $db->query($sql);
		if(!$result){
			die('Error:'.$db->error);
		}
		$id = $db->insert_id;
		return $id;
	}

	public function getUserDetailsbyId($id){
		$db = User::setupDatabase();
		$sql = "SELECT * FROM student WHERE userId = '$id'";
		$result = $db->query($sql);
		if(!$result){	
			die('Error:'.$db->error);
		}
		$user = $result->fetch_assoc();
		return $user;

	}

	public function validateUser($usn,$password){
		$db = User::setupDatabase();
		$usn = $db->real_escape_string($usn);
		$password = $db->real_escape_string($password);
		$hashedPassword = sha1($password);
		$sql = "SELECT * FROM student WHERE usn = '$usn'";
		//echo $sql;
		$result = $db->query($sql);
		if(!$result){	
			die('Error:'.$db->error);
		}
		if($result->num_rows==1){
			echo 'User Exists<br/>';
			$user=$result->fetch_assoc();
			//print_r($user);
			if($user['password']==$hashedPassword){
				//user exists
				echo 'User Entered Correct Password';
				return $user['userId'];
			}
			else{
				echo 'User Entered Wrong password';
				return 0;
			}
		}else{
			echo 'User Not Found';
			return 0;
		}
	}
}

$user = new User();

class Session{
	public function createSession($id){
		$_SESSION['id']=$id;
	}

	function __construct(){
		session_start();
	}

	function destroySession(){

		session_destroy();
		$_SESSION = array();
	} 

}

$session = new Session();

?>