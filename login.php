<?php

// Simulating user authentication (replace this with your actual authentication logic)
$validUsername = 'example';
$validPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $username = $data['username'];
    $password = $data['password'];

    if ($username === $validUsername && $password === $validPassword) {
        // Login successful
        $response = array('success' => true);
    } else {
        // Login failed
        $response = array('success' => false);
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

?>
