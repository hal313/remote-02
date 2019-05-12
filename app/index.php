<?php
    // Version 1.0.1
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    $reverseString = strrev($_GET['message']);
    echo "{\"message\": \"${reverseString}\"}";
?>
