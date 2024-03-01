<?php
session_start();

function isStrongPassword($password) {
    // echo "<pre>";
    // print_r($password);
    // exit();

    //- Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character
    return preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])\S{8,}$/',$password);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['new-username'];
    $new_password = $_POST['new-password'];
    $cnf_password = $_POST['cnf-password'];

    if (empty($new_username) || empty($new_password) || empty($cnf_password)) {
        echo '<span style="color: red;">Please enter both username and password.</span>';
    } elseif ($new_password !== $cnf_password) {
        echo '<span style="color: red;">Password and Confirm Password do not match.</span>';
    } elseif (!isStrongPassword($new_password)) {
        echo '<span style="color: red;">Password is weak. It should contain at least one uppercase letter, one lowercase letter, one number, and one special character.</span>';
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
