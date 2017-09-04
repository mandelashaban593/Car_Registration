<?php
error_reporting(0);
session_start();

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register Staff</title>
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
    <label>STAFF ENROLLMENT FORM</label>
<?php
require_once 'inc_manipulations.php';

?>
    <form method="post">
    

    <table align="center">
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
    <td>Age:<input type="text" name="age" placeholder="Age" required /></td>
    </tr>
    <tr>
    <td>Telephone Number:<input type="text" name="telno" placeholder="Telephone Number" required /></td>
    </tr>
    <tr>
    <td>Address:<input type="text" name="address" placeholder="Address" required /></td>
    </tr>
    <tr>
    <td>Nation:<input type="text" name="nation" placeholder="Nation" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="emp-save"><strong>SAVE</strong></button></td>
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