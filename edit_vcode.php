<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verification</title>
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
		<li><a href="home.php"  title=" Home">Home</a></li>
			
		
		<li><a href="logout.php" title="Logout">Logout</a></li>
		
			</ul>
</nav>
</div>

<div id="body">

	<div id="content">
    <label>PAYMENT VERIFICATION EDIT FORM</label>

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
echo $owor->verifyPayment();
echo $owor->editVerification();


?>
    <form method="post">
    
    <table align="center">
    <tr>
    <td>Payment Id:<input type="text" name="pid" placeholder="Payment Id" required /></td>
    </tr>
   <tr>
    <td> Verify:<input type="radio" name="vstatus" value="Verified"  required />
   <p>
    Cancel Verification
    :<input type="radio" name="vstatus" value="Not verified"  required />
    </td>
    </tr>
   <tr>
    <td>Verification Code:<input type="text" name="vcode" placeholder="Verification Code" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="verification-edit"><strong>EDIT</strong></button></td>
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
<?php
require_once 'inc_manipulations.php';

?>

</body>
</html>