<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Event Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #F5F5F5; /* Set the overall background color */
            color: #000000; /* Set text color to black */
            padding: 20px; /* Add some padding for better readability */
        }

        .back-to-events-button {
            background-color: #E3E3E3;
            color: #000000;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-to-events-button:hover {
            background-color: #CCCCCC;
        }

        /* Container for button */
        .button-container {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .event-detail-container {
            background-color: #FFFFFF; /* Set the background color of the event detail container */
            padding: 20px; /* Add some padding for the event detail */
            border-radius: 10px; /* Add border-radius to create rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Add shadow for a slight elevation effect */
        }

        .event-image {
            width: 100%;
            max-width: 600px;
            display: block;
            margin: 0 auto;
        }

        .event-title {
            font-family: 'Kanit', sans-serif;
            font-size: 2.5em;
            font-weight: 600;
            color: black;
            margin-top: 20px;
        }

        .event-date,
        .event-location {
            font-family: 'Roboto Slab', serif;
            font-size: 1.5em;
            font-weight: 500;
            color: #646464;
            margin-top: 10px;
        }

        .event-description {
            font-family: 'Roboto Slab', serif;
            font-size: 1em;
            font-weight: 400;
            color: #646464;
            margin-top: 20px;
        }

        .daftar-button {
            background-color: #FFD700;
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .daftar-button:hover {
            background-color:#FFCC00;
        }

        @media screen and (max-width: 768px) {
            .button-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .event-title {
                margin-bottom: 10px;
            }

            .event-date,
            .event-location {
                margin-top: 5px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
        <!-- YESS, BEST CHURCH, and Profile Picture -->
        <a class="navbar-brand" href="#">
            <img src="img/profile.jpg" class="profile-picture" alt="Profile Picture">
            <div class="brand-text">
            <div>YESS</div>
            <span class="lora-font">BEST CHURCH</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto text-center"> <!-- Use text-center to center the nav items -->
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a> <!-- Added 'active' class here -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pelayanan">Pelayanan</a> <!-- Removed 'active' class here -->
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/komsel">KomSel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bareng">Bareng</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/event">Event</a>
            </li>
            </ul>
            <ul class="navbar-nav login-link">
            <li class="nav-item">
                <a class="nav-link login-link-border" href="/login">Login</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <div class="event-detail-container">
        <!-- "Kembali ke Events" button -->
        <div class="button-container">
            <button class="back-to-events-button" onclick="goBackToEvents()">Kembali ke Events</button>
        </div>

        <!-- Event Image -->
        <img src="img/event-photo5.jpg" alt="Event Image" class="event-image">

        <div class="button-container">
            <div class="event-title">YESS Leardership Mission Training VII</div>
            <!-- Daftar Button -->
            <button class="daftar-button" onclick="redirectToForm()">Daftar -></button>
        </div>

        <!-- Event Date -->
        <div class="event-date">19-21 April 2024</div>

        <!-- Event Location -->
        <div class="event-location">Desa Bikium, Soe, Nusa Tenggara Timur</div>

        <!-- Event Description -->
        <div class="event-description">
            Biarlah semangat misi terus menyala dalam hidup kita.<br>
            Uis Neno nokan kit, Immanuel!<br>
            Sampe ketemu di YLMT, basodara dong!
        </div>
    </div>

    <script>
        // Function to go back to the events page
        function goBackToEvents() {
            window.location.href = "event.blade.php"; // Redirect to event.blade.php
        }

        // Function to redirect to form event page with the event ID
        function redirectToForm() {
            var eventId = <?php echo $_GET['id']; ?>; // Get the event ID from the query string
            window.location.href = "form-event.blade.php?id=" + eventId; // Redirect to the form event page with the event ID
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
