<?php
if(isset($_REQUEST['uid']))
{
  $uid=$_REQUEST['uid'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>childCare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    
    <!-- start header -->
    <header>
      <div class="container">
       
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><h1 style="font-size:36px; color:#FF6600; font-weight:bold">ChildCare</h1></a>
              <h1> Under Accredited Social Health Activist</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="motherHome.php?uid=<?php echo $uid?>">Home </a>
                    </li>
                    
                    <li class="dropdown">
                      <a href="#">Vaccines <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="vaccinechart.php?uid=<?php echo $uid?>">Vaccine Chart</a></li>
                        <li><a href="motherViewVaccines.php?uid=<?php echo $uid?>">VaccineDetails</a></li>
                      </ul>
                    </li>
                     <li class="dropdown">
                      <a href="#">News & Announcements <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="MotherViewTips.php?uid=<?php echo $uid?>">Health Tips</a></li>
                        <li><a href="MotherViewAnnouncements.php?uid=<?php echo $uid?>">Announcements</a></li>
                      </ul>
                    </li>            
                    <li>
                      <a href="index.php">Logout </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Mother & Child</h2>
            </div>
          </div>
          <div class="span8">
            
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h2>Mother & Child <strong>Health Care</strong></h2>
            <p>
              The Mother and Child Health Cluster (MCH) includes:

				Making pregnancy safer
				Child and adolescent health/nutrition
				Expanded program of immunization
				Prevention of mother-to-child transmission

            </p>
            <p>
              The Enlarged Program of Immunizations (EPI) Cluster works with the MCH and Disease Prevention and Control Clusters. It provides support to Mozambique for the improvement of the health of children through the eradication of polio and the control of other vaccine preventable diseases in the context of health system strengthening. Immunization strengthening support, including epidemiological surveillance, accelerating disease control, and introducing new vaccines and relevant technologies and tools are the current main areas of work within this Cluster..
            </p>
            <p>
              Immunization means protection. The most effective and safe way to protect children from contagious diseases is by vaccination.  

Vaccines are considered a breakthrough in preventive medicine. Vaccines protect your child’s health by preventing them from contracting severe contagious diseases.
            </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/m1.jpg" alt="" />
                </li>
                <li>
                  <img src="img/m2.jpg" alt="" />
                </li>
                <li>
                  <img src="img/m4.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>Talented peoples behind Flattern</h4>
          </div>
          <div class="span3">
            <img src="img/v1.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Child HealthCare</strong>
              </p>
              
            </div>
          </div>
          <div class="span3">
            <img src="img/f4.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Child and Mother HealthCare</strong>
              </p>
              
            </div>
          </div>
          <div class="span3">
            <img src="img/p1.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Pragnency healthCare</strong>
              </p>
              
            </div>
          </div>
          <div class="span3">
            <img src="img/f2.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Family Healthcare</strong>
              </p>
              
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span6">
            <h4>HealthCare</h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. What about </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                  	<p>
                  		The Indian Constitution makes the provision of healthcare in India the responsibility of the state governments, rather than the central federal government. It makes every state responsible for "raising the level of nutrition and the standard of living of its people and the improvement of public health as among its primary duties
                  	</p>
                    <p>
                      Health care, health-care, or healthcare is the maintenance or improvement of health via the prevention, diagnosis, treatment, recovery, or cure of disease, illness, injury, and other physical and mental impairments in people. Health care is delivered by health professionals and allied health fields.
                    </p>
                  </div>
                </div>
              </div>
              
             
              
            </div>
          </div>
          <div class="span6">
            <h4>Child Vaccinations</h4>
            <img src="img/v3.png" alt="" class="img-polaroid" />
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
								<strong>Flattern studio, Pte Ltd</strong><br>
								 Springville center X264, Park Ave S.01<br>
								 Semarang 16425 Indonesia
					 		</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Jumana - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">Jumana</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
