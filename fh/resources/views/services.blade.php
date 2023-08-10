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



        <div class="services-header">
            <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div> -->
            <img src="images/transform-business.jpg">
            <div class="centered" style="width: 100%">Transform Your Business</div>
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
                    <a href="{{ url('/contact-us') }}">Contacts</a>
                    <a href="{{ url('/our-projects') }}">Projects</a>
                    <!-- <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                </div>

            </div>

        </div>


        <div class="our-services-1">
            <div class="our-services-1-left">
            <div class="our-services1-title">
                <div class="title m-b-md">
               Business experiences that shape the future
                </div>
            </div>
            <div class="our-services-contents">
                <p style="color: black;">We create intelligently designed, integrated shopping experiences that meet your customers' expectations.</p>

                <p>Our methodologies are proven to help you to plan effectively, identify risks early and invest your budget wisely.</p>
            </div>
        </div>
        <div class="our-services-1-right">
            
        </div>
        </div>


        <div class="our-services-2">
            
                <div class="title m-b-md">
               Digital experience & UX design
                </div>
            <div class="our-services-contents">
                <h4>Frictionless business experiences with a customer-centred approach.</h4>

                <p>We deliver real business value by combining industry-leading best practices with a deep understanding of your audience, business and digital ambitions.</p> <p>Our appreciation of technical constraints and skill for critical thinking allows you to achieve more than you  thought possible.</p>

                <h3><a href="{{ url('/services/digital-experience') }}">Discover Design</a></h3>
            </div>

        </div>

        <div class="our-services-3">
            
                <div class="title m-b-md">
               Business Transformation
                </div>
            <div class="our-services-contents">
                <h4>As delivered for some of the world’s biggest brands.</h4>

                <p>From scale-up to enterprise, our consultancy brings a fresh perspective. With a single-minded approach to understanding what perfection looks like for your business, we put together the strategy and support you need to get there.</p>

                <h3><a href="{{ url('/services/business-transformation') }}">Time To Transform</a></h3>
            </div>

        </div>

        <div class="our-services-2">
            
                <div class="title m-b-md">
               Maintenance & optimization
                </div>
            <div class="our-services-contents">
                <h4>Results-driven services that meet your business objectives.</h4>

                <p>Our multi-function team brings the ability to adapt quickly to changing demands. We maintain your ecommerce system around the clock, using robust processes and automated analysis to identify issues and opportunities as early as possible.</p>

                <h3><a href="{{ url('/services/maintenance-and-optimization') }}">Explore Optimization</a></h3>
            </div>

        </div>





        <section id="more-services-container">
            <div class="more-services">
                <div class="more-services-sec1">
                    <div class="sec1-left">
                        <div class="sec1-left-top">
                            <div class="left-icon"><img src="images/icons/strategy.webp"></div>
                            <div class="right-title"><h4>Strategy</h4></div>
                        </div>
                        <div class="sec1-left-bottom"><p>The results we achieve are no accident. we strategically plan for them. Our tried and tested Discovery process means we fulfil our client’s objectives consistently, on time and within budget.</p></div>
                    </div>
                    <div class="sec1-right">
                        <div class="sec1-right-top">
                            <div class="left-icon"><img src="images/icons/design.png"></div>
                            <div class="right-title"><h4>Design</h4></div>
                        </div>
                        <div class="sec1-right-bottom"><p>A good product combined with a delightfully easy-to-use site equals sales. If either of these things are missing, you won’t be selling as much as you could be. We help businesses create the right experiences for their brand, develop their online presence and, ultimately, find and keep more customers.</p></div>
                    </div>
                </div>

                <div class="more-services-sec2">
                    <div class="sec1-left">
                        <div class="sec1-left-top">
                            <div class="left-icon"><img src="images/icons/development.jpg"></div>
                            <div class="right-title"><h4>Development</h4></div>
                        </div>
                        <div class="sec1-left-bottom"><p>Our development process and track record for delivering projects when we say we will is second to none. We work with our clients and independently, to improve online experiences. It’s this commitment to quality and attention to detail that has enabled us to work with some superb clients.  </p></div>
                    </div>
                    <div class="sec1-right">
                        <div class="sec1-right-top">
                            <div class="left-icon"><img src="images/icons/marketing.png"></div>
                            <div class="right-title"><h4>Marketing</h4></div>
                        </div>
                        <div class="sec1-right-bottom"><p>Whether your website is lead generating or eCommerce, people need to know about it and you. We build effective, profit increasing marketing strategies, to help you connect with your ideal customer, and convert them into buyers.</p></div>
                    </div>
                </div>
                
                <div class="more-services-sec3">
                    <div class="sec1-left">
                        <div class="sec1-left-top">
                            <div class="left-icon"><img src="images/icons/rescue.png"></div>
                            <div class="right-title"><h4>Project Rescue</h4></div>
                        </div>
                        <div class="sec1-left-bottom"><p>Sometimes things go wrong unexpectedly… Whether the relationship has broken down between yourself and your agency, or you have an urgent problem that needs to be fixed today! Our dedicated in-house team of specialists are ready to pick up your project and help you get back to normal or live as quickly as possible.</p></div>
                    </div>
                    <div class="sec1-right">
                        <div class="sec1-right-top">
                            <div class="left-icon"><img src="images/icons/maintenance.jpeg"></div>
                            <div class="right-title"><h4>Support & Maintenance</h4></div>
                        </div>
                        <div class="sec1-right-bottom"><p>Making sure that your website is running effectively is the key to a strong online presence, and having a company that you can rely on to work with, is even more important! Working with our design, development and marketing team are like having your own personal in-house team, out-of-house.</p></div>
                    </div>
                </div>
            </div>
        </section>
        
@extends("/footer");

    </body>
    </html>