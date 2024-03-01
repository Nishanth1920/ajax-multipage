<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are provided
    if (!empty($username) && !empty($password)) {
        // Check if username and password are correct
        $file = 'users.txt';
        $credentials = file($file, FILE_IGNORE_NEW_LINES);
        $login_successful = false;

        // Iterate through stored credentials
        foreach ($credentials as $credential) {
            list($stored_username, $stored_password) = explode(':', $credential);
            // Check if submitted credentials match stored credentials
            if ($username === $stored_username && $password === $stored_password) {
                // Set session variables
                $_SESSION['username'] = $username;
                $login_successful = true;
                echo "Login successful!";
                break; // Stop looping once a match is found
            }
        }

        if (!$login_successful) {
            echo '<span style="color: white;">Invalid username or password.</span>';
        }
    } else {
        echo '<span style="color: white;">Please enter both username and password.</span>';
    }
}
?>
