<?php
header('Content-Type: application/json');

$responseDto = array(
    'serverStatus' => true,

);

echo json_encode($responseDto);
