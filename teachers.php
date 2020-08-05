<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
 
<style>

ul{
list-style: none;
 }
img {
-ms-interpolation-mode: bicubic;
vertical-align: middle;
border: 0;
  }

.profile-card{
width: 300px;
border-radius: 2px;
overflow: hidden;
box-shadow: inset 0 -3em 3em rgba(0,0,0,0.1), 
            0 0  0 2px rgb(255,255,255),
            0.5em 0.5em 1em rgba(0,0,0,0.3);;
position: relative;
margin: auto;
background: rgba(255,255,255,1);
top: 50%;
transform: translateY(-50%);
  }
.profile-card header{
display: block;
position: relative;
background: rgba(255,255,255,1);
text-align: center;
padding: 30px 0 20px;
z-index: 1;
overflow: hidden;
  }
.profile-card header:before{
content: "";
position: absolute;
background: url() no-repeat;
background-size: cover;
width: 100%;
height: 100%;
left: 0;
top: 0;
z-index: -1;

  }
.profile-card header:after{
content: "";
position: absolute;
bottom: -1px;
left: 0;
width: 100%;
height: 100%;
z-index: -1;
background-image: linear-gradient(
      to bottom,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 1) 100%);
  }
.profile-card header img{
border-radius: 100%;
overflow: hidden;
width: 150px;
height: 150px;
/*border: 1px solid rgba(255,255,255,.5);*/
box-shadow: 0 1px 0 rgba(0,0,0,.1),0 1px 2px rgba(0,0,0,.1);
}
.profile-card header h1{
font-weight: 200;
font-size: 42px;
color: #444;
letter-spacing: -3px;
margin: 0;
padding: 0;
  }

.profile-card header h2{
font-weight: 400;
font-size: 14px;
color: #666;
letter-spacing: .5px;
margin: 0;
padding: 0;
}

.profile-card .profile-bio{
padding: 0 30px;
text-align: center;
color: #888;
}

.profile-card .profile-social-links{
display: table;
width: 70%;
margin: 20px auto;
}

.profile-card .profile-social-links li{
display: table-cell;
width: 33.3333333333333333%
}

.profile-card .profile-social-links li a{
display: block;
text-align: center;
padding: 10px;
margin: 0 10px;
border-radius: 100%;
-webkit-transition: box-shadow 0.2s;
-moz-transition: box-shadow 0.2s;
-o-transition: box-shadow 0.2s;
transition: box-shadow 0.2s;
}
.profile-card .profile-social-links li a:hover{
box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24);
}

.profile-card .profile-social-links li a:active{
box-shadow: 0 4px 5px 0 rgba(0,0,0,.14),0 1px 10px 0 rgba(0,0,0,.12),0 2px 4px -1px rgba(0,0,0,.2);
}

.profile-card .profile-social-links li a img{
width: 100%;
display: block;
}
.card{
	border: none;
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
}</style>
</head>
<body onload="myFunction()"style="background-color: #FDFEFE ">
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
<!-- here header navbar closed-->

<!------------------------------------->
<div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-4"  style="margin-top: 90px;">
         <img src="asset\image\readmore2.png" alt="..." width="200" height="auto">
      </div>
      <div class="col-sm-8"  style="margin-top: 90px; padding: 20px;">
        <h2 align="center">Welcome To Interactive Learning</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias
Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident </p>
        <center>
         <button href="#" class="btn btn-success" >Read More</button></center> 
      </div>
    </div>
</div>

<!--------------------------------------------------------->
<div class="container-fluid" >  
<div class="row">
  <div class="col-sm-4"  style="margin-top:50px;">
   <aside class="profile-card">
     <header>
     <a href="#">
      <img src="asset/image/1.jpg">
    </a>
    <h1>Ali Shahab</h1>
    <h2>Another Web Designer</h2>
    </header>
    <div class="profile-bio">
    <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
    </div>
    <ul class="profile-social-links">
    <li>
      <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
    </li>
    </ul>
  
</aside>
</div>


  <div class="col-sm-4"  style="margin-top:50px;">
   <aside class="profile-card">
     <header>
     <a href="#">
      <img src="asset/image/1.jpg">
    </a>
    <h1>Ali Shahab</h1>
    <h2>Another Web Designer</h2>
    </header>
    <div class="profile-bio">
    <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
    </div>
    <ul class="profile-social-links">
    <li>
      <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
    </li>
    </ul>
  
</aside>
</div>

  <div class="col-sm-4"  style="margin-top:50px;">
   <aside class="profile-card">
     <header>
     <a href="#">
      <img src="asset/image/1.jpg">
    </a>
    <h1>Ali Shahab</h1>
    <h2>Another Web Designer</h2>
    </header>
    <div class="profile-bio">
    <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
    </div>
    <ul class="profile-social-links">
    <li>
      <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
    </li>
    </ul>
  
</aside>
</div>
</div>
</div>


<!---------------------------------------->
<div class="container-fluid" style="padding-bottom: 20px;">  
<div class="row">
  <div class="col-sm-4"  style="margin-top:50px;">
   <aside class="profile-card">
     <header>
     <a href="#">
      <img src="asset/image/1.jpg">
    </a>
    <h1>Ali Shahab</h1>
    <h2>Another Web Designer</h2>
    </header>
    <div class="profile-bio">
    <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
    </div>
    <ul class="profile-social-links">
    <li>
      <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
    </li>
    </ul>
  
</aside>
</div>


  <div class="col-sm-4"  style="margin-top:50px;">
   <aside class="profile-card">
     <header>
     <a href="#">
      <img src="asset/image/1.jpg">
    </a>
    <h1>Ali Shahab</h1>
    <h2>Another Web Designer</h2>
    </header>
    <div class="profile-bio">
    <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
    </div>
    <ul class="profile-social-links">
    <li>
      <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
    </li>
    </ul>
  
</aside>
</div>

  <div class="col-sm-4"  style="margin-top:50px;">
   <aside class="profile-card">
     <header>
     <a href="#">
      <img src="asset/image/1.jpg">
    </a>
    <h1>Ali Shahab</h1>
    <h2>Another Web Designer</h2>
    </header>
    <div class="profile-bio">
    <p>Specialties are Creative UI, HTML5, CSS3, Semantic Web, Responsive Layouts, Web Standards Compliance, Performance Optimization, Cross Device Troubleshooting.</p>
    </div>
    <ul class="profile-social-links">
    <li>
      <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
      </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-envato.svg">
    </a>
    </li>
    <li>
    <a href="">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-codepen.svg">
    </a>
    </li>
    </ul>
  
</aside>
</div>
</div>
</div>

<!---------------------------------------->

<!----------------------footer----------------->
<?php
 include 'footer.php';
?>

<!-------------------------->
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