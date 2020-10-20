<?php
include('include/functions.php');
$db=new database();
if(isset($_REQUEST['uid']))
{
  $uid=$_REQUEST['uid'];  
  $sql="SELECT asha.aid,asha.name,panchayath.panchayath, ward.ward FROM asha  LEFT JOIN panchayath ON asha.pid=panchayath.pid LEFT JOIN  ward ON asha.wid=ward.wid WHERE uid=".$uid;
  $result=$db->query($sql);
  $row=$db->fetch_array($result);
  $name=$row['name'];
  $panchayath=$row['panchayath'];
  $ward=$row['ward'];    
  $aid=$row['aid'];  
}
?>
<link rel="stylesheet" type="text/css" media="all" href="calendar/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="calendar/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
  window.onload = function()
  {
    new JsDatePick({
      useMode:2,
      target:"vdate",
      dateFormat:"%d-%m-%Y"
    });   
    new JsDatePick({
      useMode:2,
      target:"lpd",
      dateFormat:"%d-%m-%Y"
    });   

    new JsDatePick({
      useMode:2,
      target:"tt",
      dateFormat:"%d-%m-%Y"
    });   

    new JsDatePick({
      useMode:2,
      target:"epd",
      dateFormat:"%d-%m-%Y"
    });   

    new JsDatePick({
      useMode:2,
      target:"scandate",
      dateFormat:"%d-%m-%Y"
    });  
  }
</script>

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
                  <?php
                    if(isset($_REQUEST['uid']))
                      {
                          $uid=$_REQUEST['uid'];  




                  ?>
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="ASHAHome.php?uid=<?php echo $uid?>">Home </a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Mothers <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="addMother.php?uid=<?php echo $uid?>">New Mother</a></li>
                        <li><a href="viewMothers.php?uid=<?php echo $uid?>">View Mothers</a></li>
                                               
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Childrens <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="newChild.php?uid=<?php echo $uid?>">New Children</a></li>
                        <li><a href="viewChildren.php?uid=<?php echo $uid?>">View Childrens</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Data <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="newData.php?uid=<?php echo $uid?>">New Data Collection</a></li>
                        <li><a href="ashaGenerateReport?uid=<?php echo $uid?>">Generate Report</a></li>
                      </ul>
                    </li>         
                    <li class="dropdown">
                      <a href="#">Vaccination <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="ashaViewVaccineChart.php?uid=<?php echo $uid?>">Vaccine Chart</a></li>
                        <li><a href="vaccination.php?uid=<?php echo $uid?>">New Vaccination</a></li>
                        <li><a href="vaccDetails.php?uid=<?php echo $uid?>">Vaccination History</a></li>
                        <li><a href="vaccDue.php?uid=<?php echo $uid?>">Due Vaccination List</a></li>
                      </ul>
                    </li> 
                                           
                    <li>
                      <a href="index.php">Logout </a>
                    </li>
                  </ul>
                </nav>
                <?php

              }
              ?>
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

<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <p style="font-size: 18">ASHA : <?=$name?>&nbsp;&nbsp;&nbsp; Panchayath :<?=$panchayath?>&nbsp;&nbsp;&nbsp; Ward No :<?=$ward?></p>
              
          </div>
          <div class="span8">
            
          </div>
        </div>
      </div>
    </section>
    <hr> 
    <section class="callaction">
      <div class="container">
        <div class="row">
          <form action="doaction.php?newdata=1" method="post" enctype="multipart/form-data">
      
      
    <table width="1000" height="170" align="center" cellpadding="5" cellspacing="0" border="1" bordercolor="#4F4F4F">
    <tr>
    <td> 
                
		<table width="1000" height="170" align="center" cellpadding="5" cellspacing="0" style="background-color: white;">
        
       			<?php
						if(isset($_REQUEST['message']))
						{
							$m=$_REQUEST['message'];							
							echo '<tr><td colspan="8" align="center" style="color:#F00">'.$m.'</td></tr>';
						}
						?>
          <tr>
          <td colspan="8" align="center"><span class="style6"><h2>House Visit Data Sheet</h2></span></td>
          </tr>
          <tr>
            <td colspan="2">Select Mother</td>
            <td>
            <select id="motherid" name="motherid" onChange="getstates();">
            <option value="0" selected="selected">- -Select- -</option>
            <?php
            $sql="SELECT * FROM mother";
            $result=$db->query($sql);
            while($row=$db->fetch_array($result ))
				    echo '<option value="'.$row['motherid'].'" selected="selected">'.$row['motherid'].'</option>';
				
            ?>            
            </select>
              </td>
            </tr>
            <tr>
            <td colspan="2">House visiting Date(yyyy-mm-dd)</td>
            <td><input name="vdate" id="vdate" type="text" /></td>
          </tr>
          
          <tr>
            <td>Pregnancy period (in weeks</td>
            <td><input name="pperiod" id="pperiod" type="text" /></td>
          
            <td>Height</td>
            <td><input name="height" id="height" type="text" /></td>
          
            <td>Weight</td>
            <td><input name="weight" id="weight" type="text" /></td>
          </tr>
          <tr>
            <td>BP</td>
            <td><input name="bp" id="bp" type="text" /></td>
          
            <td>Hb</td>
            <td><input name="hb" id="hb" type="text" /></td>
          
            <td>Had folic acid before pregnancy</td>
            <td>
                <input type="radio" name="folic" value="Yes" id="gender_0">
                Yes&nbsp;&nbsp;
                <input type="radio" name="folic" value="No" id="gender_1">
                No
              </td>
          </tr>
          <tr>
            <td>LPD Date(yyyy-mm-dd)</td>
            <td><input name="lpd" id="lpd" type="text" /></td>
          
            <td>EPD Date(yyyy-mm-dd)</td>
            <td><input name="epd" id="epd" type="text" /></td>
          </tr>
          <tr>
            <td>TT(Date)(yyyy-mm-dd)</td>
            <td><input name="tt" id="tt" type="text" /></td>
          
            <td>Dose</td>
            <td><input name="dose" id="dose" type="text" /></td>
          </tr>
          <tr>
            <td>Urine Albumin</td>
            <td><input name="urine" id="urine" type="text" /></td>
          </tr>
          <tr>
            <td colspan="8"><hr></td>
          </tr>
          <tr>
            <th colspan="8">Supplimentary Section</th>
          </tr>
          <tr>
            <td>Folic Acid</td>
            <td><input name="acid" id="acid" type="text" /></td>
          
            <td>Calcium</td>
            <td><input name="cal" id="cal" type="text" /></td>
          
            <td>Iron</td>
            <td><input name="iron" id="iron" type="text" /></td>
          </tr>
          <tr>
            <td>Edema (on Feet)</td>
            <td>
                <input type="radio" name="edima" value="Yes" id="gender_0">
                Yes&nbsp;&nbsp;
                <input type="radio" name="edima" value="No" id="gender_1">
                No
              </td>
          </tr>
          <tr>
            <td>OGTT / GCT (optional)</td>
            <td><input name="dose" id="dose" type="text" /></td>
          
            <td>RBS</td>
            <td><input name="rbs" id="rbs" type="text" /></td>
          </tr>
          <tr>
            <td>Scan date(yyyy-mm-dd)</td>
            <td><input name="scandate" id="scandate" type="text" /></td>
          
            <td>Scan name</td>
            <td><input name="scan" id="scan" type="text" /></td>
          </tr>
          <tr>
            <td><input name="uid" id="uid" type="hidden" value="<?php echo $uid ?>" />
            <td><input name="aid" id="aid" type="hidden" value="<?php echo $aid ?>" /></td>
          </tr>
          <tr>
          <td colspan="8" align="center"><input type="submit" value="Add Data"></td>
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
