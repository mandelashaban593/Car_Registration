
<?php
require_once 'dbconnection.php';
require_once 'delete.class.php';

$owor= new deletions();
echo $owor->deleteEmployee();
echo $owor->deletePayment();
echo $owor-> deleteRegistration();
echo $owor-> deleteLogin();


?>