<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="register-container">
        <h2 style="color: black;" >Register New User</h2>
        <div id="response"></div>
        <form id="register-form">
            <input type="text" id="new-username" name="new-username" placeholder="New Username" ><br>
           <input type="password" id="new-password" name="new-password" placeholder="New Password" ><br>
           <input type="password" id="cnf-password" name="cnf-password" placeholder="Confirm Password" ><br>
            <button type="submit">Register</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>