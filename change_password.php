<?php
session_start();
require_once "config.php";

if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit;
}

$new_password = $confirm_new_password = "";
$new_password_err = $confirm_new_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate new password
    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password";
    } elseif (strlen(trim($_POST["new_password"])) < 5) {
        $new_password_err = "Password must have at least 5 characters";
    } else {
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm new password
    if (empty(trim($_POST["confirm_new_password"]))) {
        $confirm_new_password_err = "Please confirm the new password";
    } else {
        $confirm_new_password = trim($_POST["confirm_new_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_new_password)) {
            $confirm_new_password_err = "Passwords do not match";
        }
    }

    // Check input errors before updating the database
    if (empty($new_password_err) && empty($confirm_new_password_err)) {
        $sql = "UPDATE users SET password = ? WHERE username = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ss", $param_password, $param_username);
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_username = $_SESSION["username"];
            if (mysqli_stmt_execute($stmt)) {
                session_destroy();
                header("location: login.php");
                exit;
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($conn);
}
?>