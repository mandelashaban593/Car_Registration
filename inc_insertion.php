
<?php
require_once 'dbconnection.php';
require_once 'insertions.class.php';

$owor= new insertions();
echo $owor->insertEmployee();
echo $owor-> insertPayments();
echo $owor-> insertPayment();
echo $owor->insertLogin();
echo $owor->insertTaxi();
echo $owor->registerTaxi();


?>