<?php
ob_start();
session_start();
require 'dbconnect.php';

if(isset($_SESSION['system_user']) == "" ){
 header("Location: error.php" ); 
}

?>
