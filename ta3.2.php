<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            margin-top: 100px;
            width: 100%;
            max-width: 500px;
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
            max-width: 400px;
        }
        label {
            margin-top: 10px;
        }
        input {
            padding: 5px;
            box-sizing: border-box;
        }
        .remember-me {
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 400px;
            margin-top: 10px;
        }
        .remember-me label {
            margin: 0;
            margin-right: 10px;
            width: auto;
        }
        button {
            width: 70%;
            margin-top: 20px;
            padding: 10px 20px;
        }
        .toggle-password {
            margin-top: 5px;
            cursor: pointer;
        }
        .alert {
            padding: 10px;
            margin-top: 20px;
        }
        .alert.success {
            color: green;
            border: 1px solid green;
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
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $remember = isset($_POST['remember']);

            $valid_username = "testuser";
            $valid_password = "testpassword";

            if ($username === $valid_username && $password === $valid_password) {
                if ($remember) {
                    setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = 1 day
                    setcookie("password", $password, time() + (86400 * 30), "/");
                } else {
                    setcookie("username", "", time() - 3600, "/");
                    setcookie("password", "", time() - 3600, "/");
                }
                echo "<div class='alert success'>Login Successful</div>";
            } else {
                echo "<div class='alert error'>Invalid Username or Password</div>";
            }
        }
        ?>

        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required value="<?php echo isset($_COOKIE['password']) ? htmlspecialchars($_COOKIE['password']) : ''; ?>">

            <div class="remember-me">
                <input type="checkbox" name="remember" id="remember" <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                <label for="remember">Remember me:</label>
            </div>

            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
