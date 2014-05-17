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
      $design->getNavbar($rp,0,$u['usn']);
    ?>
    
    <hr />
    <div class="container ">
      <img   data-src="holder.js/200x200" class="img-thumbnail" alt="200x200" src="mad-28852_640.png" style="float:left; width: 250px; height: 250 px;">
      
      <div class="container" >
        <p style="margin:10pt 30pt 30pt 40pt;padding:20pt 40pt 20pt 20pt;">
          <b> &nbsp Name: </b><?php echo $u['name']; ?> <br/>
          <b> &nbsp Branch: </b>C.S.E <br/>
          <b> &nbsp Semester: </b>6,<br/>
          <b> &nbsp e-mail: </b>bla bla bla<br/>  <!-- student info -->
        </p>
      </div>
      
      <div class="container">
        <p  style="position:relative;top:-200pt;left:500pt;width:100pt;height:100pt;font-size:10pt;">
          this is random text to be placed next to the details and picture
      </div>
    </div>
        
    <div class="container" style="margin-top:30pt; border-color:red;">
      <ul class="list-group" style="color:#9F81F7;">
        <li class="list-group-item">something</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
        <li class="list-group-item">Dapibus ac facilisis in</li>
        <li class="list-group-item">Morbi leo risus</li>
        <li class="list-group-item">Porta ac consectetur ac</li>
        <li class="list-group-item">Vestibulum at eros</li>
      </ul>
    </div>




    <div class="container-fluid" style="margin-top:40pt;" >
    <div id="footer" style="background-color:#D0EBD6; padding:10pt 10pt 10pt 10pt">
      <div class="container" >
        <p class="text-muted">&copy ashrith.alta.anuj.ashish</p>
      </div>
    </div>
    </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="bootstrap/js/bootstrap.js"></script>   -->
  </body>
</html>