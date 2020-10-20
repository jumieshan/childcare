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
      <div class="container ">
        
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
                    
                       <li><a href="index.php">Home</a></li>
                     
                   
                    <li class="dropdown">
                      <a href="#">National Rural Health Mission<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="features.php">Features</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">ASHA <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.php">About us</a></li>
                      </ul>
                    </li>
                    
                    <li>
                      <a href="login.php">login </a>
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
    
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <form action="doaction.php?changePassword=1" method="post" enctype="multipart/form-data">
        <table border="1" align="center" width="450">
        
        <tr>
        	<td>
                <table align="center" cellpadding="10">
				<?php
                if(isset($_REQUEST['message']))
                {
                	echo '<tr><td colspan="2" align="center" style="color:#CC0000; font-weight:bold">'.$_REQUEST['message'].'</td></tr>';
                }
                ?>
                <tr>
                	<td colspan="2" align="center"><h2>User Login</h2></td>
                </tr>
                <tr>
                    <td>Existing Username</td>
                    <td><input type="text" name="exuser" id="user" /></td> 
                </tr>
                <tr>
                    <td>Existing Password</td>
                    <td><input type="password" name="expass" id="pass" /></td> 
                </tr>
                 <tr>
                    <td>New Password</td>
                    <td><input type="text" name="newuser" id="newuser" /></td> 
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="newpass" id="pass" /></td> 
                </tr>
                
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Reset"></td>
                </tr>
                </table>
              </td>
           </tr>
           </table>
           </form>
          </div>
        </div>
      </div>
      </section>
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
