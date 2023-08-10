<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fair Havens Digital</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon1.ico">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/resize.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>

        <div class="opt-header">
            <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div> -->
            <img src="../images/bs-maintenance1.png">
            <div class="centered" style="width: 100%">Maintenance and Optimization</div>
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
                    <div class="logo"><a href="{{ url('/') }}"><img src="../images/logo2.png" style="height:70px; "></a> </div>
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

        <div class="dg-experience-ttle">
            <div class="title m-b-md">
                Proactive and pre-emptive business support engineered to identify unknowns and keep every peak event running smoothly.
           </div>
        </div>

        <div class="dg-experience">
            <div class="tailored">
            <div class="title m-b-md">
                Keeping you ahead
           </div>
        <p>No business site is set and forget. Customer expectations evolve and so must your site. We split out business-as-usual support to make sure urgent issues don’t impact the optimisation and growth roadmap.</p>
          </div>

          <div class="brilliant">
              <div class="title m-b-md">
              Maintenance
              </div>
            <h4>A proactive approach.</h4>

            <p>From Black Friday to the phone call for service enquiry, peak events are critical to businesses success. Our proactive approach ensures our clients go into these key events with total confidence in their site's security and ability to perform under pressure.</p>
          </div>

          <div class="advanced">
              <div class="title m-b-md">
                Optimization
            </div>
          <h4>Keeping your site ahead of the curve</h4>

          <p>Using data from micro interactions, we plan, test and implement optimisations that produce macro results –  like increasing share of wallet from existing customers. Together, we'll move beyond assumptions and focus on what's really stopping your audience from engaging with your brand and business proposition.</p>
          </div>

          <div class="jeff-said">
              <div class="title m-b-md">
                  What Japheth Ouma said
              </div>
              <p>“I’m really pleased about what we have achieved, and how we achieved it and it’s now delivering tangible business benefits.”</p>
              <h4>Japheth Ouma, Kongere Ways Ltd Manager</h4>
          </div>



        </div>

        


        <div class="dg-exp-services">
        <div class="about-services">
            <div class="about-services-title">
                <div class="title m-b-md">
              Our Other Services
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
                <div class="ecommerce-trans"><a href="/services/business-transformation">
                    <div class="statement">
                    <h4>Business transformation</h4>

                    <p>As delivered for some of the world’s biggest brands. Our multi-functional experience and proven processes create extraordinary retail experiences that are all gain.</p></div>
                   <div class="arrow-image"> <img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
                </a> 
            </div>
                <!-- <div class="maintainance-opt"><a href="/services/maintenance-and-optimization">
                    <div class="statement">
                    <h4>Maintenance and optimisation</h4>

                     <p>Results-driven services that help you meet your business objectives, whatever stage your store is at. Staying ahead has never been so easy.</p></div>
                     <div class="arrow-image"><img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
               </a> </div> -->
            </div>
        </div>
    </div>
       
       @extends("/footer"); 

    </body>
    </html>