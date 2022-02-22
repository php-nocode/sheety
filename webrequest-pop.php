<?php

$sheet1 = $_POST['sheet1'];
$authorization =

// Pop row from sheet1
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $sheet1);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json' , $authorization ]);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$row1 = curl_exec($curl);
curl_close($curl);

var_dump($row1);





