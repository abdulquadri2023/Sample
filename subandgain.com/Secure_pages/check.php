<?php
include "../database_connection.php";


$network = filter_var($_POST['net'], FILTER_SANITIZE_STRING);

$check = "SELECT * FROM data_bundles WHERE network = '$network'";

$fetch = mysqli_query($data_connection, $check);
//$fetch_data = mysqli_fetch_assoc($fetch);

while($fetch_data = mysqli_fetch_assoc($fetch)){
    $giga = $fetch_data['gigabits'];
    $type = $fetch_data['type'];
    $price = $fetch_data['price'];
    echo "<option value ='$giga'> $giga =  &#8358; $price ($type) </option>";
}



?>