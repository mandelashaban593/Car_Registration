<?php
require_once 'dbconnection.php';
class deletions
{
	function __construct()
	{
		$this->sql=$sql;
	}
	
	public function deleteEmployee()
	{
	if(isset($_POST['emp-delete']))
		{
	
			if(isset($_POST['fname']))
			$fname = $_POST['fname'];
			$fname =mysql_real_escape_string($fname);
	
	
	$sql = "delete from employee where fname='$fname'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record Deleted successfully...');
        window.location='delete_employee.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error Deleting record...');
        window.location='delete_employee.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}	
}
//******************************************************************************
	
	public function deletePayment()
	{
		if(isset($_POST['pay-delete']))
		{
			if(isset($_POST['pid']))
			$pid =mysql_real_escape_string($_POST['pid']);
 
			
	$sql = "Delete from payment  where pid='$pid')";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record deleted successfully...');
        window.location='delete_payments.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error deleting record...');
        window.location='delete_payments.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}
}
	
	//******************************************************************************
	public function deleteRegistration()
	{
	if(isset($_POST['reg-delete']))
		{
			if(isset($_POST['regid']))
			$regid =mysql_real_escape_string($_POST['regid']);
 
			
	$sql = "Delete from registration where regid='$regid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record Delete successfully...');
        window.location='delete_taxi.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error Deleting record...');
        window.location='delete_taxi.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}	
}
	
	//******************************************************************************
	public function deleteLogin()
	{
	if(isset($_POST['login-delete']))
		{
			if(isset($_POST['loginid']))
			$loginid =mysql_real_escape_string($_POST['loginid']);
 
			
	$sql = "Delete from payment where loginid='$loginid'";
			if (mysql_query($sql) === TRUE) {
    			?>
                <script>
		alert('Record Delete successfully...');
        window.location='delete_login.php'
        </script>
		
				<?php
                //echo "Record successfully inserted";
			} else {
    			?>
                <script>
		alert('error Deleting record...');
        window.location='delete_login.php'
        </script>
		
				<?php
				//echo "Error in record insertion: " . $conn->error;
			}

		}	
}
	
}

?>