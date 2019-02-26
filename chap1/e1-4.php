<?php
require '../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://localhost/webservice/chap1/data3.php', 
[
    'query' => [
        'nama' => 'syafiah', 
        'umur' => '32'
    ]
]);

echo $response->getBody();
echo '<hr>';
$response2 = $client->request('POST', 'http://localhost/webservice/chap1/data2.php', 
[
    'form_params' => [
        'address' => 'presint 11',
        'phone' => '0192630365',
        'state' => [
            'putrajaya' => 'WP Putrajaya'
        ]
    ]
]);

echo $response2->getBody();
//test
