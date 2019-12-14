<?php

include 'init/config.php';
$product_id = $_GET['info'];

$product_info = $db->query("DELETE FROM blogs WHERE id = $product_id");
header('Location: profile2.php');



?>