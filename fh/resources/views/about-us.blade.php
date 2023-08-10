<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fair Havens Digital</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon1.ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/resize.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>

        <div class="about-header">
            
            <img src="images/bg-imgs/bg-beach.jpg">
            <div class="centered" style="width: 100%">Extraordinary lives within</div>
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

        <div class="about-ttle">
            <div class="title m-b-md">
                Our knowledge will drive your business forward today. But it's how we prepare you for tomorrow that sets us apart.
           </div>
        </div>

<!-- ############################################################################### -->

<div class="about-us">
        <div class="about-us-top">
            <div class="trust">
                <div class="h2"><h4>Cost</h4></div>
                <p>Our main aim is to help all business sizes to grow to giant businesses at the most affordable costs. </p></div>
    <div class="reliability">
        <div class="h2"><h4>Reliability</h4></div>
        <p>We’re on hand whenever you need us – scaling up resource and offering support outside normal business hours as required.</p></div>
    <div class="collaboration-top">
        <div class="h2"><h4>Collaboration</h4></div>
        <p>We work with clients as an extension of our existing team. Regular communication keeps us up-to-date on progress and means we can adapt to new requirements as needed.</p></div>
        </div>
        <div class="about-us-bottom">
            <div class="title m-b-md">
                Our History
           </div>
            <div class="h2"><h4>Years of experience in helping business sites tranform lives</h4></div><br>
            <p>In 2020 during the Covid-19 pandemic, our founder, Clinton Were saw how the right team could help grow small and mid-size enterprises into more profitable companies through better designed and developed websites. This led to him bringing that team together in 2023 to ensure the dream of every business to reach the world is achieved.  Since that time, we have consistently helped organisations across a variety of industries and sectors grow their online businesses, often increasing profits dramatically.  This is why we can confidently say: we are experts in delivering results for business websites.</p>
    </div>
    
        </div>

<!-- ################################################################################ -->




        <div class="about-team-fh">
            <div class="title m-b-md">
               #TeamFHD
           </div>
           <p>Our strategists, designers and developers bring together smart creative, leading technology and commercial knowledge. Across small business sites, medium and even Magento, and more ecommerce sites, we confidently identify and deliver the right technology for every project, applying a user-centered approach from start to finish with great exceptional user experiences.</p>
        </div>

        <div class="about-we-do">
            <div class="title m-b-md">
               We do what we love
           </div>
           <p>We’re driven by data and motivated by a desire to create meaningful experiences that delight customers. Above all, we value long-term client relationships and will immerse ourselves in your brand to find the best possible solution to all your business challenges.</p>

           <p>Whether you’re a small startup or a global brand, we’d love to work with you.</p>
        </div>

        <div class="about-we-believe">
            <div class="title m-b-md">
               We do what we believe in
           </div>
           
           <div class="about-we-believe-container">
               <div class="collaboration"><h4>We love collaborating</h4>
                <p>Working together brings fresh ideas and smart thinking. We create and nurture a space where everyone feels heard so the best ideas can rise to the top.</p>
                </div>
               <div class="extraordinary">
                   <h4>We create the extraordinary</h4>
                <p>Boundaries were made to be pushed. What better way to deepen our experience and understanding than with something that’s never been done before?</p>
               </div>
               <div class="embrace">
                   <h4>We embrace the unknown</h4>
                <p>Our best work happens outside of our comfort zone. Today’s extraordinary is tomorrow’s standard so we continually move forward and think beyond.</p>

               </div>
           </div>

        </div>

        <div class="about-services">
            <div class="about-services-title">
                <div class="title m-b-md">
               Our Services
                </div>
            </div>
            <div class="about-services-contents">
                <div class="digital-expe"><a href="{{ url('/services/digital-experience') }}">
                    <div class="statement">
                    <h4>Digital experience and UX design</h4>

                    <p>Customer-centred design is the cornerstone of our creative process. Our approach is tailored to your organisation's needs & guarantees results.</p>
                </div>
                    <div class="arrow-image"><img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
                </a></div>
                <div class="ecommerce-trans"><a href="{{ url('/services/business-transformation') }}">
                    <div class="statement">
                    <h4>Business transformation</h4>

                    <p>As delivered for some of the world’s biggest brands. Our multi-functional experience and proven processes create extraordinary retail experiences that are all gain.</p></div>
                   <div class="arrow-image"> <img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
                </a> 
            </div>
                <div class="maintainance-opt"><a href="{{ url('/services/maintenance-and-optimization') }}">
                    <div class="statement">
                    <h4>Maintenance and optimisation</h4>

                     <p>Results-driven services that help you meet your business objectives, whatever stage your store is at. Staying ahead has never been so easy.</p></div>
                     <div class="arrow-image"><img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
               </a> </div>
            </div>
        </div>
@extends("/footer");

</body>
</html>