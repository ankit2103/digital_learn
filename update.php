
<?php
session_start();
$con=mysqli_connect('localhost','root','','digital learn');
  
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
 $image=$_FILES["fileToUpload"]["name"];

 $email=$_POST['email'];
$dob=$_POST['dob'];
$gender= $_POST['gender'];
$status= $_POST['status'];
$mobile= $_POST['mobile'];
$address= $_POST['address'];
$estatus=$_POST['estatus'];
$occupation= $_POST['occupation'];
$level= $_POST['level'];
$university= $_POST['university'];
$specialization= $_POST['specialization'];
$branch=$_POST['branch'];
$s = "UPDATE  `sign_up` SET dob='$dob',gender='$gender',status='$status',mobile='$mobile',address='$address',estatus='$estatus',occupation='$occupation', level='$level',university='$university',specialization='specialization',branch='$branch',image='".$image."'
 WHERE email='$email'  ";
$result = mysqli_query($con,$s);
header('location:profile.php  ');
?>



