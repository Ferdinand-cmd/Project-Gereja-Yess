<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YESS.SUB | Event</title>
  <style>
    .events-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .event {
        width: calc(50% - 10px); /* Adjust the width of each event */
        margin-bottom: 20px;
    }
    
    .event img {
        max-width: 100%;
        margin-bottom: 10px;
    }
    
    .event-details {
        width: 100%;
    }
    
    .event-title {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 5px;
    }
    
    .event-subtitle {
        font-style: italic;
        margin-bottom: 5px;
    }
    
    .event-description {
        margin-bottom: 5px;
    }
    
    .event-date {
        font-weight: bold;
        font-size: 16px;
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- YESS, BEST CHURCH, and Profile Picture -->
      <a class="navbar-brand" href="#">
        <img src="img/{{ $profile }}" class="profile-picture" alt="Profile Picture">
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
  <div class="events-container">
    <div class="event">
      <img src="event-photo1.jpg" alt="Event Photo">
      <div class="event-details">
        <div class="event-title">Event Title 1</div>
        <div class="event-subtitle">Event Subtitle 1</div>
        <div class="event-description">A little bit of the event description 1</div>
        <div class="event-date">Event Date 1</div>
      </div>
    </div>

    <div class="event">
      <img src="event-photo2.jpg" alt="Event Photo">
      <div class="event-details">
        <div class="event-title">Event Title 2</div>
        <div class="event-subtitle">Event Subtitle 2</div>
        <div class="event-description">A little bit of the event description 2</div>
        <div class="event-date">Event Date 2</div>
      </div>
    </div>

    <div class="event">
      <img src="event-photo3.jpg" alt="Event Photo">
      <div class="event-details">
        <div class="event-title">Event Title 3</div>
        <div class="event-subtitle">Event Subtitle 3</div>
        <div class="event-description">A little bit of the event description 3</div>
        <div class="event-date">Event Date 3</div>
      </div>
    </div>

    <div class="event">
      <img src="event-photo4.jpg" alt="Event Photo">
      <div class="event-details">
        <div class="event-title">Event Title 4</div>
        <div class="event-subtitle">Event Subtitle 4</div>
        <div class="event-description">A little bit of the event description 4</div>
        <div class="event-date">Event Date 4</div>
      </div>
    </div>
  </div>

  <button class="show-more-button" onclick="showMoreEvents()">Show More Events</button>

  <script>
      function showMoreEvents() {
        var eventsContainer = document.querySelector('.events-container');
        var button = document.querySelector('.show-more-button');

        // Add more events below the button
        for (var i = 0; i < 4; i++) { // Add 4 more events
          var eventDiv = document.createElement('div');
          eventDiv.classList.add('event');

          var eventContent = `
            <img src="event-photo${i + 5}.jpg" alt="Event Photo">
            <div class="event-details">
                <div class="event-title">Event Title ${i + 5}</div>
                <div class="event-subtitle">Event Subtitle ${i + 5}</div>
                <div class="event-description">A little bit of the event description ${i + 5}</div>
                <div class="event-date">Event Date ${i + 5}</div>
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
      }
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>