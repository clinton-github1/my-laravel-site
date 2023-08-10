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

        <div class="bs-header">
            <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div> -->
            <img src="../images/dg-transformation.jpg">
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
                Together, we'll create the digital retail experience that your brand and your customers deserve.
           </div>
        </div>

        <div class="dg-experience">
            <div class="tailored">
            <div class="title m-b-md">
                The right moves at the right time
           </div>
        <p>We create experiences that get your customers to act. And we bring our best minds together to solve your most complex back office and customer experience challenges – no matter how complex. If you're looking for the partner that can identify and implement the opportunities that will move your business forward, you've found us. </p>
          </div>

          <div class="brilliant">
              <div class="title m-b-md">
              Replatforming
              </div>
            <h4>Maximum improvement. Minimum upheaval</h4>

            <p>Take full control of your experience with open source, go faster than ever with SaaS, or futureproof with headless. Our agnostic advice and expert implementation take  the pain out of finding the right approach and solution for your business. </p>
          </div>

          <div class="advanced">
              <div class="title m-b-md">
                Custom development
            </div>
          <h4>Beyond out-of-the-box</h4>

          <p>Bending an ecommerce platform to meet complex needs is costly and rarely successful. That's why, when there isn't an out-of-the-box solution, the best way forward is to build one. Through focused collaboration and rapid prototyping, we'll create the product that does exactly what you need.</p>
          </div>

          <div class="jeff-said">
              <div class="title m-b-md">
                  What Japheth Ouma said
              </div>
              <p>“Fair Havens Digital team delivered excellent ecommerce transformation services and digital consultancy in a complex and shifting environment, to help grow revenue.”</p>
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
                <!-- <div class="ecommerce-trans"><a href="/services/business-transformation">
                    <div class="statement">
                    <h4>Business transformation</h4>

                    <p>As delivered for some of the world’s biggest brands. Our multi-functional experience and proven processes create extraordinary retail experiences that are all gain.</p></div>
                   <div class="arrow-image"> <img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
                </a> 
            </div> -->
                <div class="maintainance-opt"><a href="/services/maintenance-and-optimization">
                    <div class="statement">
                    <h4>Maintenance and optimisation</h4>

                     <p>Results-driven services that help you meet your business objectives, whatever stage your store is at. Staying ahead has never been so easy.</p></div>
                     <div class="arrow-image"><img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
               </a> </div>
            </div>
        </div>
    </div>
      
      @extends("/footer");  

    </body>
    </html>