<?php
require_once "config.php"; // Include the database configuration file

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $username = $_POST["username"];
    $score = $_POST["score"];

    // Prepare and execute a SQL statement to update the score for the user
    $sql = "UPDATE users SET score = ? WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "is", $score, $username);
    $success = mysqli_stmt_execute($stmt);

    // Check if the update was successful
    if ($success) {
        echo "Score updated successfully!";
        // Display the updated score
        echo "Username: " . $username . ", New Score: " . $score;
    } else {
        echo "Error updating score: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($conn);
?>