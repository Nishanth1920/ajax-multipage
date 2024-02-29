<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['new-username'];
    $new_password = $_POST['new-password'];

    if (empty($new_username) || empty($new_password)) {
        echo '<span style="color: red;">Please enter both username and password.</span>';
    } else {
        // Store new user information in a file (dummy implementation)
        $file = 'users.txt';
        $data = $new_username . ':' . $new_password . "\n";
        file_put_contents($file, $data, FILE_APPEND);

        echo "User registered successfully!";
    }
    exit; // Stop further execution
}
?>