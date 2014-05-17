<?php
require ('redirect.php');
require('design.php');
require('php/function.php');


if(!isset($_SESSION['id'])){
  //redirect
  echo 'Redirect';
}
$u = $user->getUserDetailsById($_SESSION['id']);
//rint_r($u);
$rp = './';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    $design->getIncludeFiles($rp);
    ?>


      <title>Home</title>
    



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    	
      $design->getNavbar($rp,1,$u['usn']);
    ?>

    <hr/>
    <div class="container" >

    	








    </div>

  
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="bootstrap/js/bootstrap.js"></script>   -->
  </body>
</html>











