<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Username</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">

    <div id="content">
	 <label>AN ONLINE SYSTEM FOR CAR REGISTRATION  IN UGANDA</label>
    </div>
</div>
        <div id="maincontent">
<div id = "navigation">
<nav class="cf">
	<ul class="topmenu">
		<!--<li><a href="#" title="Home Page" class="current">Home</a></li>
		-->
		<li><a href="home.php" href="home.php" title=" Home">Home</a></li>
			
		
		<li><a href="logout.php" title="Logout">Logout</a></li>
		
			</ul>
</nav>
</div>
<div id="body">

	<div id="content">
    <label>USERNAME UPDATE FORM</label>

<?php
require_once 'dbconnection.php';
require 'update.class.php';

$owor= new updates();
echo $owor->updateEmployee();
echo $owor->updatePayment();
echo $owor-> updateRegistration();
echo $owor-> updateLogin();
echo $owor-> updatePassword();
echo $owor->updateusername();
echo $owor->updaterole();


?>    <form method="post">

    <table align="center">
    <tr>
    <td>Login Id:<input type="text" name="loginid" placeholder="Login Id" required /></td>
    </tr>
   <tr>
    <td>Username:<input type="text" name="Username" placeholder="Username" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="username-update"><strong>UPDATE</strong></button>  
</td>
    </tr>
  <tr>
    <td>
   </td>
    </tr>
   
    </table>
    </form>
   
   
   
   
   
   
    </div>
</div>

<div id="footer">
	<div id="content">
    <hr /><br/>
    <label>Copyright ©  2015 Kampala City Council (KCCA) All rights Reserved. Designed by KAMUKAMA ISAAC</label>
    </div>
</div>

</center>


</body>
</html>