<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link href="css/film.css" rel="stylesheet">
    <style>
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
        .nav-item.active .nav-link,
        .nav-item:hover .nav-link {
            color: orange !important;
            border-bottom: 2px solid orange;
        }

        /* Untuk mengubah warna teks dan garis bawah saat item dropdown ditekan */
        .dropdown-item:focus,
        .dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Untuk mengubah warna teks dan garis bawah saat item dropdown aktif */
        .dropdown-item.active,
        .dropdown-item:active {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Untuk mengubah warna teks saat dropdown dihover */
        .dropdown-menu a.dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        .main-content { box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.25); background-color: #fff; display: flex; width: 100%; flex-direction: column; align-items: flex-start; padding: 37px 80px; margin-top: 40px;} @media (max-width: 991px) { .main-content { padding: 0 20px; } }
        .user-name { color: #000; letter-spacing: 1.92px; font-size: 64px; font-family: Kanit, sans-serif;}
        @media (max-width: 991px) { .user-name { font-size: 40px; } }
        /* .tags { display: flex; margin-top: 24px; gap: 8px; } @media (max-width: 991px) { .tags { flex-wrap: wrap; padding-right: 20px; } }
        .tag { border-radius: 20px; background-color: #000; color: #fff; font-family: Montserrat, sans-serif; text-align: center; padding: 7px 22px; font-size: 20px; font-weight: 700; white-space: nowrap; } @media (max-width: 991px) { .tag { white-space: initial; padding: 0 20px; } }
        .more-tag { display: flex; border: 2px solid #000; gap: 7px; color: #000; text-align: center; padding: 5px 13px; border-radius: 20px; font-size: 16px; font-weight: 500; font-family: Montserrat, sans-serif; } .tag-icon { font-family: 'Material Icons'; }
        .more-text { margin: auto 0; } */
        .section { display: flex; flex-direction: column; width: 100%; margin-top: 25px; }
        .section-title { color: #000; font-size: 22px; font-family: Nunito, sans-serif; font-weight: 500; } @media (max-width: 991px) { .section-title { margin-right: 5px; } }
        /* .card { background-color: #000; display: flex; width: 100%; align-items: center; justify-content: space-between; gap: 20px; padding: 0 25px; margin-top: 10px; } @media (max-width: 991px) { .card { flex-wrap: wrap; margin-right: 6px; padding: 0 20px; } }
        .card-content { display: flex; align-items: center; gap: 11px; color: #fff; font-weight: 400; font-size: 22px; padding: 26px 0; width: 100%; } .card-icon { font-family: 'Material Icons'; }
        .date-time { display: flex; align-items: center; gap: 11px; } .date-text { font-weight: 800; font-family: Nunito, sans-serif; margin: auto 0; }
        .divider { background-color: #d9d9d9; width: 3px; height: 95px; }
        .location { display: flex; align-items: center; gap: 10px; margin: auto 0; } .location-text { font-family: Montserrat, sans-serif; font-weight: 700; }
        .license { display: flex; align-items: center; gap: 10px; margin: auto 0; }
        .license-text { font-family: Montserrat, sans-serif; font-weight: 700; }
        .waiting-list { display: flex; align-items: center; gap: 20px; margin: auto 0; }
        .waiting-text { color: #eeb120; font-family: Montserrat, sans-serif; font-weight: 700; }
        .radio-icon { background-color: #ff2929; color: #fff; border-radius: 25px; padding: 11px 28px; font-family: 'Material Icons'; font-size: 50px; text-align: center; } 
        @media (max-width: 991px) { .radio-icon { font-size: 40px; padding: 0 20px; } } */

        /* Status container */
        .status-container {
            bottom: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            color: #fff;
            justify-content: center;
            padding: 0;
            height: 120px; /* Fixed height */
            overflow: hidden;
            cursor: pointer;
        }

        .status-container .booking-details {
            background-color: #000;
            display: flex;
            width: 100%;
            align-items: center;
            gap: 20px;
            justify-content: space-between;
            padding: 0 34px;
            height: 100%; /* Ensure it takes the full height of the container */
        }

        @media (max-width: 991px) {
            .booking-details {
                gap: 10px; /* Ubah jarak antar elemen menjadi lebih kecil */
                overflow-x: auto;
            }
        }

        /* @media (max-width: 991px) {
            .status-container .booking-details {
                flex-wrap: wrap;
                padding: 0 20px;
            }
        } */

        .status-container .date-time {
            display: flex;
            gap: 16px;
            text-align: center;
            margin: auto 0;
        }

        .status-container .icon-date-range {
            font: 400 40px Material Icons, sans-serif;
        }

        .status-container .date {
            font: 800 24px Nunito, sans-serif;
        }

        .status-container .time-location {
            display: flex;
            align-items: center;
            gap: 20px;
            font-weight: 400;
            margin: auto 0;
        }

        /* @media (max-width: 991px) {
            .status-container .time-location {
                flex-wrap: wrap;
            }
        } */

        .status-container .icon-time {
            text-align: center;
            margin: auto 0;
            font: 40px Material Icons, sans-serif;
        }

        .status-container .time {
            text-align: center;
            letter-spacing: 3.2px;
            margin: auto 0;
            font: 800 32px Nunito, sans-serif;
        }

        .status-container .separator {
            background-color: #d9d9d9;
            width: 3px;
            height: 96px;
        }

        .status-container .icon-location {
            text-align: center;
            margin: auto 0;
            font: 44px Material Icons, sans-serif;
        }

        .status-container .location {
            margin: auto 0;
            font: 700 24px Montserrat, sans-serif;
        }

        .status-container .status-info {
            display: flex;
            align-items: center;
            gap: 20px;
            font-size: 24px;
            font-weight: 700;
            margin: auto 0;
        }

        /* @media (max-width: 991px) {
            .status-container .status-info {
                flex-wrap: wrap;
            }
        } */

        .status-container .license-plate {
            font-family: Montserrat, sans-serif;
            margin: auto 0;
        }

        .status-container .status {
            color: #eeb120;
            font-family: Montserrat, sans-serif;
            margin: auto 0;
        }

        .status-container .radio-off {
            border-radius: 25px;
            background-color: #ff2929;
            text-align: center;
            justify-content: center;
            padding: 11px 33px;
            font: 400 50px Material Icons, sans-serif;
            cursor: pointer;
        }

        .status-container .radio-off::before {
            content: 'cancel'; /* Or use the Unicode equivalent */
        }

        .status-container .radio-off:hover {
            background-color: #d92626;
        }
        .profile-section { display: flex; flex-direction: column; gap: 20px; }
        .profile-card { background-color: #000; display: flex; flex-direction: column; width: 100%; padding: 24px 29px 37px; } @media (max-width: 991px) { .profile-card { margin-top: 27px; padding: 0 20px; } }
        .profile-header { display: flex; width: 100%; padding: 0 1px; } @media (max-width: 991px) { .profile-header { flex-wrap: wrap; } }
        .profile-title { color: #fff; font-family: Nunito, sans-serif; font-weight: 800; font-size: 22px; }
        .edit-profile { background-color: #eeb120; display: flex; gap: 7px; padding: 13px 16px; border-radius: 25px; border: 1px solid #000; font-family: Kanit, sans-serif; font-size: 24px; color: #000; margin-left: auto;}
        .edit-profile:hover {
            background-color: #d4a100;
            /* Change background color on hover */
        }
        .img-3 { width: 30px; aspect-ratio: 1; object-fit: cover; }
        .edit-text { margin: auto 0; }
        .info { color: #fff; font-family: Nunito, sans-serif; }
        .contact-item { display: flex; gap: 13px; font-size: 18px; color: #fff; font-weight: 500; margin-top: 30px; white-space: nowrap; } @media (max-width: 991px) { .contact-item { white-space: initial; } }
        .contact-item > img { width: 19px; }

        .event-card {
            background-color: #fff;
            padding: 10px;
        }
        .event-date {
            background-color: gray;
            text-align: center;
            color: #fff;
            padding: 10px 0;
        }
        .month {
            font: 900 16px Roboto, sans-serif;
        }
        .day {
            font: 900 32px Roboto, sans-serif;
        }
        .event-name {
            font: 600 24px Kanit, sans-serif;
        }
        .event-location {
            font: 700 18px Roboto, sans-serif;
            color: #646464;
        }


        .footer { border-radius: 40px 40px 0 0; background-color: #000; display: flex; justify-content: space-between; gap: 20px; padding: 36px 52px; margin-top: 41px; } @media (max-width: 991px) { .footer { flex-wrap: wrap; padding: 0 20px; margin-top: 40px; } }
        .footer-links { display: flex; gap: 20px; justify-content: space-between; }
        .footer-links > img { width: 70px; }
        .footer-contact { display: flex; align-items: center; gap: 20px; font-size: 32px; font-family: Roboto, sans-serif; color: #fff; font-weight: 500; }
        .contact-us { margin: auto 0; }

        /* Modal */
        .modal-header {
            font: 500 24px/167% Montserrat, sans-serif;
        }
        .modal-body {
            background-color: #f4f4f4;
        }
        .modal-footer {
            background-color: #a2a2a2;
        }

        /* CSS for cancel button */
        .modal .btn-cancel {
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

        /* Hover effect for cancel button & status container */
        .modal .btn-cancel:hover, .status-container:hover {
            background-color: #eeeeee;
            /* Light gray background on hover */
        }

        /* CSS for book & submit button */
        .modal .btn-save {
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
            border-color: #000;
        }
        /* Hover effect for save button */
        .btn-save {
            background-color: #333333;
            /* Darker gray background on hover */
        }
        .row-bawah {
            width: 100%;
            margin-top: 10px;
        }

        /* Modal bareng */
        .modal-bareng .date-label {
            display: flex;
            align-self: start;
            text-align: center;
        }
        .modal-bareng .date-label span {
            border-radius: 20px;
            background-color: #eeb120;
            color: #fff;
            padding: 4px 23px;
            font: 700 20px Montserrat, sans-serif;
        }
        .modal-bareng .content-row {
            display: flex;
            margin-top: 24px;
            gap: 18px;
        }
        .modal-bareng .stick-wrapper {
            display: flex;
            flex-direction: column;
            position: relative;
            margin-top: 25px;
            margin-bottom: auto;
            width: 10px;
            height: 340px; /* Sesuaikan dengan ketinggian yang diperlukan */
        }

        .modal-bareng .line {
            position: absolute;
            left: 50%; /* Atur posisi horizontal ke tengah */
            height: 100%;
            transform: translateX(-50%);
            height: 100%;
            width: 2px; /* Lebar garis */
            background-color: #000; /* Warna garis */
        }

        .modal-bareng .circle-1, .modal-bareng .circle-2 {
            position: absolute;
            background-color: #eeb120; /* Warna lingkaran */
            border-radius: 50%;
            width: 20px; /* Diameter lingkaran */
            height: 20px; /* Diameter lingkaran */
            left: 50%; /* Atur posisi horizontal ke tengah */
            transform: translateX(-50%);
        }

        .modal-bareng .circle-1 {
            top: 0; /* Atur lingkaran pertama di bagian atas */
            z-index: 1;
        }

        .modal-bareng .circle-2 {
            bottom: 0; /* Atur lingkaran kedua di bagian bawah */
        }
        .modal-bareng .text-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            flex-basis: 0;
            width: fit-content;
        }
        @media (max-width: 991px) {
            .modal-bareng .text-content {
                max-width: 100%;
            }
        }

        .modal-bareng .time-info {
            width: 160px;
            display: flex;
            gap: 12px;
            white-space: nowrap;
        }

        @media (max-width: 991px) {
        .modal-bareng .time-info {
            white-space: initial;
        }
        }

        .modal-bareng .time {
            color: #000;
            letter-spacing: 2.16px;
            flex-grow: 1;
            font: 800 36px Montserrat, sans-serif;
        }

        .modal-bareng .time-zone {
            color: #646464;
            align-self: start;
            margin-top: 15px;
            font: 400 16px Montserrat, sans-serif;
        }

        .modal-bareng .location {
            color: #000;
            font: 700 32px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .modal-bareng .location {
                max-width: 100%;
            }
        }

        .modal-bareng .address {
            color: #646464;
            margin-top: 13px;
            font: 700 16px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .modal-bareng .address {
                max-width: 100%;
            }
        }

        .modal-bareng .plate-number {
            display: flex;
            margin-top: 9px;
            gap: 10px;
            font-size: 16px;
            color: #fff;
            font-weight: 700;
            text-align: center;
            padding: 0 1px;
        }

        .modal-bareng .plate {
            background-color: #000;
            justify-content: center;
            padding: 9px 15px;
        }

        .modal-bareng .plate-separator {
            background-color: #000;
            width: 106px;
            /* height: 28px; */
        }

        .modal-bareng .mall-name {
            color: #000;
            margin-top: 86px;
            font: 700 32px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .modal-bareng .mall-name {
                max-width: 100%;
                margin-top: 40px;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #000 !important;">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#">
                <div class="brand-text" style="display: inline-block; margin-left: 10px; color: #f5f5f5;">
                    <img src="img/bestchurch.png" alt="" style="width: 60%;">
                </div>
            </a>
            <div class="navbar-nav mx-auto" style="text-align: center;">
                <ul class="navbar-nav" style="margin-bottom: 10px;">
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/" style="color: #f5f5f5;">Home</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                            YESS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/yess" style="color: #000;">YESS</a></li>
                            <li><a class="dropdown-item" href="/komsel" style="color: #000;">Komsel</a></li>
                            <li><a class="dropdown-item" href="/bareng" style="color: #000;">Bareng</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/jadwal" style="color: #f5f5f5;">Jadwal</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/ladies-devotion" style="color: #f5f5f5;">Ladies Devotion</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/sunday-school" style="color: #f5f5f5;">Sunday School</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/event" style="color: #f5f5f5;">Event</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/pelayanan" style="color: #f5f5f5;">Pelayanan</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav" style="text-align: right;">
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @if (auth()->user()->is_admin)
                            <li><a class="dropdown-item" href="/admin" style="color: #000;">Admin Dashboard</a></li>
                            @endif
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" style="color: #000;">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link login-link-border" href="/login" style="color: #f5f5f5; border: 1px solid #fff; border-radius: 5px; padding: 8px 20px;">Login</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- whasap terbang -->
    <a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja" class="whatsapp-button">
            <img src="img/wa.png" alt="WhatsApp">
    </a>

    <!-- Modal profil -->
    <div class="modal modal-profil fade" id="profilModal" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profilModalLabel">EDIT PROFIL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="lahir" name="lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="wa" class="form-label">Nomor WA</label>
                        <input type="text" class="form-control" id="wa" name="wa" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="emain" name="email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SAVE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bareng modal -->
    <div class="modal modal-bareng fade" id="barengModal" tabindex="-1" aria-labelledby="barengModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="barengModalLabel">PESAN BERANGKAT BARENG</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your content here -->
                <div class="date-label"><span>2024-04-24</span></div>
                <div class="content-row">
                    <div class="stick-wrapper">
                        <div class="circle-1"></div>
                        <div class="line"></div>
                        <div class="circle-2"></div>
                    </div>
                    <div class="text-content">
                        <div class="time-info">
                            <div class="time">08.00</div>
                            <span class="time-zone">WIB</span>
                        </div>
                        <h2 class="location">Hotel Dafam Pacific Caesar</h2>
                        <p class="address">Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.</p>
                        <div class="plate-number">
                            <div class="plate">L 123 ABC</div>
                            <!-- <div class="plate-separator"></div> -->
                        </div>
                        <h2 class="mall-name">Ciputra World Mall</h2>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-save">Book</button>
            </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="content">
        <main class="main-content">
            <h1 class="user-name">Anonim Anoman</h1>
            <!-- Ini jalan sebenernya
            <div class="tags">
                <div class="tag">Usher</div>
                <div class="tag">Singer</div>
                <div class="more-tag" tabindex="0" role="button">
                    <span class="tag-icon">add_circle_outline</span>
                    <span class="more-text">Daftar lainnya</span>
                </div>
            </div> -->
            <div class="container mt-4">
                <div class="d-flex flex-wrap">
                    <button type="button" class="btn btn-dark m-2" disabled>Singer</button>
                    <button type="button" class="btn btn-dark m-2" disabled>Usher</button>
                    <button type="button" class="btn btn-warning m-2"><span class="material-icons">add_circle_outline</span> Daftar lainnya</button>
                </div>
            </div>
            <section class="section">
                <h2 class="section-title">Jangan lewatkan Jadwal Berangkat Barengmu!</h2>
                <!-- <article class="card">
                    <div class="card-content">
                        <div class="date-time">
                            <span class="card-icon">date_range</span>
                            <span class="date-text">6 April 2024</span>
                        </div>
                        <div class="divider"></div>
                        <div class="date-time">
                            <span class="card-icon">access_time</span>
                            <span class="date-text">16:00</span>
                        </div>
                    </div>
                    <div class="location">
                        <span class="card-icon">location_on</span>
                        <span class="location-text">Hotel Dafam Pacific Caesar</span>
                    </div>
                    <div class="license">
                        <span class="card-icon">directions_car</span>
                        <span class="license-text">L 1234 ABC</span>
                    </div>
                    <div class="waiting-list">
                        <span class="waiting-text">Waiting list</span>
                        <span class="radio-icon">radio_button_unchecked</span>
                    </div>
                </article> -->
                <section class="status-container" data-bs-toggle="modal" data-bs-target="#barengModal">
                    <article class="booking-details">
                        <div class="date-time">
                            <span class="icon-date-range">date_range</span>
                            <time class="date" datetime="2024-04-06">6 April 2024</time>
                        </div>
                        <div class="separator"></div>
                        <div class="time-location">
                            <span class="icon-time">access_time</span>
                            <time class="time" datetime="16:00">16:00</time>
                        <div class="separator"></div>
                        <span class="icon-location">location_on</span>
                        <address class="location">Hotel Dafam Pacific Caesar</address>
                        <div class="separator"></div>
                        </div>
                        <div class="status-info">
                        <span class="license-plate">L 1234 ABC</span>
                        <div class="separator"></div>
                        <span class="status">Waiting list</span>
                        <span class="radio-off"></span>
                        </div>
                    </article>
                </section>
            </section>
            <div class="row row-bawah">
                <div class="col-5">
                    <section class="profile-section">
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="profile-title">Profil Saya</div>
                                <button class="edit-profile" tabindex="0" role="button" data-bs-toggle="modal" data-bs-target="#profilModal">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a8e54a236d59476f298c15c5a4608c7570bfbe280cd9a4d7cde765c4687df355?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Edit Profile Icon" class="img-3"/>
                                    <div class="edit-text">Edit Profile</div>
                                </button>
                            </div>
                            <div class="contact-item">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8579333f87a4332b8886e50cf81891be29a9cd263e25f0b34ad7694a78f8d5dc?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Birthdate Icon"/>
                                <div class="info">12 Maret 2008</div>
                            </div>
                            <div class="contact-item">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/862c50a968a6f7cc4ac6a6faf0d67936a6bf52467c22337fe00b937d61798d1b?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Phone Icon"/>
                                <div class="info">08588800088</div>
                            </div>
                            <div class="contact-item">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/cbb90c7f57489b1b97860b4e0eeec985de0c734cca7ef59aa6dca14159c66d09?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Address Icon"/>
                                <div class="info">Ngagel</div>
                            </div>
                            <div class="contact-item">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/8a014b95a8d1542e740afa09455d827c869a8206bcbe7d45d285ce21731551d6?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Email Icon"/>
                                <div class="info">anonim@gmail.com</div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-7">
                    <section class="profile-section">
                        <div class="profile-card">
                            <div class="profile-header">
                                <div class="profile-title">Event yang telah kamu daftarkan</div>
                                <!-- <div class="edit-profile">
                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a8e54a236d59476f298c15c5a4608c7570bfbe280cd9a4d7cde765c4687df355?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Edit Profile Icon" class="img-3"/>
                                    <div class="edit-text">Edit Event</div>
                                </div> -->
                            </div>
                            <div class="event-card">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="event-date">
                                            <div class="month">APR</div>
                                            <div class="day">19-21</div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="event-details">
                                            <div class="event-name">YESS Leadership Mission Training VII</div>
                                            <div class="event-location">Desa Birkium, Soe, Nusa Tenggara Timur</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
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
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>

</html>
