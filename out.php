<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
<link type="text/css" rel="stylesheet" href="css/blue.css" />
<link type="text/css" rel="stylesheet" href="css/print.css" media="print"/>
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
  <!--Begin PHP Code for select data-->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resume";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Usr, UImg, UNme, UNick, UAddr, UEmail, UPhone, UWeb, Uobj, UEdu1Session, UEdu1Colge, UEdu1Degre, UEdu2Session, UEdu2Colg, UEdu2Degre, UEx1Session, UEx1Comp, UEx1Post, UEx1Res1, UEx1Res2, UEx2Session,  UEx2Comp, UEx2Post, UEx2Res1, UEx2Res2, Uskill1,  USkill11, USkill12, USkill13, USkill14, USkill15, USkill16, USkill17, USkill18, USkill19, Uskill2,  USkill21, USkill22, USkill23, USkill24, USkill25, USkill26, Work1,  Work2,  Work3, Work4 FROM resumetable";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
$u2=$row['UImg'];
$u3=$row['UNme'];
$u4=$row['UNick'];
$u5=$row['UAddr'];
$u6=$row['UEmail'];
$u7=$row['UPhone'];
$u8=$row['UWeb'];
$u9=$row['Uobj'];
$u10=$row['UEdu1Session'];
$u11=$row['UEdu1Colge'];
$u12=$row['UEdu1Degre'];
$u13=$row['UEdu2Session'];
$u14=$row['UEdu2Colg'];
$u15=$row['UEdu2Degre'];
$u16=$row['UEx1Session'];
$u17=$row['UEx1Comp'];
$u18=$row['UEx1Post'];
$u19=$row['UEx1Res1'];
$u20=$row['UEx1Res2'];
$u21=$row['UEx2Session'];
$u22=$row['UEx2Comp'];
$u23=$row['UEx2Post'];
$u24=$row['UEx2Res1'];
$u25=$row['UEx2Res2'];
$u26=$row['Uskill1'];
$u27=$row['USkill11'];
$u28=$row['USkill12'];
$u29=$row['USkill13'];
$u30=$row['USkill14'];
$u31=$row['USkill15'];
$u32=$row['USkill16'];
$u33=$row['USkill17'];
$u34=$row['USkill18'];
$u35=$row['USkill19'];
$u36=$row['Uskill2'];
$u37=$row['USkill21'];
$u38=$row['USkill22'];
$u39=$row['USkill23'];
$u40=$row['USkill24'];
$u41=$row['USkill25'];
$u42=$row['USkill26'];
$u43=$row['Work1'];
$u44=$row['Work2'];
$u45=$row['Work3'];
$u46=$row['Work4'];
}
}
$conn->close();
?>
<!--End PHP-->
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <form method="POST" action="" enctype="multipart/formdata">
      <div class="paper-top">
        <h1 id="pto">R|E|S|U|M|E</h1>
      </div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <?php echo '<img class="portrait" src="'.$u2.'" alt="John Smith" />';?>
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name"><?php echo $u3 ?><br />
              <span><?php echo $u4 ?></span></h1>
            <ul>
              <li class="ad"><?php echo $u5 ?></li>
              <li class="mail"><?php echo $u6 ?></li>
              <li class="tel"><?php echo $u7 ?></li>
              <li class="web"><?php echo $u8 ?></li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="images/icn-print.jpg" alt="" /></a></li>
              </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry" id="objen">
          <h2>OBJECTIVE</h2>
          <p id="objp"><?php echo $u9 ?></p>
          <script type="text/javascript">
            if(document.getElementById("objp").innerHTML=" ") {
              document.getElementById("objen").style.display= "none";
            }
          </script>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUCATION</h2>
          <div class="content">
            <h3><?php echo $u10 ?></h3>
            <p><?php echo $u11 ?> <br />
              <em><?php echo $u12 ?></em></p>
          </div>
          <div class="content">
            <h3><?php echo $u13 ?></h3>
            <p><?php echo $u14 ?><br />
              <em><?php echo $u15 ?></em></p>
          </div>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry" id="e16">
          <h2>EXPERIENCE</h2>
          <div class="content">
            <h3 id="e11"><?php echo $u16 ?></h3>
            <p id="e12"><?php echo $u17 ?><br />
              <em id="e13"><?php echo $u18 ?></em></p>
            <ul class="info">
              <li id="e14"><?php echo $u19 ?></li>
              <li id="e15"><?php echo $u20 ?></li>
            </ul>
            <script type="text/javascript">
            if(document.getElementById("e11").innerHTML=" " && document.getElementById("e12").innerHTML=" " && document.getElementById("e13").innerHTML=" " && document.getElementById("e14").innerHTML=" " && document.getElementById("e15").innerHTML=" ") {
              document.getElementById("e16").style.display= "none";
            }
          </script>
          </div>
          <div class="content" id="e21">
            <h3 id="e22"><?php echo $u21 ?></h3>
            <p id="e23"><?php echo $u22 ?><br />
              <em id="e24"><?php echo $u23 ?></em></p>
            <ul class="info">
              <li id="e25"><?php echo $u24 ?></li>
              <li id="e26"><?php echo $u25 ?></li>
            </ul>
            <script type="text/javascript">
            if(document.getElementById("e26").innerHTML=" " && document.getElementById("e22").innerHTML=" " && document.getElementById("e23").innerHTML=" " && document.getElementById("e24").innerHTML=" " && document.getElementById("e25").innerHTML=" ") {
              document.getElementById("e21").style.display= "none";
            }
          </script>
          </div>
        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3><?php echo $u26 ?></h3>
            <ul class="skills">
              <li id="s11"><?php echo $u27 ?></li>
              <li id="s12"><?php echo $u28 ?></li>
              <li id="s13"><?php echo $u29 ?></li>
              <li id="s14"><?php echo $u30 ?></li>
              <li id="s15"><?php echo $u31 ?></li>
              <li id="s16"><?php echo $u32 ?></li>
              <li id="s17"><?php echo $u33 ?></li>
              <li id="s18"><?php echo $u34 ?></li>
              <li id="s19"><?php echo $u35 ?></li>
              </ul>
          </div>
          <div class="content">
            <h3 ><?php echo $u36 ?></h3>
            <ul class="skills">
              <li id="s21"><?php echo $u37 ?></li>
              <li id="s22"><?php echo $u38 ?></li>
              <li id="s23"><?php echo $u39 ?></li>
              <li id="s24"><?php echo $u40 ?></li>
              <li id="s25"><?php echo $u41 ?></li>
              <li id="s26"><?php echo $u42 ?></li>
              </ul>
          </div>
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
        		<li id="jo"><?php echo '<img class="portrait" id="ko" src="'.$u43.'" alt="hj" /></a>' ?></li>
            <li id="jo2"><?php echo '<img class="portrait" id="ko2" src="'.$u44.'" alt="hj" /></a>' ?></li>
            <li id="jo3"><?php echo '<img class="portrait" id="ko3" src="'.$u45.'" alt="hj" /></a>' ?></li>
            <li id="jo4"><?php echo '<img class="portrait" id="ko4" src="'.$u46.'" alt="hij" /></a>' ?></li>
            </ul>
        </div>
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </form>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
