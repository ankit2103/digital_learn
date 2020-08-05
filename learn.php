<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<style>
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 5px 20px 0 rgba(0,0,0,0.8);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.inner{


  overflow: hidden;

}
img{
  transition: all 1.5s ease;
}
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
  width: 80%; 
  left: 0; 
}


</style>
</head>
<body onload="myFunction()"  >


<div id="loading"></div>
<!--navbar starts from here-->
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
      <li class="nav-item active">
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
      <li class="nav-item" style="margin-right: 20px;">
        <a class="nav-link" id="a1" href="services.php" tabindex="-1" aria-disabled="true">Services</a>
      </li>
    </ul>
 </div>
</nav>
<!-- here header navbar closed-->
<div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-4"  style="margin-top: 70px;">
         <img src="asset\image\onlinestream.jpg" alt="..." width="200" height="auto">
      </div>
      <div class="col-sm-8"  style="margin-top: 50px; padding: 20px;">
        <h2 align="center">Welcome To Interactive Learning</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias
Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident </p>
        <center>
         <button href="#" class="btn btn-success" >Read More</button></center> 
      </div>
    </div>
</div>




<!--------------------------------------------------------->


<h5 align="center">Scripting Language</h5>
<div class="container-fluid" style="font-family: 'Inconsolata', monospace;
font-family: 'Lato', sans-serif;" >  
<div class="row">
  <div class="col-sm-4"  align="center">
   <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
    <img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_960_720.png" width="150px;"  height="125px"></center>
    <div class="card-body">
    <h3 class="card-title" align="center">HTML</h3>
    <center>
    <a href="learning.html" class="btn btn-success">Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_960_720.png" width="150px;" height="125px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">CSS</h3><center>
    <a href="learning.html" class="btn btn-success">Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://i.dlpng.com/static/png/432835_preview.png" width="150px;"   height="125px"></center>
    <div class="card-body">
     <h3 class="card-title" align="center">BOOTSTRAP</h3>
     <center>
     <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  </div>
</div>

<!---------------------------------------->
<div class="container-fluid" style="font-family: 'Lato', sans-serif;">  
<div class="row">
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/angular-3-logo.png" width="150px;"   height="125px"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">ANGULAR<h3><center>
    <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://cdn.worldvectorlogo.com/logos/mysql.svg" width="150px;" height="125px"></center>
    <div class="card-body">
     <h3 class="card-title"align="center">HTML</h3><center>
     <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://seeklogo.com/images/N/nodejs-logo-FBE122E377-seeklogo.com.png" width="150px;" height="125px"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">NODEJS</h3><center>
    <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
</div>
</div>


<!--------------------------------------------------------------->
<hr>
<h5 align="center">PROGRAMMING LANGUAGE</h5>

<div class="container-fluid" style="font-family: 'Lato', sans-serif;">  
<div class="row">
  
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://i.dlpng.com/static/png/6653567_preview.png" width="150px;"   height="125px"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">JAVA<h3><center>
    <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTnDXOPr1GVZDLIay_z1BsdyTukdBghoPh1AQ&usqp=CAU" width="180px;" height="125px"></center>
    <div class="card-body">
     <h3 class="card-title"align="center">PYTHON</h3><center>
     <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>

  </div>
</div>
</div>


<!----------------------footer----------------->
<?php
include 'footer.php';
?>
<!--------------------------------------------->
<script >
  var preloader = document.getElementById('loading');

  function myFunction (){
    preloader.style.display = 'none';



  }
</script>
</body>
</html>
</body>
</html>