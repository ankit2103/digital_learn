
<?php
session_start();
$con=mysqli_connect('localhost','root','','digital learn');
mysqli_select_db($con,'sign_up');
$fname= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$password= $_POST['password'];
$s = "SELECT * FROM sign_up WHERE email = '$email' ";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num == 1)
 {
  	echo '<script type="text/javascript">

          window.onload = function () { alert("E-mail  already taken"); }</script>';
 		header('Refresh: 0; URL=index.php');
}
else{ 
 	$reg =  "INSERT INTO `sign_up`(`fname`, `lname`, `email`, `password`)VALUES ('$fname','$lname','$email','$password')";
 	mysqli_query($con,$reg);
	$_SESSION['email']=$email;
	header('location:dashboard.php  ');
}
