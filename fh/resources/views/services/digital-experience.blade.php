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

        <div class="dg-header">
            <!-- <div class="logo"><a href="{{ url('/') }}"><img src="images/logo2.png" style="height:70px; "></a> </div> -->
            <img src="../images/ux-design.jpg">
            <div class="centered" style="font-size: 45px; width: 100%;">DIGITAL EXPERIENCE AND UX DESIGN</div>
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
                The websites are easy to navigate and attractive to behold. The loyalty earned through offering a great digital experience is harder to imitate.
           </div>
        </div>

        <div class="dg-experience">
            <div class="tailored">
            <div class="title m-b-md">
                Tailored to your business
           </div>
        <p>We create accessible journeys through complex buying processes to increase conversions and enquiries for your business.</p>

        <p>Our multi-vertical experience allows us to tailor our approach to your organisation's exact needs. It starts with understanding your customers’ expectations and aligning their needs and your business objectives. There's no silver bullet in UX design; every improvement matters. </p>
          </div>

          <div class="brilliant">
              <div class="title m-b-md">
              The brilliant basics
              </div>
            <h4>For every site.</h4>

            <p>You can typically achieve 90% of your UX goals by implementing best practice across your site. No specialist tools or software required. Our best practice playbook is based on a decade of experience and is proven to add value across all sectors and verticals.</p>
          </div>

          <div class="advanced">
              <div class="title m-b-md">
                Advanced optimisation
            </div>
          <h4>For high traffic sites that have already implemented the brilliant basics.</h4>

          <p>At scale, marginal improvements make a massive difference and we encourage our enterprise clients to take a closer look at the behaviours of their specific audience. For one such client, we used A/B testing to identify a small change to the product detail page that lifted conversion by 67%.</p>
          </div>

          <div class="jeff-said">
              <div class="title m-b-md">
                  What Japheth Ouma said
              </div>
              <p>“Fair Havens Digital are professional, agile and reliable. It’s great peace of mind knowing we have such knowledgeable extension to our team!”</p>
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
               <!--  <div class="digital-expe"><a href="{{ url('/services/digital-experience') }}">
                    <div class="statement">
                    <h4>Digital experience and UX design</h4>

                    <p>Customer-centred design is the cornerstone of our creative process. Our approach is tailored to your organisation's needs & guarantees results.</p>
                </div>
                    <div class="arrow-image"><img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
                </a></div> -->
                <div class="ecommerce-trans"><a href="/services/business-transformation">
                    <div class="statement">
                    <h4>Business transformation</h4>

                    <p>As delivered for some of the world’s biggest brands. Our multi-functional experience and proven processes create extraordinary retail experiences that are all gain.</p></div>
                   <div class="arrow-image"> <img src="https://assets.website-files.com/60d982f328ad47084988f1e3/60e450cf5d0c835ff3db1ec2_line2%20copy.png" loading="lazy"></div>
                </a> 
            </div>
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