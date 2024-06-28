<?php
session_start();

// Static credentials for demonstration
$valid_username = "testuser";
$valid_password = "testpassword";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username; // Store username in session

        // Redirect to home.php upon successful login
        header("Location: home.php");
        exit();
    } else {
        $error_message = "Invalid Username or Password";
    }
}

// Redirect user to home.php if session is active
if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            height: 100vh;
        }
        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;  
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label, input {
            width: 100%;
            max-width: 300px;
            margin-top: 10px;
        }
        input {
            padding: 5px;
            box-sizing: border-box;
        }
        button {
            width: 70%;
            margin-top: 20px;
            padding: 10px 20px;
        }
        .alert {
            padding: 10px;
            margin-top: 20px;
        }
        .alert.error {
            color: red;
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Login</h3>
        <?php if (isset($error_message)) : ?>
            <div class="alert error"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="submit">Login</button>
        </form>
    </div>
</body>
</html>
