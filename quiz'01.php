 
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
.style3 {color: #000000}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
		  <div align="center" class="style2"></div>
		  <h1><font color="#000000">Virtual Lab - IIT Kanpur </font></h1>
			    <p>Transducer &amp; Instrumentation lab </p><?php
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
?>
	  </div></div>
	</div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
			<li><a href="use.php">Home</a></li>
			<li><a href="#" rel="dropmenu1">Aim of experiment</a></li>
			<li><a href="#" rel="dropmenu2">About experiment</a></li>
			<li><a href="#" rel="dropmenu3">Experiments</a></li>
			<li><a href="#" rel="dropmenu4">Quiz</a></li>
			<li><a href="#">FAQs</a></li>
            <li><a href="#">References</a></li>
            <li><a href="#">Feedback</a></li>
		</ul>
	</div>
	</div>
			<!--dropbox1-->
			<div id="dropmenu1" class="dropmenudiv">

				<a href="aim_of_exp.php">Experiment No 1</a>
				<a href="#">Experiment No 2</a>
				<a href="#">Experiment No 3</a>
  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment No 1</a>
				<a href="#">Experiment No 2</a>
				<a href="#">Experiment No 3</a>
				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="http://pkk107:50001/thermimagiii.html">Experiment No 1</a>
				<a href="http://pkk107:50001/amm.html">Experiment No 2</a>
				<a href="http://pkk107:50001/bridge.html">Experiment No 3</a>
				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="quiz00.php">Experiment No 1</a>
				<a href="quiz01.php">Experiment No 2</a>
				<a href="quiz02.php">Experiment No 3</a>
				</div>	
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>

</div>

<?php 
 // Connects to your Database 
 mysql_connect("localhost", "root", "") or die(mysql_error()); 
 mysql_select_db("my_db") or die(mysql_error()); 
 //checks cookies to make sure they are logged in 
 if(isset($_COOKIE['ID_my_site'])) 
 { 
 	$username = $_COOKIE['ID_my_site']; 
 	$pass = $_COOKIE['Key_my_site']; 
 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 
 	while($info = mysql_fetch_array( $check )) 	 
 		{ 
 
 //if the cookie has the wrong password, they are taken to the login page 
 		if ($pass != $info['password']) 
 			{ 			header("Location: lo.php"); 
 			} 
 
 //otherwise they are shown the admin area	 
 	else 
 			{ 
 			 //echo "Admin Area<p>"; 
// echo "<a href=#>Your Content<p></a>"; 
 echo " <font color=#66cc00>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Welcome '$username' </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=logout.php>     Logout </a> <br>"; 
 			} 
 		} 
 		} 
 else 
 
 //if the cookie does not exist, they are taken to the login screen 
 {			 
 header("Location: lo.php"); 
 } 
 ?> 
		
	          <!-- end #menu -->
   
		<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title"><a href="#">Quiz</a></h1>
				
				<div class="entry">
					 <br>
   <?php
$qid = "Quiz ID-00";
?>

<title><? echo "iit kanpur"; ?></title>

<p><h3><? echo "SiteName $qid"; ?></h3></p>
<form action="results.php" method="post">

<p>11.) A terminal or pin at which you can measure or generate an analog or digital signal?<br>
<input type="radio" name="q11" value="Physical channel"> Physical channel<br>
<input type="radio" name="q11" value="Virtual channel"> Virtual channel</p>
<p>12.) Labview uses a-<br>
<input type="radio" name="q12" value="Graphical programming language"> Graphical programming language<br>
<input type="radio" name="q12" value="Virtual programming language"> Virtual programming language</p>
<p>13.) The process of conversion of the samples obtained from physical condition in to digital value that can be readable by a computer for manipulation?<br>
<input type="radio" name="q13" value="Data acquisition"> Data acquisition<br>
<input type="radio" name="q13" value="Data collection"> Data collection</p>
<p>14.) An interface b/w the signal and pc?<br>
<input type="radio" name="q14" value="DAQ hardware"> DAQ hardware<br>
<input type="radio" name="q14" value="DAQ software"> DAQ software </p>
<p>15.) The data acquisition palette containing all the VIS necessary to perform analog i/o,digital i/o and counter timer operation<br>
<input type="radio" name="q15" value="The DAQmx"> The DAQmx<br>
<input type="radio" name="q15" value="Vision assistant"> Vision assistant</p>
<p>16.) A sensor of mechanical motion?<br>
<input type="radio" name="q16" value="Encoder"> Encoder<br>
<input type="radio" name="q16" value="Decoder"> Decoder</p>
<p>17.) Temperature sensing ckts are also called? <br>
<input type="radio" name="q17" value="Temperature sensors"> Temperature sensors<br>
<input type="radio" name="q17" value="Actuators"> Actuators</p>
<p>18.)Device which having output signals which repeat over the range of motion? <br>
<input type="radio" name="q18" value="Incremental encoders"> Incremental encoders<br>
<input type="radio" name="q18" value="Decremental encoders"> Decremental encoders</p>
<p>19.)Device which analyse a variable resistor to convert an angle or displacement to a resistance/voltage? <br>
<input type="radio" name="q19" value="Pontentiometers"> Pontentiometers<br>
<input type="radio" name="q19" value="Stachiometers"> Stachiometers</p>
<p>20.)The computer receive raw data through? <br>
<input type="radio" name="q20" value="DAQ device"> DAQ device<br>
<input type="radio" name="q20" value="Sensor"> Sensor</p>


<p><input type="submit" name="submit" value="Submit Quiz"></p>
<input type="hidden" name="qp" value="quiz'01.php">
</form> </div>
			</div>
			</div>
			</div>
			<!--<div class="post">
			<div class="post-bgtop">
	<div class="post-bgbtm">
				
				
				<div class="entry">
					<p></div>

			</div>
			</div>
			</div>
			<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
				
							<div class="entry">
					<p></div>
			</div>
			</div>
			</div>-->
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>About Virtual labs</h2>
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.</p>
				</li>
				<li>
					<h2>Experiment Name</h2>
					<ul>
						<li>Temperature Sensor </a><span>Virtual Lab </span></li>
						<li>Acoustic pressure and vibration sensors<span>Virtual Lab</span></li>
						<li>Ac and dc bridges</a><span>Virtual  Lab </span></li>
					</ul>
				</li>
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="LVRTE90min.exe">Download labview runtime engine to view program</a><span>labview</span> </li>
						<li><a href="#">IIT Kanpur</a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">December 2009</a>&nbsp;(29)<span>December 2009</span></li>
						<li><a href="#">November 2009</a>&nbsp;(30)<span>November 2009</span></li>
						<li><a href="#">October 2009</a>&nbsp;(31)<span>October 2009</span></li>
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
		<p> Transducer &amp; Instrumentation labVirtual Labs - IIT Kanpur </p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>


 
 
