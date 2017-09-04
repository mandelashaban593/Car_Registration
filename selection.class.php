<?php
require 'dbconnection.php';

class selections
{
	function __construct()
		{
		$this->sql=$sql;
		}
	
	public function selectEmployee()
	{
		$sql="SELECT eid, fname, lname, sex, age, telno, address, nation FROM employee";
		mysql_select_db('taxregistration');
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='1000' align='' bgcolor=''><tr> <th>Employee Id</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Age</th><th>Contact</th><th>Address</th><th>Nation</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 8 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
//******************************************************************************
	
	public function selectPayment()
	{
		$sql="SELECT pid, fname, lname, sex, otelno, numplate, model, status, initialpay, finalpay,   (initialpay+finalpay) as total, (100000-(initialpay+finalpay)) as balance FROM registration, payment where registration.regid=payment.regid";
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='1200' align='' bgcolor=''><tr> <th>Payment Id</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Contact</th><th>Number Plate</th><th>Taxi Model</th><th>Status</th><th>Initial Deposite</th><th>Final Deposite</th><th>Total</th><th>Balance</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 12 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
//******************************************************************************
	
	public function selectTaxi()
	{
		$sql="SELECT regid, fname, lname, sex, otelno, oaddress, nation, numplate, model, regdate, status FROM registration order by fname asc";
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='1200' align='' bgcolor=''><tr> <th>Registration Id</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Contact</th><th>Address</th><th>Nation</th><th>Number Plate</th><th>Model</th><th>Registration Date</th><th>Status</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 11 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
	
	
	//******************************************************************************
	public function selectLogin()
	{
		$sql="SELECT loginid, fname, lname, username, password, role from login, employee where login.eid= employee.eid";
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='600' align='' bgcolor=''><tr> <th>Login Id</th><th>First Name</th><th>Last Name</th><th>Username</th><th>Password</th><th>Role</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 6 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
//******************************************************************************
	public function viewTaxi()
	{
		$sql="SELECT regid, fname, lname, sex, oaddress, nation, numplate, model, regdate FROM registration order by fname asc";
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='1200' align='' bgcolor=''><tr> <th>Registration Id</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Address</th><th>Nation</th><th>Number Plate</th><th>Model</th><th>Registration Date</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 9 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
//******************************************************************************
	
//******************************************************************************
	
	public function viewPayment()
	{
		$sql="SELECT  fname, lname, sex, numplate, model,  initialpay, finalpay, vstatus, vcode,   (initialpay+finalpay) as total, (100000-(initialpay+finalpay)) as balance FROM registration, payment where registration.regid=payment.regid";
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='1200' align='' bgcolor=''><tr> <th>First Name</th><th>Last Name</th><th>Gender</th><th>Number Plate</th><th>Taxi Model</th><th>Initial Deposite</th><th>Final Deposite</th><th>Verification Status</th><th>Verification Code</th><th>Total</th><th>Balance</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 11 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
//******************************************************************************
	
	public function viewVerification()
	{
		$sql="SELECT  fname, lname, sex, numplate, model,  initialpay, finalpay, vstatus, vcode,   (initialpay+finalpay) as total, (100000-(initialpay+finalpay)) as balance FROM registration, payment where registration.regid=payment.regid";
		$retval = mysql_query( $sql);
			if (!$retval) die ("Database access failed: " . mysql_error());
			$rows = mysql_num_rows($retval);
				echo "<table border='1' border color='gray' width='1200' align='' bgcolor=''><tr> <th>First Name</th><th>Last Name</th><th>Gender</th><th>Number Plate</th><th>Taxi Model</th><th>Initial Deposite</th><th>Final Deposite</th><th>Verification Status</th><th>Verification Code</th><th>Total</th><th>Balance</th></tr>";
			for ($j = 0 ; $j < $rows ; ++$j)
			{
				$row = mysql_fetch_row($retval);
				echo "<tr>";
			for ($k = 0 ; $k < 11 ; ++$k) echo "<td>$row[$k]</td>";
					echo "</tr>";
			}
					echo "</table>";

}
//******************************************************************************
	
	
}

?>