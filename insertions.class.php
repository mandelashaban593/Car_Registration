<?php
include_once 'dbconnection.php';
//$con = new manipulations();

class insertions
{
	function __construct()
	{
		$this->sql=$sql;
	}
	
	public function insertEmployee()
	{
		if(isset($_POST['emp-save']))
		{
			if(isset($_POST['eid']))
			$eid = $_POST['eid'];
			$eid =mysql_real_escape_string($eid);
	
	
			if(isset($_POST['fname']))
			$fname = $_POST['fname'];
			$fname=mysql_real_escape_string($fname);
	
			if(isset($_POST['lname']))
			$lname = $_POST['lname'];
			$lname =mysql_real_escape_string($lname);
	
			if(isset($_POST['sex']))
			$sex = $_POST['sex'];
			$sex = mysql_real_escape_string($sex);
	
			if(isset($_POST['age']))
			$age = $_POST['age'];
			$age = mysql_real_escape_string($age);
	
			if(isset($_POST['telno']))
			$telno = $_POST['telno'];
			$telno =mysql_real_escape_string($telno);
	
			if(isset($_POST['address']))
			$address = $_POST['address'];
			$address =mysql_real_escape_string($address);
	
			if(isset($_POST['nation']))
			$nation = $_POST['nation'];
			$nation = mysql_real_escape_string($nation);

	$sql = "INSERT  INTO employee  VALUES('$eid','$fname','$lname','$sex','$age','$telno','$address','$nation')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record inserted successfully...');
        window.location='add_employee.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error inserting record...');
        window.location='add_employee.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
	}	

//******************************************************************************
	
	public function insertTaxi()
	{
		if(isset($_POST['reg-save']))
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

			
	$sql = "INSERT  INTO registration  VALUES('$regid','$fname','$lname','$sex','$otelno','$oaddress','$nation','$numplate','$model','$regdate','$status')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record inserted successfully...');
        window.location='add_taxi.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error inserting record...');
        window.location='add_taxi.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
	}	
	
//******************************************************************************
public function registerTaxi()
	{
		if(isset($_POST['save-reg']))
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

			
	$sql = "INSERT  INTO registration  VALUES('$regid','$fname','$lname','$sex','$otelno','$oaddress','$nation','$numplate','$model','$regdate','$status')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record inserted successfully...');
        window.location='add_taxi_exe.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error inserting record...');
        window.location='add_taxi_exe.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
	}	
	
//******************************************************************************
	public function insertPayments()
	{
		if(isset($_POST['pay-save']))
		{
			if(isset($_POST['pid']))
			$pid =mysql_real_escape_string($_POST['pid']);
 
			if(isset($_POST['regid']))
			$regid =mysql_real_escape_string($_POST['regid']);
	 		
			if(isset($_POST['initialpay']))
			$initialpay =mysql_real_escape_string($_POST['initialpay']);
				
			if(isset($_POST['finalpay']))
			$finalpay = mysql_real_escape_string($_POST['finalpay']);
				
			
			if(isset($_POST['vstatus']))
			$vstatus = mysql_real_escape_string($_POST['vstatus']);

			if(isset($_POST['vcode']))
			$vcode = mysql_real_escape_string($_POST['vcode']);

	$sql = "INSERT  INTO payment  VALUES('$pid','$regid','$initialpay','$finalpay','$vstatus','$vcode')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record inserted successfully...');
        window.location='add_payments.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error inserting record...');
        window.location='add_payments.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
	}	
	
//******************************************************************************
//******************************************************************************
	public function insertPayment()
	{
		if(isset($_POST['save-pay']))
		{
			if(isset($_POST['pid']))
			$pid =mysql_real_escape_string($_POST['pid']);
 
			if(isset($_POST['regid']))
			$regid =mysql_real_escape_string($_POST['regid']);
	 		
			if(isset($_POST['initialpay']))
			$initialpay =mysql_real_escape_string($_POST['initialpay']);
				
			if(isset($_POST['finalpay']))
			$finalpay = mysql_real_escape_string($_POST['finalpay']);
				
			
			if(isset($_POST['vstatus']))
			$vstatus = mysql_real_escape_string($_POST['vstatus']);

			if(isset($_POST['vcode']))
			$vcode = mysql_real_escape_string($_POST['vcode']);

	$sql = "INSERT  INTO payment  VALUES('$pid','$regid','$initialpay','$finalpay','$vstatus','$vcode')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record inserted successfully...');
        window.location='add_payments_exe.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error inserting record...');
        window.location='add_payments_exe.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
	}	
	
//******************************************************************************
	public function insertLogin()
	{
		if(isset($_POST['login-save']))
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
				
			
	$sql = "INSERT  INTO login  VALUES('$loginid','$eid','$role','$Username','$Password')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record inserted successfully...');
        window.location='add_login.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error inserting record...');
        window.location='add_login.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
	}	
//******************************************************************************
	
	public function select()
	{
		//$res=mysql_query("SELECT * FROM users");
		//return $res;
	}
}

// data insert code ends here.

?>
