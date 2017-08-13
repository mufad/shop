<?php
/**
 * Created by PhpStorm.
 * User: mihodihasan
 * Date: 8/7/17
 * Time: 2:47 AM
 */
require_once 'knock_db_connect.php';

$sql = "SELECT * FROM `oc_product` JOIN oc_stock_status ON oc_stock_status.stock_status_id=
oc_product.stock_status_id JOIN oc_product_description ON oc_product_description.product_id=
oc_product.product_id ORDER BY oc_product.product_id DESC LIMIT 10;";
//ORDER BY oc_product.product_id DESC LIMIT 10
$result = mysqli_query($con, $sql);
$response = array();
while ($row = mysqli_fetch_array($result)) {
    $review_query="select * from oc_review WHERE  product_id='".$row[0]."';";
    $review_result=mysqli_query($con,$review_query);
    $rating="0";
    if (mysqli_num_rows($review_result)==1){
        $review=mysqli_fetch_array($review_result);
        $rating=$review[5];
    }
    array_push($response, array("product_id" => $row[0], "product_name" => $row[1], "product_image" =>
        $row[11],"product_price"=>$row[14],"product_rating"=>$rating,"product_availability"=>$row[33],
        "product_description"=>$row[37]));
//    $response=$row;
}


echo json_encode(utf8ize($response));
//echo json_last_error();
//var_dump(json_last_error());
//echo json_last_error();
mysqli_close($con);

function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d;
}
?>