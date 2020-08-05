<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width">
    <title>Dashboard</title>
    <!-- bootstrap links -->
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Pacifico&family=Roboto:wght@900&display=swap"
        rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <!--end -->
    <!-- css link -->
    <link rel="stylesheet" href="asset/css/main.css">
</head>
<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "90%" 
        }
</script>

<body onload="zoom()">
    <nav class="navbar" id="navbar">
        
            <h2><a href="" title="go to home">Digital-Learn</a> </h2>
        
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle fixed-top" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" id="navbutton">
                Explore
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>
        </div>
        <div class="box">
            <input type="text" id="searchbox" placeholder=" What do you want to learn ?">
            <button class="btn btn-primary" id="searchbtn">Search</button>
        </div>
        <div class="notification">
            <a href="#" title="">For Interprise</a>



            <a href="#" title="notification" id="bell"><svg width="2em" height="2em" viewBox="0 0 16 16"
                    class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                    <path fill-rule="evenodd"
                        d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg></a>


        </div>

        <div id="profile">
            <svg width="3.2em" height="3.2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="cornflowerblue"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
        </div>

        <div class="profiledd">
            <div class="dropdown">
                <a id="profile1" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Username
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <!-- navbar ends here -->

    <section class="cardshome">




        <div id="card1">
            <h1>Welcome!</h1>
        </div>

        <div id="card2">
            <div id="cards12">
                <h4>Tell us about yourself</h4>

                <label for="std">I am currently a</label>
                <input type="text" name="std" id="std" value="Student" placeholder="Enter your position">
                <a href="#" id="linkch">Set position</a>
            </div>

            <div id="card22">

                <p>Set Your Learning Goals</p>
                <a href="#" id="carrer">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-briefcase" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-6h-1v6a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-6H0v6z" />
                        <path fill-rule="evenodd"
                            d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v2.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 6.884V4.5zM1.5 4a.5.5 0 0 0-.5.5v1.616l6.871 1.832a.5.5 0 0 0 .258 0L15 6.116V4.5a.5.5 0 0 0-.5-.5h-13zM5 2.5A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z" />
                    </svg> Change my carrer
                </a>

                <a href="#" id="skills">
                    <svg width="1.7em" height="1.7em" viewBox="0 0 16 16" class="bi bi-graph-up" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z" />
                        <path fill-rule="evenodd"
                            d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z" />
                        <path fill-rule="evenodd"
                            d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z" />
                    </svg> Level up my skills

                </a>

            </div>

        </div>
    </section>
    <!-- first section ends here -->
    <!-- tab starts here -->
    <section class="tab">
        <div id="tab">
            <a href="#">Home</a>
            <a href="#">In progress</a>
            <a href="#">Completed</a>
        </div>
    </section>
    <!-- tab ends here -->
    <!-- card slider starts here -->
    <section class="cardslider">
        <h3>Most popular in Computer Science</h3>
        <div class="card-deck">
            <div class="card" id="cardslider1">
                <img class="card-img-top" src="asset/image/card1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Operating System</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Course</button>
                </div>
            </div>
            <div class="card" id="cardslider2">
                <img class="card-img-top" src="asset/image/card2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Data Science</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Course</button>
                </div>
            </div>
            <div class="card" id="cardslider3">
                <img class="card-img-top" src="asset/image/card3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Machine Learning</h4>
                    <p class="card-text">dditional content. This card has even longer content than the first to show
                        that equal height action.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Course</button>
                </div>
            </div>
        </div>


    </section>
    <!-- cards end here -->
    <section id="bar">

        <div id="bar1">
            <svg width="2.1em" height="1.7em" viewBox="0 0 16 16" class="bi bi-patch-plus-fll" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z" />
            </svg>
            <p>
                Interested in Data Science Carrer?</p> <div class="svgdet">our carrerlearning plan can help you.. </div><a href="#"
                id="abar">Learn More</a>
            <svg class="arrow" width="2em" height="2em"
                style="color: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);"
                viewBox="0 0 16 16" class="bi bi-arrow-right" fill="blue" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z" />
                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z" />
            </svg>
        </div>

    </section>



    <section class="hcard1">

        <div class="card mb-3" id="hcards" style="max-width: 800px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="asset/image/card1.jpg" alt="" srcset="" width="100%" height="250" img src="asset/image/card1.jpg"
                        xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: Image"
                        preserveAspectRatio="xMidYMid slice" role="img">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Get ready to launch a career in IT Support</h5>
                        <p class="card-text">This program is designed to take you from beginner to job-ready in under six months.</p>
                        <button class="btn btn-primary">Enroll Now </button>
                    </div>
                </div>
            </div>
        </div>


    </section>



</body>

</html>