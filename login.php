<?php
session_start();

// Check if username and password are set and not empty
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password match the admin credentials
    if ($username === 'admin' && $password === '12345') {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to the admin page
        header('Location: admin.php');
        exit();
    } else {
        // Redirect back to the login page with error message
        header('Location: inndex.php?error=1');
        exit();
    }
} else {
    // Redirect back to the login page if username or password is not set
    header('Location: inndex.php');
    exit();
}
?>
