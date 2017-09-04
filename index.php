<?php
$con=mysql_connect("localhost","root","simple100");
mysql_select_db("taxregistration",$con);

if(isset($_POST['login'])){
	if(isset($_POST['Username']))
		$Username=mysql_real_escape_string($_POST['Username']);
	if(isset($_POST['Password']))
		$Password=mysql_real_escape_string($_POST['Password']);
	
	$query=mysql_query("select * from login where Username='$Username' and Password= '$Password' limit 1");
	
	//$query=mysql_query("select * from users where username LIKE '%".$_POST['username']."%' and password LIKE '%".$_POST['password']."%' limit 1");
	
	if(mysql_num_rows($query)==1){
		$data=mysql_fetch_array($query,1);
			if($data['role']=="admin"){
	
				@$_SESSION['loginid']=$data['loginid'];
				header("location:home.php");
	
			}else {
			?>
            <script>
		alert('Please enter the correct Username and Password!');
        window.location='index.php'
        </script>
		
            <?php
				//$message="Member not registered.";
			}
		
	}else{
	?>
        <script>
		alert('Please enter the correct Username and Password!');
        window.location='index.php'
        </script>
		
    <?php
	//$message="Incorrect registration number or password!";
	}

}
?>
<?php
error_reporting(0);
session_start();

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
	<li><a href="add_taxi_exe.php" title="Register">Register</a></li>

		<li><a href="index.php" title="Login">Login</a></li>
	
</nav>
</div>

<div id="body">

	<div id="content">  
<label>LOGIN FORM</label>
    
    <form method="post">
    <table align="center">
    <tr>
    <th><label>LOGIN HERE</label>
    </th>
   
    </tr>
    <tr>
    <td>Username:<input type="text" name="Username" placeholder="Username" required /></td>
   
    </tr>
    <tr>
    <td>Password:<input type="password" name="Password" placeholder="Password" required /></td>
   </tr>
    <tr>
    <td>
    <button type="submit" name="login"><strong>LOGIN</strong></button></td>
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