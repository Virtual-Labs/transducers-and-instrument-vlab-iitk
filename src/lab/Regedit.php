<?php
session_start(); 
include ('connect.php');
$b=$_GET['index'];
$dbf="select * from login where User_Id='$b'";
$fet=mysql_query($dbf);
$res=mysql_fetch_array($fet);
$exp=explode("/",$res['Date_of_Birth']);
if(isset($_POST['Submit']) == 'Update Profile')
{
$First_Name=$_POST['First_Name'];
$Middle_Name=$_POST['Middle_Name'];
$Last_Name=$_POST['Last_Name'];
$User_Email=$_POST['User_Email'];
$questions=$_POST['questions'];
$Answer=$_POST['Answer'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob= $day.'/'.$month.'/'.$year;
$Mobile_Number=$_POST['Mobile_Number'];
$Affiliation=$_POST['Affiliation'];
$Place=$_POST['Place'];
$Pin_Zip_Code=$_POST['Pin_Zip_Code'];
$Country=$_POST['country'];
$Profession=$_POST['Profession'];
$Qualification=$_POST['Qualification'];
$result="update login set
First_Name='$First_Name',
Middle_Name='$Middle_Name',
Last_Name='$Last_Name',
User_Email_ID='$User_Email',
Security_Question='$questions',
Security_Answer='$Answer',
Date_of_Birth='$dob',
Cellphone='$Mobile_Number',
Affiliation='$Affiliation',
Place='$Place',
Zip_Code='$Pin_Zip_Code',
Country='$Country',
Profession='$Profession',
Qualification='$Qualification'where User_Id='$b'";
$reg=mysql_query($result);
if($reg)
{
header("location: use.php?msg=Your Profile has been Updated.....");
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
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/chromestyle.css" />
<script src="js/chrome.js"></script>
<!--<link rel="stylesheet" type="text/css" href="js/chrome.js" />-->
<style type="text/css">
<!--
.style2 {color: #0066FF}
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
	  <div id="logo">
		  
		  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p>
	            </div>
	  </div>
	  </div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
		     <li><a href="use.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;&nbsp;&nbsp;</strong>Home&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="experiment.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;<span class="style7">&nbsp;Experiment</span>s</a></li>
		      <li><a href="contactp.php" style="background-image:url(images/images1.jpg)"> &nbsp;&nbsp;<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>People<strong>&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;</a></li>
		      <li><a href="faq.php" style="background-image:url(images/images1.jpg)"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;&nbsp;FAQs&nbsp;<strong>&nbsp;</strong>&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="contact.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;Contact Us </a></li>
		      <li><a href="feedback.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback&nbsp;&nbsp;</a></li>
			   <li><a href="http://vlab.co.in" style="background-image:url(images/images1.jpg)" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		        VLab &nbsp;&nbsp;&nbsp;&nbsp; </a></li>
      </ul>
	</div>
	</div>
			<!--dropbox1-->
			<div id="dropmenu1" class="dropmenudiv">

				<a href="aim_of_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="aim_of_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="aim_of_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="aim_of_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="aim_of_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="aim_of_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="aim_of_exp6.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="aim_of_exp7.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="aim_of_exp8.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="aim_of_exp9.php">Experiment.No-10 <br>Speed Measurement</a>
				
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="about_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="about_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="about_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="about_exp6.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="about_exp7.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="about_exp8.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="about_exp9.php">Experiment.No-10 <br>Speed Measurement</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="theory4.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="theory5.php">Experiment.No-5 <br>Rotameter</a>
				<a href="theory6.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="theory7.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="theory8.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="theory9.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="theory10.php">Experiment.No-10 <br>Speed Measurement</a>
				
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="procedure14.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="procedure15.php">Experiment.No-5 <br>Rotameter</a>
				<a href="procedure16.php">Experiment.No-6 <br>Strain Gauge</a>
				<a href="procedure17.php">Experiment.No-7 <br>R-2R Ladder Network</a>
				<a href="procedure18.php">Experiment.No-8 <br>Displacement Transducers</a>
				<a href="procedure0.php">Experiment.No-9 <br>Pressure Measurement</a>
				<a href="procedure1.php">Experiment.No-10 <br>Speed Measurement</a>
				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>
<!-- ONE STEP TO INSTALL DATE-CLOCK-INTERNET TIME:

  1.  Copy the coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the BODY of your HTML document  -->

<BODY>
<div id="date" align="right">
  <table width="960" height="52" border="0">
 
  <tr>
    <td width="396"><div id="date2"> <font face="Arial, Helvetica, Sans Serif" size="3" color="#0000FF"><b> <span id="clock">
      <script language="JavaScript">

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
    </span> </b> </font></div></td>
    <td width="128">&nbsp;</td>
   <td width="169" align="right"><b><font color="#001100">share:</font></b><a href="http://www.facebook.com/pages/TI-Virtuallab-IITK/222640487750783" target="_blank" style="padding-left:04px;"><img src="images/facebook-logo-180x66.gif" />
 </a><a href="http://www.twitter.com/TI_Virtual_Lab" target="_blank"><img src="http://twitter-badges.s3.amazonaws.com/twitter-a.png" alt="Follow TI_Virtual_Lab on Twitter"/></a></td>
  </tr>
  </table>
</div>
<!-- Script Size:  2.32 KB -->

<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->
<!-- THIS CODE IS FOR EXTERNAL SEARCH AND IS NOT NEEDED, IT WAS TAKEN VERBATIM FROM:: http://www.sitepoint.com/forums/showthread.php?t=584712 -->
<form action="Google_search_results.php" id="cse-search-box" >
  <div>
    <input type="hidden" name="cx" value="013069836288472481273:yf_kbl-8lly" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
	<table width="240" cellpadding="3" cellspacing="5" align="center">
   <tr align="center">
    <td>
        <input type="text" name="q" size="31" />
   <br /></td>

    <td>
      <option value="google.com"></b></option>
        <!--<option value="lycos.com">lycos</option>-->
		 
		             
   <br /></td>

    <td><input type="submit" name="sa" value="Search" /></td>
	 <td><input type="reset" name="sa" value="reset" /></td>
  </div>
</form>
</tr>
</table>

<!--</div>-->

<?php
//session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
    <div id="date" align="right" ><font color="#009933" style="padding-right:10px;">Logged as:&nbsp;&nbsp; <?php echo $_SESSION['user']; ?></font>
    <a href="/virtuallab/logout.php" style="padding-right:10px;">Logout</a><a href="user.php">Update Profile</a> 

    </div>
    <?php } ?>  




<!-- end #menu -->

<?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>
<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
 <div id="content">
	  <div class="post">
			<div class="post-bgtop">
	<div class="post-bgbtm">
			<div class="entry">
<h1><b><font color="#006666"><div align="center"> Welcome to Virtual Labs-IIT Kanpur
</div></font></b></h1>
<h4><font color="#006666"><div align="center">Transducer &amp; Instrumentation Virtual Laboratory </div></font></h4>
	<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width= "556" border="0" height= "700" cellpadding="1" height="614">
      <tbody><tr>
        <td height="48" colspan="2" align="center" valign="top"><h3>Update Your Profile</h3>        </td>
      </tr>
      
      <tr>
        <td width="154" height="36">First_Name</td>
        <td width="378"><p>
          <input name="First_Name" id="First_Name" type="text" value="<?php echo $res['First_Name'];?>">
          Ex. Beck 
        </p>      </td>
      </tr>
      <tr>
        <td height="26">Middle_Name</td>
        <td><input name="Middle_Name" id="Middle_Name" type="text" value="<?php echo $res['Middle_Name'];?>" >
        Ex. Devien </td>
      </tr>
      <tr>
        <td height="28">Last_Name</td>
        <td><input name="Last_Name" id="Last_Name" type="text" value="<?php echo $res['Last_Name'];?>">
        Ex. Johnson </td>
      </tr>
      <tr>
        <td height="39">User_Email</td>
        <td><p>
          <input name="User_Email" id="User_Email" type="text" value="<?php echo $res['User_Email_Id'];?>">
          Ex : john.beck@yoursmail.com </p>      </td>
      </tr>
      <tr>
        <td height="33">Security_Question</td>
        <td><p><select id="questions" name="questions" onChange="updateOwnQuestionBox(this.value)">
            <option selected="selected" value="<?php echo $res['Security_Question'];?>"><?php echo $res['Security_Question'];?></option>
            <option value="What is the name of your best friend from childhood?">What is the name of your best friend from childhood?</option>
            <option value="What was the name of your first teacher?">What was the name of your first teacher?</option>
            <option value="What is the name of your manager at your first job?">What is the name of your manager at your first job?</option>
            <option value="What was your first phone number?">What was your first phone number?</option>
            <option value="What is your vehicle registration number?">What is your vehicle registration number?</option>
            <option value="What is your library card number?">What is your library card number?</option>
          </select>
          </p>
          </td>
      </tr>
      <tr>
        <td height="31">Security_Answer</td>
        <td><input name="Answer" id="Answer" size="53" autocomplete="off" type="text" value="<?php echo $res['Security_Answer'];?>"></td>
      </tr>
      <tr>
        <td height="30">Date_Of_Birth</td>
        <td>
          <p><dfn><em>
            <select class="day" name="day" id="day">
              <option selected="selected" value="<?php echo $exp[0];?>"><?php echo $exp[0];?></option>
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
              <option selected="selected" value="<?php echo $exp[1];?>"><?php echo $exp[1];?></option>
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
                <option selected="selected" value="<?php echo $exp[2];?>"><?php echo $exp[2];?></option>
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
              </select>
            </em></dfn></p>
          </td>
      </tr>
      <tr>
        <td height="28">Mobile_Number</td>
        <td valign="top" align="left"> <label></label>
          <input name="Mobile_Number" id="Mobile_Number" size="24" type="text" value="<?php echo $res['Cellphone'];?>">		  </td>
        </tr>
      <tr>
        <td height="28">Affiliation</td>
        <td><input name="Affiliation" id="Affiliation" type="text" value="<?php echo $res['Affiliation'];?>"></td>
      </tr>
      <tr>
        <td height="28">Place</td>
        <td><input name="Place" id="Place" type="text" value="<?php echo $res['Place'];?>"></td>
      </tr>
      <tr>
        <td height="28">Pin_Zip_Code</td>
        <td><input name="Pin_Zip_Code" id="Pin_Zip_Code" type="text" value="<?php echo $res['Zip_Code'];?>"></td>
      </tr>
      <tr>
        <td height="28">Country</td>
        <td><select name="country" id="country" value="">
          <option selected="selected" value="<?php echo $res['Country'];?>"><?php echo $res['Country'];?></option>
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
           <option value="India">India</option>
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
        <td height="28">Profession</td>
        <td><input name="Profession" id="Profession" type="text" value="<?php echo $res['Profession'];?>" ></td>
      </tr>
      <tr>
        <td height="28">Qualification</td>
        <td><input name="Qualification" id="Qualification" type="text" value="<?php echo $res['Qualification'];?>"></td>
      </tr>
	        <tr>
        <td colspan="2" align="center" height="69">
          <input name="Submit" value="Update Profile" type="Submit" id="Submit"><a href="settings.php?cat=<?php echo $res['User_Id'];?>">&nbsp;Change the Password</a></td>
      </tr>
      </tbody></table>
  </div>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
	</form>
</td></div>
			  </div>
		  </div>
		</div>
	  </div>
	  <div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp; <a href="contactp.php"></a></p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/" target="_blank">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/" target="_blank">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Live Help </h2>
					<ul><br />
						<!-- BEGIN Comm100 Live Chat Button Code --><link href="http://chatserver.comm100.com/css/comm100_livechatbutton.css" rel="stylesheet" type="text/css"/><div id="comm100_ChatButton"><div id="comm100_warp"><center><div id="comm100_dvhelp"><a class="comm100_ahelp_css" href="http://www.comm100.com/livechat/" onclick="comm100_Chat();return false;" target="_blank" title="Live Chat Software for Website"><img id="comm100_ButtonImage" src="http://chatserver.comm100.com/BBS.aspx?siteId=72715&amp;planId=886&amp;partnerId=-1" style="border:0px" alt="Live Chat Software for Website" /></a><script src="http://chatserver.comm100.com/js/LiveChat.js?siteId=72715&amp;planId=886&amp;partnerId=-1" type="text/javascript"></script><div id="comm100_track"></div></div><div id="comm100_dvbox" class="comm100_dvbox_css" style="display:none;" onmouseover="this.style.display=''" onmouseout="this.style.display='none'"><div class="comm100_dvcontent_css"><p class="comm100_ptitle_css"><b><a href="http://www.comm100.com/" target="_blank" class="comm100_atitle_css" >Comm100</a> Products:</b></p><ul class="comm100_ulbox_css"><li style="display:none;" class="comm100_onelinone">&nbsp;</li><li><a href="http://www.comm100.com/" target="_blank">Customer Service Software</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank" >Live Chat Software</a></li><li><a href="http://www.comm100.com/emailmarketingnewsletter/" target="_blank">Email Marketing Software</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank">Live Help</a></li><li><a href="http://www.comm100.com/emailmarketingnewsletter/" target="_blank">Email Marketing</a></li><li><a href="http://www.comm100.com/livechat/" target="_blank">Live Chat</a></li></ul></div></div></center></div></div><!-- End Comm100 Live Chat Button Code -->
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
</div>
	<!-- end #page -->
	<div id="footer">
		<p> Transducer &amp; Instrumentation  Virtual Lab - IIT Kanpur </p>
	</div>
	<!-- end #footer -->
</div>

</body>
</html>

