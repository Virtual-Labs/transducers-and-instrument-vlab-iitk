<?php 
session_start();
include ('connect.php');
if (!isset($_SESSION['user']))
{
header("Location: login.php");
 }
if (isset($_POST['Submit'])=='Change')
{
$rsPwd = mysql_query("select Password from login where User_Email_ID='$_SESSION[user]'") or die(mysql_error());
list ($oldpwd) = mysql_fetch_row($rsPwd);

if ($oldpwd == md5($_POST['oldpwd']))
 {
  $newpasswd = md5($_POST['newpwd']);
  
  mysql_query("Update login
  				SET Password = '$newpasswd'
				WHERE User_Email_ID = '$_SESSION[user]'
				") or die(mysql_error());
  header("Location: settings.php?msg=Password updated...");				
  } else 
  { header("Location: settings.php?msg=ERROR: Password does not match..."); }
}

?>
<h1>Settings</h1>
<p> 
  <?php if (isset($_GET['msg'])) { echo "<div class=\"msg\"> $_GET[msg] </div>"; } ?>
</p>
<h2>Change Password</h2>
<form action="settings.php" method="post" name="form3" id="form3">
  <p>Old Password 
    <input name="oldpwd" type="password" id="oldpwd">
  </p>
  <p>New Password: 
    <input name="newpwd" type="password" id="newpwd">
  </p>
  <p> 
    <input name="Submit" type="submit" id="Submit" value="Change">
  </p>
</form>
