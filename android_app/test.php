<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/11/17
 * Time: 11:29 PM
 */
//require_once('knock_db_connect.php');
//$sql = "SELECT cart FROM oc_customer WHERE email='mihodihasan@gmail.com';";
//$result = mysqli_query($con, $sql);
//if (mysqli_num_rows($result) == 1) {
//    $row = mysqli_fetch_assoc($result);
//
//    $cart_text= $row['cart'];
//    echo $cart_text;
//}
$cart_text="a:10:{s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDc7fQ==\";i:5;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDk7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDU7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDM7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDA7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwMTc7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwMDM7fQ==\";i:3;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjQ5ODY7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwMzk7fQ==\";i:1;s:44:\"YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwMDc7fQ==\";i:1;}";
$output_array=str_split($cart_text);
$product_count="";
for ($i=2;$i<sizeof($output_array);$i++){
    if (ord($output_array[$i])>47&&ord($output_array[$i])<58){
        $product_count=$product_count.$output_array[$i];
    }elseif (ord($output_array[$i])==58){
        break;
    }
}
echo $product_count;
//$cartProductNumber= substr($cart_text,2,1);
//$pro1=substr($cart_text,11,44);
//$data=unserialize(base64_decode($pro1));
//echo $data['product_id'];

//var_dump(unserialize(base64_decode("YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDM7fQ==")));
//var_dump(unserialize(base64_decode("YToxOntzOjEwOiJwcm9kdWN0X2lkIjtpOjUwNDc7fQ==")));

