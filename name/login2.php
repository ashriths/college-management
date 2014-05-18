<?php
require_once('redirect.php');
require_once('php/function.php');
if(isset($_SESSION['id'])){
  //redirect to homepage
  #Redirect::redirectTo('home.php');

  header("Location: home.php");
}
if(isset($_POST['usn'])){
  $result = $user->validateUser($_POST['usn'],$_POST['password']);
  if($result>0){
    
    $session->createSession($result);
    header("Location: home.php");
  }
  else
  {
    $session->createSessionTemp($_POST['usn']);
    #created a temp session to pass usn value
    
    header("Location: login.php");
  }
  
}

?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Cover Template for Bootstrap</title>


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="bootstrap/css/signin.css" rel="stylesheet">
    
    <link href="bootstrap/css/cover.css" rel="stylesheet">

  <style id="holderjs-style" type="text/css"></style></head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand" style="font-weight:normal;">BMSCE</h3>
              <ul class="nav masthead-nav">
                <li ><a href="cover.php">Home</a></li>
                <li class="active"><a href="login2.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">BMSAPP<p style="font-size:15pt;font-weight:normal;"> Initialize the Awesomeness</p></h1>
            </div>
            <form style="" class="form-signin" role="form" action="login2.php" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
                  <input type="text" class="form-control" name="usn" placeholder="USN" required autofocus>
                  <input type="password" class="form-control" name="password" placeholder="Password" required>
                  <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                 <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
          

            <div class="mastfoot">
            
            <div class="inner">
              <p>&copy <a>ashrith</a>.alta.<a>anuj</a>.ashish.<a>jags</a>.divya</p>
            

            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
  

</body></html>