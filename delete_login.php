<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Login</title>
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
    <label>LOGIN DELETION FORM</label>

<?php
require_once 'dbconnection.php';
require_once 'delete.class.php';

$owor= new deletions();
echo $owor->deleteEmployee();
echo $owor->deletePayment();
echo $owor-> deleteRegistration();
echo $owor-> deleteLogin();


?>
    <form method="post">
    <table align="center">
    <tr>
    <td>Login Id:<input type="text" name="loginid" placeholder="Login Id" required /></td>
    </tr>
    
    <tr>
    <td>
    <button type="submit" name="login-delete"><strong>DELETE</strong></button></td>
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