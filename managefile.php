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


  $insert = "INSERT INTO `templemsg`(`reciever`, `message`, `photo`) VALUES ('$id','$user','$file')";
  $query =  mysqli_query($conn,$insert);

  if (move_uploaded_file($_FILES['file']['tmp_name'], $dir)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }



 }
 $name ="Government register  officer";
 $select = " SELECT * FROM `templemsg` WHERE `reciever` ='$name'";
 $exc = mysqli_query($conn,$select);
 $sel = " SELECT * FROM `usertype`";
 $ex = mysqli_query($conn,$sel);

 $count  ="SELECT COUNT(id) AS total FROM templemsg WHERE `reciever` ='$name'";
 $adve = mysqli_query($conn,$count);
 $fetch = mysqli_fetch_assoc($adve);
 $total = $fetch['total'];
 $search ="SELECT * FROM templemsg WHERE `reciever` ='$name'";
 $test2  = mysqli_query($conn,$search);
 //$fe = mysqli_fetch_assoc($test2);

 




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
.notification {
  background-color: #37474F;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: 1px;
  right: 1px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
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
        <a href="upload/index.php">
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
          <li><a href="#" class="notification" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  <span>Inbox</span>
  <span class="badge"><?php echo htmlentities($total);?></span>
&nbsp;</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <center><h1>WELCOME GOVERNMENT REGISTRY OFFICER</h1></center>
      <p>
         
        <code><CENTER>ADD SEND EMAIL </CENTER></code>
        <center>
        <table class="table table-striep" style="width: 90%;">
          
          <form action="sendmail.php" method="post" enctype="multipart/form-data">
            <tr><th>RECIEVER</th><TH>MESSAGE</TH><th>ACTION</th></tr>
            <!--<tr><th><select name="id" class="form-control">
              <option selected disabled>Select reciever</option>
              <?php  while ( $row = $ex->fetch_array(MYSQLI_BOTH) ){
                  
                 
               ?>
               <option value="<?php echo htmlentities($row['usertype']) ?>"><?php echo htmlentities($row['usertype']) ?></option>
              <?php }?>
            </select></th>

              <th>
                <textarea name="user" class="form-control" placeholder="Message">
                  
                </textarea>
                
              </th>


              <th>
              <button class="btn btn-success" type="reset">Resert </button>
            </th><th>
              <button class="btn btn-success" name="insert"><span class="glyphicon glyphicon-send"></span>   Submit </button>
            </th>
            </tr>-->
           
            <?php  while ( $row = $exc->fetch_array(MYSQLI_BOTH) ){
                  
                  $id = $row['id'];  
               ?>
              
              <tr><td> <?php  echo "$row[reciever]"; ?></td>
                  <td> <?php  echo "$row[message]"; ?></td>
                  
                  <!--<td> </td>-->
                  <td><a href="delete4.php?del_d=<?php echo$row['id'];?>" class="btn btn-danger btn_del" ><span class="glyphicon glyphicon-trash"> </span>Delete </a></td>
              </tr>
              <?PHP } ?>

            
          </form>
          
        </table>
        </center>
      </p>
    </div>
  </div>
</div>
  <!-- Modal -->
  <?php while ( $fe = $test2->fetch_array(MYSQLI_BOTH)) {

  ?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="sendmail.php" method="post">
      <div class="modal-header">
        <center><h2 class="modal-title" id="exampleModalLabel">
          <?php  echo htmlentities($fe['reciever']);?>  </h2></center>
        <button  class="close" name="delete" data-dismiss="modal" aria-label="Close">
          </form>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         
     <?php  echo htmlentities($fe['message']);?>
      </div>
      <div class="modal-footer">
        <center><h4 class="modal-title" id="exampleModalLabel">Thank you</h4></center>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
}
  if(isset($_POST['delete']))
  {
   $message = $fe['message'];
   $rec = $fe['reciever'];


    $insert = "INSERT INTO `msg`( `reciever`, `message`) VALUES ('$message','$rec')";
    $work = mysqli_query($conn,$insert);
    if($work==true)
    {
       $msg1 = "Government register  officer";
       $delete = "DELETE FROM `templemsg` WHERE `reciever`='$msg1'";
       $del = mysqli_query($conn,$delete);
       if ($del==true) {
         include('sendmail.php');
       }
    }

  }





}
  else
  {
   
echo "<script> location.href='index.php'</script> ";
  }



   ?>