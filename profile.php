<?php
session_start();
$con=mysqli_connect('localhost','root','','digital learn');
mysqli_select_db($con,'sign_up');
$email=$_SESSION['email'];
$show = mysqli_query($con,"SELECT * FROM sign_up WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_row($show)){
?>
<html>
<head>
<title>Profile-Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- this is link to bootstrap for css-->
<link rel="stylesheet" type="text/css" href="asset\css\profile.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"  crossorigin="anonymous">
<!-- this is link to bootstrap for java scripts-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
<style>
#loading
{
position: fixed;
width: 100%;
height: 100vh;
background: #fff
url('https://flevix.com/wp-content/uploads/2019/07/Q-Loading.gif')
no-repeat center ;
z-index: 999999;
}
</style>
</head>


<body onload="myFunction()" onsubmit="return validateForm()" style="background-color: #CECED0; ">
<div id="loading" style="display: none;">
</div>
<!--navbar starts from here-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd; ">
<!-- Just an image -->
<nav>
 <a class="navbar-brand" href="#">
  <img src="asset\image\index2.png" width="60" height="40" alt="" >
 </a>
</nav>
<a class="navbar-brand" href="#">Digital-Learn</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
 </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php" >Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#" >About</a>
      </li>
  
      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Contact</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#"><i class="fa fa-envelope" aria-hidden="true"> &nbsp;E-Mail</a></i>
          <a class="dropdown-item" href="#"><i class="fa fa-linkedin-square" aria-hidden="true">&nbsp;Linked-In</a></i>
          <a class="dropdown-item" href="#"><i class="fa fa-facebook-square" aria-hidden="true">&nbsp;Facebook</a></i>
          </div>

      </li>
      <li class="nav-item" style="margin-right: 20px;">
        <a class="nav-link" href="services.php" tabindex="-1" aria-disabled="true">Services</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- here header navbar closed-->
<br>

<div style="padding-left: 50px;padding-right: 50px;  background:#CECED0;">
  <br><br>
  <div >
    <h1 align="center">Edit Profile</h1>
  </div>

   <div >
  <center>
    <form action="update.php" method="POST" enctype="multipart/form-data">
  <input type="file" id="demo" style="display: none;" name="fileToUpload" />
 <img id = "myid" src = "upload/<?=$row[16] ?>" onerror="this.src='asset/image/user.png';" height="150px " width="150px" style="border-radius: 50%;border-color: white;margin-bottom: -5%"  onclick="document.getElementById('demo').click();" name="fileToUpload" > 
 
</center>
</div>
 
  <div class="form">
   <p style="font-family: halvetica; padding:6px;  font-size: 35px;">Introduction</p>
   <div class="contact">
    <label class="Label" name="fname" >First name:</label>
  
    <input type="text"  id="fname" value="<?= $row[1] ?>" name="fname" readonly>
  </div>
  <div class="contact"><label class="Label" >Last name:</label>
     <input type="text" id="lname" name="lname" value="<?= $row[2] ?>" readonly>
  </div>
  <div class="contact"><label class="Label">E-Mail:</label>
    <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="E-Mail" readonly>
  </div>
<div class="contact"><label class="Label" >Date Of Birthday :</label>
    <input type="date" name="dob"  value="<?= $row[4] ?>" id="dateofbirth" min="1997-01-01" max="2015-12-31">
  </div>

<div class="contact">
<fieldset>
  <label class="Label">Gender:</label>
   <select name="gender" class="dropdown" style="width: 96%;" >
    <option><?= $row[5] ?></option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select>
</fieldset>
</div>

<div class="contact">
  <label class="Label" >I'Am :</label>
   <select name="status" class="dropdown">
     <option selected=""><?= $row[6] ?></option>
    <option value="Student" >Student</option>
    <option value="Teacher">Teacher</option>
  </select>
</div>


<div class="contact">
  <label class="Label" for="mobile"  >Mobile No :</label>
  <input type="text" name="mobile" value="<?= $row[7] ?>" placeholder="Mobile" required="" maxlength="10"></div>

<div class="contact">
  <label class="Label">Address :</label>
  <input type="text" name="address" placeholder="Address" value="<?= $row[8] ?>" required>
</div>
       
<p style="font-family: halvetica; padding:6px;  font-size: 35px;">Work Experience &amp; Education</p>

<div class="contact">
  <label class="Label">Employment Status:</label>
   <input type="text"  name="estatus" value="<?= $row[9] ?>" placeholder="Employment Status" required="">
 </div>

<div class="contact">
  <label class="Label" >Occupation:</label><p></p>
  <input type="text"name="occupation" value="<?= $row[10] ?>" placeholder="Occupation" required="" style="margin-top: -25px;">
</div>

<div class="contact">
  <label class="Label">Experience Level:</label>
  <input type="number " value="<?= $row[11] ?>"  name="level" placeholder="Experience Level" required="">
</div>

<div class="contact">
  <label class="Label" >University Name:</label>
  <input type="text " value="<?= $row[12] ?>" name="university" placeholder="University Name" required="">
</div>

<div class="contact">
  <label class="Label">Specialization :</label>
 <input type="text"  name="specialization" value="<?= $row[13] ?>" placeholder="Specialization" required="">
</div>

<div class="contact">
  <label class="Label" >Branch :</label>
    <select name="branch" class="dropdown">
      <option><?= $row[14] ?></option>
      <option value="B.Tech" >B.Tech</option>

      <option value="B.Com">B.Com</option>

      <option value="B.C.A.">B.C.A.</option>

      <option value="B.B.A.">B.B.A.</option>

      <option value="B.Pharma">B.Pharma</option>

      <option value="B.Sc.">B.Sc.</option>

      <option value="M.Tech">M.Tech</option>

      <option value="M.B.A.">M.B.A</option>

      <option value="M.C.A.">M.C.A</option>

      <option value="M.Pharm">M.Pharma</option>

      <option value="M.Com">M.Com</option>

      <option value="M.Sc">M.Sc</option>
            
    </select>
</div>

<br><br>
<button class="btn btn-success" style="font-weight: 500;letter-spacing: 1px;border-radius: 10px;padding: 15px;align-items: center;width: 98%;">Update Profile</button>
</div>
</div>
</form>


<?php
}?>

<!-------------profile image---------->

<script>
  function display(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(event) {
         $('#myid').attr('src', event.target.result);
      }
      reader.readAsDataURL(input.files[0]);
   }
}

$("#demo").change(function() {
   display(this);
});
</script>
<!------------------------------------->
<!-----------------------footer----------------------->
<?php
include 'footer.php';
?>
<!----------------------------------------------------->
</body>
</html>

<!------------https://codepen.io/OliverKrieger/pen/dGjyGM------------>
