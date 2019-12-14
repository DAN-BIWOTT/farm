<?php

include 'init/config.php';


$user = $_SESSION['SBUser'];
$name = $_POST['name'];
$type = $_POST['type'];
$description = $_POST['description'];
$amount = $_POST['amount'];
$quantity = $_POST['quantity'];

move_uploaded_file($_FILES['mybooks']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/farmers/img/produce-img/'.$_FILES['mybooks']['name']);
$tmp = 'img/produce-img/'.$_FILES['mybooks']['name'];




   $sql = "INSERT INTO products( title , category ,  description , amount , quantity , img_dir , user_id ) 
                      VALUES( '$name' , '$type' , '$description' , '$amount', '$quantity',  '$tmp' , '$user' )";
   $db->query($sql);
             
            header('Location: profile.php');



?>