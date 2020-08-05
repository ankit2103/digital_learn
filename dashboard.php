<?php
session_start();
$con=mysqli_connect('localhost','root','','digital learn');
mysqli_select_db($con,'sign_up');
$email=$_SESSION['email'];
$show = mysqli_query($con,"SELECT * FROM sign_up WHERE email = '".$_SESSION['email']."' ");
while($row = mysqli_fetch_row($show)){
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
  <style>
.btn-sml {
padding: 10px 10px;
font-size: 22px;
border-radius: 8px;
}
.notification{
display: flex;
margin-right: 0px;
border-right: 1px solid rgb(228, 228, 228);
color: white;
}

.notification a{
color: white;
display: flex;
text-decoration:none;
font-size: 1.3rem;
padding-top: 6px;
margin: 0px 20px 0px 0px;

}
.notification a:hover{
color: cornflowerblue;
transition-property: all;
transition-duration: 1s;
transition-timing-function: ease-in-out;
transform: scale(1.1);

}
#bell:hover{
color: cornflowerblue;
transform: rotate(360deg);
transition-duration: 2s;
}
.box{
	width: 100px;
  background:#E5E7E9; 
  color:green;
  border-radius: 10px;
  margin-left: 40px;

}
.col-sm-4{
  position: relative;
  max-width: 400px; 
  margin-top: 50px;
  }
.col-sm-4 .content {
  position: absolute;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  top: 0; 
  bottom: 0;
  padding: 20px;
  width: 350px;

 
}
.box1{
  width: 250px;
  background:#E5E7E9; 
  color:green;
  border-radius: 10px;
  margin-left: 40px;

}
/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 30px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */
  </style>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd; ">
<nav>
  <a class="navbar-brand" href="#">
  <img src="asset\image\index2.png" width="60" height="40" alt="" >
  </a>
</nav>
<a class="navbar-brand" style="text-transform: uppercase;" href="#">Digital-Learn</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
     <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
        Explore</button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <a class="dropdown-item" href="#">Action</a>
       <a class="dropdown-item" href="#">Another</a>
       <a class="dropdown-item" href="#">Action</a>
       <a class="dropdown-item" href="#">Action</a>
       <a class="dropdown-item" href="#">Another</a>
       <a class="dropdown-item" href="#">Action</a>
       <a class="dropdown-item" href="#">Action</a>
       <a class="dropdown-item" href="#">Another</a>
       <a class="dropdown-item" href="#">Action</a>
      </div>
     </div>  
   </ul> &nbsp; &nbsp;
   <ul class="nav navbar-nav navbar-center">
    <li class="nav-item ">
      <form class="form-inline ">
      <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search" >
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </li>
  </ul>
    <ul class="navbar-nav ml-auto">
     <div class="notification">
     <a href="#" title="">For Interprise</a>
     <a href="#" title="notification" id="bell"><svg width="30px" height="auto" viewBox="0 0 16 16"class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
      <path fill-rule="evenodd"
       d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" /></svg></a>
      </div>
      <div id="profile" style="padding-left: 10px;">
       <svg width="30px" height="40px" viewBox="0 0 16 16" class="bi bi-person-fill" fill="cornflowerblue"xmlns="http://www.w3.org/2000/svg">
       <path fill-rule="evenodd"d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>
      </div>
     <li class="nav-item dropdown" style="padding-right: 70px">
        <a class="nav-link" href="#" id="a1"id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <?= $row[1] ?></a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size: 15px">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something</a>
        </div>
     </li>
   </ul>
  </div>
</nav>
<!---------------------------------->
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset\image\1.jpg" class="d-block w-100" alt="..." height="500px" width="20px">
      <div class="carousel-caption">
        <h1 >Better Education For A</h1><h1 > Better World</h1>
      <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large" style="border-radius: 5px;"><b>Join in For Free</b></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset\image\2.jpg" class="d-block w-100" alt="..."height="500px" width="20px">
        <div class="carousel-caption">
        <h1 >Better Education For A</h1><h1> Better World</h1>
       <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large" style="border-radius: 5px;"><b>Join in For Free</b></button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset\image\3.jpg" class="d-block w-100" alt="..." height="500px" width="20px">
      <div class="carousel-caption">
        <h1>Better Education For A</h1><h1> Better World</h1>
       <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large" style="border-radius: 5px;"><b>Join in For Free</b></button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--------------Category---------------------->
<br><br>
<div class="container-fluid">
<div class="box">
		<p style="padding: 5px; font-size: 15px;">CATEGORIES</p></div>
	<h1 style="margin-left: 40px;margin-top: -10px;  ">Popular Categories
<button class="btn btn-success" style="float: right; margin-right: 20px; border-radius: 10px; padding: 15px"> ALL CATEGORIES</button></h1>
</div>
<div class="container-fluid" >  
<div class="row">
<div class="col-sm-4"  >
  <img src="asset/image/book.jpg" alt="Notebook" style="width: 350px;height: 300px;">
  <div class="content" >
  	 <h1 style="margin-top: 100px " align="center">Heading</h1>
     <p align="center">Lorem ipsum..</p>
  </div>
</div>

<div class="col-sm-4"  >
  <img src="asset/image/book.jpg" alt="Notebook" style="width: 350px;height: 300px;">
  <div class="content" >
  	 <h1 style="margin-top: 100px " align="center">Heading</h1>
     <p align="center">Lorem ipsum..</p>
  </div>
</div>

<div class="col-sm-4"  >
  <img src="asset/image/book.jpg" alt="Notebook" style="width: 350px;height: 300px;">
  <div class="content" >
  	 <h1 style="margin-top: 100px " align="center">Heading</h1>
     <p align="center">Lorem ipsum..</p>
  </div>
</div>
</div>
</div>

<div class="container-fluid" >  
<div class="row">
<div class="col-sm-4"  >
  <img src="asset/image/book.jpg" alt="Notebook" style="width: 350px;height: 300px;">
  <div class="content" >
  	 <h1 style="margin-top: 100px " align="center">Heading</h1>
     <p align="center">Lorem ipsum..</p>
  </div>
</div>

<div class="col-sm-4"  >
  <img src="asset/image/book.jpg" alt="Notebook" style="width: 350px;height: 300px;">
  <div class="content" >
  	 <h1 style="margin-top: 100px " align="center">Heading</h1>
     <p align="center">Lorem ipsum..</p>
  </div>
</div>

<div class="col-sm-4"  >
  <img src="asset/image/book.jpg" alt="Notebook" style="width: 350px;height: 300px;">
  <div class="content" >
  	 <h1 style="margin-top: 100px " align="center">Heading</h1>
     <p align="center">Lorem ipsum..</p>
  </div>
</div>
</div>
</div>
<br><br>
<!-----------------------top course----------------------------->
<div class="container-fluid" align="center">
<div class="box1">
		<p style="padding: 5px; font-size: 15px;" >CHOOSE YOUR DESIRED COURSES</p></div>
	<h1 style="margin-left: 40px;margin-top: -10px;  ">Browse Your Top Courses</center></h1>
	</div>

<div class="container">
  <div class="row">
    <h2>Media Slider Carousel BS3</h2>
  </div>
  <div class='row'>
    <div class='col-md-8'>
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>      
            </div>
          </div>
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
      </div>                          
    </div>
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>

<?php
}
include 'footer.php';
?>
</body>
</html>