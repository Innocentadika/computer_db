<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "computer_db";

if (!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)) {
    # code...
    die("Failed to connect");

}
?>