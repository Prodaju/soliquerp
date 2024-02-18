<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Sample questions for Worksheet 1
$questions = array(
    "What is 2 + 2?" => 4,
    "What is the capital of France?" => "Paris",
    // Add more questions here
);

// Initialize score for this worksheet
$_SESSION['worksheet_score'] = 0;

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check answers
    foreach ($_POST as $question => $answer) {
        if (isset($questions[$question]) && $questions[$question] === $answer) {
            $_SESSION['worksheet_score']++;
        }
    }
    // Redirect back to worksheet after submission
    header("Location: worksheet2.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Worksheet 2</title>
</head>

<body>
    <div class="container mt-4">
        <h3>Worksheet 1</h3>
        <form action="" method="post">
            <?php foreach ($questions as $question => $answer): ?>
                <div class="form-group">
                    <label>
                        <?php echo $question; ?>
                    </label>
                    <input type="text" name="<?php echo htmlspecialchars($question); ?>" class="form-control" required>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a href="welcome.php" class="btn btn-secondary mt-3">Back to HOME Page </a>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy; 2024 SOLIQUERP | Swarnlata</span>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>