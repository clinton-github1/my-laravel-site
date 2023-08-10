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

        <div class="team-header">
            <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div> -->
            <img src="images/bg-imgs/bg-3.jpg">
            <div class="centered" style="width: 100%">Web Development is in our DNA</div>
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

         <div class="team-ttle">
            <div class="title m-b-md">
                The Fair Havens Digital team are professional, agile and reliable. It’s great peace of mind knowing we have such a knowledgeable extension to our team!
           </div>
        </div>


    <div class="team">
        <!-- <div class="team-members"> -->
            <div class="members-sec1">
    <div class="member">
        <div class="team-img"><img src="images/team/clinton1.png" alt="Manager Clinton" /></div>
        <div class="name-content">Clinton Were</div>
        <div class="position-content">Founder & Senior Developer</div>
        </div>
    <div class="member">
        <div class="team-img"><img src="images/team/salim.png" alt="Senior Developer Koba" /></div>
        <div class="name-content">Salim Koba</div>
        <div class="position-content">Senior Developer</div>
        </div>
    </div>
    <div class="members-sec2">
    <div class="member">
        <div class="team-img"><img src="/images/team/brown.JPG" alt="Senior Developer Brown" /></div>
        <div class="name-content">Brown Tunje</div>
        <div class="position-content">Senior Developer</div>
        </div>
    <div class="member">
        <div class="team-img"><img src="images/team/leah3.png" alt="Marketing Manager Leah" /></div>
        <div class="name-content">Leah Chitsaka</div>
        <div class="position-content">Marketing Manager</div>
        </div>
    </div>
    <div class="members-sec3">
        <div class="member">
        <div class="team-img"><img src="images/team/woman-avatar.jpeg" alt="Finance Manager Abby" /></div>
        <div class="name-content">Abigael Mukhwana</div>
        <div class="position-content">Finance Manager</div>
        </div>

        <div class="member">
        <div class="team-img"><img src="images/team/man-avatar.jpg" alt="Marketing Manager " /></div>
        <div class="name-content"></div>
        <div class="position-content"></div>
        </div>
    </div>
<!-- </div> -->
</div>

@extends("/footer");
</body>
</html>