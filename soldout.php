<?php

include 'init/config.php';
$product_id = $_GET['info'];

$product_info = $db->query("UPDATE products SET sold_available ='Sold out' WHERE id = '$product_id'");

header('Location: profile.php');



?>