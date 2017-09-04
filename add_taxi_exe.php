<?php
error_reporting(0);
session_start();

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Car</title>
<link rel="stylesheet" href="style1.css" type="text/css" />
</head>
<body>
<center>

<div id="header">

    <div id="content">
<title>Register </title>
	 <label>AN ONLINE SYSTEM FOR CAR REGISTRATION  IN UGANDA</label>
    </div>
</div>
        <div id="maincontent">
<div id = "navigation">
<nav class="cf">
	<ul class="topmenu">
		<!--<li><a href="#" title="Home Page" class="current">Home</a></li>
		-->
		<li><a href="add_payments_exe.php" title="Logout">Pay</a></li>
		<li><a href="view_reg.php" title="Registration Details">View Registration</a></li>

		<li><a href="index.php" title=" Home">Login</a></li>
			
		
		
			</ul>
</nav>
</div>

<div id="body">

	<div id="content">
    <label>CAR REGISTRATION FORM</label>


<?php
require_once 'inc_manipulations.php';

?>
    
   
   
       <form method="post">

    <table align="center">
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
  <!--  <tr>
    <td><input type="text" name="status" placeholder="Status" required /></td>
    </tr>
   --> 
    <tr>
    <td>
    <button type="submit" name="save-reg"><strong>SAVE</strong></button></td>
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