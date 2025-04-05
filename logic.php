<?php
session_start();

$valid_username = "admin";
$valid_password = "123"; 

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
        $_SESSION['loggedin'] = true;
        header("Location: project_disc.php"); 
        exit;
    } else {
        echo "Incorrect username or password. <a href='index.html'>Try again</a>";
        exit;
    }
} else {
    echo "Please fill in both fields. <a href='index.html'>Try again</a>";
    exit;
}
?>