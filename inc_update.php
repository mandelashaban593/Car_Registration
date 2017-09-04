
<?php
require_once 'dbconnection.php';
require_once 'update.class.php';
//require_once 'delete.class.php';

$owor= new updates();
echo $owor->updateEmployee();
echo $owor->updatePayment();
echo $owor-> updateRegistration();
echo $owor-> updateLogin();
echo $owor-> updatePassword();
echo $owor->updateusername();
echo $owor->updaterole();
echo $owor->verifyPayment();
echo $owor->editVerification();

?>