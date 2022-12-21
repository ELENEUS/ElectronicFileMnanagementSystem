<?php

  session_start();
  if(isset(  $_SESSION['username']))
  {

  $conn = mysqli_connect("localhost","root","","document");
 $msg="";
 if(isset($_POST['insert']))
 {
  $id = $_POST['id'];
  $user =  $_POST['user'];

  $file = $_FILES["file"]["name"];
  //$file = $_FILES['file']['name'];

  $dir =  "images/".basename($file);;
  move_uploaded_file($_FILES["file"]["name"], $dir);


  $insert = "INSERT INTO `files`(`fileno`, `filename`, `file`) VALUES ('$id','$user','$file')";
  $query =  mysqli_query($conn,$insert);

  if (move_uploaded_file($_FILES['file']['tmp_name'], $dir)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }



 }
 
 $select = " SELECT * FROM `files`";
 $exc = mysqli_query($conn,$select);



?>





<!DOCTYPE html>
<html>
<head>
  <title></title>


<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link href="css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script  src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script   src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"  ></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://code.iconify.design/1/1.0.3/iconify.min.js"></script>

  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

/* Toggle Styles */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
  
}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}
  </style>
</head>
<body>
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">SYSTEM</a>
    </header>
   <ul class="nav">
      <li>
        <a href="#">
          <i class="zmdi zmdi-view"></i>DASHBOARD
        </a>
      </li>
      <li>
        <a href="adduser.php">
          <span class="glyphicon glyphicon-user"></span></i>  ADD USER
        </a>
      </li>
      <li>
        <a href="manageruser2.php">
         <span class="glyphicon glyphicon-user" > </span> MANAGE USER
        </a>
      </li>
      <li>
        <a href="fileupload/index.php">
          <span class="glyphicon glyphicon-file" > </span></i> ADD FILES 
        </a>
      </li>
      <li>
        <a href="sendmail.php">
          <span class="glyphicon glyphicon-email" > </span> SEND MAILS
        </a>
      </li>
      
      <li>
        <a href="managefile.php">
          <span class="glyphicon glyphicon-email" > </span></i>MANAGE MAILS 
        </a>
      </li>
      
      <li>
        <a href="logout.php"  >
         <span class="glyphicon glyphicon-log-out" > </span> LOG OUT
        </a>
      </li>
    </ul>
      
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><i class="zmdi zmdi-notifications text-danger">ELECTRONIC FILE MANAGEMENT SYSTEM</i>
            </a>
          </li>
         <!-- <li><a href="#">Test User</a></li>-->
      </div>
    </nav>
    <div class="container-fluid">
      <center><h1>WELCOME GOVERNMENT REGISTRY OFFICER</h1></center>
     
        </center>
      </p>
    </div>
  </div>
</div>
</body>
</html>
<?php
}
  else
  {
   
echo "<script> location.href='index.php'</script> ";
  }



   ?>