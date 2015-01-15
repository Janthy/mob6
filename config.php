<?php
     
$server     = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'infesto';

 
$dsn        = "mysql:host=$server;dbname=$database";

// verbinding controleren
if ($dsn->connect_error) {
    die("Connection failed: " . $dsn->connect_error);
} 
//echo "Connected successfully";
?>
