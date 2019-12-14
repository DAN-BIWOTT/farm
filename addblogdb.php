<?php

include 'init/config.php';


$user = $_SESSION['SBUser'];
$name = $_POST['name'];
$summary = $_POST['summary'];
$blog = $_POST['blog'];



move_uploaded_file($_FILES['mybooks']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/farmers/img/blog-img/'.$_FILES['mybooks']['name']);
$tmp = 'img/blog-img/'.$_FILES['mybooks']['name'];




   $sql = "INSERT INTO blogs( Topic , brief_summary , blog , img_dir , user_id ) 
                      VALUES( '$name' , '$summary' , '$blog' , '$tmp', '$user' )";
   $db->query($sql);
             
            header('Location: profile2.php');



?>