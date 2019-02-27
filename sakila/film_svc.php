<?php
//return senarai filem dikedai ini

include 'db.php';

//query data
$sql = "SELECT * FROM film LIMIT 0,20";
$rs = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($rs)) {
    //echo $row['title'] . '<br>';
    $obj = new stdClass();
    $obj->title = $row['title'];
    $obj->descr = $row['description'];
    $arr[] = $obj;
}

$json = json_encode($arr);
header('Content-Type:application/json');
echo $json;
//print data sbg JSON