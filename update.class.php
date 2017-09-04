<?php
class updates
{
	function __construct()
	{
	}
	
	public function updateEmployee()
	{
	if(isset($_POST['emp-update']))
		{
			if(isset($_POST['eid']))
			$eid = $_POST['eid'];
			mysql_real_escape_string($eid);
	
	
			if(isset($_POST['fname']))
			$fname = $_POST['fname'];
			mysql_real_escape_string($fname);
	
			if(isset($_POST['lname']))
			$lname = $_POST['lname'];
			mysql_real_escape_string($lname);
	
			if(isset($_POST['sex']))
			$sex = $_POST['sex'];
			mysql_real_escape_string($sex);
	
			if(isset($_POST['age']))
			$age = $_POST['age'];
			mysql_real_escape_string($age);
	
			if(isset($_POST['telno']))
			$telno = $_POST['telno'];
			mysql_real_escape_string($telno);
	
			if(isset($_POST['address']))
			$address = $_POST['address'];
			mysql_real_escape_string($address);
	
			if(isset($_POST['nation']))
			$nation = $_POST['nation'];
			mysql_real_escape_string($nation);

	$sql = "Update employee  set fname='$fname',lname='$lname',sex='$sex',age='$age',telno='$telno',address='$address',nation='$nation' where eid='$eid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record Updated successfully...');
        window.location='edit_employee.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error updating record...');
        window.location='edit_employee.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}	
}
//******************************************************************************
	
	public function updatePayment()
	{
		if(isset($_POST['pay-update']))
		{
			if(isset($_POST['pid']))
			$pid =mysql_real_escape_string($_POST['pid']);
 
			if(isset($_POST['regid']))
			$regid =mysql_real_escape_string($_POST['regid']);
	 		
			if(isset($_POST['initialpay']))
			$initialpay =mysql_real_escape_string($_POST['initialpay']);
				
			if(isset($_POST['finalpay']))
			$finalpay = mysql_real_escape_string($_POST['finalpay']);
				
			
					
	$sql = "Update payment  set regid='$regid', initialpay='$initialpay',finalpay='$finalpay' where pid='$pid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record updated successfully...');
        window.location='edit_payments.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('Error in updating record...');
        window.location='edit_payments.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
			
	
	//******************************************************************************
	public function updateRegistration()
	{
	if(isset($_POST['reg-update']))
		{
			if(isset($_POST['regid']))
			$regid =mysql_real_escape_string($_POST['regid']);
 
			if(isset($_POST['fname']))
			$fname =mysql_real_escape_string($_POST['fname']);
	 		
			if(isset($_POST['lname']))
			$lname =mysql_real_escape_string($_POST['lname']);
				
			if(isset($_POST['sex']))
			$sex = mysql_real_escape_string($_POST['sex']);
				
			if(isset($_POST['otelno']))
			$otelno = mysql_real_escape_string($_POST['otelno']);
	 
			
			if(isset($_POST['oaddress']))
			$oaddress = mysql_real_escape_string($_POST['oaddress']);
				
			if(isset($_POST['nation']))
			$nation = mysql_real_escape_string($_POST['nation']);
			
			if(isset($_POST['numplate']))
			$numplate = mysql_real_escape_string($_POST['numplate']);
			
			if(isset($_POST['model']))
			$model = mysql_real_escape_string($_POST['model']);
			
			if(isset($_POST['regdate']))
			$regdate = mysql_real_escape_string($_POST['regdate']);
			
			if(isset($_POST['status']))
			$status = mysql_real_escape_string($_POST['status']);
			
	$sql = "Update registration  set fname='$fname',lname='$lname',sex='$sex',otelno='$otelno',oaddress='$oaddress','nation=$nation',numplate='$numplate',model='$model',regdate='$regdate',status='$status' where regid='$regid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record update successfully...');
        window.location='edit_taxi.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error updating record...');
        window.location='edit_taxi.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}	
}
	
	//******************************************************************************
	public function updateLogin()
	{
		if(isset($_POST['login-update']))
		{
			if(isset($_POST['loginid']))
			$loginid =mysql_real_escape_string($_POST['loginid']);
 
 			if(isset($_POST['eid']))
			$eid =mysql_real_escape_string($_POST['eid']);
 
			if(isset($_POST['role']))
			$role =mysql_real_escape_string($_POST['role']);
	 		
			if(isset($_POST['Username']))
			$Username =mysql_real_escape_string($_POST['Username']);
	 		
			if(isset($_POST['Password']))
			$Password =mysql_real_escape_string($_POST['Password']);
				
			
	$sql = "Update login  set eid='$eid', role='$role',username='$Username',Password='$Password' where loginid='$loginid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record updated successfully...');
        window.location='edit_login.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error updating record...');
        window.location='edit_login.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
//******************************************************************************

	public function updatePassword()
	{
		if(isset($_POST['password-update']))
		{
			if(isset($_POST['loginid']))
			$loginid =mysql_real_escape_string($_POST['loginid']);
 
			
			if(isset($_POST['Password']))
			$Password =mysql_real_escape_string($_POST['Password']);
				
			
	$sql = "Update login  set  Password='$Password' where loginid='$loginid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record updated successfully...');
        window.location='edit_password.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error updating record...');
        window.location='edit_password.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
//******************************************************************************
	public function updateusername()
	{
		if(isset($_POST['username-update']))
		{
			if(isset($_POST['loginid']))
			$loginid =mysql_real_escape_string($_POST['loginid']);
 
 			if(isset($_POST['Username']))
			$Username =mysql_real_escape_string($_POST['Username']);
	 		
			
	$sql = "Update login  set  Username='$Username' where loginid='$loginid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record updated successfully...');
        window.location='edit_username.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error updating record...');
        window.location='edit_username.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
//******************************************************************************
	public function updaterole()
	{
		if(isset($_POST['role-update']))
		{
			if(isset($_POST['loginid']))
			$loginid =mysql_real_escape_string($_POST['loginid']);
 
 			if(isset($_POST['role']))
			$role =mysql_real_escape_string($_POST['role']);
	 		
			
	$sql = "Update login  set  role='$role' where loginid='$loginid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record updated successfully...');
        window.location='edit_role.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error updating record...');
        window.location='edit_role.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
//******************************************************************************
		public function verifyPayment()
	{
		if(isset($_POST['pay-verify']))
		{
			if(isset($_POST['pid']))
			$pid =mysql_real_escape_string($_POST['pid']);
 
			if(isset($_POST['vstatus']))
			$vstatus = mysql_real_escape_string($_POST['vstatus']);

			if(isset($_POST['vcode']))
			$vcode = mysql_real_escape_string($_POST['vcode']);
				
			
	$sql = "Update payment  set  vstatus='$vstatus', vcode='$vcode' where pid='$pid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Process was successful...');
        window.location='add_vcode.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('Process was not successful...');
        window.location='add_vcode.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
//******************************************************************************
			
		public function editVerification()
	{
		if(isset($_POST['verification-edit']))
		{
			if(isset($_POST['pid']))
			$pid =mysql_real_escape_string($_POST['pid']);
 
			if(isset($_POST['vstatus']))
			$vstatus = mysql_real_escape_string($_POST['vstatus']);

			if(isset($_POST['vcode']))
			$vcode = mysql_real_escape_string($_POST['vcode']);
				
			
	$sql = "Update payment  set  vstatus='$vstatus', vcode='$vcode' where pid='$pid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Process was successful...');
        window.location='edit_vcode.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('Process was not successful...');
        window.location='edit_vcode.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
			
	
	//*******************************	
	//******************************************************************************
}

?>