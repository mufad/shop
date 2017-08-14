<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/11/17
 * Time: 11:29 PM
 */
require_once('knock_db_connect.php');
$sql = "SELECT cart FROM oc_customer WHERE email='mihodihasan@gmail.com';";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $cart_text= $row['cart'];
    echo $cart_text;
}
$output_array=str_split($cart_text);
for ($i=2;$i<sizeof($output_array);$i++){
//    if ($output_array[$i]==)
}
$cartProductNumber= substr($cart_text,2,1);
$pro1=substr($cart_text,11,44);
$data=unserialize(base64_decode($pro1));
echo $data['product_id'];

//var_dump(unserialize(base64_decode("YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDM7fQ==")));
//var_dump(unserialize(base64_decode("YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDc7fQ==")));

