<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/7/17
 * Time: 2:30 AM
 */

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'shop');

$con = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to Connect');

//if ($con) echo "ok";
?>