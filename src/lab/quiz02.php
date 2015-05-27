 
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
		  
		  <h1><font color="#000000">Virtual Labs -IIT Kanpur</font></h1>
			    <br><br><p><font color="#000000">Transducers and Instrumentation Virtual lab </font></p>  <?php /*?><?php
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
	  </div></div>
	</div></div>
	<div class="chromestyle" id="chromemenu">
	<div id="menu">
		<ul>
			<li><a href="use.php">Home</a></li>
			<li><a href="#" rel="dropmenu1">Aim of experiment</a></li>
			<li><a href="#" rel="dropmenu2">About experiment</a></li>
			<li><a href="#" rel="dropmenu3">Theory</a></li>
			<li><a href="#" rel="dropmenu4">Procedure</a></li>
			<li><a href="faq.php">FAQs</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="feedback.php">Feedback</a></li>
		</ul>
	</div>
	</div>
			<!--dropbox1-->
			<div id="dropmenu1" class="dropmenudiv">

				<a href="aim_of_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="aim_of_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="aim_of_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>  </div>
				<!--dropbox2-->
				<div id="dropmenu2" class="dropmenudiv">

				<a href="about_exp.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="about_exp1.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="about_exp2.php">Experiment.No-3 <br>AC and DC Bridges</a>				</div>
				<!--dropdown3-->
				<div id="dropmenu3" class="dropmenudiv">

				<a href="theory1.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="theory2.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="theory3.php">Experiment.No-3 <br>AC and DC Bridges</a>				</div>
				<!--dropdown4-->
				<div id="dropmenu4" class="dropmenudiv">

				<a href="procedure11.php">Experiment.No-1<br>Temperature Transducers</a>
				<a href="procedure12.php">Experiment.No-2<br>Spectrum Analyzer</a>
				<a href="procedure13.php">Experiment.No-3 <br>AC and DC Bridges</a>				</div>
				<script type="text/javascript">
cssdropdown.startchrome("chromemenu")
</script>

</div><?php
session_start();
if (!isset($_SESSION['user']))
{
 die ("Access Denied");
}
?> 

<?php if (isset($_SESSION['user'])) { ?>
<div id="date" align="right"><font color="#009933" style="padding-right:10px;">Logged as <?php echo $_SESSION['user']; ?></font>
   <a href="logout.php" style="padding-right:10px;">Logout</a>
    </div>
<?php } ?>  

	          <!-- end #menu -->
   
		<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
		<div class="post-bgbtm">
				<h1 class="title"><a href="#">Quiz</a></h1>
				
				<div class="entry"><font color="#000099"><b>Note-</b><b>Fill all the question</b></font>
					 <br>
   <?php
$qid = "Quiz ID-00";
?>

<title><? echo "iit kanpur"; ?></title>

<p><h3><? echo "SiteName $qid"; ?></h3></p>
<form action="resultsss.php" method="post">

<p>1.) No. of branches in bridge circuit has ?<br>
<input type="radio" name="q1" value="Two"> Two<br>
<input type="radio" name="q1" value="Four"> Four</p>
<p>2.) The best known bridge circuit is ?<br>
<input type="radio" name="q2" value="Wheatstone bridge"> Wheatstone bridge<br>
<input type="radio" name="q2" value="kelvin bridge"> kelvin bridge</p>
<p>3.) A hay bridge is ?<br>
<input type="radio" name="q3" value="AC bridge"> AC bridge<br>
<input type="radio" name="q3" value="DC bridge"> DC bridge</p>
<p>4.) Devices used to measure physical variable are called ?<br>
<input type="radio" name="q4" value="Sensors"> Sensors<br>
<input type="radio" name="q4" value="Tachometer"> Tachometer </p>
<p>5.) A device that measures a physical quantity and converts it into a signal which can be read by an observer or by an instrument<br>
<input type="radio" name="q5" value="sensors"> sensors<br>
<input type="radio" name="q5" value="actuator"> actuator</p>
<p>6.) An electronic ckt in which circuit branches are bridged by a third branch connected between the firest two branches at some intermediate point along them?<br>
<input type="radio" name="q6" value="Bridge circuit"> Bridge circuit<br>
<input type="radio" name="q6" value="Resonant circuit"> Resonant circuit</p>
<p>7.) The best known bridge circuit is <br>
<input type="radio" name="q7" value="Wein bridge"> Wein bridge<br>
<input type="radio" name="q7" value="Wheatstone bridge"> Wheatstone bridge</p>
<p>8.) A bridge circuit used for measuring unknown capacitance by balancing the load if its four arm,one of which contain the unknown capacitance?<br>
<input type="radio" name="q8" value="Wein bridge"> Wein bridge<br>
<input type="radio" name="q8" value="Wheat stone"> Wheat stone</p>
<p>9.) A device that measures a physical quantity and converts it into a signal which can be read by an observer or by an instrument<br>
<input type="radio" name="q9" value="sensors"> sensors<br>
<input type="radio" name="q9" value="actuator"> actuator</p>
<p>10.) The ability of dielectric to store electrical charge per unit voltage<br>
<input type="radio" name="q10" value="Capacitance"> Capacitance<br>
<input type="radio" name="q10" value="Resistance"> Resistance</p>
<p>11.) The ability of a conductor to produce induced voltage when the current varies?<br>
<input type="radio" name="q11" value="Inductance"> Inductance<br>
<input type="radio" name="q11" value="Capacitance"> Capacitance</p>
<p>12.) The ratio of reactance to resistance frequency dependent?<br>
<input type="radio" name="q12" value="Dissipation factor"> Dissipation factor<br>
<input type="radio" name="q12" value="Quality factor of bridge"> Quality factor of bridge</p>
<p>13.) A ............ measure resistance indirectly by comparision with a similar resistance?<br>
<input type="radio" name="q13" value="Bridge"> Bridge<br>
<input type="radio" name="q13" value="Sensor"> Sensor</p>
<p>14.) The ratio of the maximum expected change in the output voltage to the excitation voltage?<br>
<input type="radio" name="q14" value="The sensitivity of bridge"> The sensitivity of bridge<br>
<input type="radio" name="q14" value="Coercivity"> Coercivity</p>
<p>15.) The bridge which is most suited for temperature  sensing using RTDs or thermistors<br>
<input type="radio" name="q15" value="The single element varrying bridge"> The single element varrying bridge<br>
<input type="radio" name="q15" value="The three element varrying bridge"> The three element varrying bridge</p>
<p>16.) The output of a single element varying bridge may be amplified by a ......... OP-amp connected in the inverting mode.<br>
<input type="radio" name="q16" value="Single precision"> Single precision<br>
<input type="radio" name="q16" value="double precision"> double precision</p>
<p>17.) The transformer is built with the coil of wire wound arround the common core each coil is sometimes also called a?<br>
<input type="radio" name="q17" value="Winding"> Winding<br>
<input type="radio" name="q17" value="Primary Winding"> Primary Winding</p>
<p>18.) A ......... has the property of being able to conduct electrical current in the direction through itself,but not in the opposite direction?<br>
<input type="radio" name="q18" value="A semiconductor diode"> A semiconductor diode<br>
<input type="radio" name="q18" value="Transistor"> Transistor</p>
<p>19.) Work done per unit time <br>
<input type="radio" name="q19" value="Power"> Power<br>
<input type="radio" name="q19" value="Energy"> Energy</p>
<p>20.) Current direction indicate the direction of flow of?<br>
<input type="radio" name="q20" value="Negative charge"> Negative charge<br>
<input type="radio" name="q20" value="Positive charge"> Positive charge</p>
<p><input type="submit" name="submit" value="Submit Quiz"></p>
<input type="hidden" name="qp" value="quiz00.php">
</form></div>
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
					<p>Physical distances and the lack of resources make us unable to perform experiments, especially when they involve sophisticated instruments. Also, good teachers are always a scarce resource.&nbsp; <a href="contactp.php"><font color="#0000FF"><b>Project Team</b></font></a></p>
				</li>
				<li>
					<h2>Experiments</h2>
					<ul>
					<li><a href="Simulatedpracticles.php"> Simulated Experiments </a><span> IIT Kanpur </span> </li>
						<li><a href="Realtimepracticles.php"> Realtime Experiments </a><span> IIT Kanpur </span> </li>
							</ul>
				</li>
				<li>
					<h2>Links</h2>
					<ul>
						<li><a href="http://www.iitk.ac.in/">Indian Institute Of Technology </a><span> Kanpur</span> </li>
						<li><a href="http://www.iitk.ac.in/ee/">Department of Electrical Engineering </a><span>IIT Kanpur</span> </li>
					</ul>
				</li>
				<li>
					<h2>Setup</h2>
					<ul>
						<li><a href="LVRTE90min.exe">LabVIEW2009 Runtime Engine (32-bit)</a><span>Download</span></li>
						<li><a href="LVRTE90min64.exe">LabVIEW2009 Runtime Engine(64-bit)</a><span>Download</span></li>
						<li><a href="LVRTE90std.exe">LabVIEW2009 Runtime Engine (Full)</a><span>Download</span></li>
						<!--<li><a href="IE8-WindowsXP-x86-ENU.exe">Explorer Setup</a>&nbsp;<span>Explorer Setup</span></li>
						<li><a href="Firefox Setup 3.6.10.exe">Mozila Firefox Setup</a>&nbsp;<span>Mozila Firefox Setup</span></li>-->
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
		<p> Transducer &amp; Instrumentation <a href="#">Virtual Labs - IIT Kanpur </a></p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>


 
 
