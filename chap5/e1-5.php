<?php 
//create obj tanpa custom class
$obj = new stdClass();
$obj->nama = 'azman';
$obj->alamat = 'puchong';

//convert obj kpd string JSON
echo json_encode($obj);
echo '<hr>';
$arr = ['nama' => 'John Doe', 'umur' =>40];
echo json_encode($arr);