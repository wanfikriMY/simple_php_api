<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('UTC');

$responseDto = array(
    'date' => date('d-m-Y'),
    'time' => date('H:i:s'),
);

echo json_encode($responseDto);
