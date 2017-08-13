<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/9/17
 * Time: 2:26 PM
 */

require_once 'knock_db_connect.php';

$sql = "select * from oc_category_description ORDER BY category_id ASC;";
$result = mysqli_query($con, $sql);
$response = array();
while ($row = mysqli_fetch_array($result)) {
    array_push($response, array("category_id" => $row[0], "category_name" => $row[2]));
}


echo json_encode(utf8ize($response));
mysqli_close($con);

function utf8ize($d)
{
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string($d)) {
        return utf8_encode($d);
    }
    return $d;
}

?>