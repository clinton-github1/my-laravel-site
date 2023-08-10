<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fair Havens Digital</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon1.ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/resize.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>

        <div class="about-header">
            <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div> -->
            <img src="images/bg-imgs/bg-8.jpg">
            <div class="centered" style="width: 100%">Experiences that Excel.</div>
            <div class="navbar">

                <div class="small-navbar">
    <div class="small-nav-logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div>
    <div class="small-nav-menu">
  <div id="myNav" class="overlay-nav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-nav-content">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/about-us') }}">About Us</a>
    <a href="{{ url('/our-services') }}">Services</a>
    <a href="{{ url('/our-team') }}">Our Team</a>
    <a href="{{ url('/contact-us') }}">Contact Us</a>
    <a href="{{ url('/our-projects') }}">Projects</a>
  </div>
</div>
</div>


<span style="cursor:pointer" onclick="openNav()">&#9776; MENU</span>
</div>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
                
                <div class="links">
                    <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div>
                    <!-- <a href="https://laravel.com/docs"><img src="images/web-img3.jpg"></a> -->
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/about-us') }}">About Us</a>
                    <a href="{{ url('/our-services') }}">Services</a>
                    <a href="{{ url('/our-team') }}">Our Team</a>
                    <a href="{{ url('/contact-us') }}">Contact Us</a>
                    <a href="{{ url('/our-projects') }}">Projects</a>
                    <!-- <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>

            </div>
        </div>
    <div class="sample-projects">
        <div class="kongere">
           <div class="kongere-ttle">
            <h3>Kongere Ways Limited : Still on Development Process</h3>
            <p>Dealers in Solar lighting, bituminous products, Roadworks and other Civil engineering services.</p>
            <h4>Contact Them on: 0721416683 / 0725671449 or sales@kongereways.co.ke</h4>
            <h4>Progress images</h4>
           </div>
           <div class="kongere-imgs">
               <div class="kongere-imgs1">
                   <div class="imgs"><img src="images/kongere/1.png"></div>
                   <div class="imgs"><img src="images/kongere/2.png"></div>
               </div>
               <div class="kongere-imgs1">
                   <div class="imgs"><img src="images/kongere/3.png"></div>
                   <div class="imgs"><img src="images/kongere/4.png"></div>
               </div>
           </div>
        </div>
    </div>



@extends("/footer");
    </body>
    </html>