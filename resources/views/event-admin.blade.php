<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Home</title>
    <!-- Include Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
            /* Set the background color to white */
            color: #000000;
            /* Set text color to black */
            padding: 20px;
            /* Add some padding for better readability */
        }

        .navbar {
            margin-bottom: 20px;
            /* Add margin-bottom to create space between the navbar and the header */
        }

        .event-header {
            font-family: 'Kanit', sans-serif;
            /* Set font family */
            text-align: left;
            /* Align text to left */
            font-size: 3em;
            /* Set font size to 3em */
            margin-top: 50px;
            /* Add some top margin for spacing */
            margin-bottom: 20px;
            color: black;
            /* Set color to black */
            font-weight: bold;
            /* Set font weight to bold */
            display: flex;
            /* Enable flexbox layout */
            justify-content: space-between;
            /* Space out the items evenly */
            align-items: center;
            /* Align items vertically */
        }

        /* Dropdown */

        .dropdown {
            display: inline-block;
            margin-left: 10px;
        }

        .custom-dropdown-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 0.4em;
            background-color: #EEB120;
            /* Set background color to EEB120 */
            border-color: #EEB120;
            /* Set border color to match background color */
            color: black;
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

        /* Add & edit event buttons */

        .add-event-button {
            font-family: 'Kanit', sans-serif;
            font-weight: normal;
            font-size: 0.5em;
            background-color: black;
            /* Set background color to black */
            border-color: black;
            /* Set border color to black */
            color: #EEB120;
            /* Set text color to EEB120 */
            margin-left: auto;
            /* Align to the right */
            margin-right: 20px;
            /* Add some right margin for spacing */
        }

        .add-event-button:hover {
            background-color: #1a1a1a;
            /* Change background color on hover */
            border-color: #1a1a1a;
            /* Change border color on hover */
        }

        .add-event-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 0, 0, 0.5);
            /* Add focus style */
        }

        /* Modal Header */
        .add-event-modal .modal-header,
        .edit-event-modal .modal-header {
            background-color: #FDFDFD;
        }

        .add-event-modal .modal-title,
        .add-event-modal .modal-body,
        .edit-event-modal .modal-title,
        .edit-event-modal .modal-body {
            font-family: Montserrat, sans-serif;
            font-weight: 500;
        }

        /* Switch Off Color */
        .form-check-input {
            background-color: #8e8e8e;
        }

        /* Switch On Color */
        .form-check-input:checked {
            background-color: #eeb120;
        }

        /* Switch On Color */
        .form-check-input+.form-check-label::before {
            border-color: #eeb120;
        }

        /* Circle Inside Switch Color */
        .form-check-input+.form-check-label::after {
            background-color: #f4f4f4;
            /* This ensures the circle color */
        }

        .add-event-modal .form-check-label .edit-event-modal .form-check-label {
            font-family: Inter, sans-serif;
            font-weight: 600;
        }

        /* Modal Body */
        .add-event-modal .modal-body,
        .edit-event-modal .modal-body {
            background-color: #F2F2F2;
        }

        /* CSS for adjusting modal body layout */
        .add-event-modal .modal-body .row,
        .edit-event-modal .modal-body .row {
            display: flex;
        }

        .add-event-modal .modal-body .col,
        .edit-event-modal .modal-body .col {
            flex: 1;
            margin-right: 10px;
            /* Add margin between date and time inputs */
        }

        /* Modal footer */
        .add-event-modal .modal-footer,
        .edit-event-modal .modal-footer {
            background-color: #a2a2a2;
            font-family: DM Sans, sans-serif;
            font-weight: bold;
        }

        /* Cancel Button */
        .add-event-modal .btn-cancel,
        .edit-event-modal .btn-cancel {
            background-color: #e5e5e5;
            color: black;
        }

        /* Save Button */
        .add-event-modal .btn-save,
        .edit-event-modal .btn-save {
            background-color: black;
            color: white;
        }

        /* Events */
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

        .event-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            padding-left: 20px;
            /* Add padding to separate content from the border */
        }

        .event-buttons {
            display: flex;
            flex-direction: row;
            margin-bottom: 10px;
            /* Add margin between buttons and details */
        }

        .event-buttons button {
            margin-right: 10px;
            /* Add margin between buttons */
        }

        .event-buttons-left,
        .event-buttons-right {
            display: flex;
            align-items: center;
        }

        .event-buttons-right {
            margin-left: auto;
            /* Push the right buttons to the right */
        }

        .black-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: medium;
            /* Use medium font weight */
            color: white;
            background-color: black;
            border-color: black;
        }

        .black-button:hover {
            color: white;
            background-color: #333;
            /* Darker shade of black for hover */
            border-color: #333;
        }

        .black-button:focus {
            box-shadow: 0 0 0 0.15rem rgba(0, 0, 0, 0.5);
            /* Slightly larger shadow on focus */
        }

        .white-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: medium;
            /* Use medium font weight */
            color: white;
            /* Set text color to white */
            background-color: #EEB120;
            /* Set background color to EEB120 */
            border-color: #EEB120;
            /* Set border color to match background color */
            display: flex;
            align-items: center;
        }

        .white-button:hover {
            color: white;
            /* Change text color on hover */
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }

        .white-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(238, 177, 32, 0.5);
            /* Add focus style */
        }

        i {
            margin-right: 8px; /* Atur jarak sesuai kebutuhan */
        }

        .event-counter-box {
            width: 80px;
            height: 30px;
            background-color: white;
            color: black;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
            margin-right: 5px;
        }

        .event-button-text {
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
            margin-top: 10px;
            /* Adjust margin as needed */
            margin-bottom: 10px;
            /* Adjust margin as needed */
        }

        /* Delete Confirmation Modal */

        /* Modal body text */
        .delete-confirmation-modal .modal-body {
            font-family: 'Roboto', sans-serif;
            font-weight: bold;
            text-align: center;
            /* Center align the text */
        }

        /* Cancel button */
        .delete-confirmation-modal .modal-footer .btn-secondary {
            background-color: #E5E5E5;
            border-color: #E5E5E5;
            color: black;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
        }

        /* Delete button */
        .delete-confirmation-modal .modal-footer .btn-danger {
            background-color: black;
            border-color: black;
            color: white;
            font-family: 'DM Sans', sans-serif;
            font-weight: bold;
        }

        /* Center align the buttons */
        .delete-confirmation-modal .modal-footer {
            justify-content: center;
        }

        /* Jemaat mendaftar modal */

        .jemaat-mendaftar-modal .modal-title {
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            /* Medium */
        }

        .jemaat-mendaftar-modal .modal-body {
            padding: 10px;
            /* Add padding to the modal body */
            /* Top row */
            font-family: 'Kanit', sans-serif;
            font-weight: normal;
            /* Regular */
        }

        .jemaat-mendaftar-modal table {
            width: calc(100% - 20px);
            /* Set table width to 100% minus twice the padding (left and right) */
            border-collapse: collapse;
            /* Collapse table borders */
            margin: 10px;
            /* Add margin to the table */
        }

        .jemaat-mendaftar-modal table td {
            padding: 10px;
            /* Add padding to table cells */
        }

        .jemaat-mendaftar-modal .modal-counter-box {
            display: flex;
            justify-content: flex-end;
        }

        /* Text "Jumlah" */
        .jemaat-mendaftar-modal .modal-counter-text {
            background-color: white;
            /* Set background color to white */
            color: black;
            /* Set text color to black */
            display: inline-block;
            /* Make the text inline-block */
            padding: 5px 10px;
            /* Add padding around the text */
        }

        /* Counter */
        .jemaat-mendaftar-modal .modal-counter {
            background-color: #EEB120;
            /* Set background color to EEB120 */
            color: black;
            /* Set text color to black */
            display: inline-block;
            /* Make the counter inline-block */
            padding: 5px 10px;
            /* Add padding around the counter */
            font-size: 1.15em;
            /* Set the font size to 16px or any other desired value */
            width: 100px;
            text-align: center;
        }

        .jemaat-mendaftar-modal .top-row {
            background-color: black;
            color: white;
        }

        /* Names */

        .jemaat-mendaftar-modal .odd-row,
        .jemaat-mendaftar-modal .even-row {
            font-family: 'Montserrat', sans-serif;
            font-weight: normal;
            /* Regular */
        }

        .jemaat-mendaftar-modal .odd-row {
            background-color: white;
            color: black;
        }

        .jemaat-mendaftar-modal .even-row {
            background-color: #EFEFEF;
            color: black;
        }

        /* Event details */

        .event-details {
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

        .event-info {
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

        /* Adjust modal size for smaller screens */
        @media (max-width: 768px) {
            .modal-content {
                max-width: 90%;
                /* Adjust maximum width for smaller screens */
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
                        <a class="nav-link" href="/admin">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pelayanan-admin">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">KomSel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Bareng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/event-admin">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Penjadwalan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Analisis</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Admin, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/">Switch to User View</a></li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="event-header">Event
        <!-- Dropdown for event filtering -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle custom-dropdown-button" type="button"
                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#" id="upcoming">Upcoming</a></li>
                <li><a class="dropdown-item" href="#" id="archived">Archived</a></li>
            </ul>
        </div>

        <!-- Add Event button -->
        <button type="button" class="btn btn-primary add-event-button" data-bs-toggle="modal"
            data-bs-target="#addEventModal"><i class="fas fa-plus"></i> Add Event</button>
    </div>

    <?php
        // $events = [
        //     [
        //         'id' => 1,
        //         'title' => 'Putus atau Terus 1',
        //         'location' => 'Ciputra World Mall 2nd floor',
        //         'description' => 'YESS Surabaya Valentine\'s Day Celebration "Putus atau Terus"
        //         Ini adalah kesempatan untuk terinspirasi sebagai pasangan!
        //         juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...', 
        //         'start_date' => '2024-03-30',
        //         'start_time' => '16:30',
        //         'end_date' => '2024-03-30',
        //         'end_time' => '19:30',
        //         'image' => 'img/event-photo1.png',
        //         'registered_people' => ['Andi', 'Bagus', 'Cahyono'],
        //         'archived' => false,
        //         'quota' => 10
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'YESS Leardership Mission Training VII',
        //         'location' => 'Desa Birkium, Soe, Nusa Tenggara Timur',
        //         'description' => 'Biarlah semangat misi terus menyala dalam hidup kita.
        //         Uis Neno nokan kit, Immanuel!
        //         Sampe ketemu di YLMT, basodara dong!',
        //         'start_date' => '2024-04-19',
        //         'start_time' => null,
        //         'end_date' => '2024-04-21',
        //         'end_time' => null,
        //         'image' => 'img/event-photo2.png',
        //         'registered_people' => ['Desi', 'Endah', 'Marwoto', 'SBC Ganteng'],
        //         'archived' => false
        //     ],
        //     [
        //         'id' => 3,
        //         'title' => 'Putus atau Terus 2',
        //         'location' => 'Ciputra World Mall 2nd floor',
        //         'description' => 'YESS Surabaya Valentine\'s Day Celebration "Putus atau Terus"
        //         Ini adalah kesempatan untuk terinspirasi sebagai pasangan!
        //         juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...', 
        //         'start_date' => '2024-03-30',
        //         'start_time' => '16:30',
        //         'end_date' => '2024-03-30',
        //         'end_time' => '19:30',
        //         'image' => 'img/event-photo3.png',
        //         'registered_people' => [],
        //         'archived' => true
        //     ],
        //     [
        //         'id' => 4,
        //         'title' => 'YESS Leardership Mission Training VIII',
        //         'location' => 'Desa Birkium, Soe, Nusa Tenggara Timur',
        //         'description' => 'Biarlah semangat misi terus menyala dalam hidup kita.
        //         Uis Neno nokan kit, Immanuel!
        //         Sampe ketemu di YLMT, basodara dong!',
        //         'start_date' => '2024-04-19',
        //         'start_time' => null,
        //         'end_date' => '2024-04-21',
        //         'end_time' => null,
        //         'image' => 'img/event-photo4.png',
        //         'registered_people' => [],
        //         'archived' => true
        //     ]
        // ];
    ?>

    <!-- Events -->
    <div class="events-container">
            <!-- Display events -->
            <div class="event" event-id="1">
                <img src="1" alt="Event Photo">

                <!-- Content (buttons and details) -->
                <div class="event-content">
                    <!-- Buttons for event actions -->
                    <div class="event-buttons">
                        <!-- Buttons for event actions -->
                        <div class="event-buttons-left">
                            <!-- Archive button -->
                            <button type="button" class="btn btn-danger black-button archive-button"><i class="fas fa-archive"></i> Archive</button>
                        </div>
                        <div class="event-buttons-right">
                            <!-- Delete button -->
                            <button type="button" class="btn btn-danger black-button" data-bs-toggle="modal" data-bs-target="#deleteConfirmationModal1"><i class="fas fa-trash"></i>Delete</button>
                            <!-- Edit button -->
                            <button type="button" class="btn btn-primary black-button" data-bs-toggle="modal" data-bs-target="#editEventModal1"><i class="fas fa-pencil-alt"></i> Edit</button>
                            <!-- Jemaat mendaftar button -->
                            <button type="button" class="btn btn-primary white-button" data-bs-toggle="modal" data-bs-target="#jemaatMendaftarModal1">
                                <div class="event-counter-box">
                                    3/10
                                </div>
                                <div class="event-button-text">
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
                        <div class="event-title">Lalala</div>
                        <div class="event-info">
                            20 Maret 09:00-24 Maret 11:00
                        </div>
                        <div class="event-description">Ini adalah event yang menyenangkan</div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Modals -->

    <!-- Modal for Add Event -->
    <div class="modal fade add-event-modal" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                    <!-- Replace close button with switch -->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="registrationSwitch">
                        <label class="form-check-label" for="registrationSwitch">Aktifkan Form Pendaftaran</label>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="aNamaEvent" class="form-label">Nama event</label>
                        <input type="text" class="form-control" id="aNamaEvent" name="aNamaEvent" required>
                    </div>
                    <div class="mb-3">
                        <label for="aQuota" class="form-label">Kuota (opsional)</label>
                        <input type="number" class="form-control" id="aQuota" name="aQuota" min="1">
                    </div>
                    <div class="mb-3">
                        <label for="aTempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="aTempat" name="aTempat" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class="aTanggalMulai">Tanggal mulai</label>
                                <input type="date" class="form-control" id="aTanggalMulai" name="aTanggalMulai"
                                    required>
                            </div>
                            <div class="col">
                                <label class="aWaktuMulai">Waktu mulai (opsional)</label>
                                <input type="time" class="form-control" id="aWaktuMulai" name="aWaktuMulai">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class="aTanggalAkhir">Tanggal akhir</label>
                                <input type="date" class="form-control" id="aTanggalAkhir" name="aTanggalAkhir"
                                    required>
                            </div>
                            <div class="col">
                                <label class="aWaktuAkhir">Waktu akhir (opsional)</label>
                                <input type="time" class="form-control" id="aWaktuAkhir" name="aWaktuAkhir">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="aDeskripsiEvent" class="form-label">Deskripsi event</label>
                        <textarea class="form-control" id="aDeskripsiEvent" name="aDeskripsiEvent" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="aGambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="aGambar" name="aGambar" accept="image/*"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel float-start" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-save float-end" onclick="addEvent()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for edit -->
    <div class="modal fade edit-event-modal" id="editEventModal1" tabindex="-1"
        aria-labelledby="editEventModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title" id="editEventModalLabel1">Edit Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="eNamaEvent1" class="form-label">Nama event</label>
                        <input type="text" class="form-control" id="eNamaEvent1"
                            name="eNamaEvent1" value="Judul Event" required>
                    </div>
                    <div class="mb-3">
                        <label for="eQuota1" class="form-label">Kuota (opsional)</label>
                        <input type="number" class="form-control" id="eQuota1" name="eQuota1" value="10" min="1">
                    </div>
                    <div class="mb-3">
                        <label for="eTempat1" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="eTempat1"
                            name="eTempat1" value="Ciputra World" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class=eTanggalMulai1">Tanggal mulai</label>
                                <input type="date" class="form-control" id="eTanggalMulai1"
                                    name="eTanggalMulai1" value="2022-04-30" required>
                            </div>
                            <div class="col">
                                <label class="eWaktuMulai1">Waktu mulai (opsional)</label>
                                <input type="time" class="form-control" id="eWaktuMulai1"
                                    name="eWaktuMulai1" value="09.30">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class="eTanggalAkhir1">Tanggal akhir</label>
                                <input type="date" class="form-control" id="eTanggalAkhir1"
                                    name="eTanggalAkhir1" value="2022-05-01" required>
                            </div>
                            <div class="col">
                                <label class="eWaktuAkhir1">Waktu akhir (opsional)</label>
                                <input type="time" class="form-control" id="eWaktuAkhir1"
                                    name="eWaktuAkhir1" value="15.00">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eDeskripsiEvent1" class="form-label">Deskripsi event</label>
                        <textarea class="form-control" id="eDeskripsiEvent1" name="eDeskripsiEvent1"
                            rows="4" required>Bla bla bla bla</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eGambar1" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="eGambar1"
                            name="eGambar1" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel float-start" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-save float-end"
                        onclick="updateEvent(1)">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for delete confirmation -->
    <div class="modal fade delete-confirmation-modal" id="deleteConfirmationModal1" tabindex="-1"
        aria-labelledby="deleteConfirmationModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteConfirmationModalLabel1">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda yakin akan menghapus Event<br>
                    "Judul event"
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton"
                        onclick="deleteEvent(1)">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Jemaat Mendaftar -->
    <div class="modal fade jemaat-mendaftar-modal" id="jemaatMendaftarModal1" tabindex="-1"
        aria-labelledby="jemaatMendaftarModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">PENDAFTARAN EVENT > Judul Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table>
                        <tr class="top-row">
                            <td>Daftar nama jemaat yang sudah mendaftar</td>
                            <td>
                                <div class="modal-counter-box">
                                    <div class="modal-counter-text">Jumlah</div>
                                    <div class="modal-counter">3 / 10</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="odd-row">
                            <td colspan="2">A</td>
                        </tr>
                        <tr class="even-row">
                            <td colspan="2">B</td>
                        </tr>
                        <tr class="odd-row">
                            <td colspan="2">C</td>
                        </tr>
                        <tr class="even-row">
                            <td colspan="2">D</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <!-- Script -->
    <script>
        // Set the initial button text to "Upcoming"
        document.getElementById("dropdownMenuButton").innerText = "Upcoming";
        
        // Set the "Upcoming" option as selected by default when the page loads
        window.onload = function() {
            document.getElementById("upcoming").classList.add("active");
            // Set the initial selectedDropdown value to "upcoming"
            var selectedDropdown = "upcoming";
            // updateEvents(selectedDropdown);
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
                // updateEvents(selectedDropdown);
            });
        });

        // JavaScript function to handle dropdown change
        // function updateEvents(selectedDropdown) {
        //     // Loop through all events and hide/show them based on the selected dropdown value
        //     document.querySelectorAll('.event').forEach(event => {
        //         const eventId = event.getAttribute('event-id');
        //         const eventInfo = <?php echo json_encode($events); ?>;
        //         const eventData = eventInfo.find(e => e.id === parseInt(eventId));
        //         const archiveButton = event.querySelector('.archive-button');

        //         if (selectedDropdown === 'upcoming' && !eventData.archived) {
        //             event.style.display = 'block'; // Show the event
        //             // Change text on archive button to "Archive"
        //             if (archiveButton) {
        //                 archiveButton.innerHTML = '<i class="fas fa-archive"></i> Archive';
        //             }
        //         } else if (selectedDropdown === 'archived' && eventData.archived) {
        //             event.style.display = 'block'; // Show the event
        //             // Change text on archive button to "Restore"
        //             if (archiveButton) {
        //                 archiveButton.innerHTML = '<i class="fas fa-undo"></i> Restore';
        //             }
        //         } else {
        //             event.style.display = 'none'; // Hide the event
        //         }
        //     });
        // }

        // JavaScript code for handling the switch state and text change
        document.addEventListener('DOMContentLoaded', function() {
            // Get the switch element
            var registrationSwitch = document.getElementById('registrationSwitch');

            // Add event listener for switch change
            registrationSwitch.addEventListener('change', function() {
                // Get the label element
                var switchLabel = document.querySelector('label[for="registrationSwitch"]');

                // Check the switch state
                if (registrationSwitch.checked) {
                    // If switch is on, change label text to "Form Pendaftaran Aktif"
                    switchLabel.textContent = 'Form Pendaftaran Aktif';
                } else {
                    // If switch is off, change label text to "Aktifkan Form Pendaftaran"
                    switchLabel.textContent = 'Aktifkan Form Pendaftaran';
                }
            });
        });

        // Function to handle the click of save button on the add modal
        function addEvent() {
            // Display an alert to indicate that the event is added
            alert("Event is added!");
        }

        // Function to handle the click of save button on the add modal
        function updateEvent(eventId) {
            // Display an alert to indicate that the event is added
            alert("Event is added!");
        }

        // Function to handle the click event of the delete buttons
        function deleteEvent(eventId) {
            // Display an alert to indicate that the event is deleted
            alert("Event with ID " + eventId + " is deleted!");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>

</html>