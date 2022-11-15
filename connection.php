<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "computer_db";

try {
    //code...
    $con= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
} catch (PDOException $e) {
    //throw $th;
    echo "Faile to connect";
    file_put_contents('pdoerror.txt',$e->getMessage());
}
?>