<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/12/17
 * Time: 3:03 PM
 */
$output=array();
require "knock_db_connect.php";
$user_name = $_POST["login_name"];
$user_pass = $_POST["login_pass"];
$query = "SELECT salt from oc_customer WHERE email='" . $user_name . "';";
$salt_result = mysqli_query($con, $query);
if (mysqli_num_rows($salt_result) == 1) {
    $salt_row = mysqli_fetch_assoc($salt_result);
    $salt = $salt_row['salt'];
    $id=null;
    $pass = sha1(CONCAT($salt, sha1(CONCAT($salt, SHA1($user_pass)))));
    $sql_query = "SELECT * FROM `oc_customer` WHERE LOWER(email) = '" . $user_name . "' AND ( password = '" . $pass . "' OR password = '" . md5($user_pass) . "' );";
    $result = mysqli_query($con, $sql_query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $output['info'] ="Login Succesful ...";
        echo "Login Succesful ...";
        $id = $row['email'];
    } else {
        $output['info'] = "Incorrect Password";
        echo "Incorrect Password";
    }
} else {
    $output['info'] = "You do not have account! Register In Our Site First.";
    echo "You do not have account! Register In Our Site First.";
}
//echo json_encode($output);

function CONCAT($a, $b)
{
    return $a . $b;
}

?>