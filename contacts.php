<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Contacts</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport"
    content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="page">
    <header class="section page-header">
      <!-- RD Navbar-->
      <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
          data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
          data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
          data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
          data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px"
          data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
          <div class="rd-navbar-main-outer">
            <div class="rd-navbar-main">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
                <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php"><img src="images/logo.png" alt=""
                    width="199" height="22" /></a>
              </div>
              <div class="rd-navbar-main-element">
                <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                    </li>
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                    </li>
                  </ul>
                </div>
                <!-- RD Navbar Search-->
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark"
      style="background-image: url(images/breadcrumbs-image-1.jpg);">
      <div class="breadcrumbs-custom-inner">
        <div class="container breadcrumbs-custom-container">
          <div class="breadcrumbs-custom-main">
            <h6 class="breadcrumbs-custom-subtitle title-decorated">Contacts</h6>
            <h1 class="breadcrumbs-custom-title">Contacts</h1>
          </div>
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contacts</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Map & contacts-->
    <section class="section bg-gray-100">
      <div class="range justify-content-xl-between">
        <div class="cell-xl-6 align-self-center container">
          <div class="row">
            <div class="col-lg-9 cell-inner">
              <div class="section-lg">
                <h3 class="wow-outer"><span>Contact Us</span></h3>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                  method="post" action="bat/rd-mailform.php">
                  <div class="row row-10">
                    <div class="col-md-6 wow-outer">
                      <div class="form-wrap wow fadeSlideInUp">
                        <label class="form-label-outside" for="contact-first-name">First Name</label>
                        <input class="form-input" id="contact-first-name" type="text" name="name"
                          data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6 wow-outer">
                      <div class="form-wrap wow fadeSlideInUp">
                        <label class="form-label-outside" for="contact-last-name">Last Name</label>
                        <input class="form-input" id="contact-last-name" type="text" name="name"
                          data-constraints="@Required">
                      </div>
                    </div>
                    <div class="col-md-6 wow-outer">
                      <div class="form-wrap wow fadeSlideInUp">
                        <label class="form-label-outside" for="contact-email">E-mail</label>
                        <input class="form-input" id="contact-email" type="email" name="email"
                          data-constraints="@Email @Required">
                      </div>
                    </div>
                    <div class="col-md-6 wow-outer">
                      <div class="form-wrap wow fadeSlideInUp">
                        <label class="form-label-outside" for="contact-phone">Phone</label>
                        <input class="form-input" id="contact-phone" type="text" name="phone"
                          data-constraints="@PhoneNumber">
                      </div>
                    </div>
                    <div class="col-12 wow-outer">
                      <div class="form-wrap wow fadeSlideInUp">
                        <label class="form-label-outside" for="contact-message">Your Message</label>
                        <textarea class="form-input" id="contact-message" name="message"
                          data-constraints="@Required"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="group group-middle">
                    <div class="wow-outer">
                      <button class="button button-primary button-winona wow slideInRight" type="submit">Send
                        Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="cell-xl-5 height-fill wow fadeIn">
          <div class="mapouter">
            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=725%20,%20Sector-28%20Faridabad-121008&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://putlocker-is.org">putlocker</a><br>
              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 500px;
                  width: 600px;
                }
              </style><a href="https://www.embedgooglemap.net">google maps html code</a>
              <style>
                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 500px;
                  width: 600px;
                }
              </style>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="section footer-minimal bg-primary-darken">
      <div class="container">
        <div class="footer-minimal-inner"><a class="brand" href="index.php"><img src="images/logo.png" alt=""
              width="199" height="22" /></a>
          <!-- Rights-->
          <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span>. All Rights Reserved. Design
            by <a href="https://www.bizdeedhrsolutionss.com">Bizdeedhrsolutionss</a></p>
        </div>
      </div>
    </footer>
  </div>
  <div class="preloader">
    <div class="preloader-logo"><img src="images/logo.png" alt="" width="199" height="22" />
    </div>
    <div class="preloader-body">
      <div id="loadingProgressG">
        <div class="loadingProgressG" id="loadingProgressG_1"></div>
      </div>
    </div>
  </div>
  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>
  <!-- Javascript-->
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>