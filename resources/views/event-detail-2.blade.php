<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Event Detail</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: #F5F5F5;
            /* Set the overall background color */
            color: #000000;
            /* Set text color to black */
            padding: 20px;
            /* Add some padding for better readability */
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
            margin-top: 70px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .event-detail-container {
            background-color: #FFFFFF;
            /* Set the background color of the event detail container */
            padding: 20px;
            /* Add some padding for the event detail */
            border-radius: 10px;
            /* Add border-radius to create rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            /* Add shadow for a slight elevation effect */
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
                <ul class="navbar-nav login-link">
                    <li class="nav-item">
                        <a class="nav-link login-link-border" href="/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    $event = [
        'id' => 1,
        'title' => 'Putus atau Terus 1',
        'location' => 'Ciputra World Mall 2nd floor',
        'description' => 'YESS Surabaya Valentine\'s Day Celebration "Putus atau Terus"<div class=""></div>Ini adalah kesempatan untuk terinspirasi sebagai pasangan!
                    juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...',
        'start_date' => '2024-03-30',
        'start_time' => '16:30',
        'end_date' => '2024-03-30',
        'end_time' => '19:30',
        'image' => 'img/event-photo1.png',
        'registered_people' => ['Andi', 'Bagus', 'Cahyono'],
        'archived' => false,
    ];
    ?>

    <!-- Modal -->
    <div class="modal fade" id="formModal<?php echo $event['id']; ?>" tabindex="-1"
        aria-labelledby="formModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-custom-width">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title modal-event-title" id="formModalLabel<?php echo $event['id']; ?>"><?php echo $event['title']; ?>
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

    <div class="event-detail-container">
        <!-- "Kembali ke Events" button -->
        <div class="button-container">
            <button class="back-to-events-button" onclick="goBackToEvents()">Kembali ke Events</button>
        </div>

        <!-- Event Image -->
        <img src="<?php echo $event['image']; ?>" alt="Event Image" class="event-image">

        <div class="button-container">
            <div class="event-title"><?php echo $event['title']; ?></div>
            <!-- Daftar Button -->
            <button class="daftar-button" data-bs-toggle="modal"
                data-bs-target="#formModal<?php echo $event['id']; ?>">Daftar<i class="fas fa-chevron-right"></i></button>
        </div>

        <!-- Event Date -->
        <div class="event-date">
            <!-- Fill the event date/time (time is optional) -->
            <?php echo $event['start_date'] . (isset($event['start_time']) ? ' ' . $event['start_time'] : '') . ' - ' . $event['end_date'] . (isset($event['end_time']) ? ' ' . $event['end_time'] : ''); ?>
        </div>

        <!-- Event Location -->
        <div class="event-location"><?php echo $event['location']; ?></div>

        <!-- Event Description -->
        <div class="event-description">
            <?php echo $event['description']; ?>
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
        // Function to go back to the events page
        function goBackToEvents() {
            window.location.href = "event.blade.php"; // Redirect to event.blade.php
        }

        // Function to redirect to form event page with the event ID
        function redirectToForm() {
            var eventId = <?php echo $_GET['id']; ?>; // Get the event ID from the query string
            window.location.href = "form-event.blade.php?id=" +
                eventId; // Redirect to the form event page with the event ID
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
