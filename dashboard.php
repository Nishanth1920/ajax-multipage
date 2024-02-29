<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="dashboard">
    <div id="dashboard-container">
        <center>
            <h2>Welcome <?php echo strtoupper($_SESSION['username']); ?></h2>
        </center>
        <button id="add-user">Add User</button>

        <button id="logout">Logout</button>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function() {
            var sessionTimeout = 10; // Timeout in seconds
            var timeout;

            function startTimer() {
                timeout = setTimeout(function() {
                    // Redirect to logout page or perform logout action
                    window.location.href = "index.html";
                }, sessionTimeout * 1000); // Convert seconds to milliseconds
            }

            // Start the timer when the page is loaded
            startTimer();

            // Reset the timer when there's any activity (e.g., mousemove, keypress)
            $(document).on("mousemove keypress", function() {
                clearTimeout(timeout);
                startTimer();
            });
        });
    </script>
</body>

</html>