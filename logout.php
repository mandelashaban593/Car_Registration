<?php

session_start();
unset($_SESSION["passcode"]);
unset($_SESSION["username"]);
header("Location:index.php");

?>
