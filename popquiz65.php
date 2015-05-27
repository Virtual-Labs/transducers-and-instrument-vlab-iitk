
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
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p><?php /*?><?php
$today = date("l F d, Y");
print("$today");
if($today == "Sunday") 
{
$bgcolor = "#FEF0C5";
}
elseif($today == "Monday")
{
$bgcolor = "#FFFFFF";
} 
elseif($today == "Tuesday") 
{
$bgcolor = "#FBFFC4";
} 
elseif($today == "Wednesday")
{
$bgcolor = "#FFE0DD";
} 
elseif($today == "Thursday")
{
$bgcolor = "#E6EDFF";
} 
elseif($today == "Friday") 
{
$bgcolor = "#E9FFE6";
} 
else 
{
// Since it is not any of the days above it must be Saturday
$bgcolor = "#F0F4F1";
}
print("<body bgcolor=\"$bgcolor\">\n"); 
?><?php */?>
      </div>
  </div>
</div></div>
</div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
		      <li><a href="use.php" style="background-image:url(images/images1.jpg)">&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;HOME</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="experiment.php" style="background-image:url(images/images1.jpg)"><strong>EXPERIMENTS</strong></a></li>
		      <li><a href="contactp.php" style="background-image:url(images/images1.jpg)"> &nbsp;&nbsp;&nbsp;<strong>PEOPLE&nbsp;&nbsp;&nbsp;&nbsp;</strong>&nbsp;</a></li>
		      <li><a href="faq.php" style="background-image:url(images/images1.jpg)"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQs&nbsp;&nbsp;</strong>&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
		      <li><a href="contact.php" style="background-image:url(images/images1.jpg)"><strong>CONTACT US</strong></a></li>
		      <li><a href="feedback.php" style="background-image:url(images/images1.jpg)">&nbsp;<strong>FEEDBACK</strong>&nbsp;&nbsp;&nbsp;</a></li>
<li><a href="http://vlab.co.in" style="background-image:url(images/images1.jpg)" target="_blank" >  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			    <strong> VLab</strong> &nbsp;&nbsp;&nbsp;&nbsp; </a></li>   
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
				
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="about_exp3.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="about_exp4.php">Experiment.No-5 <br>Rotameter</a>
				<a href="about_exp5.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="theory4.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="theory5.php">Experiment.No-5 <br>Rotameter</a>
				<a href="theory6.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>
				<a href="procedure14.php">Experiment.No-4 <br>Lissageous Patterns</a>
				<a href="procedure15.php">Experiment.No-5 <br>Rotameter</a>
				<a href="procedure16.php">Experiment.No-6 <br>Strain Gauge</a>
				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>


<?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
    <div align="right"><font color="#009933">Logged as <?php echo $_SESSION['user']; ?> |  </font>
  | <a href="logout.php">                           Logout</a> 
  </p>
    </div>
    
<span class="style4"></span>
<!-- end #menu -->
	          <span class="style4"></span>
   
		<div id="page"><span class="style4"></span>
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title"><html>

<head>
<title>JavaScriptKit.com Multiple Choice Quiz Script</title>

<style>
.qheader{
font:bold 14px Arial;
}

.qselections{
font:normal 13px Arial;
}
</style>

<script src="quizconfig3.js">
</script>

<script>

/***********************************************
* JavaScriptKit.com Multiple Choice Quiz Script (http://www.javascriptkit.com)
* Copyright 2003 JavaScript Kit- http://www.javascriptkit.com
* This notice and footnote must stay intact for use
* Visit JavaScript Kit (http://www.javascriptkit.com/) for full source code
***********************************************/

var actualchoices=new Array()
document.cookie="ready=yes"
</script>



<body bgcolor="#FFFFFF">

<!--Comments on configuring quiz script-->
<!--Change the questions below any way you want, but make note of the following:-->
<!--1) Perserve the <FORM> tags -->
<!--2a) Inside each radio button, use the VALUE attribute to denote each question's choices: "a", "b", "c" etc.-->
<!--2b) Inside each radio button, use the NAME attribute to denote which question the button belongs to ("question1", "question2" etc-->
<!--3) Script supports unlmited # of questions. Be sure to edit .js file to enter corresponding solutions-->

<p align="center">

<form method="POST" name="myquiz">

<font face="Arial"><big><big>Quiz</big></big></font></p>

<div class="qheader">

1)No. of branches a bridge circuit has ?</div>
<div class="qselections">
<input type="radio" value="a" name="question1">a) Two<br>
<input type="radio" value="b" name="question1">b) Four<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
2) The best known bridge circuit is ?</div>

<div class="qselections">
<input type="radio" value="a" name="question2">a) Wheatstone bridge<br>
<input type="radio" value="b" name="question2">b) kelvin bridge<br>



<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
3) A hay bridge is ?</div>
<div class="qselections">

<input type="radio" value="a" name="question3">a) AC bridge<br>
<input type="radio" value="b" name="question3">b) DC bridge<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
4) Devices used to measure physical variable are called ?</div>
<div class="qselections">
<input type="radio" value="a" name="question4">a) Sensors<br>

<input type="radio" value="b" name="question4">b) Tachometer<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
5) A device that measures a physical quantity and converts it into a signal which can be read by an observer or by an instrument ?</div>
<div class="qselections">
<input type="radio" value="a" name="question5">a) sensors<br>
<input type="radio" value="b" name="question5">b) actuator<br>

<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
6) An electronic ckt in which circuit branches are bridged by a third branch connected between the firest two branches at some intermediate point along them ?</div>
<div class="qselections">
<input type="radio" value="a" name="question6">a) Bridge circuit <br>
<input type="radio" value="b" name="question6">b) Resonant circuit<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
7) The best known bridge circuit is ?</div>
<div class="qselections">
<input type="radio" value="a" name="question7">a) Wein bridge<br>
<input type="radio" value="b" name="question7">b) Wheatstone bridge<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->

</div>

<br>

<div class="qheader">
8)  A bridge circuit used for measuring unknown capacitance by balancing the load if its four arm,one of which contain the unknown capacitance ?</div>
<div class="qselections">
<input type="radio" value="a" name="question8">a) Wein bridge<br>

<input type="radio" value="b" name="question8">b) Wheat stone<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->

</div>

<br>

<div class="qheader">
9) A device that measures a physical quantity and converts it into a signal which can be read by an observer or by an instrument ?</div>
<div class="qselections">
<input type="radio" value="a" name="question9">a) sensors<br>
<input type="radio" value="b" name="question9">b) actuator<br>
<!--<input type="radio" value="c" name="question1">c) A jungle refers to the thickest area of a rain forest<br>
<input type="radio" value="d" name="question1">d) A jungle and a rain forest each contain their own group of distinct plants and animals.<br>-->
</div>

<br>

<div class="qheader">
10) The ability of dielectric to store electrical charge per unit voltage ?</div>
<div class="qselections">
<input type="radio" value="a" name="question10">a) Capacitance<br>
<input type="radio" value="b" name="question10">b) Resistance<br>
<!--<input type="radio" value="c" name="question10">c) Europe<br>-->
</div>

</form>

<form>
<div align="center">
<input type="button" value="Grade Me!" name="B1" onClick="gradeit()"> <input type="button" value="Reset" name="B2" onClick="document.myquiz.reset()"></div>
</form>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

			  </div>
			</div>
			</div>
			<div class="post"><div class="post-bgtop"><div class="post-bgbtm"><div class="entry">
			  
				</div>
			</div>
			</div>
			</div>
		<div style="clear: both;"></div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.</p>
				</li>
				
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Live Help</h2>
					<ul>
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
