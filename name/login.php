<?php
require_once('redirect.php');
require_once('php/function.php');
$temp="";
#this is to get temp value of usn passed by temp session
if(isset($_SESSION['temp']))
{
  $temp = $_SESSION['temp'];
  $session->destroySession();
  $_SESSION =array();
}
else
{
    }

if(isset($_SESSION['id'])){
  //redirect to homepage
  #Redirect::redirectTo('home.php');

  header("Location: home.php");
}

if(isset($_POST['usn'])){
  $result = $user->validateUser($_POST['usn'],$_POST['password']);
  if($result>0){
    $session->createSession($result);
    echo "result id: $result";
    header("Location: home.php");

  }
  else
    header("Location: login.php");
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" >
        <div class="form-signin">

        <h2>BMSCEAPP</h2>
        <h4>Initialize Awesomeness</h4>
        <h4 style="color:red;">Invalid USN Password </h4>
        </div>
      <form class="form-signin" role="form" action="" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" name="usn" id="usn" value="<?php echo $temp;?>" placeholder="USN"  required autofocus>
        <?php 
          echo "result is : $temp";
          ##usn posted from previous page
        ?>
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> 


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
