<?php

 $conn = mysqli_connect("localhost","root","","document");
 $id = $_GET['id'];



 

 $select = " SELECT * FROM `files` WHERE `id`='$id'";
 $exc = mysqli_query($conn,$select);
     $row = mysqli_fetch_assoc($exc);

  	 $fil = $row['file'];
  	 header('content-Disposition: attachment; filename ='.$fil.'');
  	 header('content-type:appliction/octent-strem');
  	 header('content-length='.filesize($fil));
  	 readfile($fil);
     echo "$fil";
     echo $row['fileno'];           
      
               

     include_once('addfile.php');


?>