<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YESS.SUB | Archived Event</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<style>
    body {
        background-color: white; /* Set the background color to white */
        color: #000000; /* Set text color to black */
        padding: 20px; /* Add some padding for better readability */
    }

    .event-header {
        font-family: 'Kanit', sans-serif; /* Set font family */
        text-align: left; /* Align text to left */
        font-size: 3em; /* Set font size to 3em */
        margin-top: 20px; /* Add some top margin for spacing */
        color: black; /* Set color to black */
        font-weight: bold; /* Set font weight to bold */
    }

    .event-subheader {
        font-family: 'Open Sans Hebrew', sans-serif; /* Set font family */
        text-align: left; /* Align text to left */
        font-size: 2em; /* Set font size to 2em */
        margin-top: 20px; /* Add some top margin for spacing */
        color: black; /* Set color to black */
        font-weight: lighter; /* Set font weight to lighter */
    }
    
    .event {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        max-width: 1205px; /* Set max-width to maintain responsiveness */
        height: auto; /* Change height to auto for responsiveness */
        margin: 0 auto; /* Center align by setting left and right margin to auto */
        margin-bottom: 20px;
        border: 1px solid #F4F4F4;
        background-color: #F4F4F4;
        cursor: pointer;
        padding: 20px; /* Add padding to create space between the event and its content */
    }

    .event img {
        width: 340px; /* Set width to 340px */
        height: auto;
        margin-right: 20px;
    }

    .event:hover:not(.event:hover .daftar-button) {
        background-color: #e1e1e1; /* Change background color on hover */
    }

    .event-details {
        flex: 1; /* Take remaining space */
        margin-right: 20px; /* Add margin to create space between the text and the side of the event */
    }

    .event-title {
        font-weight: bold;
        font-size: 2em;
        color: black;
        font-family: 'Kanit', sans-serif;
        margin-bottom: 10px;
        margin-right: 20px; /* Add right margin */
    }

    .event-date {
        font-weight: bold;
        font-size: 1.11em;
        color: #646464;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 10px;
        margin-right: 20px; /* Add right margin */
    }

    .event-description {
        font-size: 1.11em;
        color: #646464;
        font-family: 'Roboto', sans-serif;
        margin-bottom: 10px;
    }

    /* Responsive adjustments */
    @media (max-width: 1205px) {
        .event {
            flex-direction: column; /* Change flex direction to stack content vertically */
            align-items: flex-start; /* Align items to the start */
        }

        .event img {
            margin-right: 0; /* Remove right margin for image */
            margin-bottom: 20px; /* Add bottom margin for image */
        }

        .event-details {
            margin-right: 0; /* Remove right margin for event details */
        }
    }

    .archived-events-heading {
        font-size: 2em; /* Set font size */
        font-weight: bold; /* Set font weight */
        color: #EEB120; /* Set color to EEB120 */
        margin-bottom: 20px; /* Add some bottom margin for spacing */
    }

    .archived-events-container {
        margin-top: 20px;
        margin-bottom: 50px; /* Add bottom margin to separate pinned events from others */
    }

    /* Container for button */
    .button-container {
        margin-top: 90px;
        margin-bottom: 20px;
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
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="z-index: 1000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="brand-text">
                <img src="img/logo_putih.png" alt="" style="width: 20%; margin-left: 10px;">
                <div class="lora-font">BEST CHURCH</div>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" style="text-align:center;" id="navbarNav">
                <ul class="navbar-nav" style="margin-bottom:10px;">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pelayanan">Pelayanan</a>
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

    <!-- "Kembali ke Events" button -->
    <div class="button-container">
        <button class="back-to-events-button" onclick="goBackToEvents()">Kembali ke Events</button>
    </div>

    <div class="event-header">Archived Events</div>
    <div class="event-subheader">Explore past events at YESS Surabaya >>> </div>

    <!-- Archived Events -->
    <div class="archived-events-container">
        <div class="event" event-id="5">
            <img src="img/event-photo1.png" alt="Event Photo">
            <div class="event-details">
                <div class="event-title">Putus atau Terus</div>
                <div class="event-date">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</div>
                <div class="event-description">YESS Surabaya Valentine's Day Celebration “Putus atau Terus”<br>
    Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...</div>
            </div>
        </div>

        <div class="event" event-id="6">
            <img src="img/event-photo2.png" alt="Event Photo">
            <div class="event-details">
                <div class="event-title">YESS Leardership Mission Training VII</div>
                <div class="event-date">Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</div>
                <div class="event-description">Biarlah semangat misi terus menyala dalam hidup kita.<br>
    Uis Neno nokan kit, Immanuel!<br>
    Sampe ketemu di YLMT, basodara dong!</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid" style="background-color: black; color: white; border-radius: 30px 30px 0 0;">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
                <img src="img/ig.png" alt="Instagram">
                <img src="img/tiktok.png" alt="TikTok">
                <img src="img/yt.png" alt="YouTube">
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <span style="font-family: 'Roboto', sans-serif; font-size: 20px; margin-top: 20px;">Contact Us</span>
                <img src="img/wa.png" alt="WhatsApp">
            </div>
        </div>
    </div>

    <script>
        // Function to redirect to the event detail page
        function redirectToEventDetail(eventId) {
            // Construct the URL for the event detail page using the eventId
            var eventDetailURL = "event-detail.blade.php?id=" + eventId;
            
            // Redirect the user to the event detail page
            window.location.href = eventDetailURL;
        }

        // Function to attach event listeners to event elements
        function attachEventListeners() {
            // Add event listener to all elements with class 'event'
            document.querySelectorAll('.event').forEach(event => {
                event.addEventListener('click', function() {
                    // Retrieve the event-id from the clicked event element
                    var eventId = this.getAttribute('event-id');

                    // Redirect to the event detail page
                    redirectToEventDetail(eventId);
                });
            });
        }

        // Call attachEventListeners initially
        attachEventListeners();

        // Function to go back to the events page
        function goBackToEvents() {
            window.location.href = "event.blade.php"; // Redirect to event.blade.php
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
