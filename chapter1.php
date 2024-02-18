<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lily's Adventure</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #007bff;
            /* Blue color */
        }

        .footer {
            background-color: #f8f9fa;
            /* Light gray color */
            padding: 20px 0;
            text-align: center;
            font-size: 14px;
            color: #555;
            margin-top: auto;
        }

        .next-chapter-btn {
            margin-top: 20px;
            margin-right: 10px;
        }

        .mark-complete-btn {
            margin-top: 20px;
            margin-left: auto;
        }

        .pink-button {
            background-color: #ff69b4;
            /* Pink color */
            border-color: #ff69b4;
            /* Pink color */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">SOLIQUERP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
                </li>
               <!-- <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>--->
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Markdown content -->
        <h1>Welcome to Lily's Adventure!</h1>
        <p>This is where Lily's exciting journey begins...</p>
        <div>
            <a href="worksheet1.php" class="btn btn-primary next-chapter-btn">Next Chapter</a>
            <button class="btn btn-success mark-complete-btn"  id="mark-complete-btn">Mark Complete</button>
        </div>

        <!-- Markdown content -->
        <hr>
        <h2>Lily's Adventure Begins</h2>
        <p>Lily bounced with excitement, her eyes glued to the rectangular box on her desk. It hummed softly, its black
            surface reflecting the colorful lights of her room. This wasn't just any box; it was a portal to a world of
            endless possibilities - her very own computer! The computer wasn't alone. On top sat a large screen, like a
            magic window showing movies and pictures. Beside it, a keyboard waited, its buttons like colorful tiles
            inviting her to tap out secret codes. And there, a playful mouse, resembling a tiny robot, rested ready to
            guide her on her adventures. Lily imagined the computer as a friendly clubhouse, each part waiting to be
            explored. The screen, a wide-open window showing faraway lands and funny animals. The keyboard, a magical
            piano to tap out stories and messages. And the mouse, a nimble guide leading her through exciting games and
            puzzles. With a deep breath, Lily touched the power button. The screen flickered to life, displaying a
            friendly face and a welcoming message. A thrill ran through her. This was it! The beginning of her journey
            into the amazing world of computers. First, she explored the screen. With the click of the mouse, pictures
            danced before her eyes - towering mountains, playful puppies, and swirling galaxies. Next, she touched the
            keyboard, her fingers tapping out simple words, then silly sentences, and finally, her own name, a sense of
            accomplishment washing over her. The clubhouse held so much more! Lily ventured into the world of games,
            battling pirates on pirate ships and saving princesses from dragons. She explored the art studio, drawing
            bright monsters and painting shimmering rainbows. And with a video call, she connected with her grandma far
            away, their faces filling the screen, laughter echoing in the room. The computer wasn't just a machine; it
            was a gateway to knowledge, creativity, and connection. It promised countless adventures, hidden treasures,
            and endless possibilities. And Lily, armed with her curiosity and her trusty computer friend, was ready to
            explore them all. Remember, even though it's a machine, the computer holds endless possibilities just
            waiting to be discovered. With your curiosity and your new computer friend, anything is possible!</p>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Lily's Adventure. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS and jQuery (optional, for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('mark-complete-btn').addEventListener('click', function () {
            this.classList.remove('btn-success');
            this.classList.add('pink-button');
        });
    </script>
</body>

</html>