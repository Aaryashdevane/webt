<?php
// Start the session
session_start();

// Handle form submission or session actions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store session data
    $_SESSION["username"] = htmlspecialchars($_POST["username"]);
    $_SESSION["email"] = htmlspecialchars($_POST["email"]);
} elseif (isset($_GET["action"]) && $_GET["action"] == "destroy") {
    // Destroy the session if 'destroy' action is called
    session_unset();  // Unset all session variables
    session_destroy(); // Destroy the session
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Management Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .button {
            display: block;
            margin: 20px 0;
            padding: 10px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            text-align: center;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>PHP Session Management</h2>

    <?php if (isset($_SESSION["username"]) && isset($_SESSION["email"])): ?>
        <!-- If session data is set, display it -->
        <h3>Session Data</h3>
        <p><strong>Username:</strong> <?php echo $_SESSION["username"]; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION["email"]; ?></p>

        <!-- Link to destroy the session -->
        <a href="?action=destroy" class="button">Destroy Session</a>

    <?php else: ?>
        <!-- If session data is not set, display the form -->
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</div>

</body>
</html>
