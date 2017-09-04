

<?php
include_once 'dbconnection';
$con = new  DB_con();

//require_once 'Connect oop.php';
class database{
	public $sql;
// Create connection
	public function __construct(){
		$this->sql=$sql;
	
	}
	
//**************************************************************
	public function createDatabase()
	{
		$sql =  mysql_query("create database taxregistration");
		return $sql;	
	}
//**************************************************************
	
	public function useDatabase()
	{
		$sql =  mysql_query("use taxregistration");
		return $sql;	
	}
	

//**************************************************************
	public function createLogin(){
		$sql = mysql_query("create table login(admin_id INTEGER UNSIGNED NOT NULL 				AUTO_INCREMENT, 
		Firstname varchar(15),
		Othername varchar(20),
			primary key(admin_id))");
			
	return $sql;	
	
		
	}
//**************************************************************
	public function createEmployees(){
		$sql = mysql_query("CREATE TABLE employee (
  eid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  fname nvarchar(50) NOT NULL,
  lname nvarchar(50) NOT NULL,
  sex nvarchar(7) not null,
  age int(3) not null,
  telno nvarchar(50) NOT NULL,
  address nvarchar(100) NOT NULL,
  nation nvarchar(50) NOT NULL,
  
	Primary key(eid)
 
 )");
			return $sql;	
	}
//**************************************************************
public function createPayment(){
		$sql = mysql_query("create table payment(
pid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
regid int(30),
initialpay float(50),
finalpay float(50),
	Primary key(pid)
	FOREIGN KEY (regid) REFERENCES payment(regid),	
)");
			return $sql;	
	}
//**************************************************************
public function createRegistration(){
		$sql = mysql_query("CREATE TABLE registration (
  regid INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
fname nvarchar(50) NOT NULL,
  lname nvarchar(50) NOT NULL,
  sex nvarchar(7) not null,
  otelno nvarchar(50) NOT NULL,
  oaddress nvarchar(100) NOT NULL,
  nation nvarchar(50) NOT NULL,
  numplate nvarchar(50) NOT NULL,
  model nvarchar(50) NOT NULL,
  regdate date NOT NULL,
  status nvarchar(50) NOT NULL,

	Primary key(regid)
 
 )");
			return $sql;	
	}
//**************************************************************

//**************************************************************
$owor= new database();
$res=createDatabase();
	if($res)
	{
	echo "Database was Created successfully";
		?>
		<script>
		alert('Database was Created successfully...');
        window.location='tables.class.php'
        </script>
		<?php
	}
	else
	{
	echo "Database creation failed!";
		?>
		<script>
		alert('Database creation failed...');
        window.location='tables.class.php'
        </script>
		<?php
	}
}
echo $owor->createLogin();
echo $owor->createEmployees();
echo $owor->createPayment();
echo $owor->createRegistration();

?>