<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Home</title>
    <!-- Include Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: white; /* Set the background color to white */
            color: #000000; /* Set text color to black */
            padding: 20px; /* Add some padding for better readability */
        }

        .navbar {
            margin-bottom: 20px; /* Add margin-bottom to create space between the navbar and the header */
        }

        .event-header {
            font-family: 'Kanit', sans-serif; /* Set font family */
            text-align: left; /* Align text to left */
            font-size: 3em; /* Set font size to 3em */
            margin-top: 50px; /* Add some top margin for spacing */
            margin-bottom: 20px;
            color: black; /* Set color to black */
            font-weight: bold; /* Set font weight to bold */
            display: flex; /* Enable flexbox layout */
            justify-content: space-between; /* Space out the items evenly */
            align-items: center; /* Align items vertically */
        }

        .dropdown{
            display: inline-block;
            margin-left: 10px;
        }

        .custom-dropdown-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 0.4em;
            background-color: #EEB120; /* Set background color to EEB120 */
            border-color: #EEB120; /* Set border color to match background color */
            color: black;
        }

        .custom-dropdown-button:hover {
            background-color: #d4a100; /* Change background color on hover */
            border-color: #d4a100; /* Change border color on hover */
        }

        .custom-dropdown-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(238, 177, 32, 0.5); /* Add focus style */
        }

        .add-event-button {
            font-family: 'Kanit', sans-serif;
            font-weight: normal;
            font-size: 0.5em;
            background-color: black; /* Set background color to black */
            border-color: black; /* Set border color to black */
            color: #EEB120; /* Set text color to EEB120 */
            margin-left: auto; /* Align to the right */
            margin-right: 20px; /* Add some right margin for spacing */
        }

        .add-event-button:hover {
            background-color: #1a1a1a; /* Change background color on hover */
            border-color: #1a1a1a; /* Change border color on hover */
        }

        .add-event-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.5); /* Add focus style */
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

        .event-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding-left: 20px; /* Add padding to separate content from the border */
        }

        .event-buttons {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px; /* Add margin between buttons and details */
        }

        .event-buttons button {
            margin-right: 10px; /* Add margin between buttons */
        }

        .event-buttons-left,
        .event-buttons-right {
            display: flex;
            align-items: center;
        }

        .event-buttons-right {
            margin-left: auto; /* Push the right buttons to the right */
        }

        .black-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: medium; /* Use medium font weight */
            color: white;
            background-color: black;
            border-color: black;
        }

        .black-button:hover {
            color: white;
            background-color: #333; /* Darker shade of black for hover */ 
            border-color: #333;  
        }

        .black-button:focus {
            box-shadow: 0 0 0 0.15rem rgba(0, 0, 0, 0.5); /* Slightly larger shadow on focus */
        }

        .white-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: medium; /* Use medium font weight */
            color: white; /* Set text color to white */
            background-color: #EEB120; /* Set background color to EEB120 */
            border-color: #EEB120; /* Set border color to match background color */
            display: flex;
            align-items: center;
        }

        .white-button:hover {
            color: white; /* Change text color on hover */
            background-color: #d4a100; /* Change background color on hover */
            border-color: #d4a100; /* Change border color on hover */
        }

        .white-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(238, 177, 32, 0.5); /* Add focus style */
        }

        .counter-box {
            width: 30px;
            height: 30px;
            background-color: white;
            color: black;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
            margin-right: 5px;
        }

        .button-text {
            display: flex;
            flex-direction: column;
            margin-right: 5px;
        }

        .top-text {
            font-size: 0.7em;
        }

        .bottom-text {
            font-size: 0.7em;
        }

        /* CSS for the line */
        .line {
            height: 1px;
            background-color: #ccc;
            margin-top: 10px; /* Adjust margin as needed */
            margin-bottom: 10px; /* Adjust margin as needed */
        }

        /* Modal body text */
        .delete-confirmation-modal .modal-body {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            text-align: center; /* Center align the text */
        }

        /* Cancel button */
        .delete-confirmation-modal .modal-footer .btn-secondary {
            background-color: #E5E5E5;
            color: black;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
        }

        /* Delete button */
        .delete-confirmation-modal .modal-footer .btn-danger {
            background-color: black;
            color: white;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
        }

        /* Center align the buttons */
        .delete-confirmation-modal .modal-footer {
            justify-content: center;
        }

        .event-details {
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

            .daftar-button {
                position: static; /* Change position to static for button */
                margin-top: 20px; /* Add top margin for button */
                align-self: center; /* Center button horizontally */
            }
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
                    <a class="nav-link active" href="/">Home</a>
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
                    <a class="nav-link" href="/event">Event</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/event">Penjadwalan</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/event">Analisis</a>
                    </li>
                </ul>
                <ul class="navbar-nav login-link">
                    <li class="nav-item">
                    <a class="nav-link login-link-border" href="/login">Edit</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="event-header">Event
        <!-- Dropdown for event filtering -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle custom-dropdown-button" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#" id="upcoming">Upcoming</a></li>
                <li><a class="dropdown-item" href="#" id="archived">Archived</a></li>
            </ul>
        </div>

        <!-- Add Event button -->
        <button class="btn btn-primary add-event-button">Add Event</button>
    </div>

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

    <!-- Events -->
    <div class="events-container">
        <!-- Event 1 -->
        <div class="event" event-id="<?php echo $events[0]['id']; ?>">
            <img src="<?php echo $events[0]['image']; ?>" alt="Event Photo">

            <!-- Content (buttons and details) -->
            <div class="event-content">
                <!-- Buttons for event actions -->
                <div class="event-buttons">
                    <!-- Buttons for event actions -->
                    <div class="event-buttons-left">
                        <!-- Archived button -->
                        <button type="button" class="btn btn-danger black-button"><i class="fas fa-archive"></i> Archived</button>
                    </div>
                    <div class="event-buttons-right">
                        <!-- Delete button -->
                        <button type="button" class="btn btn-danger black-button" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal<?php echo $events[0]['id']; ?>"><i class="fas fa-trash"></i>Delete</button>
                        <!-- Edit button -->
                        <button type="button" class="btn btn-primary black-button"><i class="fas fa-pencil-alt"></i> Edit</button>
                        <!-- Jemaat mendaftar button -->
                        <button type="button" class="btn btn-primary white-button">
                            <div class="counter-box">0</div>
                            <div class="button-text">
                                <div class="jemaat-text">Jemaat</div>
                                <div class="mendaftar-text">Mendaftar</div>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Line between buttons and details -->
                <div class="line"></div>
                
                <!-- Event details -->
                <div class="event-details">
                    <div class="event-title"><?php echo $events[0]['title']; ?></div>
                    <div class="event-date"><?php echo $events[0]['date']; ?></div>
                    <div class="event-description"><?php echo $events[0]['description']; ?></div>
                </div>
            </div>
        </div>

        <!-- Event 2 -->
        <div class="event" event-id="<?php echo $events[1]['id']; ?>">
            <img src="<?php echo $events[1]['image']; ?>" alt="Event Photo">

            <!-- Content (buttons and details) -->
            <div class="event-content">
                <!-- Buttons for event actions -->
                <div class="event-buttons">
                    <!-- Buttons for event actions -->
                    <div class="event-buttons-left">
                        <!-- Archived button -->
                        <button type="button" class="btn btn-danger black-button"><i class="fas fa-archive"></i> Archived</button>
                    </div>
                    <div class="event-buttons-right">
                        <!-- Delete button -->
                        <button type="button" class="btn btn-danger black-button" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal<?php echo $events[1]['id']; ?>"><i class="fas fa-trash"></i>Delete</button>
                        <!-- Edit button -->
                        <button type="button" class="btn btn-primary black-button"><i class="fas fa-pencil-alt"></i> Edit</button>
                        <!-- Jemaat mendaftar button -->
                        <button type="button" class="btn btn-primary white-button">
                        <div class="counter-box">0</div>
                            <div class="button-text">
                                <div class="jemaat-text">Jemaat</div>
                                <div class="mendaftar-text">Mendaftar</div>
                            </div>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Line between buttons and details -->
                <div class="line"></div>
                
                <!-- Event details -->
                <div class="event-details">
                    <div class="event-title"><?php echo $events[1]['title']; ?></div>
                    <div class="event-date"><?php echo $events[1]['date']; ?></div>
                    <div class="event-description"><?php echo $events[1]['description']; ?></div>
                </div>
            </div>
    </div>

    <!-- Modal for delete confirmation -->
    <?php foreach ($events as $event): ?>
        <div class="modal fade delete-confirmation-modal" id="deleteConfirmationModal<?php echo $event['id']; ?>" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel<?php echo $event['id']; ?>">Konfirmasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Anda yakin akan menghapus Event<br>
                        "<?php echo $event['title']; ?>"
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Footer -->

    <!-- Script -->
    <script>
        // Set the initial button text to "Upcoming"
        document.getElementById("dropdownMenuButton").innerText = "Upcoming";

        // Set the "Upcoming" option as selected by default when the page loads
        window.onload = function() {
            document.getElementById("upcoming").classList.add("active");
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
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/home.js"></script>
</body>
</html>