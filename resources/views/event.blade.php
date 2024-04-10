<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>YESS.SUB | Event</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
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

    .daftar-button {
        position: absolute; /* Set absolute positioning */
        bottom: 10px; /* Adjust bottom spacing */
        right: 10px; /* Adjust right spacing */
        background-color: #FFD700;
        color: #FFFFFF;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .daftar-button:hover {
        background-color: #FFCC00;
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

        .daftar-button {
            position: static; /* Change position to static for button */
            margin-top: 20px; /* Add top margin for button */
            align-self: center; /* Center button horizontally */
        }


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

    /* CSS for the "Show More Events" button */
    .show-more-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff; /* Blue background color */
        color: #fff; /* White text color */
        border: none; /* Remove border */
        border-radius: 10px; /* Add rounded corners */
        cursor: pointer; /* Change cursor to pointer on hover */
        transition: background-color 0.3s ease; /* Smooth transition for background color change */
    }

    /* Change button background color on hover */
    .show-more-button:hover {
        background-color: #0056b3; /* Darker blue on hover */
    }

    /* CSS for the "Show Archived Events" button */
    .show-archived-button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #FFCC00; /* Yellow background color */
        color: #ffffff; /* White text color */
        border: none; /* Remove border */
        border-radius: 10px; /* Add rounded corners */
        cursor: pointer; /* Change cursor to pointer on hover */
        transition: background-color 0.3s ease; /* Smooth transition for background color change */
    }

    /* Change button background color on hover */
    .show-archived-button:hover {
        background-color: #eeb120; /* Darker yellow on hover */
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="z-index: 1000;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <div class="brand-text">
          <img src="img/logo_putih.png" alt="" style="width: 20%; margin-left: 10px;">
          <!-- download logo YESS PUTIH -->
          <div class="lora-font">BEST CHURCH</div>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/pelayanan">Pelayanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/komsel">KomSel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bareng">Bareng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/event">Event</a>
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
    <div class="event" event-id="1">
        <img src="img/event-photo1.jpg" alt="Event Photo">
        <div class="event-details">
            <div class="event-title">Putus atau Terus</div>
            <div class="event-date">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</div>
            <div class="event-description">YESS Surabaya Valentine's Day Celebration “Putus atau Terus”<br>
Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...</div>
        </div>
        <button class="daftar-button">Daftar -></button>
    </div>

    <div class="event" event-id="2">
        <img src="img/event-photo2.jpg" alt="Event Photo">
        <div class="event-details">
            <div class="event-title">YESS Leardership Mission Training VII</div>
            <div class="event-date">Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</div>
            <div class="event-description">Biarlah semangat misi terus menyala dalam hidup kita.<br>
Uis Neno nokan kit, Immanuel!<br>
Sampe ketemu di YLMT, basodara dong!</div>
        </div>
        <button class="daftar-button">Daftar -></button>
    </div>
</div>

<!-- Other Events -->
<div class="other-events-container">
    <!-- Other events will be added dynamically -->
</div>

<button class="show-more-button" onclick="showMoreEvents()">Show More Events</button>

<!-- Button to show archived events -->
<button class="show-archived-button" onclick="showArchivedEvents()">Show Archived Events</button>

<script>
    // Function to redirect to the event detail page
    function redirectToEventDetail(eventId) {
        // Construct the URL for the event detail page using the eventId
        var eventDetailURL = "event-detail.blade.php?id=" + eventId;
        
        // Redirect the user to the event detail page
        window.location.href = eventDetailURL;
    }

    // Function to handle button click and redirect to the corresponding form event page
    function redirectToFormEvent(eventId) {
        // Construct the URL for the form event page using the eventId
        var formEventURL = "form-event.blade.php?id=" + eventId;

        // Redirect to the form event page
        window.location.href = formEventURL;
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

            // Add event listener to 'daftar' buttons within each event
            event.querySelector('.daftar-button').addEventListener('click', function(event) {
                event.stopPropagation(); // Prevent event propagation to parent elements

                // Retrieve the event-id from the closest event element
                var eventId = this.closest('.event').getAttribute('event-id');

                // Redirect to the form event page
                redirectToFormEvent(eventId);
            });
        });
    }

    // Call attachEventListeners initially
    attachEventListeners();

    function showMoreEvents() {
        var eventsContainer = document.querySelector('.other-events-container');
        var button = document.querySelector('.show-more-button');

        // Add more events below the button
        for (var i = 0; i < 2; i++) { // Add 2 more events
            var eventId = (i + 3); // Generate unique eventId
            var eventDiv = document.createElement('div');
            eventDiv.classList.add('event');
            eventDiv.setAttribute('event-id', eventId); // Set event-id attribute

            var eventContent = `
                <img src="img/event-photo${i + 3}.jpg" alt="Event Photo">
                <div class="event-details">
                    <div class="event-title">Event Title ${i + 3}</div>
                    <div class="event-date">Event Date ${i + 3}</div>
                    <div class="event-description">A little bit of the event description ${i + 3}</div>
                </div>
                <button class="daftar-button">Daftar -></button>
            `;
            eventDiv.innerHTML = eventContent;

            eventsContainer.appendChild(eventDiv);
        }

        // Scroll to the position of the first newly generated event
        var firstNewEvent = eventsContainer.querySelector('.event');
        if (firstNewEvent) {
            firstNewEvent.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Attach event listeners to the newly added events
        attachEventListeners();

        // Hide the button after it's clicked
        button.style.display = 'none';
    }

    // Function to redirect to the archived events page
    function showArchivedEvents() {
        window.location.href = "/archived"; // Redirect to archived-event.blade.php
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
