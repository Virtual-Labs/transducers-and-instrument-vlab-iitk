
<?php
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
<?php 
include ('connect.php');
if(isset($_POST['Submit']) =="Login")
{
$User_Email = mysql_real_escape_string($_POST['User_Email']);
$Password = md5($_POST['Password']);
$sql = "SELECT * FROM login WHERE 
            User_Email_ID = '$User_Email' AND 
            Password = '$Password' AND User_Activation_Status='1'"; 
			
$result = mysql_query($sql) or die (mysql_error()); 
$num = mysql_num_rows($result);

    if ( $num != 0 ) { 

        // A matching row was found - the user is authenticated. 
       session_start(); 
	   $sql_ft = mysql_fetch_row($result);
		// this sets variables in the session 
		$_SESSION['user']= $User_Email;  
		if($User_Email=$sql_ft['User_Email_ID'])
		header('Location: /New_Project/use.php');
				//echo "Logged in...";
		exit();
    } 
header("Location: login.php?msg=Invalid Login or please firstly you have to verification on email.");
//echo "Error:";
exit();		
}
?>

<link href="styles.css" rel="stylesheet" type="text/css">

<?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>


<title>Login</title><h1>
  <p><b><font color="#006666"><div align="center"><b><font color="#006666">Welcome to Virtual Labs-IIT Kanpur </font></b></div>
  </font></b></p>
</h1><h4><font color="#006666"><div align="center"><font color="#006666">Transducer &amp; Instrumentation Virtual Laboratory </font></div>
</font></h4>
<table width="40%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td bgcolor="#d5e8f9" class="mnuheader" >
<div align="center"><font size="5"><strong>Login 
        Members</strong></font></div></td>
  </tr>
  <tr> 
    <td bgcolor="#e5ecf9" class="mnubody"><form name="form1" method="post" action="">
        <p>&nbsp;</p>
        <p align="center">Your Email 
          <input name="User_Email" type="text" id="User_Email">
        </p>
        <p align="center"> Password: 
          <input name="Password" type="password" id="Password">
        </p>
        <p align="center"> 
          <input type="submit" name="Submit" value="Login">
        </p>
        <p align="center"><a href="Myregistration.php"> New User Register Here </a> | <a href="forgot.php">Forgot Password</a></p>
      </form></td>
  </tr>
</table>
	