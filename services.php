<html><head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>
  <!-- CSS only -->
 <style>
.card {

  box-shadow: 0 5px 20px 0 rgba(0,0,0,0.8);
  transition: 0.3s;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
  padding: 2px 16px;
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
<body onload="myFunction()">
<div id="loading" style="display: none;"></div>

<!--navbar starts from here--><!--navbar starts from here-->
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
      <li class="nav-item">
        <a class="nav-link " href="index.php" id="a1" >Home <span class="sr-only">(current)</span></a>
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
      <li class="nav-item active" style="margin-right: 20px;">
        <a class="nav-link" id="a1" href="services.php" tabindex="-1" aria-disabled="true">Services</a>
      </li>
    </ul>
 </div>
</nav>

<div class="container-fluid">  
    <div class="row">
      <div class="col-sm-4" style="margin-top: 70px;">
         <img src="asset\image\services.png" alt="..." height="auto" width="100%">
      </div>
      <div class="col-sm-8" style="margin-top: 70px; padding: 20px;">
        <h2 align="center">Our Services</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias
Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident </p>
        <center>
         <button href="#" class="btn btn-success">Read More</button></center> 
      </div>
    </div>
</div>

<!---------------------------------------->
<div class="container-fluid" >  
<div class="row">
  <div class="col-sm-4"  align="center">
   <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
    <img src="asset\image\onlinestream.jpg" width="150px;" height="150px;"></center>
    <div class="card-body">
    <h3 class="card-title"align="center">Video Streaming</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset\image\readmore2.png" width="150px;" height="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">Live Sessions</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/enotes.png" width="150px;" height="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">E-Notes</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
</div>
</div>
<br><br>
<!---------------------------------------->
<!---------------------------------------->
<div class="container-fluid" >  
<div class="row">
  <div class="col-sm-4"  align="center">
   <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
    <img src="asset/image/download.png" width="150px;" height="150px;"></center>
    <div class="card-body">
    <h3 class="card-title"align="center">Offline Downloads</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/project.png" width="150px;" height="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">Projects</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/onlinetest.png" width="150px;" height="150px;"></center>
    <div class="card-body">
     <h3 class="card-title"align="center">Online Test</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  
</div>
</div>
<br><br>
<!---------------------------------------->
<!---------------------------------------->
<div class="container-fluid" >  
<div class="row">
  <div class="col-sm-4"  align="center">
   <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
    <img src="asset/image/FeeCollection.png" width="150px;" height="150px;"></center>
    <div class="card-body">
    <h3 class="card-title"align="center">Fee Collection</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/Accounting.jpg" width="150px;" height="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">Accounting</h3><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4"  align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/RealTimeAttandance.png" width="150px;" height="150px;"></center>
    <div class="card-body">
     <h4 class="card-title"align="center" >Real Time Attandance</h4><center>
    <a href="#" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  
</div>
</div>

<!----------------------footer----------------->
<?php
include 'footer.php';
?>

<!----------------------footer----------------->
<!--------------------------------------------->
<script>
  var preloader = document.getElementById('loading');

  function myFunction (){
    preloader.style.display = 'none';
  }

  
</script>
</body>
</html>