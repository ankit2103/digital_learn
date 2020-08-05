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
<body onload="myFunction()" >
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
<!-------------------------------------------------->
<div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-5"  style="margin-top: 70px;">
         <img src="asset\image\readmore3.png" alt="..." width="200" height="auto">
      </div>
      <div class="col-sm-7"  style="margin-top: 70px;">
        <h2 align="center">Get Access To E-Learning Material</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias
Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident </p>
        <center>
         <button href="#" class="btn btn-success">Dicuss</button></center> 
      </div>
    </div>
</div>

<!--------------------------------------------------------->
<div class="container-fluid" >  
<div class="row">
  <div class="col-sm-4" align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/java.jpg" width="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">JAVA</h3><center>
    <a href="learning.html" class="btn btn-success">Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4" align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/php.jpg" width="150px;"></center>
    <div class="card-body">
     <h3 class="card-title" align="center">PHP</h3>
     <center>
     <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4" align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/html.png" width="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">HTML</h3><center>
    <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
</div>
</div>

<!---------------------------------------->
<div class="container-fluid" >  
<div class="row">
  <div class="col-sm-4" align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/html.png" width="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">HTML</h3><center>
    <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4" align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/html.png" width="150px;"></center>
    <div class="card-body">
     <h3 class="card-title"align="center">HTML</h3><center>
     <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
  <div class="col-sm-4" align="center">
    <div class="card text-black " style="width: 18rem; margin-top: 20px;"><center>
     <img src="asset/image/html.png" width="150px;"></center>
     <div class="card-body">
    <h3 class="card-title" align="center">HTML</h3><center>
    <a href="learning.html" class="btn btn-success"  >Learn</a></center>
    </div>
   </div>
  </div>
</div>
</div>


<!---------------------------------------->

<!----------------------footer----------------->
<?php 
include 'footer.php';
?>
<!---------------------------------------->
<button onclick="topFunction()" id="myBtn" title="Go to top"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-10.646.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z"/>
</svg></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
 
</script>

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