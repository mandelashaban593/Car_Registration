<?php
require_once 'dbconnection.php';
require 'selection.class.php';

$owor= new  selections();
echo $owor->selectPayment();


?>