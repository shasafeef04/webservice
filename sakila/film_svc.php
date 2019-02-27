<?php
//return senarai filem dikedai ini

//connect ke DB 
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';

$con = mysqli_connect($server, $user, $pwd, $db);
if (!$con) { echo "connection Problem!";
exit;
}

//query data
$sql = "SELECT * FROM film LIMIT 0,20";
$rs = mysqli_query($con, $sql);
while($row = mysqli_fetch_array($rs)) {
    echo $row['title'] . '<br>';
}
//print data sbg JSON