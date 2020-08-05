<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="asset/css/modal.css">

   
  <title></title>
  <!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style >
html {
scroll-behavior: smooth;
}
{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
}

#myBtn {
display: none;
position: fixed;
bottom: 10px;
right: 20px;
z-index: 99;
font-size: 20px;
border: none;
outline: none;
background-color: green;
color: white;
cursor: pointer;
padding: 8px;
border-radius: 100px;

}

#myBtn:hover {
background-color: black;
}
.parallax {
 background-image: url("asset/image/12.jpeg");
 min-height: 300px; 
 background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
 color: white;
}
.container-fluid .box{
width: auto;
height:290px;
background: white;
color: black;
background-color: #E3E2E1;
border-radius: 10px;
}
.courses-item{
background:#002147 ;
width:auto;
height: 125px;
padding-top: 20px;
border-radius: 10px;
}
.parallax1{
background-image: url("asset/image/5.jpeg");
min-height: 400px; 
color: var(--text-color);
font-size: 16px;
line-height: 24px; 
background-attachment: fixed;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
.container-fluid .box1{
width: auto;
height:relative;
background: white;
padding: 10px;
color: black;
background-color: #E3E2E1;
border-radius: 10px;
margin-left: 20px;
}
#image{
width: auto;
height:auto;
border-radius: 10px;
}
#input{
width: 80%;
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
#btn{
-moz-box-shadow: 0 0 5px 5px #888;
-webkit-box-shadow: 0 0 5px 5px#888;
box-shadow: 0 0 5px 5px #888;
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

.top-course .course, .top-course .blog-entry, .blog-entries .course, .blog-entries .blog-entry {
  display: block;
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease;
  margin-bottom: 30px;
}

.top-course .course:hover {
  opacity: .7;
}

.top-course .course img {
  max-width: 100%;
  margin-bottom: 20px;
}

.top-course .course h2 {
  font-size: 18px;
  line-height: 1.5;
}

.top-course .course p {
  font-size: 13px;
  color: gray;
}


}


/*********************************
10. Events
*********************************/

.events
{
  width: 100%;
  padding-top: 89px;
  padding-bottom: 100px;
  background: #FFFFFF;
}
.events_row
{
  margin-top: 54px;
}
.event
{
  
}
.event_image
{
  width: 100%;
}
.event_image img
{
  max-width: 100%;
}
.event_date
{
  position: absolute;
  top: 20px;
  left: 20px;
  width: 80px;
  height: 80px;
  background: #FFFFFF;
  border: solid 1px #ebebeb;
}
.event_day
{
  font-family: 'Montserrat', sans-serif;
  font-size: 40px;
  font-weight: 700;
  color: rgba(0,0,0,0.9);
  line-height: 0.75;
}
.event_month
{
  font-family: 'Montserrat', sans-serif;
  font-size: 10px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.3em;
  color: rgba(0,0,0,0.5);
  line-height: 0.75;
  margin-top: 12px;
}
.event_body
{
  width: 100%;
  height: 70px;
  border-left: solid 1px #ebebeb;
  border-right: solid 1px #ebebeb;
  border-bottom: solid 1px #ebebeb;
  padding-left: 22px;
  padding-right: 22px;
}
.event_title a
{
  font-family: 'Montserrat', sans-serif;
  font-size: 20px;
  font-weight: 700;
  color: #000000;
  -webkit-transition: all 200ms ease;
  -moz-transition: all 200ms ease;
  -ms-transition: all 200ms ease;
  -o-transition: all 200ms ease;
  transition: all 200ms ease;
}
.event_title a:hover
{
  color: #2e21df;
}
.event_tag
{
  width: 61px;
  height: 25px;
  background: #2e21df;
  border-radius: 3px;
  font-size: 12px;
  text-align: center;
  line-height: 25px;
  color: #FFFFFF;
  font-weight: 600;
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
      <li  class="nav-item active">
        <a class="nav-link " href="#" id="a1" >Home <span class="sr-only">(current)</span></a></li>    
        <li class="nav-item">
        <a class="nav-link" href="#" id="a1" >About</a></li>
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
    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-info" style="border-radius: 5px; text-transform: uppercase; ">Log In</button>
 </div>
</nav>
<!-- here header navbar closed-->
 <!----------------carousels----------------------->

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
<!------------------cards 1-------------------------------->

  <section class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Top Courses</h2>
           
          </div>
        </div>
        <div class="row top-course">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/webdesign.jpg" alt="Image placeholder">
              <h2>Web Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/wordpress.jpg" alt="Image placeholder">
              <h2>WordPress Plugin</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/javascript.jpg" alt="Image placeholder">
              <h2>JavaScript 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/photoshop.jpg" alt="Image placeholder">
              <h2>Photoshop Design 101</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/reactjs.jpg" alt="Image placeholder">
              <h2>Learn Native ReactJS</h2>
              <p>Enroll Now</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="course">
              <img src="images/angularjs.jpg" alt="Image placeholder">
              <h2>Learn AngularJS 2</h2>
              <p>Enroll Now</p>
            </a>
          </div>
        </div>
      </div>
    </section>























<!--------------------------------------------------------->
<div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-4"  style="margin-top: 10px; padding: 20px;"><center>
         <img src="asset\image\g1.jpg" class="card-img" alt="...">    </center>
      </div>
      <div class="col-sm-8"  style="margin-top: 10px; padding: 20px;">
        <h2 align="center">Welcome To Our Campus</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident minus saepe reiciendis nulla dolore delectus molestias
Numquam architecto, ex veritatis tempora aliquid labore natus autem iusto magni dicta incidunt nostrum odit veniam voluptas provident </p>
        <p align="right"><small>Last updated 3 mins ago</small></p>
         <button href="#" class="btn btn-success" style="float: right; ">Read More</button> 
      </div>
    </div>
</div>

<!--parallax started-->
<!--parallyx starts here-->

<div class="parallax">
 <div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-8"  style="margin-top: 10px; padding: 20px;"><center>
         
         <h1 align="left" style="padding-top: 20px;">
         Apply For Scholarship
        </h1>
       <h4 align="left">
    Fall 2020 Applications Are Open !<br><br></h4>
    <p align="left">
Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;<br>
     Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.
</h4>
 </div>
      <div class="col-sm-4"  style="margin-top:40px; padding: 20px;">
      <button type="button" class="btn btn-warning"><b>Apply Now!&nbsp;&nbsp;  <i class="fa fa-sign-in" aria-hidden="true"></i></b></button>
      </div>
</div>
</div>
</div>
<!----------------end of parallax------------------------->

 <div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-4"  style="margin-top: 10px; padding: 20px;"><center>
        <div class="box shadow">
            <h4 class="tagline">Find your course</h4>
            <p>Fill in below form to find your courses</p>
                         <form>
                            <div class="form-group">
                              <div class="form-group col-md-12">
                              <input type="text" class="form-control " id="" placeholder="Course" required="" id="i1"></div>
                            </div>
                            <div class="form-group">
                            <div class="input-group col-md-12">
                                <select class="custom-select" id="i1" required="">
                                    <option>Category</option>
                    <option>Computer</option>
                    <option>Science</option>
                    <option>History</option>
                    <option>Economics</option>
                                </select>
                            </div>
                            </div>
                            <button type="button" class="btn btn-success">Success</button>
                      </form>
          </div>
        </div>
      <div class="col-sm-8"  style="">
   <br><br>
     
            <div class="row">
              <div class="col-md-3 col-sm-6 col-6">
                <a href="services.html"><div class="courses-item"><center>
                  <span class="fa fa-male fa-2x"style="color: white;"></span>
                  <p style="color: white;"> Socioligy</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6">
                <a href="services.html"><div class="courses-item">
                  <center>
                  <span class="fa fa-suitcase fa-2x" style="color: white; padding-top: : 10px;"></span>
                  <p style="color: white;">Business</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                <a href="services.html"><div class="courses-item"><center>
                  <span class="fa fa-code fa-2x"style="color: white;"></span>
                  <p style="color: white;">Web Dev</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                <a href="services.html"><div class="courses-item"><center>
                  <span class="fa fa-flask fa-2x"style="color: white;"></span>
                  <p style="color: white;"> Science</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="services.html"><div class="courses-item mt-2"><center>
                  <span class="fa fa-money fa-2x "style="color: white;"></span>
                  <p style="color: white;">Ecomomics</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="services.html"><div class="courses-item mt-2"><center>
                  <span class="fa fa-gg  fa-2x" style="color: white;"></span>
                  <p style="color: white;">Biology</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="services.html"><div class="courses-item mt-2"><center>
                  <span class="fa fa-desktop  fa-2x"style="color: white;"></span>
                  <p style="color: white;">Computing</p></center>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="services.html"><div class="courses-item mt-2"><center>
                  <span class="fa fa-mouse-pointer  fa-2x"style="color: white;"></span>
                  <p style="color: white;">Web Design</p></center>
                </div></a>
              </div>
            </div>
   </div>
      </div>
    </div>
</div>

<!-----------------------Details -------------------->

 <div class="container-fluid" style="background-color: #E7E6EA"> 
 <div class="row"> 
  <div class="col-sm-3">
    <h3 class=""><b>&nbsp;&nbsp;&nbsp;60</b></h3>
    <p><b>PROFESSIONAL INSTRUCTORS</b></p>
  </div>

  <div class="col-sm-3">
    <h3 class=""><b>&nbsp;&nbsp;&nbsp;18</b></h3>
    <p><b>NEW COURSES EVERY YEAR</b></p>
  </div>
<div class="col-sm-3">
    <h3 class=""><b>&nbsp;&nbsp;&nbsp;34</b></h3>
    <p><b>LIVE SESSIONS EVERY MONTH</b></p>
</div>
  <div class="col-sm-3">
   <h3 class=""><b>&nbsp;&nbsp;&nbsp;20</b></h3>
    <p><b>REGISTERED STUDENTS</b></p>
  </div>
</div>
</div>


<!--parallax started-->
<!--parallyx starts here-->

<div class="parallax1">
 <div class="container-fluid" >  
    <div class="row">
      <div class="col-sm-6"  style="margin-top: 10px; padding: 20px;">
        <div class="heading">
          <h3 style="color: white;">Hear what our students have to say</h3>
          <p style="color: white;">Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
            Nulla mollis dapibus nunc, ut rhoncus
            turpis sodales quis. Integer sit amet mattis quam.</p>
            <p style="color: white;"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
              Nulla mollis dapibus nunc, ut rhoncus
              turpis sodales quis. Integer sit amet mattis quam.</p>
          </div>
      </div>
      <div class="col-sm-6" style="margin-top: 10px; padding: 20px;">
        <div class="item text-center">
             <div class="imgTitle">
               <img src="asset/image/c3.jpg" class="img-responsive" alt="" style="border-radius:50%;" />
              </div>
              <h6 style="color: white;">Jessey Rosey</h6>
              <p style="color: white;">Student</p>
              <p style="color: white;"> Magna aliqua. Ut enim ad minim veniam, quis nostrud.Lorem ipsum dolor sit amet, consectetur adipisicingelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
              
          </div>
      </div>
</div>
</div>
</div>
<!----------------end of parallax------------------------->
<!------------------------Latest Post------------------------------>
 <div class="container-fluid" > 
  <div class="row">
    <div class="col-sm-6"  style="margin-top: 10px; padding: 20px;">
    <br>      
        <h3 style="font-size: 30px;"><b><center>Latest Post</center></b></h3>
            <div class="box1 shadow">
            <div class="row">
              <div class="col-sm-4">
               <img src="asset/image/g9.jpg"  alt="" id="image" class="img-fluid">
              <hr style="color: black;"></div>

               <div class="col-sm-8">
                <b>Summer Course Starts</b><br>
                <p style="color: #89898C">April 25, 2020</p>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit architecto..</p>
                <hr style="color: black;">
               </div>
           </div>
             <div class="row">
               <div class="col-sm-4">
                <img src="asset/image/g9.jpg"  alt="" id="image" class="img-fluid">
                 <hr style="color: black;"></div>
                 <div class="col-sm-8">
                  <b>Summer Course Starts</b><br>
                  <p style="color: #89898C">April 25, 2020</p>
                  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit architecto..</p>
                  <hr style="color: black;">
                 </div>
               </div>
               <div class="row">
               <div class="col-sm-4">
                <img src="asset/image/g9.jpg"  alt="" id="image" class="img-fluid"><hr style="color: black;"></div>
                 <div class="col-sm-8">
                  <b>Summer Course Starts</b><br>
                  <p style="color: #89898C">April 25, 2020</p>
                  <p> Lorem ipsum dolor sit amet consectetur adipisicing elit architecto..</p>
                  <hr style="color: black;">
                 </div>
               </div>
               

</div>
<div align="right" style="margin-right: 45px;">
  <br>
<button type="button" class="btn btn-success">View All</button> </div>   
  </div>

<!-------------------------Upcoming Events-------------------------->
   



























<!----------------------footer----------------->
<?php 
include 'footer.php';
?>
<script >
  var preloader = document.getElementById('loading');

  function myFunction (){
    preloader.style.display = 'none';
  }

  
</script>





<!--------------------------------->
<div class="w3-container">

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-3s w3-animate-zoom" style="max-width:400px">



  <div class="form">
      
           

      <ul class="top-area">
        <li class="tab active"><a href="#login">Log In</a></li>
        <li class="tab"><a href="#signup">Sign Up</a></li>
        
      </ul> <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-large w3-hover-white w3-display-topright" title="Close Modal">&times;</span>
       
      
      </div>


      <div class="tab-content">
       
        <div id="login">   
          <h1>Welcome Back!</h1>
          <p align="center">
           <button class="btn btn-white btn-sm" id="btn" style="width: 80%; height: 50px;"><img src="https://img.icons8.com/color/48/000000/google-logo.png" height="30px" />&nbsp;&nbsp;&nbsp;Continue with Google</button>
           </p>


        <table width="100%">
        <td><hr /></td>
        <td style="width:1px; padding: 0 10px; white-space: nowrap;">Or</td>
        <td><hr /></td>
        </table>
          
          <form action="login.php" method="post">
          
            <div class="label-field">
            <label>
             Email Address<span class="req" ></span>
            </label>
            <input type="email "  name="email" required/>
          </div>
          
          <div class="label-field">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>

         <div id="signup">   

          <h1>Sign Up for Free</h1>
  <p align="center">
           <button class="btn btn-white btn-sm" id="btn" style="width: 80%; height: 50px;"><img src="https://img.icons8.com/color/48/000000/google-logo.png" height="30px" />&nbsp;&nbsp;&nbsp;Continue with Google</button>
           </p>



        <table width="100%">
        <td><hr /></td>
        <td style="width:1px; padding: 0 10px; white-space: nowrap;">Or</td>
        <td><hr /></td>
        </table>


          
          <form action="sign_up.php" method="POST">
          
          <div class="top-row">
            <div class="label-field">
              <label>
                First Name<span class="req"></span>
              </label>
              <input type="text" name="fname" required  />
            </div>
        
            <div class="label-field">
              <label>
                Last Name<span class="req"></span>
              </label>
              <input type="text" name="lname" required />
            </div>
          </div>

          <div class="label-field">
            <label>
              Email Address<span class="req"></span>
            </label>
            <input type="email" name="email"  required/>
          </div>
          
          <div class="label-field">
            <label>
              Set A Password<span class="req"></span>
            </label>
            <input type="password" name="password" required/>
          </div>
          
          <button type="submit" class="button button-block" href="profile.html"/>Sign Up</button>
          
          </form>

        </div>
  
      </div>  
</div>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </div>
</div>
            
 <script type="text/javascript">
   // Code By Webdevtrick ( https://webdevtrick.com )
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

    if (e.type === 'keyup') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
      } else {
        label.removeClass('highlight');   
      }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
        label.removeClass('highlight'); 
      } 
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
      }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
</script><script>
    window.onbeforeunload = function () {
            window.scrollTo(0, 0);
        }; 
</script>

</body>
</html>