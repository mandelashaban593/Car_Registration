
<?php
require_once 'dbconnection.php';
require_once 'selection.class.php';

$owor= new  selections();
echo $owor->selectEmployee();


?>