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
        <h3>My Personal Information</h3>
        <form action="" method="post">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" required>

            <label for="middlename">Middle Name:</label>
            <input type="text" name="middlename" id="middlename" required>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" required>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" name="confirmpassword" id="confirmpassword" required>

            <label for="birthday">Birthday:</label>
            <input type="date" name="birthday" id="birthday" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="contactnumber">Contact Number:</label>
            <input type="text" name="contactnumber" id="contactnumber" required>

            <button type="submit" name="submit">Save</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = htmlspecialchars($_POST['firstname']);
            $middlename = htmlspecialchars($_POST['middlename']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $username = htmlspecialchars($_POST['username']);
            $password = htmlspecialchars($_POST['password']);
            $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $email = htmlspecialchars($_POST['email']);
            $contactnumber = htmlspecialchars($_POST['contactnumber']);

            if ($password === $confirmpassword) {
                echo "<div class='alert success'>Registration Successful</div>";
                echo "<p>First Name: $firstname</p>";
                echo "<p>Middle Name: $middlename</p>";
                echo "<p>Last Name: $lastname</p>";
                echo "<p>Username: $username</p>";
                echo "<p>Birthday: $birthday</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Contact Number: $contactnumber</p>";
            } else {
                echo "<div class='alert error'>Password and Confirm Password do not match</div>";
            }
        }
        ?>
    </div>
</body>
</html>
