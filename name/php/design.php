<?php


class Design{

	public function getIncludeFiles($rp){

		
		echo '<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <!-- Bootstrap -->
    <link href="'.$rp.'bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="'.$rp.'bootstrap/css/grid.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="'.$rp.'bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="'.$rp.'bootstrap/css/bootstrap.min.css">
    <style id="holderjs-style" type="text/css"></style>
    <!-- Optional theme -->
    <link rel="stylesheet" href="'.$rp.'bootstrap/css/bootstrap-theme.min.css">
    <link href="'.$rp.'bootstrap/css/carousel.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <!-- sticky footer -->' ;
		
	}

	public function getNavbar($rp,$active,$usn){
		echo '<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container" style="font-size:13pt;">
        <div class="navbar-header" >
          <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">-->
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="http://www.bmsce.in/"><img style="wigth:40pt; height:40pt; float:left"; atl="bmslogo" src="bms-logo.png"></a>
          <a class="navbar-brand" href="#"> &nbsp &nbsp '.$usn.'</a>
         <!-- <sup>Logged IN</sup> -->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" >
      
        <li '; if($active==0) echo 'class="active"'; echo '><a href="home.php">Home</a></li>
      
        <li '; if($active==1) echo 'class="active"'; echo '><a href="marks.php">Marks</a></li>
        
        <li '; if($active==2) echo 'class="active"'; echo '><a href="attendance.php">Attendance</a></li>
        
        <li '; if($active==3) echo 'class="active"'; echo '><a href="proctor.php">Proctor</a></li>
            
        <li '; if($active==4) echo 'class="active"'; echo '><a href="#notes">Notes</a></li>
            <li class="dropdown" >
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Syllabus<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#syllabuscopy">Sylabus Copy</a></li>
                
                  <li class="divider"></li>
                <!--<li class="dropdown-header">Nav header</li>-->
                <li><a href="#quisportion">Quiz Portion</a></li>
                <li><a href="#testportion">Test Portion</a></li> 
              </ul>
            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#editprofile">Edit Profile</a></li>
                <li><a href="#changepassword">Change Password</a></li>   
              </ul>
            <li><a href="#logout">Log Out</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div> ';
	}

}
$design = new Design();
?>