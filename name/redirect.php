<?php
class Redirect{
	public function redirectTo($url){
		
		header("Location : '.$url.'");
				
	}
}
$redirect = new Redirect();

?>