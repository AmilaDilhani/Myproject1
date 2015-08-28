<?php

session_start();
// Grab User submitted information
include 'DatabaseConnection.php';

$username = $_POST["user"];
$password = $_POST["pass"];

$query="SELECT *  FROM login where username =? AND password =?" ;
$STH=$DBH->prepare($query);
$STH->bindParam(1,$username);
$STH->bindParam(2,$password);
$STH->execute();
$result = $STH->fetchAll();
$count=$STH->rowCount();

if($count==1){
    echo 'Welcome!';
} else {
    echo 'please try again';
}



?>