<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Event (Admin)</title>
    <!-- Include Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        .type-dropdown {
            margin-left: auto;
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            font: 700 20px Roboto, sans-serif;
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

        .add-event-modal .type-dropdown-init,
        .edit-event-modal .type-dropdown-init {
            font: 500 16px DM Sans, sans-serif;
            border-radius: 10px;
            background-color: #EEB120;
            color: #000;
        }

        .add-event-modal .modal-title,
        .add-event-modal .modal-body,
        .edit-event-modal .modal-title,
        .edit-event-modal .modal-body {
            font-family: Montserrat, sans-serif;
            font-weight: 500;
        }

        .add-event-modal .form-switch,
        .edit-event-modal .form-switch {
            display: inline-block;
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

        /* .add-event-modal .form-check-label,
        .edit-event-modal .form-check-label {
            font: 600 16px Inter, sans-serif;
        } */

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
            margin-right: 8px;
            /* Atur jarak sesuai kebutuhan */
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

        .event-type {
            font-weight: bold;
            width: fit-content;
            margin: 5px 0;
            padding: 0 10px;
            font-size: 1.11em;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            background-color: #000;
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
    @include('partials.admin-navbar')

    <!-- Content -->
    <div class="event-header">Event
        <!-- Dropdown for event filtering -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle custom-dropdown-button" type="button"
                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Button for the dropdown text that will be replaced by the js method
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item dropdown-type-1" href="#" id="upcoming">Upcoming</a></li>
                <li><a class="dropdown-item dropdown-type-1" href="#" id="archived">Archived</a></li>
            </ul>
        </div>
        <!-- Dropdown for event filtering -->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle custom-dropdown-button" type="button"
                id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                Button for the dropdown text that will be replaced by the js method
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item dropdown-type-2" href="#" id="all">All</a></li>
                <li><a class="dropdown-item dropdown-type-2" href="#" id="umum">Umum</a></li>
                <li><a class="dropdown-item dropdown-type-2" href="#" id="ladies devotion">Ladies Devotion</a>
                </li>
                <li><a class="dropdown-item dropdown-type-2" href="#" id="sunday school">Sunday School</a></li>
                <li><a class="dropdown-item dropdown-type-2" href="#" id="yess">YESS</a></li>
            </ul>
        </div>

        <!-- Add Event button -->
        <button type="button" class="btn btn-primary add-event-button" data-bs-toggle="modal"
            data-bs-target="#addEventModal"><i class="fas fa-plus"></i> Add Event</button>
    </div>

    <!-- Events -->
    <div class="events-container">
        @foreach ($events as $event)
            <div class="event" event-id="{{ $event->id }}" event-type="{{ $event->type }}">
                <img src="{{ asset($event->image_path) }}" alt="Event Photo">

                <div class="event-content">
                    <div class="event-buttons">
                        <div class="event-buttons-left">
                            <button type="button" class="btn btn-danger black-button archive-button"
                                onclick="archiveEvent({{ $event->id }})">
                                <i class="fas fa-archive"></i> Archive
                            </button>
                        </div>
                        <div class="event-buttons-right">
                            <button type="button" class="btn btn-danger black-button" data-bs-toggle="modal"
                                data-bs-target="#deleteConfirmationModal{{ $event->id }}">
                                <i class="fas fa-trash"></i>Delete
                            </button>
                            <button type="button" class="btn btn-primary black-button" data-bs-toggle="modal"
                                data-bs-target="#editEventModal{{ $event->id }}">
                                <i class="fas fa-pencil-alt"></i> Edit
                            </button>
                            <button type="button" class="btn btn-primary white-button" data-bs-toggle="modal"
                                data-bs-target="#jemaatMendaftarModal{{ $event->id }}">
                                <div class="event-counter-box">
                                    {{ $event->registrations->count() }}{{ $event->quota ? '/' . $event->quota : '' }}
                                </div>
                                <div class="event-button-text">
                                    <div class="jemaat-text">Jemaat</div>
                                    <div class="mendaftar-text">Mendaftar</div>
                                </div>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="event-details">
                        <div class="event-title">{{ $event->title }}</div>
                        <div class="event-type">{{ $event->type }}</div>
                        <div class="event-type">Rp40.000</div>
                        <div class="event-info">
                            {{ $event->location }} | {{ $event->start_date }} {{ $event->start_time }} -
                            {{ $event->end_date }} {{ $event->end_time }}
                        </div>
                        <div class="event-description">{{ $event->description }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Modals -->

    <!-- Modal for Add Event -->
    <div class="modal fade modal-lg add-event-modal" id="addEventModal" tabindex="-1"
        aria-labelledby="addEventModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                    <div class="header-selection">
                        <select id="type-dropdown-init" class="type-dropdown-init" required>
                            <option value="" selected disabled>Pilih</option>
                            <option value="umum">Umum</option>
                            <option value="ladies devotion">Ladies Devotion</option>
                            <option value="sunday school">Sunday School</option>
                            <option value="yess">YESS</option>
                        </select>
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
                        <label for="aBiaya" class="form-label">Biaya</label>
                        <input type="number" class="form-control" id="aBiaya" name="aBiaya" min="0" required>
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
                    <button type="button" class="btn btn-save float-end" data-bs-dismiss="modal"
                        onclick="addEvent()">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for Edit Event -->
    <?php foreach ($events as $event): ?>
    <div class="modal fade modal-lg edit-event-modal" id="editEventModal<?php echo $event['id']; ?>" tabindex="-1"
        aria-labelledby="editEventModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title" id="editEventModalLabel<?php echo $event['id']; ?>">Edit Event</h5>
                    <!-- Replace close button with switch -->
                    <div class="header-selection">
                        <select id="type-dropdown-init<?php echo $event['id']; ?>" class="type-dropdown-init" required>
                            <option value="umum" <?php echo $event['type'] === 'umum' ? 'selected' : ''; ?>>Umum</option>
                            <option value="ladies devotion" <?php echo $event['type'] === 'ladies devotion' ? 'selected' : ''; ?>>Ladies Devotion</option>
                            <option value="sunday school" <?php echo $event['type'] === 'sunday school' ? 'selected' : ''; ?>>Sunday School</option>
                            <option value="yess" <?php echo $event['type'] === 'yess' ? 'selected' : ''; ?>>YESS</option>
                        </select>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="eNamaEvent<?php echo $event['id']; ?>" class="form-label">Nama event</label>
                        <input type="text" class="form-control" id="eNamaEvent<?php echo $event['id']; ?>"
                            name="eNamaEvent<?php echo $event['id']; ?>" value="<?php echo $event['title']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="eQuota<?php echo $event['id']; ?>" class="form-label">Kuota (opsional)</label>
                        <input type="number" class="form-control" id="eQuota<?php echo $event['id']; ?>"
                            name="eQuota<?php echo $event['id']; ?>" value="<?php echo isset($event['quota']) ? $event['quota'] : ''; ?>" min="1">
                    </div>
                    <div class="mb-3">
                        <label for="eTempat<?php echo $event['id']; ?>" class="form-label">Tempat</label>
                        <input type="text" class="form-control" id="eTempat<?php echo $event['id']; ?>"
                            name="eTempat<?php echo $event['id']; ?>" value="<?php echo $event['location']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="eBiaya<?php echo $event['id']; ?>" class="form-label">Biaya</label>
                        <input type="text" class="form-control" id="eBiaya<?php echo $event['id']; ?>"
                            name="eBiaya<?php echo $event['id']; ?>" value="40000" required>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class=eTanggalMulai<?php echo $event['id']; ?>">Tanggal mulai</label>
                                <input type="date" class="form-control" id="eTanggalMulai<?php echo $event['id']; ?>"
                                    name="eTanggalMulai<?php echo $event['id']; ?>" value="<?php echo $event['start_date']; ?>" required>
                            </div>
                            <div class="col">
                                <label class="eWaktuMulai<?php echo $event['id']; ?>">Waktu mulai (opsional)</label>
                                <input type="time" class="form-control" id="eWaktuMulai<?php echo $event['id']; ?>"
                                    name="eWaktuMulai<?php echo $event['id']; ?>" value="<?php echo $event['start_time']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label class="eTanggalAkhir<?php echo $event['id']; ?>">Tanggal akhir</label>
                                <input type="date" class="form-control" id="eTanggalAkhir<?php echo $event['id']; ?>"
                                    name="eTanggalAkhir<?php echo $event['id']; ?>" value="<?php echo $event['end_date']; ?>" required>
                            </div>
                            <div class="col">
                                <label class="eWaktuAkhir<?php echo $event['id']; ?>">Waktu akhir (opsional)</label>
                                <input type="time" class="form-control" id="eWaktuAkhir<?php echo $event['id']; ?>"
                                    name="eWaktuAkhir<?php echo $event['id']; ?>" value="<?php echo $event['end_time']; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eDeskripsiEvent<?php echo $event['id']; ?>" class="form-label">Deskripsi event</label>
                        <textarea class="form-control" id="eDeskripsiEvent<?php echo $event['id']; ?>" name="eDeskripsiEvent<?php echo $event['id']; ?>"
                            rows="4" required><?php echo $event['description']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eGambar<?php echo $event['id']; ?>" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="eGambar<?php echo $event['id']; ?>"
                            name="eGambar<?php echo $event['id']; ?>" accept="image/*" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel float-start" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-save float-end" onclick="updateEvent(<?php echo $event['id']; ?>)"
                        data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Modals for delete confirmation -->
    <?php foreach ($events as $event): ?>
    <div class="modal fade delete-confirmation-modal" id="deleteConfirmationModal<?php echo $event['id']; ?>" tabindex="-1"
        aria-labelledby="deleteConfirmationModalLabel<?php echo $event['id']; ?>" aria-hidden="true">
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
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton"
                        onclick="deleteEvent(<?php echo $event['id']; ?>)">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

    <!-- Modal for Jemaat Mendaftar -->
    @foreach ($events as $event)
        <div class="modal fade jemaat-mendaftar-modal" id="jemaatMendaftarModal{{ $event->id }}" tabindex="-1"
            aria-labelledby="jemaatMendaftarModalLabel{{ $event->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">PENDAFTARAN EVENT > {{ $event->title }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr class="top-row">
                                <td>Daftar nama jemaat yang sudah mendaftar</td>
                                <td>
                                    <div class="modal-counter-box">
                                        <div class="modal-counter-text">Jumlah</div>
                                        <div class="modal-counter">
                                            {{ $event->registrations->count() }}{{ $event->quota ? '/' . $event->quota : '' }}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @foreach ($event->registrations as $registration)
                                <tr class="{{ $loop->iteration % 2 == 0 ? 'even-row' : 'odd-row' }}">
                                    <td colspan="2">{{ $registration->name }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Footer -->

    <!-- Script -->
    <script>
        const dropdownMenuButton = document.getElementById("dropdownMenuButton");
        const dropdownMenuButton2 = document.getElementById("dropdownMenuButton2");

        // Set the initial button text
        dropdownMenuButton.innerText = "Upcoming";
        dropdownMenuButton2.innerText = "All";

        // Set the default option when the page loads
        window.onload = function() {
            document.getElementById("upcoming").classList.add("active");
            document.getElementById("all").classList.add("active");
            // Set the initial value
            const selectedDropdown = "upcoming";
            const selectedType = "all";
            updateEvents(selectedDropdown, selectedType); // Call the function to update events with the initial value
        };

        // Update the button text and apply the active class when an option is clicked
        document.querySelectorAll('.dropdown-type-1').forEach(item => {
            item.addEventListener('click', event => {
                // Remove the active class from all options
                document.querySelectorAll('.dropdown-type-1').forEach(option => {
                    option.classList.remove('active');
                });

                // Add the active class to the clicked option
                event.target.classList.add('active');

                // Update the button text to the selected option
                dropdownMenuButton.innerText = event.target.innerText;

                // Get the selected dropdown value
                const selectedDropdown = event.target.id;
                const selectedType = document.querySelector('.dropdown-type-2.active').id;

                // Call the function to update events with the selected value
                updateEvents(selectedDropdown, selectedType);
            });
        });

        // Update the button text and apply the active class when an option is clicked
        document.querySelectorAll('.dropdown-type-2').forEach(item => {
            item.addEventListener('click', event => {
                // Remove the active class from all options
                document.querySelectorAll('.dropdown-type-2').forEach(option => {
                    option.classList.remove('active');
                });

                // Add the active class to the clicked option
                event.target.classList.add('active');


                // Update the button text to the selected option
                dropdownMenuButton2.innerText = event.target.innerText;

                // Get the selected dropdown value
                const selectedDropdown = document.querySelector('.dropdown-type-1.active').id;
                const selectedType = event.target.id;

                // Call the function to update events with the selected value
                updateEvents(selectedDropdown, selectedType);
            });
        });

        // JavaScript function to handle dropdown change
        function updateEvents(selectedDropdown, selectedType) {
            // Loop through all events and hide/show them based on the selected dropdown value
            document.querySelectorAll('.event').forEach(event => {
                const eventId = event.getAttribute('event-id');
                const eventType = event.getAttribute('event-type');
                const eventInfo = <?php echo json_encode($events); ?>;
                const eventData = eventInfo.find(e => e.id === parseInt(eventId));
                const archiveButton = event.querySelector('.archive-button');

                const isDropdownMatch = (selectedDropdown === 'upcoming' && !eventData.archived) || (
                    selectedDropdown === 'archived' && eventData.archived);
                const isTypeMatch = selectedType === 'all' || eventType === selectedType;

                if (isDropdownMatch && isTypeMatch) {
                    event.style.display = 'block'; // Show the event
                    // Update text on archive button based on the selected dropdown value
                    if (archiveButton) {
                        if (selectedDropdown === 'upcoming') {
                            archiveButton.innerHTML = '<i class="fas fa-archive"></i> Archive';
                            archiveButton.setAttribute('onclick', `archiveEvent(${eventId})`);
                        } else if (selectedDropdown === 'archived') {
                            archiveButton.innerHTML = '<i class="fas fa-undo"></i> Restore';
                            archiveButton.setAttribute('onclick', `archiveEvent(${eventId}, true)`);
                        }
                    }
                } else {
                    event.style.display = 'none'; // Hide the event
                }
            });
        }

        // Function to handle the click of save button on the add modal
        function addEvent() {
            var formData = new FormData();
            formData.append('title', $('#aNamaEvent').val());
            formData.append('quota', $('#aQuota').val());
            formData.append('location', $('#aTempat').val());
            formData.append('start_date', $('#aTanggalMulai').val());
            formData.append('start_time', $('#aWaktuMulai').val());
            formData.append('end_date', $('#aTanggalAkhir').val());
            formData.append('end_time', $('#aWaktuAkhir').val());
            formData.append('description', $('#aDeskripsiEvent').val());

            var imageInput = $('#aGambar')[0]; // Perhatikan ID yang berbeda di sini
            if (imageInput && imageInput.files && imageInput.files[0]) {
                formData.append('image', imageInput.files[0]); // File object for image
            }

            formData.append('type', $('#type-dropdown-init').val()); // Add type value

            // Log formData untuk memeriksa isi FormData sebelum pengiriman
            console.log('FormData:', formData);

            // Lanjutkan dengan AJAX call untuk mengirim data form
            $.ajax({
                url: '/event-admin/store',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert("Event is added!");
                    location.reload(); // Refresh the page to show the new event
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message; // Get the error message from backend
                    alert("Error: " + errorMessage); // Show the error message
                }
            });
        }

        // Function to handle the click of save button on the add modal
        function updateEvent(eventId) {
            // Prepare data to be sent to the server
            var formData = new FormData();
            formData.append('title', $('#eNamaEvent' + eventId).val());
            formData.append('quota', $('#eQuota' + eventId).val());
            formData.append('location', $('#eTempat' + eventId).val());
            formData.append('start_date', $('#eTanggalMulai' + eventId).val());
            formData.append('start_time', $('#eWaktuMulai' + eventId).val());
            formData.append('end_date', $('#eTanggalAkhir' + eventId).val());
            formData.append('end_time', $('#eWaktuAkhir' + eventId).val());
            formData.append('description', $('#eDeskripsiEvent' + eventId).val());

            // Check if the file input exists and has a file selected
            var imageInput = $('#eGambar' + eventId)[0];
            if (imageInput && imageInput.files && imageInput.files[0]) {
                formData.append('image', imageInput.files[0]); // File object for image
            }

            formData.append('type', $('#type-dropdown-init' + eventId).val());

            // Send data to the server
            $.ajax({
                url: '/event-admin/update/' + eventId, // Update the URL to match the route
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert("Event is updated!");
                    location.reload(); // Refresh the page to reflect the updated event
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message; // Get the error message from backend
                    alert("Error: " + errorMessage); // Show the error message
                }
            });
        }

        // Function to handle the click event of the delete buttons
        function deleteEvent(eventId) {
            $.ajax({
                url: '/event-admin/delete/' + eventId,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert("Event with ID " + eventId + " is deleted!");
                    location.reload(); // Refresh the page to reflect the deleted event
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message;
                    alert("Error: " + errorMessage);
                }
            });
        }

        function archiveEvent(eventId, isArchived) {
            let url = '/event-admin/archive/' + eventId;

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    archived: isArchived
                }, // Mengirim nilai archived ke server
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert(response.message);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message;
                    alert("Error: " + errorMessage);
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>

</html>
