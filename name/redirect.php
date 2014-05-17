<?php
class Redirect{
	public function redirectTo($url){
		echo 'redirecting to '.$url;

		header("Location : '.$url.'");
				
	}
}
$redirect = new Redirect();

?>