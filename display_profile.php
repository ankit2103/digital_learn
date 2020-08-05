<!DOCTYPE html>
<html>
<head>
	<title>
		Profile
	</title>
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

#a1 {
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 0.15em;
  display: inline-block;
  position: relative;
}
#a1:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #fff;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
#a1:hover:after { 
    width: 100%; 
  left: 0; 
}
</style>
</head>
<body onload="myFunction()" style="background-color: #CECED0;" >
<div id="loading"></div>
<!--navbar starts from here-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd; ">
<nav>
  <a class="navbar-brand" href="#">
<img src="asset\image\index2.png" width="60" height="40" alt="" >
  </a>
</nav>

  <a class="navbar-brand" style="text-transform: uppercase;" href="#">Digital-Learn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li  class="nav-item active">
        <a class="nav-link " href="#" id="a1" >Home <span class="sr-only">(current)</span></a>
      </li>    
      <li class="nav-item">
        <a class="nav-link" href="#" id="a1" >About</a>
      </li>

      <li class="nav-item dropdown" >
        <a class="nav-link" href="#" id="a1"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          Contact</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a class="dropdown-item" href="#"><i class="fa fa-envelope" aria-hidden="true"> &nbsp;E-Mail</a></i>
         <a class="dropdown-item" href="#"><i class="fa fa-linkedin-square" aria-hidden="true">&nbsp;Linked-In</a></i>
         <a class="dropdown-item" href="#"><i class="fa fa-facebook-square" aria-hidden="true">&nbsp;Facebook</a></i>
        </div></li>
      <li class="nav-item" style="margin-right:10px;">
        <a class="nav-link" id="a1" href="services.php" tabindex="-1" aria-disabled="true">Services</a>
      </li>
    </ul>
    
 </div>
</nav>
<!-- here header navbar closed-->
<!-- here header navbar closed-->
<br>

<div style="padding-left: 50px;padding-right: 50px;  background:#CECED0;">
  <br><br>
  <h1 align="center">Profile</h1>
  <div class="form">
  
 <div>
  <center>
  <input type="file" id="demo" style="display: none;" name="fileToUpload" />
 <img id = "myid" src = "upload/<?=$row[16] ?>" onerror="this.src='asset/image/user.png';" height="150px " width="150px" style="border-radius: 50%;border-color: white;"  > 
 </center>
</div>
 <div class="cont">
 	<h3>Name</h3>
<button class="btn btn-success" style="font-weight: 500;letter-spacing: 1px;border-radius: 10px;padding: 15px;align-items: center;width: 98%;">Edit Profile</button>
</div>
</div>

<!-------------------------------->
<?php
include 'footer.php';
?>
</body>
</html>