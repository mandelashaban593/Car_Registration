<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Registration Details</title>
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
		<li><a href="add_payments_exe.php" title="Pay">Pay</a></li>
			
		
		<li><a href="logout.php" title="Logout">Login</a></li>
			</ul>
</nav>
</div>

<div id="body">

	<div id="content1">
   <label>VIEW PAYMENT DETAILS FORM</label>

<?php
require_once 'dbconnection.php';
require 'selection.class.php';

$owor= new  selections();
echo $owor->viewPayment();


?>   
   
   
   
   
   
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