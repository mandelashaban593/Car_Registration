
<?php
error_reporting(0);
session_start();

$username= mysql_real_escape_string($_POST['username']);
$password= mysql_real_escape_string($_POST['password']);

if($username && $password)
{
	$connect= mysql_connect("localhost","root","") or die("Db connection 	failed!");
	mysql_select_db("library") or die("Db selection failed!");
	$query=mysql_query("select * from users where username='$username' and password='$password'");
	$numrows= mysql_num_rows($query);
	
	if($numrows!==0){
		while($row= mysql_fetch_assoc($query))
		{
			$dbusername= $row['username'];
			$dbpassword= $row['password'];

		}
		if($username==$dbusername && $password==$dbpassword)
		{
			$message= "You are logged in!";
			@$_SESSION['username']==$username;
		}
		else {
			$message= "Your username or password is incorrect!";
		}
		
	}
	else{
			$message="That user doesn't exist!";
			}
}else{
		$message="Please enter a username and password";
}
if(isset($_SESSION["username"])) {
header("Location:home.php");
}


?>
