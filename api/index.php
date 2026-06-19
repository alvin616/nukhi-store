<?php
// api/index.php

header('Content-Type: application/json');

// Contoh response sederhana
echo json_encode([
    "message" => "Hello from Style-Store API!",
    "status" => "success"
]);
