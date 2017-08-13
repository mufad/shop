<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/11/17
 * Time: 11:29 PM
 */
require_once('knock_db_connect.php');
$sql = "SELECT cart FROM oc_customer WHERE email='an registered user email';";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    echo $row['cart'];
    var_dump(unserialize(base64_decode($row['cart'])));
}

