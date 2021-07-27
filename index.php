
<?php 

if (session_id() == "") 
    session_start(); 

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="images/YTWlogo.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,500i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <header class="section page-header">
        <!--RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!--RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!--RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!--RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/YTWlogo.png" alt="" width="214" height="56"/><img class="brand-logo-light" src="images/logo-inverse-430x112.png" alt="" width="215" height="56"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a>
                      </li>
                    
                      <li class="rd-nav-item"><a class="rd-nav-link" href="appointments_practitioners.php">Appointmets</a>
                      </li>
                      <?php 

                        if (session_id() == "") { ?>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a>
                          </li>
                      <?php } ?> 
                      <?php if (session_id() != "") { ?>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="logout.php">Logout</a>
                          </li>
                      <?php } ?> 
                      <li class="rd-nav-item"><a class="rd-nav-link">Hello   <strong style="color:green;font-size:30px;"> <?php echo $_SESSION['user_name']; ?> </strong> </a>
                    </ul>
                  </div>
                </div>
                <div class="rd-nav-item">
                  <div class="btn-wrap"><a class="button button-secondary button-sm" href="#">Get Started</a></div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--Main bunner-->
      <div class="section section-main-bunner context-dark" id="home">
        <div class="main-bunner-img bg-overlay-1" style="background-image: url(&quot;images/slide-01.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container wide">
            <div class="row justify-content-left">
              <div class="col-lg-5">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Free <br class="br-none"> Your Mind</h1>
                <p class="lead text-custom-blue" data-caption-animate="fadeInUp" data-caption-delay="250">Are you tired and exhausted? Do you want someone to talk to? Please don't hesitate.</br> We are here to HELP!</p>
                <div class="btn-wrap">
                  <div class="group-xxl group-middle"><a class="button button-primary button-md button-round-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="450"> Book Now</a></div>
                </div>
                <!-- <div class="phone-wrap phone-wrap-2">
                  <div class="phone-link-title">P:</div><a class="phone-link" href="tel:#"> 1 000 234 7890</a>
                </div>
                <p class="text-custom-blue">178 West 27th Street, Suite 527, New York NY 10012, United States</p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Testimonials-->
      <div class="section section-lg bg-gray-150">
        <div class="text-center">
          <p class="subtitle">Our customers love YesToWellness</p>
          <h2 class="title">Rated #1 in Canada</h2>
          <div class="subtitle-box">
            <div class="subtitle-box-text">Reviews from:</div>
            <div class="subtitle-box-media"><img src="images/title-img-153x38.png" alt="" width="153" height="38"/>
            </div>
          </div>
        </div>
        <div class="owl-carousel owl-theme-1" data-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-xl-items="2" data-xxl-items="3" data-margin="15px" data-nav="false" data-dots="true" data-autoplay="8000">
          <div class="testimonial-box">
            <div class="testimonial-title">Cool!</div>
            <div class="testimonial-rate"><img src="images/rate-2-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text">“I have found all your services to be amazing. Most recently I had a very encouraging talk with Janet. She is a miracle worker. Janet somehow manages make my anxiety like I have never had any moments of stress in life.”</div>
            <div class="testimonial-name">— Alisa R.</div>
          </div>
          <div class="testimonial-box">
            <div class="testimonial-title">Excellent!</div>
            <div class="testimonial-rate"><img src="images/rate-1-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text">“Your therapists are beyond incredible. They are so kind-hearted and treat you like the individual that you are. They listen and take note of what matters to you.”</div>
            <div class="testimonial-name">— John C.</div>
          </div>
          <div class="testimonial-box">
            <div class="testimonial-title">Amazing!</div>
            <div class="testimonial-rate"><img src="images/rate-1-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text">"Your therapists are amazing at listening. They take time and listen to you eagerly before the they say something that you truly understand problem! They really aim to provide a high level of service."</div>
            <div class="testimonial-name">— Evan M.</div>
          </div>
          <div class="testimonial-box">
            <div class="testimonial-title">Excellent!</div>
            <div class="testimonial-rate"><img src="images/rate-2-146x27.png" alt="" width="146" height="27"/>
            </div>
            <div class="testimonial-text"> “I am pleased with the provided service and will continue my sessions with you. Also, I would recommend YesToWellness to anybody who has anxiety, depression and other disorders or hurt issues.”</div>
            <div class="testimonial-name"> — Edward J.</div>
          </div>
        </div>
      </div>
      
      <div class="section section section-lg">
        <div class="container wide">
          
          <div class="text-wrap">
            <div class="row row-md-30">
              <div class="col-md-6 col-lg-6"><img src="images/patientdoc5.jpg" alt="" width="580" height="550"/>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="mt-4">
                  <div class="subtitle">True experts</div>
                  <h2 class="title">Best Therapists</h2>
                  <div class="subtitle-2">YesToWellness is a team of dedicated and professionally trained therapists always ready to help you relax and express your own True Self. Connect with us and let love reign!</div>
                  <div class="btn-wrap"><a class="button button-secondary button-md" href="#" data-caption-animate="fadeInUp" data-caption-delay="450">Book Now</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--FAQ-->
      <div class="section section section-xl">
        <div class="container wide">
          <div class="row row-md-80 row-sm-50">
            <div class="col-sm-12 col-lg-4">
              <div class="subtitle">Frequently Asked <br class="br-none">Questions</div>
            </div>
            <div class="col-sm-12 col-lg-8">
              <div class="card-group-custom" id="accordion1" role="tablist" aria-multiselectable="false">
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-alasxtaj" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-xlhnxvuc" aria-controls="accordion1-card-body-xlhnxvuc" aria-expanded="false" role="button">Do you provide any scripts with your templates?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-xlhnxvuc" aria-labelledby="accordion1-card-head-alasxtaj" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at www.zemez.io If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-qtsmcpyn" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-yhmsmbvt" aria-controls="accordion1-card-body-yhmsmbvt" aria-expanded="false" role="button">What are the advantages of purchasing a website template?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-yhmsmbvt" aria-labelledby="accordion1-card-head-qtsmcpyn" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-shlfwmgn" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-cqwdacur" aria-controls="accordion1-card-body-cqwdacur" aria-expanded="false" role="button">What do I receive when I order a template from Zemez?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-cqwdacur" aria-labelledby="accordion1-card-head-shlfwmgn" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary based on the type of the product you have purchased.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-axgjvlha" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-axwynooc" aria-controls="accordion1-card-body-axwynooc" aria-expanded="false" role="button">In what formats are your templates available?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-axwynooc" aria-labelledby="accordion1-card-head-axgjvlha" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>Website templates are available in Photoshop and HTML formats. Fonts are included with the Photoshop file. In most templates, HTML is compatible with Adobe® Dreamweaver® and Microsoft® FrontPage®.</p>
                    </div>
                  </div>
                </article>
                <!--Bootstrap card-->
                <article class="card card-custom card-group-custom card-corporate">
                  <div class="card-heading" role="tab">
                    <div class="card-title"><a class="collapsed" id="accordion1-card-head-eqiypqcb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-xxrtkqtu" aria-controls="accordion1-card-body-xxrtkqtu" aria-expanded="false" role="button">What am I allowed to do with the templates?</a></div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1-card-body-xxrtkqtu" aria-labelledby="accordion1-card-head-eqiypqcb" data-parent="#accordion1" role="tabpanel">
                    <div class="card-body">
                      <p>You may build a website using the template in any way you like. You may not resell or redistribute templates (like we do); claim intellectual or exclusive ownership to any of our products, modified or unmodified. All products are property of content providing companies and individuals. You are also not allowed to make more than one project using the same template (you have to purchase the same template once more in order to make another project with the same design).</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-custom">
        <div class="container wide">
          <div class="text-center">
            <h2 class="title">Are You a Qualified <br class="br-none"> Therapist?</h2>
            <div class="subtitle-2 big">Join our team to push your career forward today!</div>
            <div class="row justify-content-center"><a class="button button-secondary button-md" href="#">Join Us</a></div>
            <div class="img-wrap"><img src="images/home-4-830x446.jpg" alt="" width="830" height="446"/>
            </div>
          </div>
        </div>
      </div>
      <footer class="section footer-classic context-dark">
        <div class="container wide">
          <div class="row row-sm-30">
            <div class="col-lg-6">
              <div class="phone-wrap">
                <div class="group-md group-middle"><a class="phone-link" href="tel:#">1 000 -234 -78-90</a>
                  <div class="phone-sub">Call Me Back</div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="text-lg-right">
                <div class="group-xl group-middle">
                  <p>Any complaints or suggestions?</p><a class="button button-white button-round-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="450">Let Us Know</a>
                </div>
              </div>
            </div>
          </div>
          <div class="list-wrapper">
            <div class="row row-sm-30">
              <div class="col-sm-4 col-md-4 col-lg-3">
                <p>YesToWellness</p>
                <ul class="list">
                  <li><a href="#" data-waypoint-to="#">About Us</a></li>
                  <li><a href="#" data-waypoint-to="#">Reviews</a></li>
                  <li><a href="#" data-waypoint-to="#">Blog</a></li>
                  <li><a href="#" data-waypoint-to="#">Affiliates</a></li>
                  <li><a href="#" data-waypoint-to="#">Careers</a></li>
                  <li><a href="#" data-waypoint-to="#">Invest</a></li>
                </ul>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-3">
                <p>Help</p>
                <ul class="list">
                  <li><a href="#" data-waypoint-to="#">Help Center</a></li>
                  <li><a href="#" data-waypoint-to="#">FAQs</a></li>
                  <li><a href="#" data-waypoint-to="#">Pricing</a></li>
                  
                </ul>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-3">
                <p>    </p>
                <ul class="list">
                  <li><a href="#" data-waypoint-to="#"></a></li>
                  <li><a href="#" data-waypoint-to="#">Terms</a></li>
                  <li><a href="#" data-waypoint-to="#">Privacy Policy</a></li>
                  <li><a href="#" data-waypoint-to="#">Contact Us</a></li>
                </ul>
              </div>
              <!-- <div class="col-sm-4 col-md-4 col-lg-3"><img src="images/footer-1-280x156.jpg" alt="" width="280" height="156"/>
                <p>Top 5 Types of Massage That You Have to Try When Visiting Beautyrel</p>
                <div class="date"> January 30, 2020</div>
              </div> -->
            </div>
          </div>
          <div class="row row-sm-30">
            <div class="col-lg-6">
              <div class="group-md group-middle">
                <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>YesToWellness</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="text-lg-right">
                <ul class="group-xl group-middle">
                  <li><a class="icon icon-default icon-sm mdi mdi-rss" href="#"></a></li>
                  <li><a class="icon icon-default icon-sm mdi mdi-twitter" href="#"></a></li>
                  <li><a class="icon icon-default icon-sm mdi mdi-facebook" href="#"></a></li>
                  <li><a class="icon icon-default icon-sm mdi mdi-linkedin-box" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!--coded by dyoma-->
  </body>
</html>