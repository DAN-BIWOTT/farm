<?php

include 'init/config.php';

$name = $_POST['name'];
$type = $_POST['type'];
$pnumber = $_POST['pnumber'];
$location = $_POST['location'];
$email = $_POST['email'];
$password = $_POST['password'];



$sql = $db -> query("INSERT INTO users( names , email , password , phonenumber , location , type ) 
								VALUES( '$name' , '$email' , '$password' , '$pnumber' ,'$location', '$type' )");
header('Location: login.php');





?>