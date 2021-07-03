<html>
<body>
<?php
//error_reporting(0);
$nameErr= $EmailErr= $WebErr= $PhonErr= $FileErr= "";
$name= $Email= $Web= $Phon= $File= "";
$err=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  /*if (empty($_POST["unam"])) {
    $nameErr = "Name is required";
    $err=1;
  } else {
    $name = test_input($_POST["unam"]);
    $err=0;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $err=1;
    }
  }
  if (empty($_FILES["inimg"]['name'])) {
    $FileErr = "Image is required is required";
    $err=1;
  } else {
    $File = test_input($_FILES['inimg']['name']);
    $err=0;
    // check if name only contains letters and whitespace
    if (!preg_match("/^[.jpeg]||[.png]||[.jpg]||[.gif]$/",$File)) {
      $FileErr = "Only jpg or png files required";
      $err=1;
    }
  }
  
  if (empty($_POST["umail"])) {
    $EmailErr = "Email is required";
    $err=1;
  } else {
    $email = test_input($_POST["umail"]);
    $err=0;
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid email format";
      $err=1;
    }
  }
    
  if (empty($_POST["uweb"])) {
    $WebErr = "required";
    $err=1;
  } else {
    $website = test_input($_POST["uweb"]);
    $err=0;
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $WebErr = "Invalid URL";
      $err=1;
    }
  }

  if (empty($_POST["utel"])) {
    $PhonErr = "Phone no is required";
    $err=1;
  } else {
    $Phon = test_input($_POST["utel"]);
    $err=0;
    if (!preg_match("/^[0-9]*$/",$Phon)) {
    	$PhonErr="Phone number contains must numbers";
    	$err=1;
    }

  }*/
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($err==1) {
	echo "<script type='text/javascript'>window.alert('".$nameErr." ".$EmailErr." ".$WebErr." ".$PhonErr." ".$FileErr."');</script>";
}
else {
$servername = "localhost";
$username = "root";
$password = "";
$dbname="resume";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO resumetable (Usr, UImg, UNme, UNick, UAddr, UEmail, UPhone, UWeb, Uobj, UEdu1Session, UEdu1Colge, UEdu1Degre, UEdu2Session, UEdu2Colg, UEdu2Degre, UEx1Session, UEx1Comp,	UEx1Post,	UEx1Res1,	UEx1Res2,	UEx2Session,	UEx2Comp,	UEx2Post,	UEx2Res1,	UEx2Res2,	Uskill1,	USkill11,	USkill12,	USkill13,	USkill14,	USkill15,	USkill16,	USkill17,	USkill18,	USkill19,	Uskill2,	USkill21,	USkill22,	USkill23,	USkill24,	USkill25,	USkill26,	Work1,	Work2,	Work3, Work4 ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssssssssssssssssssssssssssssssssssssss",$u1,$folder1,$u3,$u4,$u5,$u6,$u7,$u8,$u9,$u10,$u11,$u12,$u13,$u14,$u15,$u16,$u17,$u18,$u19,$u20,$u21,$u22,$u23,$u24,$u25,$u26,$u27,$u28,$u29,$u30,$u31,$u32,$u33,$u34,$u35,$u36,$u37,$u38,$u39,$u40,$u41,$u42,$folder2,$folder3,$folder4,$folder5);
$u1=date("ymd_h_i_s");
$u2=$_FILES['inimg']['name'];
$utemp=$_FILES['inimg']['tmp_name'];
$folder1="Stud/".$u2;
move_uploaded_file($utemp, $folder1);
$u3=$_POST['unam'];
$u4=$_POST['nickn'];
$u5=$_POST['uadd'];
$u6=$_POST['umail'];
$u7=$_POST['utel'];
$u8=$_POST['uweb'];
$u9=$_POST['object'];
$u10=$_POST['edu1ses'];
$u11=$_POST['edu1clg'];
$u12=$_POST['edu1deg'];
$u13=$_POST['edu2ses'];
$u14=$_POST['edu2clg'];
$u15=$_POST['edu2deg'];
$u16=$_POST['exp1ses'];
$u17=$_POST['exp1comp'];
$u18=$_POST['exp1post'];
$u19=$_POST['exp1rol1'];
$u20=$_POST['exp1rol2'];
$u21=$_POST['exp2ses'];
$u22=$_POST['exp2comp'];
$u23=$_POST['exp2post'];
$u24=$_POST['exp2rol1'];
$u25=$_POST['exp2rol2'];
$u26=$_POST['skil1'];
$u27=$_POST['skil11'];
$u28=$_POST['skil12'];
$u29=$_POST['skil13'];
$u30=$_POST['skil14'];
$u31=$_POST['skil15'];
$u32=$_POST['skil16'];
$u33=$_POST['skil17'];
$u34=$_POST['skil18'];
$u35=$_POST['skil19'];
$u36=$_POST['skil2'];
$u37=$_POST['skil21'];
$u38=$_POST['skil22'];
$u39=$_POST['skil23'];
$u40=$_POST['skil24'];
$u41=$_POST['skil25'];
$u42=$_POST['skil26'];
$u43=$_FILES['workig1']['name'];
$u43temp=$_FILES['workig1']['tmp_name'];
$folder2="Stud/".$u43;
move_uploaded_file($u43temp, $folder2);
$u44=$_FILES['workig2']['name'];
$u44temp=$_FILES['workig2']['tmp_name'];
$folder3="Stud/".$u44;
move_uploaded_file($u44temp, $folder3);
$u45=$_FILES['workig3']['name'];
$u45temp=$_FILES['workig3']['tmp_name'];
$folder4="Stud/".$u45;
move_uploaded_file($u45temp, $folder4);
$u46=$_FILES['workig4']['name'];
$u46temp=$_FILES['workig4']['tmp_name'];
$folder5="Stud/".$u46;
move_uploaded_file($u46temp, $folder5);
$stmt->execute();
//if ($stmt->execute()){

  print "<meta http-equiv=\"refresh\" content=\"0;URL=../blue/out.php\">";

//}
//else
//{

 // print "<meta http-equiv=\"refresh\" content=\"0;URL=../contact/error.html\">";

//}
$stmt->close();
$conn->close();
}
?>
</body>
</html>