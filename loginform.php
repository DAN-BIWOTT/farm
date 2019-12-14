<?php
	
include 'init/config.php';


$username = $_POST['email'];
$password = $_POST['password'];



$user = $db->query("SELECT * FROM users WHERE email = '$username' AND password = '$password'  AND type = 'Farmer' ");
$count = mysqli_num_rows($user);


$user2 = $db->query("SELECT * FROM users WHERE email = '$username' AND password = '$password' AND type = 'Chef' ");
$count2 = mysqli_num_rows($user2);

if ($count>0) {
    $user_id = mysqli_fetch_assoc($user);
    Login($user_id['id']);

}
else if($count2>0){
     $user_id = mysqli_fetch_assoc($user2);
     Login2($user_id['id']);
}
else{
	?>
	 <script>
        alert('Invalid password or Username / Username exist');   
        window.location.pathname="farmers/login.php";
    </script>
    <?php

}



?>


