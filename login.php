 <?php
 session_start();
$con=mysqli_connect('localhost','root','','digital learn');
mysqli_select_db($con,'sign_up');
$email= $_POST['email'];
$password= $_POST['password'];
$s = "SELECT * FROM sign_up where email = '".$email."' && password = '".$password."' limit 1";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if ($num == 1){
 $_SESSION['email']=$email;
 header('location:dashboard.php');
 	}
else{ 
echo '<script type="text/javascript"> window.onload = function () { alert( "Invalid E-Mail & Password")}; </script>' ;
header('Refresh: 0; URL=index.php');
}

 ?>