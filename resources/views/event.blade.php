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
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap');

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

    .modal-header {
        background-color: #F4F4F4;
        padding: 20px; /* Add padding to create space */
    }

    .modal-event-title {
        font-weight: bold;
        font-size: 1.5em;
        color: black;
        font-family: 'Kanit', sans-serif;
        word-wrap: break-word; /* Allow long words to break and wrap */
    }

    .modal-body {
        background-color: #f2f2f2;
        padding: 0 60px; /* Add 60px padding on the left and right sides */
    }

    /* Form */
    .modal-custom-width {
        max-width: 982px;
        width: 100%;
    }

    .form-label-daftar {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.11em;
        font-weight: normal; /* Regular weight */
    }

    .form-label-alergi, .form-label-informasi {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.33em;
        font-weight: medium;
    }

    .modal-body small {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.11em;
        font-weight: medium;
        color: #6D6D6D;
    }
    
    .modal-body img {
        max-width: 100%; /* Ensure the image does not exceed the modal's width */
        height: auto; /* Maintain the aspect ratio of the image */
    }

    .image-container {
        position: relative; /* Set position to relative */
    }

    .image-text-container {
        position: absolute; /* Set position to absolute */
        top: 50%; /* Align to the vertical center */
        left: 50%; /* Align to the horizontal center */
        transform: translate(-50%, -50%); /* Center the text */
        text-align: center; /* Center align the text */
        width: 90%; /* Set the width to 80% of its container */
    }

    .image-text-1 {
        font-family: 'Roboto Slab', serif; /* Use Roboto Slab font */
        font-weight: bold;
        font-size: 1.77em;
        color: white;
        width: 100%; /* Set the width to 100% */
        margin: 0 auto; /* Center the element horizontally */
        text-align: center; /* Center the text horizontally */
        display: flex; /* Use flexbox */
        justify-content: center; /* Center the content horizontally */
        align-items: center; /* Center the content vertically */
        padding: 20px; /* Increase padding to provide more space around the text */
        box-sizing: border-box; /* Include padding in the width calculation */
    }

    .image-text-2 {
        font-family: 'Inter', sans-serif;
        font-size: 0.83em;
        color: white;
    }

    .image-container img {
        width: 100%; /* Ensure the image fills its container */
        height: auto; /* Maintain aspect ratio */
    }


    .modal-footer {
        background-color: #a2a2a2;
    }

    /* CSS for cancel button */
    .btn-cancel {
        background-color: #ffffff; /* White background */
        color: #000000; /* Black text color */
        font-family: 'DM Sans', sans-serif;
        font-size: 1.11em;
        font-weight: bold; /* Bold weight */
        width: 150px; /* Set width to 150px */
    }

    /* Hover effect for cancel button */
    .btn-cancel:hover {
        background-color: #eeeeee; /* Light gray background on hover */
    }

    /* CSS for submit button */
    .btn-submit {
        background-color: #000000; /* Black background */
        color: #ffffff; /* White text color */
        font-family: 'DM Sans', sans-serif;
        font-size: 1.11em;
        font-weight: bold; /* Bold weight */
        width: 150px; /* Set width to 150px */
    }

    /* Hover effect for submit button */
    .btn-submit:hover {
        background-color: #333333; /* Darker gray background on hover */
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

<?php
// Initialize $events array with test data
$events = [
    [
        'id' => 1,
        'title' => 'Event Title 1 Event Title 1',
        'date' => 'Event Date 1 Event Date 1',
        'description' => 'Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1 Event Description 1Event Description 1', 
        'image' => 'img/event-photo1.jpg'
    ],
    [
        'id' => 2,
        'title' => 'Event Title 2 Event Title 2 Event Title 2 Event Title 2 Event Title 2 Event Title 2',
        'date' => 'Event Date 2 Event Date 2 Event Date 2 Event Date 2 Event Date 2 Event Date 2',
        'description' => 'Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2 Event Description 2',
        'image' => 'img/event-photo2.jpg'
    ],
    [
        'id' => 3,
        'title' => 'Event Title 3 Event Title 3 Event Title 3 Event Title 3 Event Title 3 Event Title 3',
        'date' => 'Event Date 3 Event Date 3 Event Date 3 Event Date 3 Event Date 3 Event Date 3',
        'description' => 'Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3 Event Description 3',
        'image' => 'img/event-photo3.jpg'
    ],
    [
        'id' => 4,
        'title' => 'Event Title 4 Event Title 4 Event Title 4 Event Title 4 Event Title 4 Event Title 4',
        'date' => 'Event Date 4 Event Date 4 Event Date 4 Event Date 4 Event Date 4 Event Date 4',
        'description' => 'Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4 Event Description 4',
        'image' => 'img/event-photo4.jpg'
    ]
];
?>

<!-- Pinned Events Heading -->
<div class="pinned-events-heading">Pinned Events</div>

<!-- Modal -->
<?php foreach ($events as $event): ?>
<div class="modal fade" id="formModal<?php echo $event['id']; ?>" tabindex="-1" aria-labelledby="formModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-custom-width">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal-event-title" id="formModalLabel<?php echo $event['id']; ?>"><?php echo $event['title']; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <label for="daftar<?php echo $event['id']; ?>" class="form-label form-label-daftar">Bagi jemaat yang ingin mendaftar dalam event YESS Surabaya silahkan mengisi form pendaftaran event dibawah ini.</label>
                <!-- Alergi Anda -->
                <div class="mb-3">
                    <label for="alergi<?php echo $event['id']; ?>" class="form-label form-label-alergi">Alergi Anda (jika tidak punya, isi "-")</label>
                    <textarea class="form-control" id="alergi<?php echo $event['id']; ?>" rows="3" placeholder="Masukkan alergi Anda jika ada"></textarea>
                </div>
                <!-- Informasi keluarga yang dapat dihubungi -->
                <div class="mb-3">
                    <label for="informasi<?php echo $event['id']; ?>" class="form-label form-label-informasi">Informasi keluarga yang dapat dihubungi</label>
                    <textarea class="form-control" id="informasi<?php echo $event['id']; ?>" rows="3" placeholder="Masukkan nama dan nomor telepon keluarga yang dapat dihubungi"></textarea>
                    <small>*sertakan nama dan nomor telepon aktif</small>
                </div>
                <div class="image-container">
                    <div class="image-text-container">
                        <p class="image-text-1">Cari circle rohani yang sehat dan bikin semangat?</p>
                        <p class="image-text-2">YUK SINI MERAPAT!</p>
                    </div>
                    <img src="img/form.jpg" alt="Image">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-submit">Submit</button>
                <!-- You can include additional buttons or actions here -->
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- Pinned Events -->
<div class="pinned-events-container">
    <!-- Event 1 -->
    <div class="event" event-id="<?php echo $events[0]['id']; ?>">
        <img src="<?php echo $events[0]['image']; ?>" alt="Event Photo">
        <div class="event-details">
            <div class="event-title"><?php echo $events[0]['title']; ?></div>
            <div class="event-date"><?php echo $events[0]['date']; ?></div>
            <div class="event-description"><?php echo $events[0]['description']; ?></div>
        </div>
        <button class="daftar-button" data-bs-toggle="modal" data-bs-target="#formModal<?php echo $events[0]['id']; ?>" onclick="openFormModal(<?php echo $events[0]['id']; ?>)">Daftar -></button>
    </div>

    <!-- Event 2 -->
    <div class="event" event-id="<?php echo $events[1]['id']; ?>">
        <img src="<?php echo $events[1]['image']; ?>" alt="Event Photo">
        <div class="event-details">
            <div class="event-title"><?php echo $events[1]['title']; ?></div>
            <div class="event-date"><?php echo $events[1]['date']; ?></div>
            <div class="event-description"><?php echo $events[1]['description']; ?></div>
        </div>
        <button class="daftar-button" data-bs-toggle="modal" data-bs-target="#formModal<?php echo $events[1]['id']; ?>" onclick="openFormModal(<?php echo $events[1]['id']; ?>)">Daftar -></button>
    </div>
</div>

<!-- Other Events -->
<div class="other-events-container">
    <!-- Event 3 -->
    <div class="event" event-id="<?php echo $events[2]['id']; ?>">
        <img src="<?php echo $events[2]['image'] ?>" alt="Event Photo">
        <div class="event-details">
            <div class="event-title"><?php echo $events[2]['title']; ?></div>
            <div class="event-date"><?php echo $events[2]['date']; ?></div>
            <div class="event-description"><?php echo $events[2]['description']; ?></div>
        </div>
        <button class="daftar-button" data-bs-toggle="modal" data-bs-target="#formModal<?php echo $events[2]['id']; ?>" onclick="openFormModal(<?php echo $events[2]['id']; ?>)">Daftar -></button>
    </div>

    <!-- Event 4 -->
    <div class="event" event-id="<?php echo $events[3]['id']; ?>">
        <img src="<?php echo $events[3]['image']; ?>" alt="Event Photo">
        <div class="event-details">
            <div class="event-title"><?php echo $events[3]['title']; ?></div>
            <div class="event-date"><?php echo $events[3]['date']; ?></div>
            <div class="event-description"><?php echo $events[3]['description']; ?></div>
        </div>
        <button class="daftar-button" data-bs-toggle="modal" data-bs-target="#formModal<?php echo $events[3]['id']; ?>" onclick="openFormModal(<?php echo $events[3]['id']; ?>)">Daftar -></button>
    </div>
</div>

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
    function openFormModal(eventId) {
        event.stopPropagation(); // Stop event propagation to prevent opening detail events
        // $('#formModal' + eventId).modal('show'); // Show the modal corresponding to the event ID
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

    // Function to redirect to the archived events page
    function showArchivedEvents() {
        window.location.href = "/archived"; // Redirect to archived-event.blade.php
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>