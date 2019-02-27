<?php
//return senarai filem dikedai ini

include 'db.php';

//query data
$id = $_GET['id'];
$sql = "SELECT * FROM film WHERE film_id = '$id'";
$rs = mysqli_query($con, $sql);

if ($rs) {
    //add data
    $data = mysqli_fetch_array($rs);
} else {
    $data = new stdClass();
    $data->err = 'No Data';
    //tiada data
}

$json = json_encode($data);
header('Content-Type:application/json');
echo $json;
//print data sbg JSON
