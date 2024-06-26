<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YESS.SUB | Event Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="css/film.css" rel="stylesheet">
    <style>
        /* Navbar & footer */
        body {
            overflow-x: hidden;
        }

        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 80px;
            height: 80px;
            background-color: green;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            cursor: pointer;
        }

        .whatsapp-button img {
            width: 50px;
            height: 50px;
        }

        /* Untuk membuat tulisan BEST berwarna orange dan memiliki garis bawah orange saat berada di halaman BEST */
        nav .nav-item.active .nav-link,
        nav .nav-item:hover .nav-link {
            color: orange !important;
            border-bottom: 2px solid orange;
        }

        /* Untuk mengubah warna teks dan garis bawah saat item dropdown ditekan */
        nav .dropdown-item:focus,
        nav .dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Untuk mengubah warna teks dan garis bawah saat item dropdown aktif */
        nav .dropdown-item.active,
        nav .dropdown-item:active {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Untuk mengubah warna teks saat dropdown dihover */
        nav .dropdown-menu a.dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        :root {
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei", "Source Han Sans CN", sans-serif;
            --primary-color: #eeb120;
            --secondary-color: #646464;
            --background-color: #f4f4f4;
            --text-color: #000000;
            --border-color: #000000;
            --button-background: #000000;
            --button-text-color: #ffffff;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            font-family: var(--default-font-family);
            background-color: var(--background-color);
        }

        .main-container {
            max-width: 1440px;
            margin: 0 auto;
            background-color: #f4f4f4;
        }

        .content {
            width: calc(100% - 100px);
            max-width: 1337px;
            background: #fff;
            margin: 95px auto 35px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .back-button {
            display: flex;
            align-items: center;
            padding: 16px 24px;
            background-color: #e3e3e3;
            border: none;
            border-radius: 35px;
            cursor: pointer;
            font-family: Montserrat, var(--default-font-family);
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .content .event-image {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .content .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }

        .content .event-title {
            font-family: Kanit, var(--default-font-family);
            font-size: 48px;
            font-weight: 600;
        }

        .content .event-title h1 {
            font-size: 2em;
            margin: 0;
        }

        .content .register-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background: var(--primary-color);
            border: none;
            border-radius: 40px;
            font-family: DM Sans, var(--default-font-family);
            font-size: 1em;
            font-weight: 500;
            color: #fff;
            cursor: pointer;
        }

        .content .event-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            font-family: Roboto, var(--default-font-family);
            font-size: 1.8em;
            font-weight: 500;
            color: #646464;
        }

        .content .event-type {
            font-weight: bold;
            width: fit-content;
            padding: 0 10px;
            font-size: 1.11em;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            background-color: #000;
        }

        .content .event-description {
            font-family: Roboto, var(--default-font-family);
            font-size: 1.2em;
            font-weight: 400;
            color: var(--secondary-color);
            ;
            line-height: 1.5;
            letter-spacing: 0.48px;
            margin: 20px 0;
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

        /* CSS untuk tombol daftar */
        .daftar-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background: var(--primary-color);
            border: none;
            border-radius: 40px;
            font-family: DM Sans, var(--default-font-family);
            font-size: 1em;
            font-weight: 500;
            color: #fff;
            cursor: pointer;
            text-decoration: none;
            /* tambahkan ini untuk menghilangkan underline */
        }

        /* Hover effect untuk tombol daftar */
        .daftar-button:hover {
            background-color: #ffac33;
            /* ganti dengan warna hover yang diinginkan */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')
    <a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja"
        class="whatsapp-button">
        <img src="img/wa.png" alt="WhatsApp">
    </a>

    <div>
        <div class="main-container">
            <!-- Content -->
            <div class="content">
                <!-- Tombol kembali ke events -->
                <button class="back-button" onclick="goBackToEvents()">
                    <span class="material-icons">arrow_back</span>
                    Kembali ke events
                </button>
                <img src="{{ asset($event->image_path) }}" alt="Event Photo" class="event-image">

                <!-- Header -->
                <div class="event-header">
                    <h1 class="event-title" id="eventTitle"><?php echo $event->title; ?></h1>
                    <button class="daftar-button" data-bs-toggle="modal"
                        data-bs-target="#daftarModal{{ $event->id }}"
                        onclick="openFormModal(event, {{ $event->id }})">Daftar <span
                            class="material-icons">arrow_forward</span></button>
                </div>
                <div class="event-info">
                    <div class="event-type" id="eventType"><?php echo $event->type; ?></div>
                </div>
                <!-- Event details -->
                <div class="event-info">
                    <span class="material-icons">date_range</span>
                    <span id="eventDate"><?php echo $event->start_date . ' ' . $event->start_time . ' - ' . $event->end_date . ' ' . $event->end_time; ?></span>
                </div>
                <div class="event-info">
                    <span class="material-icons">location_on</span>
                    <span id="eventLocation"><?php echo $event->location; ?></span>
                </div>
                <p class="event-description" id="eventDescription">
                    <?php echo $event->description; ?>
                </p>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="daftarModal<?php echo $event['id']; ?>" tabindex="-1"
                aria-labelledby="formModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-custom-width">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title modal-event-title" id="formModalLabel<?php echo $event['id']; ?>">
                                <?php echo $event['title']; ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form content goes here -->
                            <label for="daftar<?php echo $event['id']; ?>" class="form-label form-label-daftar">Bagi jemaat yang
                                ingin
                                mendaftar dalam event YESS Surabaya silahkan mengisi form pendaftaran event dibawah
                                ini.</label>
                            <!-- Alergi Anda -->
                            <div class="mb-3">
                                <label for="alergi<?php echo $event['id']; ?>" class="form-label form-label-alergi">Alergi Anda
                                    (jika
                                    tidak punya, isi "-")</label>
                                <textarea class="form-control" id="alergi<?php echo $event['id']; ?>" rows="3"
                                    placeholder="Masukkan alergi Anda jika ada"></textarea>
                            </div>
                            <!-- Informasi keluarga yang dapat dihubungi -->
                            <div class="mb-3">
                                <label for="informasi<?php echo $event['id']; ?>"
                                    class="form-label form-label-informasi">Informasi
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
                                <img src="img/form.png" alt="Image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-submit"
                                onclick="registerEvent(<?php echo $event['id']; ?>)" data-bs-dismiss="modal">Submit</button>
                        </div>
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
                </div>
            </div>
        </div>

        <script>
            // Function to go back to the events page
            function goBackToEvents() {
                window.location.href = "/event"; // Redirect to event.blade.php
            }

            function openFormModal(event, eventId) {
                event.stopPropagation(); // Stop event propagation to prevent opening detail events
            }

            function registerEvent(eventId) {
                $.ajax({
                    url: '{{ route('event.register') }}',
                    type: 'POST',
                    data: {
                        event_id: eventId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.message);
                        location.reload();
                    },
                    error: function(xhr) {
                        alert(xhr.responseJSON.message);
                    }
                });
            }
        </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="js/home.js"></script>
</body>

</html>
