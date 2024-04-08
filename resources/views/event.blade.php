<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YESS.SUB | Event</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
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
        margin-top: 50px; /* Add some top margin for spacing */
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

    .events-container {
        margin-top: 50px; /* Add some top margin for spacing */
    }
    
    .event {
        margin-bottom: 20px;
        border: 1px solid #F4F4F4; /* Add border with color #F4F4F4 */
        padding: 20px; /* Add padding */
        background-color: #F4F4F4; /* Fill the box with color #F4F4F4 */
    }

    .event-details {
        display: inline-block;
        vertical-align: top;
        margin-left: 20px;
    }
    
    .event img {
        width: 340px; /* Set width to 340px */
        height: 242px; /* Set height to 242px */
        display: block;
    }
    
    .event-title {
        font-weight: bold;
        font-size: 2em; /* Set font size to 2em */
        color: black; /* Set color to black */
        font-family: 'Kanit', sans-serif; /* Set font family */
    }
    
    .event-date {
        font-weight: bold; /* Set font weight to bold */
        font-size: 1.11em; /* Set font size to 1.11em */
        color: #646464; /* Set color to #646464 */
        font-family: 'Roboto', sans-serif; /* Set font family */
    }
    
    .event-description {
        margin-top: 32px; /* Add top margin for spacing */
        font-size: 1.11em; /* Set font size to 1.11em */
        color: #646464; /* Set color to #646464 */
        font-family: 'Roboto', sans-serif; /* Set font family */
    }

    .pinned-events-heading {
        font-size: 2em; /* Set font size */
        font-weight: bold; /* Set font weight */
        color: #EEB120; /* Set color to EEB120 */
        margin-bottom: 20px; /* Add some bottom margin for spacing */
    }

    .pinned-events-container {
        margin-bottom: 50px; /* Add bottom margin to separate pinned events from others */
    }

    .other-events-container {
        margin-top: 100px; /* Add top margin to separate other events from pinned events */
    }

    .show-more-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .event {
            width: 100%; /* On smaller screens, display events in a single column */
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

<div class="event-header">Upcoming Events</div>
<div class="event-subheader">What's coming up at YESS Surabaya >>> </div>

<!-- Pinned Events Heading -->
<div class="pinned-events-heading">Pinned Events</div>

<!-- Pinned Events -->
<div class="pinned-events-container">
    <div class="events-container">
    <div class="event">
        <img src="event-photo1.jpg" alt="Event Photo">
        <div class="event-details">
            <div class="event-title">Putus atau Terus</div>
            <div class="event-date">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</div>
            <div class="event-description">YESS Surabaya Valentine’s Day Celebration “Putus atau Terus”
Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...</div>
        </div>
    </div>

    <div class="event">
        <img src="img/event-photo2.jpg" alt="Event Photo">
        <div class="event-details">
            <div class="event-title">Event Title 2</div>
            <div class="event-date">Event Date 2</div>
            <div class="event-description">A little bit of the event description 2</div>
        </div>
    </div>

    <div class="event">
        <img src="img/event-photo3.jpg" alt="Event Photo">
        <div class="event-details">
            <div class="event-title">Event Title 3</div>
            <div class="event-date">Event Date 3</div>
            <div class="event-description">A little bit of the event description 3</div>
        </div>
    </div>

    <div class="event">
        <img src="img/event-photo4.jpg" alt="Event Photo">
        <div class="event-details">
            <div class="event-title">Event Title 4</div>
            <div class="event-date">Event Date 4</div>
            <div class="event-description">A little bit of the event description 4</div>
        </div>
    </div>
    </div>
</div>

<!-- Other Events -->
<div class="other-events-container">
    <!-- Other events will be added dynamically -->
</div>

<button class="show-more-button" onclick="showMoreEvents()">Show More Events</button>

<script>
function showMoreEvents() {
    var eventsContainer = document.querySelector('.other-events-container');
    var button = document.querySelector('.show-more-button');

    // Add more events below the button
    for (var i = 0; i < 6; i++) { // Add 6 more events
        var eventDiv = document.createElement('div');
        eventDiv.classList.add('event');

        var eventContent = `
            <img src="img/event-photo${i + 5}.jpg" alt="Event Photo">
            <div class="event-details">
                <div class="event-title">Event Title ${i + 5}</div>
                <div class="event-date">Event Date ${i + 5}</div>
                <div class="event-description">A little bit of the event description ${i + 5}</div>
            </div>
        `;
        eventDiv.innerHTML = eventContent;

        eventsContainer.appendChild(eventDiv);
    }

    // Scroll to the bottom of the newly added events
    var eventsContainerHeight = eventsContainer.getBoundingClientRect().height;
    var windowHeight = window.innerHeight;
    window.scrollTo({
        top: eventsContainerHeight - windowHeight,
        behavior: 'smooth'
    });

    // Hide the button after it's clicked
    button.style.display = 'none';
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
