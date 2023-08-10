 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="fair, havens, fair havens, digital, fair havens digital,fair about, services, transformation, business, maintenance, experience, digtal experience, contact, fair digital, digital fair">

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

<section id="header-home">
        <div class="header-main">
            <!-- <div class="bg-image"> -->

                <!-- <img src="images/web-img4.jpg"> -->
                <img src="images/bg-imgs/bg-7.jpg">
                <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png"></a> </div> -->
                <div class="centered" style="width: 100%">FAIR HAVENS DIGITAL <h3>Web Development is in our DNA</h3></div>
            <!-- </div> -->
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


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
    </div>
</section>




<section id="home-services">
    <div class="home-services-left">
       <div class="home-services-left-heading"> Omnichannel<br> Business development.</div>
        <p>Designed and engineered digital experiences, brought to life with connected technology.</p>
            <h3><a href="{{ url('/our-services') }}"> See Our Services <i class="fa fa-arrow-right"></i></a></h3>
    </div>
</section>

<section id="home-about">
    <div class="home-services-left">
       <div class="home-services-left-heading"> We are<br> Fair Havens Digital.</div>
        <p>We’ve been innovating, creating and optimising world-class business experiences.</p>
            <h3><a href="{{ url('/about-us') }}"> Our Agency <i class="fa fa-arrow-right"></i></a></h3>
    </div>
</section>

<section id="home-contact">
    <div class="home-services-left">
        <div class="home-services-left-heading">Want<br> extraordinary?</div>
        <p>We can help.</p>
            <h3><a href="{{ url('/contact-us') }}"> Get In Touch <i class="fa fa-arrow-right"></i></a></h3>
    </div>
</section>

<!-- ####################################################################################### -->

        

<!-- ####################################################################################### -->

@extends("/footer");

    </body>
</html>
