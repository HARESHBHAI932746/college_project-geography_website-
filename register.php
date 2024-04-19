<?php
// Start session
session_start();

// Database connection
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'geo202';

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user registration
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database

    $sql = "INSERT INTO `users` (`username`, `password`,`email`) VALUES ('$username','$hashed_password','$email')";
    // $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        $_SESSION['uname'] = $username; // Start session for logged-in user
        header("Location: index.php"); // Redirect to home page or dashboard
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



?>









<!-- <?php

$conn = mysqli_connect("localhost", "root", "", "giovista");



if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `register` (`name`, `email`,`password`) VALUES ('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: register.php");
    } else {
        echo "nooooooo" . mysqli_error($conn);
    }
}


?> -->








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;



        }

        .container {
            /* display: flex; */
            justify-content: center;
            align-items: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: black;
            color: white;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        button {
            margin-top: 10px;
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }



        .profile-section {
            border-radius: 10px;
            border: 1px solid white;
            height: auto;
            width: fit-content;
            padding: 30px;
            align-items: center;
            justify-content: center;
            background-color: #0003238e;
        }

        .header {
            font-size: 25px;
        }

        .pro-name {
            font-size: 19px;
            /* margin-left: 28px; */
        }

        .pro-email {
            font-size: 19px;
            /* margin-left: 28px; */

        }

        .subbtn {
            /* margin-left: 5px; */
            /* margin-top: 30px; */
            color: white;
            background-color: #0041ff69;
            border: 2px solid white;
            border-radius: 9px;
            padding: 5px;
            font-size: 19px;
        }
    </style>
</head>

<body>
    <center>
        <br><br><br><br>
        <div class="profile-section">

    </center>
    <br><br><br><br><br><br><br><br>
    <div class="container">
        <center>

            <h2>Register</h2><br>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <button type="submit" name="submit">Register</button>
            </form>
        </center>
    </div>
    <br>
    <br><br><br><br><br><br><br><br><br><br>


    </div>
</body>

</html>