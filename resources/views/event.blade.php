<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap');

        body {
            background-color: white;
            /* Set the background color to white */
            color: #000000;
            /* Set text color to black */
            padding: 20px;
            /* Add some padding for better readability */
        }

        .event-header-container {
            display: flex;
            /* Enable flexbox layout */
            align-items: center;
            /* Align items vertically */
            margin-top: 70px;
            /* Adjust the top margin to match the height of the navbar */
        }

        .event-header {
            font-family: 'Kanit', sans-serif;
            /* Set font family */
            text-align: left;
            /* Align text to left */
            font-size: 3em;
            /* Set font size to 3em */
            color: black;
            /* Set color to black */
            font-weight: bold;
            /* Set font weight to bold */
            margin-right: 20px;
            /* Add right margin to create some distance */
        }

        .header-text {
            flex: 1;
            /* Take up remaining space */
        }

        /* Dropdown */

        .dropdown {
            margin-left: 10px;
            /* Add some left margin */
        }

        .custom-dropdown-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 1em;
            background-color: #EEB120;
            /* Set background color to EEB120 */
            border-color: #EEB120;
            /* Set border color to match background color */
            color: black;
            padding: 10px 20px;
            /* Adjust padding for more space around the text */
            min-width: 120px;
            /* Set a minimum width to ensure button visibility */
        }

        .custom-dropdown-button:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }

        .custom-dropdown-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(238, 177, 32, 0.5);
            /* Add focus style */
        }

        .event-subheader {
            font-family: 'Open Sans Hebrew', sans-serif;
            /* Set font family */
            text-align: left;
            /* Align text to left */
            font-size: 2em;
            /* Set font size to 2em */
            margin-top: 20px;
            /* Add some top margin for spacing */
            color: black;
            /* Set color to black */
            font-weight: lighter;
            /* Set font weight to lighter */
        }

        .event {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            max-width: 1205px;
            /* Set max-width to maintain responsiveness */
            height: auto;
            /* Change height to auto for responsiveness */
            margin: 0 auto;
            /* Center align by setting left and right margin to auto */
            margin-bottom: 20px;
            border: 1px solid #F4F4F4;
            background-color: #F4F4F4;
            cursor: pointer;
            padding: 20px;
            /* Add padding to create space between the event and its content */
        }

        .event img {
            width: 340px;
            /* Set width to 340px */
            height: auto;
            margin-right: 20px;
        }

        .event:hover:not(.event:hover .daftar-button) {
            background-color: #e1e1e1;
            /* Change background color on hover */
        }

        .event-details {
            flex: 1;
            /* Take remaining space */
            margin-right: 20px;
            /* Add margin to create space between the text and the side of the event */
        }

        .event-title {
            font-weight: bold;
            font-size: 2em;
            color: black;
            font-family: 'Kanit', sans-serif;
            margin-bottom: 10px;
            margin-right: 20px;
            /* Add right margin */
        }

        .event-date {
            font-weight: bold;
            font-size: 1.11em;
            color: #646464;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 10px;
            margin-right: 20px;
            /* Add right margin */
        }

        .event-description {
            font-size: 1.11em;
            color: #646464;
            font-family: 'Roboto', sans-serif;
            margin-bottom: 10px;
        }

        .daftar-button {
            position: absolute;
            /* Set absolute positioning */
            bottom: 10px;
            /* Adjust bottom spacing */
            right: 10px;
            /* Adjust right spacing */
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

        /* Modal */
        .modal-dialog {
            max-width: 90%;
            /* Set max-width to 90% of the viewport width */
            width: auto;
            /* Allow modal to expand based on content */
        }

        /* Modal Content */
        .modal-content {
            width: 100%;
            /* Set width to 100% */
        }

        .modal-header {
            background-color: #F4F4F4;
            padding: 20px;
            /* Add padding to create space */
        }

        .modal-event-title {
            font-weight: bold;
            font-size: 1.5em;
            color: black;
            font-family: 'Kanit', sans-serif;
            word-wrap: break-word;
            /* Allow long words to break and wrap */
        }

        .modal-body {
            background-color: #f2f2f2;
            padding: 0 60px;
            /* Add 60px padding on the left and right sides */
        }

        /* Modal */
        .modal-dialog {
            max-width: 90%;
            /* Set initial max-width to 90% of the viewport width */
            width: auto;
            /* Allow modal to expand based on content */
        }

        /* Set max-width for larger screens */
        @media (min-width: 1200px) {
            .modal-dialog {
                max-width: 982px;
                /* Set max-width to 982px for screens wider than 1200px */
            }
        }

        .form-label-daftar {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.11em;
            font-weight: normal;
            /* Regular weight */
        }

        .form-label-alergi,
        .form-label-informasi {
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
            max-width: 100%;
            /* Ensure the image does not exceed the modal's width */
            height: auto;
            /* Maintain the aspect ratio of the image */
        }

        .image-container {
            position: relative;
            /* Set position to relative */
        }

        .image-text-container {
            position: absolute;
            /* Set position to absolute */
            top: 50%;
            /* Align to the vertical center */
            left: 50%;
            /* Align to the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the text */
            text-align: center;
            /* Center align the text */
            width: 90%;
            /* Set the width to 80% of its container */
        }

        .image-text-1 {
            font-family: 'Roboto Slab', serif;
            /* Use Roboto Slab font */
            font-weight: bold;
            font-size: 1.77em;
            color: white;
            width: 100%;
            /* Set the width to 100% */
            margin: 0 auto;
            /* Center the element horizontally */
            text-align: center;
            /* Center the text horizontally */
            display: flex;
            /* Use flexbox */
            justify-content: center;
            /* Center the content horizontally */
            align-items: center;
            /* Center the content vertically */
            padding: 20px;
            /* Increase padding to provide more space around the text */
            box-sizing: border-box;
            /* Include padding in the width calculation */
        }

        .image-text-2 {
            font-family: 'Inter', sans-serif;
            font-size: 0.83em;
            color: white;
        }

        .image-container img {
            width: 100%;
            /* Ensure the image fills its container */
            height: auto;
            /* Maintain aspect ratio */
        }

        .modal-footer {
            background-color: #a2a2a2;
        }

        /* For smaller screens */
        @media (max-width: 576px) {
            .image-text-container {
                width: 80%;
                /* Adjust the width for smaller screens */
                max-width: 300px;
                /* Limit the maximum width */
            }

            .image-text-1 {
                font-size: 1.3em;
                /* Decrease the font size for smaller screens */
                padding: 10px;
                /* Adjust padding for smaller screens */
            }

            .image-text-2 {
                font-size: 0.7em;
                /* Decrease the font size for smaller screens */
            }
        }

        /* For larger screens */
        @media (min-width: 992px) {
            .image-text-container {
                width: 70%;
                /* Adjust the width for larger screens */
                max-width: 400px;
                /* Limit the maximum width */
            }

            .image-text-1 {
                font-size: 1.5em;
                /* Increase the font size for larger screens */
                padding: 20px;
                /* Adjust padding for larger screens */
            }

            .image-text-2 {
                font-size: 1em;
                /* Increase the font size for larger screens */
            }
        }

        /* CSS for cancel button */
        .btn-cancel {
            background-color: #ffffff;
            /* White background */
            color: #000000;
            /* Black text color */
            font-family: 'DM Sans', sans-serif;
            font-size: 1.11em;
            font-weight: bold;
            /* Bold weight */
            width: 150px;
            /* Set width to 150px */
        }

        /* Hover effect for cancel button */
        .btn-cancel:hover {
            background-color: #eeeeee;
            /* Light gray background on hover */
        }

        /* CSS for submit button */
        .btn-submit {
            background-color: #000000;
            /* Black background */
            color: #ffffff;
            /* White text color */
            font-family: 'DM Sans', sans-serif;
            font-size: 1.11em;
            font-weight: bold;
            /* Bold weight */
            width: 150px;
            /* Set width to 150px */
        }

        /* Hover effect for submit button */
        .btn-submit:hover {
            background-color: #333333;
            /* Darker gray background on hover */
        }

        /* Responsive adjustments */
        @media (max-width: 1205px) {
            .event {
                flex-direction: column;
                /* Change flex direction to stack content vertically */
                align-items: flex-start;
                /* Align items to the start */
            }

            .event img {
                margin-right: 0;
                /* Remove right margin for image */
                margin-bottom: 20px;
                /* Add bottom margin for image */
            }

            .event-details {
                margin-right: 0;
                /* Remove right margin for event details */
            }

            .daftar-button {
                position: static;
                /* Change position to static for button */
                margin-top: 20px;
                /* Add top margin for button */
                align-self: center;
                /* Center button horizontally */
            }
        }

        .events-container {
            margin-top: 20px;
            /* Add top margin to separate the subheader from the first event */
            margin-bottom: 50px;
            /* Add bottom margin to separate pinned events from others */
        }

        /* CSS for the "Show Archived Events" button */
        .show-archived-button {
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #FFCC00;
            /* Yellow background color */
            color: #ffffff;
            /* White text color */
            border: none;
            /* Remove border */
            border-radius: 10px;
            /* Add rounded corners */
            cursor: pointer;
            /* Change cursor to pointer on hover */
            transition: background-color 0.3s ease;
            /* Smooth transition for background color change */
        }

        /* Change button background color on hover */
        .show-archived-button:hover {
            background-color: #eeb120;
            /* Darker yellow on hover */
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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->is_admin)
                                    <!-- Assuming there's an 'is_admin' attribute -->
                                    <li><a class="dropdown-item" href="/admin">Admin Dashboard</a></li>
                                @endif
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link login-link-border" href="/login">Login</a>
                        </li>
                    </ul>
                @endauth

            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="event-header-container">
        <div class="event-header">
            <div class="header-text">Upcoming Events</div>
        </div>
        <!-- Dropdown for event filtering -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle custom-dropdown-button" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Button for the dropdown text that will be replaced by the js method
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#" id="upcoming">Upcoming</a></li>
                <li><a class="dropdown-item" href="#" id="archived">Archived</a></li>
            </ul>
        </div>
    </div>
    <div class="event-subheader">
        Event subheader content that will be replaced by the js method
    </div>

    <?php
        $events = [
            [
                'id' => 1,
                'title' => 'Putus atau Terus 1',
                'location' => 'Ciputra World Mall 2nd floor',
                'description' => 'YESS Surabaya Valentine\'s Day Celebration "Putus atau Terus"
                Ini adalah kesempatan untuk terinspirasi sebagai pasangan!
                juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...', 
                'start_date' => '2024-03-30',
                'start_time' => '16:30',
                'end_date' => '2024-03-30',
                'end_time' => '19:30',
                'image' => 'img/event-photo1.png',
                'registered_people' => ['Andi', 'Bagus', 'Cahyono'],
                'archived' => false
            ],
            [
                'id' => 2,
                'title' => 'YESS Leardership Mission Training VII',
                'location' => 'Desa Birkium, Soe, Nusa Tenggara Timur',
                'description' => 'Biarlah semangat misi terus menyala dalam hidup kita.
                Uis Neno nokan kit, Immanuel!
                Sampe ketemu di YLMT, basodara dong!',
                'start_date' => '2024-04-19',
                'start_time' => null,
                'end_date' => '2024-04-21',
                'end_time' => null,
                'image' => 'img/event-photo2.png',
                'registered_people' => ['Desi', 'Endah', 'Marwoto', 'SBC Ganteng'],
                'archived' => false
            ],
            [
                'id' => 3,
                'title' => 'Putus atau Terus 2',
                'location' => 'Ciputra World Mall 2nd floor',
                'description' => 'YESS Surabaya Valentine\'s Day Celebration "Putus atau Terus"
                Ini adalah kesempatan untuk terinspirasi sebagai pasangan!
                juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...', 
                'start_date' => '2024-03-30',
                'start_time' => '16:30',
                'end_date' => '2024-03-30',
                'end_time' => '19:30',
                'image' => 'img/event-photo3.png',
                'registered_people' => [],
                'archived' => true
            ],
            [
                'id' => 4,
                'title' => 'YESS Leardership Mission Training VIII',
                'location' => 'Desa Birkium, Soe, Nusa Tenggara Timur',
                'description' => 'Biarlah semangat misi terus menyala dalam hidup kita.
                Uis Neno nokan kit, Immanuel!
                Sampe ketemu di YLMT, basodara dong!',
                'start_date' => '2024-04-19',
                'start_time' => null,
                'end_date' => '2024-04-21',
                'end_time' => null,
                'image' => 'img/event-photo4.png',
                'registered_people' => [],
                'archived' => true
            ]
        ];
    ?>

    <!-- Modal -->
    <?php foreach ($events as $event): ?>
    <div class="modal fade" id="formModal<?php echo $event['id']; ?>" tabindex="-1"
        aria-labelledby="formModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-custom-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-event-title" id="formModalLabel<?php echo $event['id']; ?>">
                        <?php echo $event['title']; ?>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your form content goes here -->
                    <label for="daftar<?php echo $event['id']; ?>" class="form-label form-label-daftar">Bagi jemaat yang ingin
                        mendaftar dalam event YESS Surabaya silahkan mengisi form pendaftaran event dibawah ini.</label>
                    <!-- Alergi Anda -->
                    <div class="mb-3">
                        <label for="alergi<?php echo $event['id']; ?>" class="form-label form-label-alergi">Alergi Anda (jika
                            tidak punya, isi "-")</label>
                        <textarea class="form-control" id="alergi<?php echo $event['id']; ?>" rows="3"
                            placeholder="Masukkan alergi Anda jika ada"></textarea>
                    </div>
                    <!-- Informasi keluarga yang dapat dihubungi -->
                    <div class="mb-3">
                        <label for="informasi<?php echo $event['id']; ?>" class="form-label form-label-informasi">Informasi
                            keluarga yang dapat dihubungi</label>
                        <textarea class="form-control" id="informasi<?php echo $event['id']; ?>" rows="3"
                            placeholder="Masukkan nama dan nomor telepon keluarga yang dapat dihubungi"></textarea>
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

    <!-- Events -->
    <div class="events-container">
        <?php foreach ($events as $event): ?>
            <!-- Display all events initially with a class 'event' -->
            <div class="event" event-id="<?php echo $event['id']; ?>" <?php echo $event['archived'] ? 'data-archived="true"' : 'data-archived="false"'; ?>>
                <img src="<?php echo $event['image']; ?>" alt="Event Photo">
                <div class="event-details">
                    <div class="event-title"><?php echo $event['title']; ?></div>
                    <div class="event-date">
                        <?php
                            // Fill the event location and date/time (time is optional)
                            echo $event['location'].' | '.$event['start_date'].(isset($event['start_time']) ? ' '.$event['start_time'] : '').' - '.$event['end_date'].(isset($event['end_time']) ? ' '.$event['end_time'] : '');
                        ?>
                    </div>
                    <div class="event-description"><?php echo $event['description']; ?></div>
                </div>
                <button class="daftar-button" data-bs-toggle="modal" data-bs-target="#formModal<?php echo $event['id']; ?>" onclick="openFormModal(<?php echo $event['id']; ?>)">Daftar <i class="fas fa-chevron-right"></i></button>
            </div>
        <?php endforeach; ?>
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

        // Function to handle button click and redirect to the corresponding form event page
        function openFormModal(eventId) {
            event.stopPropagation(); // Stop event propagation to prevent opening detail events
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

        // Set the initial button text to "Upcoming"
        document.getElementById("dropdownMenuButton").innerText = "Upcoming";

        // Set the "Upcoming" option as selected by default when the page loads
        window.onload = function() {
            document.getElementById("upcoming").classList.add("active");
            // Set the initial selectedDropdown value to "upcoming"
            var selectedDropdown = "upcoming";
            updateEvents(selectedDropdown); // Call the function to update events with the initial value
            updateEventSubheader(selectedDropdown); // Call the function to update the event subheader with the initial value
        };

        // Update the button text and apply the active class when an option is clicked
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', event => {
                // Remove the active class from all options
                document.querySelectorAll('.dropdown-item').forEach(option => {
                    option.classList.remove('active');
                });

                // Add the active class to the clicked option
                event.target.classList.add('active');

                // Update the button text to the selected option
                document.getElementById("dropdownMenuButton").innerText = event.target.innerText;

                // Get the selected dropdown value
                var selectedDropdown = event.target.id;
                // Call the function to update events with the selected value
                updateEvents(selectedDropdown);
                updateEventSubheader(selectedDropdown); // Call the function to update the event subheader with the selected value
            });
        });

        // Function to update the content of the event subheader
        function updateEventSubheader(selectedDropdown) {
            const eventSubheader = document.querySelector('.event-subheader');
            eventSubheader.innerHTML = selectedDropdown === 'upcoming' ? 'What\'s coming up at YESS Surabaya >>>' : 'Explore past events at YESS Surabaya >>>';
        }
        
        // JavaScript function to handle dropdown change
        function updateEvents(selectedDropdown) {
            // Loop through all events and hide/show them based on the selected dropdown value
            document.querySelectorAll('.event').forEach(event => {
                const eventId = event.getAttribute('event-id');
                const eventInfo = <?php echo json_encode($events); ?>;
                const eventData = eventInfo.find(e => e.id === parseInt(eventId));

                if (selectedDropdown === 'upcoming' && !eventData.archived) {
                    event.style.display = 'block'; // Show the event
                } else if (selectedDropdown === 'archived' && eventData.archived) {
                    event.style.display = 'block'; // Show the event
                } else {
                    event.style.display = 'none'; // Hide the event
                }

                // Check if the "Daftar" button exists in the event
                const daftarButton = event.querySelector('.daftar-button');
                if (daftarButton) {
                    // If the button exists, hide it when the "Archived" option is selected
                    daftarButton.style.display = selectedDropdown === 'archived' ? 'none' : 'block';
                }
            });
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
