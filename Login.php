

<?php
//error_reporting(E_ERROR | E_WARNING |E_PARSE);

if(isset($_POST['login']))
{


$conn = mysqli_connect("localhost","root","","document");

$Email = $_POST['username'];
$Password =md5($_POST['password']);


$select="SELECT * FROM `rofficer` WHERE `username`='$Email' AND `password`='$Password'";
$query=mysqli_query($conn,$select);
$num = mysqli_num_rows($query);
if($num>0)
{
	if(isset($_POST['checkbox']))
	{
		setcookie('username',$Email, time()+60*60*7);
		setcookie('Password',$Password, time()+60*60*7);
	}
	
	session_start();
	$_SESSION['username']=$Email;
	//$system = "system administrator";

	$com = mysqli_fetch_assoc($query);
	 $value = $com['usertype'];
        $system = "system administrator ";
        $system2= "Government register  officer";
        $syste3 = "action officer";
	if($value == $system)
	{
	 echo " <script> location.href='admin.php'</script>";	
	}
   elseif ($value == $system2) {
	echo " <script> location.href='adduser.php'</script>";	
	}
	elseif ($value == $syste3) {
		echo " <script> location.href='actionpage.php'</script>";
	}
	else
	{
	echo "<script> alert ('User not available on the system $value')</script> ";
    echo "<script> location.href='index.php'</script> ";	
	}
	

}
else
{
echo "<script> alert ('Password or username inccorect')</script> ";
echo "<script> location.href='index.php'</script> ";
  

}
}
else
{
	echo "<script> location.href='index.php'</script> ";
}

?>