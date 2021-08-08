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
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About</a>
                      </li>

                      <li class="rd-nav-item"><a class="rd-nav-link" href="faq.php">FAQ</a>
                      </li>
                      
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
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
              <?php if ($_SESSION['customerType'] == 1 ) { ?>
                  <a class="button button-primary button-md button-round-2" href="patientAppointmentList.php" data-caption-animate="fadeInUp" data-caption-delay="450">Get Started</a>
                <?php } ?>   
                <?php if ($_SESSION['customerType'] == 2 ) { ?>
                  <a class="button button-primary button-md button-round-2" href="appointments_practitioners.php" data-caption-animate="fadeInUp" data-caption-delay="450"> Get Started</a>
                <?php } ?>  
                  <!-- <div class="btn-wrap"><a class="button button-secondary button-sm" href="#">Get Started</a></div> -->
                  <!-- <form method="POST" action="index.php" accept-charset="UTF-8"> 
                    <div class="btn-wrap"><input type="submit"  name="submit" value="Get Started" style="background-color: #4CAF50; border: none; padding: 16px 32px; margin: 4px 2px;" > </div>
                  </form>  -->
                </div>
                 
              </div>
            </div>
          </nav>
        </div>
      </header>