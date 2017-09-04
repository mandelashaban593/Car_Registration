<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
		<li><a href="home.php" title=" Home">Home</a></li>
		<li><a href="add_employee.php" title=" Register Staff Details">Enroll Staff</a>
        <ul class="submenu">
         			<li><a href="view_employee.php" title="View Staff Details">View Staff</a></li>
					<li><a href="edit_employee.php" title="Update Staff Details">Update Staff</a></li>           			<li><a href="delete_employee.php" title="Delete Staff Details">Delete Staff</a></li>           
                    </ul>
		</li>
		<li><a href="add_taxi.php" title=" Register Taxi Details">Register Taxi</a>
			<ul class="submenu">
         			<li><a href="view_taxi.php" title="View Taxi Details">View Taxi</a></li>
					<li><a href="edit_taxi.php" title="Update Taxi Details">Update Taxi</a></li>           			<li><a href="delete_taxi.php" title="Delete Taxi Details">Delete Taxi</a></li>           
                    </ul>
		</li>
		<li><a href="add_login.php" title=" Register Login Details">Register Login</a>
			<ul class="submenu">
         			<li><a href="view_login.php" title="View Taxi Details">View Login</a></li>
					<li><a href="edit_login.php" title="Update Taxi Details">Update Login</a></li>           			<li><a href="delete_login.php" title="Delete Taxi Details">Delete Login</a></li>           
                    </ul>

        </li>
		<li><a href="add_payments.php" title=" Register Payment Details">Register Payments</a>
			<ul class="submenu">
         			<li><a href="view_payments.php" title="View Taxi Details">View Payments</a></li>
					<li><a href="edit_payments.php" title="Update Taxi Details">Update Payments</a></li>           			<li><a href="delete_payments.php" title="Delete Taxi Details">Delete Payments</a></li>           
                    </ul>

        </li>
		<li><a href="edit_role.php" title="Update Role">Change Role</a>
				<ul class="submenu">
         			<li><a href="edit_username.php" title="Update Username">Change Username</a></li>   
                    <li><a href="edit_password.php" title=" Update Password">Change Password</a></li>
                    
                    </ul>
        
		</li>
		 <li><a href="add_vcode.php" title="Verification">Verification</a>
        	<ul class="submenu">
         			<li><a href="view_verification.php" title="Verification Details">View Verification</a></li>
         			<li><a href="edit_vcode.php" title="Verification Edit">Edit Verification</a></li>
                    
                    </ul>
         </li>
                    
		<li><a href="logout.php" title="Logout">Logout</a>
		</li>
			</ul>
</nav>
</div>

<div id="body">

	<div id="content">
   
   
   <label>LOGIN SUCCESS FORM</label>

   
   
   
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