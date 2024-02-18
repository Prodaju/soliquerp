<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* Sticky footer styles */
        html,
        body {
            height: 100%;
        }

        #page-content {
            flex: 1 0 auto;
        }

        #footer {
            background-color: #1E3A5F;
            /* Dark blue */
            color: #fff;
            /* White text */
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .navbar {
            background-color: #1E3A5F;
            /* Dark blue */
        }
    </style>

    <title>Welcome</title>
</head>

<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">SOLIQUERP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
               <!-- <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>-->
                <!--<li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Click to Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="leaderboard.php">Leaderboard</a>
                </li>
            </ul>
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
                            <?php echo "Welcome " . $_SESSION['username'] ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h3>
            <?php echo " " .$_SESSION['username'] ?>
        </h3>
        <h4>
            <?php echo $score; ?>
        </h4>
        <hr>
        <!-- Class buttons -->
        <div class="row">
            <?php for ($i = 1; $i <= 7; $i++): ?>
                <div class="col-md-3 mb-3">
                    <a href="class<?php echo $i; ?>.php" class="btn btn-primary btn-block">Class
                        <?php echo $i; ?>
                    </a>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <span>&copy; swarnlata2024</span>
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