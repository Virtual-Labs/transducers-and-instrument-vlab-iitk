<?php 
session_start();
include ('connect.php');
if(isset($_POST['Submit']) == 'Registration')
{
$regex = '/^([a-zA-Z0-9\.\-\_])+\@([a-zA-Z0-9\._-])+\.([a-zA-Z0-9\._-]+)+$/';
    if(!preg_match($regex,$_POST['User_Email']))
    {
   header("Location: /Final_Files/Myregistration.php?msg=ERROR: Email address is invalid please enter the correct Email address....");
	exit();
    }
   if (strcmp($_POST['Password'],$_POST['Password2']) || empty($_POST['Password'])|| strlen($_POST['Password'])<5)
	{ 
	die ("Password does not match the length or empty");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Password does not match or empty or less than 5 digit..");
	exit();
	}
$regex='/^([a-zA-Z])+$/';
	if (!preg_match($regex,$_POST['First_Name']) || empty($_POST['First_Name']))
	{ 
	die ("Field Should not be empty or enter the correct name!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
$regex='/^([a-zA-Z])+$/';
	if (!preg_match($regex,$_POST['Last_Name']) || empty($_POST['Last_Name']))
	{ 
	die ("Field Should not be empty or enter the correct name!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['questions']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['Answer']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
$regex='/^([0-9])+$/';
	if (!preg_match($regex,$_POST['Mobile_Number']) || empty($_POST['Mobile_Number']))
	{ 
	die ("Field Should not be empty or enter the correct no.");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['Affiliation']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['Place']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['Pin_Code']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['Profession']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (empty($_POST['Qualification']))
	{ 
	die ("Field Should not be empty!");
	header("Location: /Final_Files/Myregistration.php?msg=ERROR: Field is empty.....");
	exit();
	}
	if (strcmp(md5($_POST['User_Code']),$_SESSION['ckey']))
	{ 
	die("Invalid code entered. Please enter the correct code as shown in the Image");
  	} 
	$rs_duplicates = mysql_query("select User_Id from login where User_Email_Id ='$_POST[User_Email]'");
	$duplicates = mysql_num_rows($rs_duplicates);
	if ($duplicates > 0)
	{
	//die ("ERROR: User account already exists.");
	header("Location: Myregistration.php?msg=ERROR: User account already exists..");
	exit();
	}
	$User_Code = rand(1000,9999);
	$host  = $_SERVER['HTTP_HOST'];
	$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$First_Name=$_POST['First_Name'];
$Middle_Name=$_POST['Middle_Name'];
$Last_Name=$_POST['Last_Name'];
$User_Email=$_POST['User_Email'];
$md5pass = md5($_POST['Password']);
$questions=$_POST['questions'];
$Answer=$_POST['Answer'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob= $day.'/'.$month.'/'.$year;
$Mobile_Number=$_POST['Mobile_Number'];
$Affiliation=$_POST['Affiliation'];
$Place=$_POST['Place'];
$Pin_Zip_Code=$_POST['Pin_Code'];
$User_Code=$_POST['User_Code'];
$Country=$_POST['country'];
$Profession=$_POST['Profession'];
$Qualification=$_POST['Qualification'];
$result="insert into login set 
First_Name='$First_Name',
Middle_Name='$Middle_Name',
Last_Name='$Last_Name',
User_Email_Id='$User_Email',
Password='$md5pass',
Security_Question='$questions',
Security_Answer='$Answer',
Date_of_Birth='$dob',
Cellphone='$Mobile_Number',
Affiliation='$Affiliation',
Place='$Place',
Zip_Code='$Pin_Zip_Code',
Country='$Country',
Profession='$Profession',
Qualification='$Qualification',
Activation_Code='$User_Code',
Date_of_Joining=now()";
$reg=mysql_query($result);
if($reg)
{
$message = 
"Thank you for registering an account with server. Here are the login details...\n\n
User Email: ".$_POST["User_Email"]." \n
Password: ".$_POST["Password"]." \n
____________________________________________
*** ACTIVATION LINK ***** \n
Activation Link: http://$host$uri/activate.php?usr=$_POST[User_Email]&code=$User_Code \n\n
_____________________________________________
Thank you. This is an automated response. PLEASE DO NOT REPLY.";
	mail($_POST['User_Email'] , "login Activation", $message, "From: virtuallaboratory.iitk@gmail.com");
	unset($_SESSION['ckey']);
	echo ("Registration Successful! An activation code has been sent to your email address with an activation link...");	
    //header( 'Location: http://172.26.81.165/Final_Files/login.php') ;
	//exit;
	header("Location: login.php?msg=Registration Successful! An activation code has been sent to your email address with an activation link...");
	}
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Virtual Lab - IIT kanpur</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" /></head></html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
	  
	  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
					<br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p></div></div>
					<div id="menu">
		<ul>
		      <li><a href="index.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;</strong>Home&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;<span class="style7">&nbsp;Experiments</span></a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)"> &nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>People<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;</a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;FAQs&nbsp;<strong>&nbsp;</strong>&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;Contact Us </a></li>
		      <li><a href="h.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;</a></li>
			   <li><a href="http://vlab.co.in" style="background-image:url(images/images1.jpg)" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        VLab &nbsp;&nbsp;&nbsp;&nbsp; </a></li>    

        </ul>
	</div>
	<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
<!-- ONE STEP TO INSTALL DATE-CLOCK-INTERNET TIME:
  1.  Copy the coding into the BODY of your HTML document  -->
<!-- STEP ONE: Paste this code into the BODY of your HTML document  -->
<BODY>
<br />
<div id="date">
<font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b>
<span id="clock">
<SCRIPT LANGUAGE="JavaScript">
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!-- Original:  Chris (javascript@crashedstar.com) -->
<!-- Web Site:  http://www.crashedstar.com/ -->

<!-- Begin
var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
function getthedate()
{
  var mydate=new Date()
  var year=mydate.getYear()
  if (year < 1000)
      year+=1900
  var day=mydate.getDay()
  var month=mydate.getMonth()
  var daym=mydate.getDate()
  if (daym<10)
     daym="0"+daym
  var hours=mydate.getHours()
  var minutes=mydate.getMinutes()
  var seconds=mydate.getSeconds()
  var dn="AM"
  if (hours>=12)
     dn="PM"
  if (hours>12)
  {
    hours=hours-12
  }
  //{
     var d = new Date();
     Time24H = new Date();
     Time24H.setTime(d.getTime() + (d.getTimezoneOffset()*60000) + 3600000);
     InternetTime = Math.round((Time24H.getHours()*60+Time24H.getMinutes()) / 1.44);
      //if (InternetTime < 10) InternetTime = '00'+InternetTime;
     //else if (InternetTime < 100) InternetTime = '0'+InternetTime;
  //}
  if (hours==0)
      hours=12
  if (minutes<=9)
     minutes="0"+minutes
  if (seconds<=9)
    seconds="0"+seconds
  //change font size here
  var cdate=dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" , "+hours+":"+minutes+" "+dn+" "
  if (document.all)
     document.all.clock.innerHTML=cdate
  else if (document.getElementById)
     document.getElementById("clock").innerHTML=cdate
  else
    document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit()
{
   if (document.all||document.getElementById) 
      setInterval("getthedate()",1000)
}
window.onload=goforit
//  End -->
</script>
</span></b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
<!-- Script Size:  2.32 KB -->
<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->
<?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
 <div id="content">
	  <div class="post">
			<div class="post-bgtop">
				<div class="entry">
			<h1>
  <p><b><font color="#006666"><div style="padding-left:40px"> Welcome to Virtual Labs-IIT Kanpur </div></font></b></p>
</h1><h4><font color="#006666"><div style="padding-left:100px">Transducer &amp; Instrumentation Virtual Laboratory </div></font></h4>
	  <form id="form1" name="form1" method="post" action="" >
        <p align="center">
        <table width="600" border="0" height="689" align="CENTER">
            <tbody>
                <tr>
                <td height="35" colspan="2" valign="top" style="padding-left:180PX;"><h3>Registration</h3></td>
              </tr>
              <tr>
                <td width="154" height="28"><strong><font color="#000000">First_Name*</font></strong></td>
                <td><input name="First_Name" id="First_Name" type="text" >
                      <font color="#000000"> Ex. Beck</font></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Middle_Name</font></strong></td>
                <td><input name="Middle_Name" id="Middle_Name" type="text">
                      <font color="#000000">Ex. Devien</font> </td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Last_Name*</font></strong></td>
                <td><input name="Last_Name" id="Last_Name" type="text">
                      <font color="#000000">Ex. Johnson</font> </td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">User_Email*</font></strong></td>
                <td><input name="User_Email" id="User_Email" type="text">
                  <font color="#000000">Ex : john.beck@yoursmail.com</font></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Password*</font></strong></td>
                <td><input name="Password" id="Password" type="password">
                      <font color="#000000">At least 5 digits</font> </td>
              </tr>
              <tr>
                <td height="24"><strong><font color="#000000">Retype Password*</font></strong></td>
                <td><input name="Password2" id="Password2" type="password"></td>
              </tr>
			 
              <tr>
                <td height="28"><strong><font color="#000000">Security_Question*</font></strong></td>
                <td><select id="questions" name="questions" onChange="updateOwnQuestionBox(this.value)">
                  <option selected="selected" value="choosequestion" style="font-style: italic;">Choose a question....</option>
                  <option value="What is the name of your best friend from childhood?">What is the name of your best friend from childhood?</option>
                  <option value="What was the name of your first teacher?">What was the name of your first teacher?</option>
                  <option value="What is the name of your manager at your first job?">What is the name of your manager at your first job?</option>
                  <option value="What was your first phone number?">What was your first phone number?</option>
                  <option value="What is your vehicle registration number?">What is your vehicle registration number?</option>
                  <option value="What is your library card number?">What is your library card number?</option>
                  <script> 
	<!--
	
	
	
	document.forms['createaccount'].questions.options[lastIndex] = new Option(label, value);
	document.forms['createaccount'].questions.options[lastIndex].style.fontStyle = 'italic';
	
	
	
	-->
	  </script>
                </select></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Security_Answer*</font></strong></td>
                <td><input name="Answer" id="Answer" size="53" autocomplete="off" type="text"></td>
              </tr>
              <tr>
                <td height="30"><strong><font color="#000000">Date_Of_Birth*</font></strong></td>
                <td>
                  <select class="day" name="day" id="day">
                    <option selected="selected" value="0"> dd </option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                  <select name="month" class="month" id="month" style="margin-left: 4px;">
                    <option selected="selected" value="0"> mm </option>
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                    <option value="3">Mar</option>
                    <option value="4">Apr</option>
                    <option value="5">May</option>
                    <option value="6">Jun</option>
                    <option value="7">Jul</option>
                    <option value="8">Aug</option>
                    <option value="9">Sep</option>
                    <option value="10">Oct</option>
                    <option value="11">Nov</option>
                    <option value="12">Dec</option>
                  </select>
                  <select name="year" class="year" id="year"  style="margin-left: 4px;">
                    <option selected="selected" value="0"> yyyy </option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                  </select>                </td>
             <tr>
			    <td height="28"><strong><font color="#000000">Mobile_Number*</font></strong></td>
                <td><input name="Mobile_Number" id="Mobile_Number" size="24" type="text" maxlength="15">
                    <font color="#000000">( With Country Code.)</font> </td>
             </tr>
			 <tr>
			 <td height="28"><strong><font color="#000000">Affiliation*</font></strong></td>
                <td><input name="Affiliation" id="Affiliation" type="text"></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Place*</font></strong></td>
                <td><input name="Place" id="Place" type="text"></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Pin_Zip_Code*</font></strong></td>
                <td><input name="Pin_Code" id="Pin_Code" type="text"></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Country*</font></strong></td>
                <td><select name="country" id="country">
                  <option selected="selected" value="India">India</option>
                  <option value="Afghanistan">Afghanistan</option>
                  <option value="Albania">Albania</option>
                  <option value="Algeria">Algeria</option>
                  <option value="Andorra">Andorra</option>
                  <option value="Anguila">Anguila</option>
                  <option value="Antarctica">Antarctica</option>
                  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option value="Argentina">Argentina</option>
                  <option value="Armenia ">Armenia </option>
                  <option value="Aruba">Aruba</option>
                  <option value="Australia">Australia</option>
                  <option value="Austria">Austria</option>
                  <option value="Azerbaidjan">Azerbaidjan</option>
                  <option value="Bahamas">Bahamas</option>
                  <option value="Bahrain">Bahrain</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Barbados">Barbados</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Belgium">Belgium</option>
                  <option value="Belize">Belize</option>
                  <option value="Bermuda">Bermuda</option>
                  <option value="Bhutan">Bhutan</option>
                  <option value="Bolivia">Bolivia</option>
                  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Brunei">Brunei</option>
                  <option value="Bulgaria">Bulgaria</option>
                  <option value="Cambodia">Cambodia</option>
                  <option value="Canada">Canada</option>
                  <option value="Cape Verde">Cape Verde</option>
                  <option value="Cayman Islands">Cayman Islands</option>
                  <option value="Chile">Chile</option>
                  <option value="China">China</option>
                  <option value="Christmans Islands">Christmans Islands</option>
                  <option value="Cocos Island">Cocos Island</option>
                  <option value="Colombia">Colombia</option>
                  <option value="Cook Islands">Cook Islands</option>
                  <option value="Costa Rica">Costa Rica</option>
                  <option value="Croatia">Croatia</option>
                  <option value="Cuba">Cuba</option>
                  <option value="Cyprus">Cyprus</option>
                  <option value="Czech Republic">Czech Republic</option>
                  <option value="Denmark">Denmark</option>
                  <option value="Dominica">Dominica</option>
                  <option value="Dominican Republic">Dominican Republic</option>
                  <option value="Ecuador">Ecuador</option>
                  <option value="Egypt">Egypt</option>
                  <option value="El Salvador">El Salvador</option>
                  <option value="Estonia">Estonia</option>
                  <option value="Falkland Islands">Falkland Islands</option>
                  <option value="Faroe Islands">Faroe Islands</option>
                  <option value="Fiji">Fiji</option>
                  <option value="Finland">Finland</option>
                  <option value="France">France</option>
                  <option value="French Guyana">French Guyana</option>
                  <option value="French Polynesia">French Polynesia</option>
                  <option value="Gabon">Gabon</option>
                  <option value="Germany">Germany</option>
                  <option value="Gibraltar">Gibraltar</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Greece">Greece</option>
                  <option value="Greenland">Greenland</option>
                  <option value="Grenada">Grenada</option>
                  <option value="Guadeloupe">Guadeloupe</option>
                  <option value="Guatemala">Guatemala</option>
                  <option value="Guinea-Bissau">Guinea-Bissau</option>
                  <option value="Guinea">Guinea</option>
                  <option value="Haiti">Haiti</option>
                  <option value="Honduras">Honduras</option>
                  <option value="Hong Kong">Hong Kong</option>
                  <option value="Hungary">Hungary</option>
                  <option value="Iceland">Iceland</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Ireland">Ireland</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Jamaica">Jamaica</option>
                  <option value="Japan">Japan</option>
                  <option value="Jordan">Jordan</option>
                  <option value="Kazakhstan">Kazakhstan</option>
                  <option value="Kenya">Kenya</option>
                  <option value="Kiribati ">Kiribati </option>
                  <option value="Kuwait">Kuwait</option>
                  <option value="Kyrgyzstan">Kyrgyzstan</option>
                  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                  <option value="Latvia">Latvia</option>
                  <option value="Lebanon">Lebanon</option>
                  <option value="Liechtenstein">Liechtenstein</option>
                  <option value="Lithuania">Lithuania</option>
                  <option value="Luxembourg">Luxembourg</option>
                  <option value="Macedonia">Macedonia</option>
                  <option value="Madagascar">Madagascar</option>
                  <option value="Malawi">Malawi</option>
                  <option value="Malaysia ">Malaysia </option>
                  <option value="Maldives">Maldives</option>
                  <option value="Mali">Mali</option>
                  <option value="Malta">Malta</option>
                  <option value="Marocco">Marocco</option>
                  <option value="Marshall Islands">Marshall Islands</option>
                  <option value="Mauritania">Mauritania</option>
                  <option value="Mauritius">Mauritius</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Micronesia">Micronesia</option>
                  <option value="Moldavia">Moldavia</option>
                  <option value="Monaco">Monaco</option>
                  <option value="Mongolia">Mongolia</option>
                  <option value="Myanmar">Myanmar</option>
                  <option value="Nauru">Nauru</option>
                  <option value="Nepal">Nepal</option>
                  <option value="Netherlands Antilles">Netherlands Antilles</option>
                  <option value="Netherlands">Netherlands</option>
                  <option value="New Zealand">New Zealand</option>
                  <option value="Niue">Niue</option>
                  <option value="North Korea">North Korea</option>
                  <option value="Norway">Norway</option>
                  <option value="Oman">Oman</option>
                  <option value="Pakistan">Pakistan</option>
                  <option value="Palau">Palau</option>
                  <option value="Panama">Panama</option>
                  <option value="Papua New Guinea">Papua New Guinea</option>
                  <option value="Paraguay">Paraguay</option>
                  <option value="Peru ">Peru </option>
                  <option value="Philippines">Philippines</option>
                  <option value="Poland">Poland</option>
                  <option value="Portugal ">Portugal </option>
                  <option value="Puerto Rico">Puerto Rico</option>
                  <option value="Qatar">Qatar</option>
                  <option value="Republic of Korea Reunion">Republic of Korea Reunion</option>
                  <option value="Romania">Romania</option>
                  <option value="Russia">Russia</option>
                  <option value="Saint Helena">Saint Helena</option>
                  <option value="Saint kitts and nevis">Saint kitts and nevis</option>
                  <option value="Saint Lucia">Saint Lucia</option>
                  <option value="Samoa">Samoa</option>
                  <option value="San Marino">San Marino</option>
                  <option value="Saudi Arabia">Saudi Arabia</option>
                  <option value="Seychelles">Seychelles</option>
                  <option value="Singapore">Singapore</option>
                  <option value="Slovakia">Slovakia</option>
                  <option value="Slovenia">Slovenia</option>
                  <option value="Solomon Islands">Solomon Islands</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Spain">Spain</option>
                  <option value="Sri Lanka">Sri Lanka</option>
                  <option value="St.Pierre and Miquelon">St.Pierre and Miquelon</option>
                  <option value="St.Vincent and the Grenadines">St.Vincent and the Grenadines</option>
                  <option value="Sweden">Sweden</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="Syria">Syria</option>
                  <option value="Taiwan ">Taiwan </option>
                  <option value="Tajikistan">Tajikistan</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Turkmenistan">Turkmenistan</option>
                  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="UAE">UAE</option>
                  <option value="UK">UK</option>
                  <option value="USA">USA</option>
                  <option value="Uruguay">Uruguay</option>
                  <option value="Uzbekistan">Uzbekistan</option>
                  <option value="Vanuatu">Vanuatu</option>
                  <option value="Vatican City">Vatican City</option>
                  <option value="Vietnam">Vietnam</option>
                  <option value="Virgin Islands (GB)">Virgin Islands (GB)</option>
                  <option value="Virgin Islands (U.S.) ">Virgin Islands (U.S.) </option>
                  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                  <option value="Yemen">Yemen</option>
                  <option value="Yugoslavia">Yugoslavia</option>
                </select></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Profession*</font></strong></td>
                <td><input name="Profession" id="Profession" type="text"></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Qualification*</font></strong></td>
                <td><input name="Qualification" id="Qualification" type="text"></td>
              </tr>
              <tr>
                <td colspan="2" valign="bottom" height="50" style="padding-left:160PX;">
                      <input name="User_Code" class="style1" size="20" type="text" id="User_Code">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="pngimg.php" align="center"> </td>
              </tr>
              <tr>
                <td colspan="2" height="61" style="padding-left:180PX;">
                  <input name="Submit" value="Registration" type="Submit" id="Submit" ><a href="index.php">BACK</a><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp; implies fields are mandatory</td>
              </tr>
            </tbody>
          </table>
        		</p>
      </form></div>
			  </div>
		  </div>
		</div>
	  </div>
	  <div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp; </p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Live Help </h2><br />
					<ul>
						<a href="h.php">
						<img id="comm100_ButtonImage" src="http://chatserver.comm100.com/BBS.aspx?siteId=72715&amp;planId=886&amp;partnerId=-1" style="border:0px" alt="Live Chat Software for Website" /></a>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	  </div></div></div>
	  <!-- end #content -->
	  <!-- end #page -->
	<div id="footer">
		<p> Transducer &amp; Instrumentation  <a href="h.php">Virtual Lab - IIT Kanpur </a></p>
	</div>
	<!-- end #footer -->

</body>
</html>

