<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit  Registration Details</title>
<link rel="stylesheet" href="style1.css" type="text/css" />
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
    <label>TAXI UPDATE FORM</label>

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


?>

    <form method="post">

    <table align="center">
    <tr>
    <td>Registration Id:<input type="text" name="regid" placeholder="Registration Id" required /></td>
    </tr>
    <tr>
    <td>First Name:<input type="text" name="fname" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td>Last Name:<input type="text" name="lname" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td>Gender:<input type="text" name="sex" placeholder="Gender" required /></td>
    </tr>
    <tr>
    <td>Telephone Number:<input type="text" name="otelno" placeholder="Telephone Number" required /></td>
    </tr>
    <tr>
    <td>Address:<input type="text" name="oaddress" placeholder="Address" required /></td>
    </tr>
    <tr>
    <td>Nation:<input type="text" name="nation" placeholder="Nation" required /></td>
    </tr>
    <tr>
    <td>Number Plate:<input type="text" name="numplate" placeholder="Number Plate" required /></td>
    </tr>
    <tr>
    <td>Model:<input type="text" name="model" placeholder="Model" required /></td>
    </tr>
    <tr>
    <td>Registration Date:<input type="text" name="regdate" placeholder="Registration Date" required /></td>
    </tr>
    <tr>
    <td>Status:<input type="text" name="status" placeholder="Status" required /></td>
    </tr>
    
    <tr>
    <td>
    <button type="submit" name="reg-update"><strong>SAVE</strong></button></td>
    </tr>
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