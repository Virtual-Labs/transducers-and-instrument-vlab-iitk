<?php 
session_start();
include ('connect.php');
if(isset($_POST['Submit']) == 'Registration')
{
$regex = '/^([a-zA-Z0-9\.\-\_])+\@([a-zA-Z0-9\._-])+\.([a-zA-Z0-9\._-]+)+$/';
    if(!preg_match($regex,$_POST['User_Email']))
    {
   header("Location: /virtuallab/Myregistration.php?msg=ERROR: Email address is invalid please enter the correct Email address....");
    exit();
    }
   if (strcmp($_POST['Password'],$_POST['Password2']) || empty($_POST['Password'])|| strlen($_POST['Password'])<5)
    { 
    die ("Password does not match the length or empty");
    header("Location: /virtuallab/Myregistration.php?msg=ERROR: Password does not match or empty or less than 5 digit..");
    exit();
    }
$regex='/^([a-zA-Z])+$/';
    if (!preg_match($regex,$_POST['First_Name']) || empty($_POST['First_Name']))
    { 
    die ("Field Should not be empty or enter the correct name!");
    header("Location: /virtuallab/Myregistration.php?msg=ERROR: Field is empty.....");
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
$User_Email=$_POST['User_Email'];
$md5pass = md5($_POST['Password']);

$result="insert into login set 
First_Name='$First_Name',

User_Email_Id='$User_Email',
Password='$md5pass',

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
    //header( 'Location: http://172.26.81.165/virtuallab/login.php') ;
    //exit;
    header("Location: tlogin.php?msg=Registration Successful! An activation code has been sent to your email address with an activation link...");
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
        <table width="600" border="0" height="360" align="CENTER">
            <tbody>
                <tr>
                <td height="50" colspan="2" valign="top" style="padding-left:180PX;"><h3>Registration</h3></td>
              </tr>
              <tr>
                <td width="196" height="38"><strong><font color="#000000">Name*</font></strong></td>
                <td width="394"><input name="First_Name" id="First_Name" type="text" >
                      <font color="#000000"> Ex. ram</font></td>
              </tr>
             
              <tr>
                <td height="28"><strong><font color="#000000">User Email*</font></strong></td>
                <td><input name="User_Email" id="User_Email" type="text">
                  <font color="#000000">Ex : example@yoursmail.com</font></td>
              </tr>
              <tr>
                <td height="28"><strong><font color="#000000">Password*</font></strong></td>
                <td><input name="Password" id="Password" type="password">
                      <font color="#000000">At least 5 characters in length</font> </td>
              </tr>
              <tr>
                <td height="24"><strong><font color="#000000">Retype Password*</font></strong></td>
                <td><input name="Password2" id="Password2" type="password"></td>
              </tr>
             
              
              <tr>
                <td colspan="2" valign="bottom" height="50" style="padding-left:160PX;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input name="User_Code" class="style1" size="20" type="text" id="User_Code" />                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="pngimg.php" align="center" /></td>
              </tr>
              <tr>
                <td colspan="2" height="61" style="padding-left:180PX;">
                  <input name="Submit" value="Registration" type="Submit" id="Submit" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">BACK</a><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; *&nbsp; implies fields are mandatory</td>
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
                        <li><a href="http://www.iitk.ac.in/" target="blank">Indian Institute Of Technology </a><span> Kanpur</span> </li>
                        <li><a href="http://www.iitk.ac.in/ee/" target="blank">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
                    </ul>
                </li>
                <li>
                    <h2>Live Help </h2><br />
                   <div align="center"> <ul>
                        <a href="h.php">
                        <img id="comm100_ButtonImage" src="http://chatserver.comm100.com/BBS.aspx?siteId=72715&amp;planId=886&amp;partnerId=-1" style="border:0px" alt="Live Chat Software for Website" /></a>
                    </ul></div>
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
