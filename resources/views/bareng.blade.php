user bareng before responsive
7419e8a
resources\views\bareng.blade.php
@@ -1,973 +1,1002 @@
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Bareng</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link href="css/film.css" rel="stylesheet">
    <style>
                /* Navbar & footer */
        body {
            overflow-x: hidden;
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

        body {
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 10px;
            margin: auto;
        }

        .banner {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            min-height: 475px;
            width: 100%;
            align-items: start;
            padding: 76px 80px;
        }

        .banner img {
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .banner-heading {
            position: relative;
            color: #fff;
            font: 700 100px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .banner {
                padding: 20px;
            }
            .banner-heading {
                font-size: 50px;
            }
        }

        @media (max-width: 575px) {
            .banner {
                padding: 10px;
            }
            .banner-heading {
                font-size: 30px;
            }
        }

        .banner-subheading {
            position: relative;
            color: #fff;
            letter-spacing: 1.8px;
            margin-top: 15px;
            font: 300 36px/139% Open Sans Hebrew, -apple-system, Roboto, Helvetica, sans-serif;
        }

        @media (max-width: 991px) {
            .banner-subheading {
            max-width: 100%;
            }
        }

        .info-box {
            position: relative;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: #fff;
            align-self: center;
            margin-top: 73px;
            /* width: 100%; */
            max-width: 1082px;
            padding: 25px 46px;
        }

        @media (max-width: 991px) {
            .info-box {
                max-width: 100%;
                margin-top: 40px;
                padding: 0 20px;
            }
        }

        .info-columns {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .info-columns {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
            }
        }

        .info-box .location-column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .info-box .location-column {
                width: 100%;
            }
        }

        .info-box .location {
            background-color: #000;
            position: relative;
            flex-grow: 1;
            align-items: center;
            color: #fff;
            text-align: center;
            letter-spacing: 1.3px;
            justify-content: center;
            width: 100%;
            padding: 22px 60px;
            font: 800 26px/154% Montserrat, sans-serif;
            cursor: pointer; /* Add cursor pointer to indicate clickable */
        }

        @media (max-width: 991px) {
            .info-box .location {
                margin-top: 20px;
                margin-bottom: 20px;
                padding: 0 20px;
            }
        }

        .info-box .location-alt {
            background-color: #dedede;
            position: relative;
            flex-grow: 1;
            align-items: center;
            color: #000;
            white-space: nowrap;
            text-align: center;
            letter-spacing: 1.3px;
            justify-content: center;
            width: 100%;
            padding: 24px 60px;
            font: 500 26px/154% Montserrat, sans-serif;
            cursor: pointer; /* Add cursor pointer to indicate clickable */
        }

        .info-box .location-alt:hover {
            background-color: #aaaaaa;
        }

        @media (max-width: 991px) {
            .info-box .location-alt {
                margin-top: 20px;
                margin-bottom: 20px;
                white-space: initial;
                padding: 0 20px;
            }
        }

        .img-column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .img-column {
            width: 100%;
            }
        }

        .image {
            aspect-ratio: 3.45;
            object-fit: auto;
            object-position: center;
            width: 225px;
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            max-width: 100%;
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .image {
            margin-top: 40px;
            }
        }

        .info-columns-alt {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .info-columns-alt {
                width: 100%;
            }
        }

        .location-alt-bg {
            background-color: rgba(222, 222, 222, 0.85);
            position: relative;
            flex-grow: 1;
            align-items: center;
            color: #000;
            white-space: nowrap;
            text-align: center;
            letter-spacing: 1.3px;
            justify-content: center;
            width: 100%;
            padding: 24px 60px;
            font: 500 26px/154% Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .location-alt-bg {
            margin-top: 40px;
            white-space: initial;
            padding: 0 20px;
            }
        }

        .main-content {
            background-color: #f5f5f5;
            align-self: center;
            /* z-index: 10; */
            display: flex;
            /* margin-top: -54px; */
            width: 100%;
            max-width: 1376px;
            flex-direction: column;
            padding: 17px 17px 80px;
        }

        @media (max-width: 991px) {
            .main-content {
            max-width: 100%;
            }
        }

        .point-section {
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: #fff;
            margin-bottom: 47px;
            padding: 28px 0 28px 80px;
        }

        @media (max-width: 991px) {
            .point-section {
                max-width: 100%;
                padding-left: 20px;
                margin-bottom: 40px;
            }
        }

        .point-section {
            display: none; /* Initially hide all point sections */
        }

        .point-info {
            gap: 20px;
            display: flex;

        }

        @media (max-width: 991px) {
            .point-info {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
            }
        }

        .point-img-column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 28%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .point-img-column {
                width: 100%;
            }
        }

        .point-img {
            aspect-ratio: 1.41;
            object-fit: auto;
            object-position: center;
            width: 100%;
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .point-img {
                margin-top: 29px;
            }
        }

        .point-details-column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 72%;
            margin-left: 20px;
            margin-right: 20px;
        }

        @media (max-width: 991px) {
            .point-details-column {
                width: 100%;
                margin-left: 0; /* Hapus margin-left pada layar kecil */
                margin-right: 0; /* Hapus margin-right pada layar kecil */
            }
        }

        .point-details {
            display: flex;
            margin-top: 22px;
            flex-direction: column;
        }

        @media (max-width: 991px) {
            .point-details {
                max-width: 100%;
                margin-top: 40px;
            }
        }

        .point-title-box {
            display: flex;
            flex-direction: column;
            padding: 0 53px;
        }

        @media (max-width: 991px) {
            .point-title-box {
                max-width: 100%;
                padding: 0 20px;
            }
        }

        .point-title {
            color: #000;
            font: 600 44px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .point-title {
                max-width: 100%;
            }
        }

        .point-description {
            color: #646464;
            margin-top: 19px;
            font: 700 22px Roboto, sans-serif;
        }

        @media (max-width: 991px) {
            .point-description {
                max-width: 100%;
            }
        }

        .point-section .separator {
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            border-color: rgba(255, 255, 255, 1);
            border-style: solid;
            border-width: 1px;
            background-color: #fff;
            margin-top: 14px;
            height: 1px;
        }

        .booking-info {
            display: flex;
            width: 452px;
            max-width: 100%;
            flex-direction: column;
            margin: 12px 0 0 41px;
        }

        @media (max-width: 991px) {
            .booking-info {
                width: 100%;
                margin: 12px 0 0 0; /* Hapus margin kiri pada layar kecil */
            }
        }

        .booking-info .booking-details {
            display: flex;
            width: 100%;
            align-items: start;
            gap: 20px;
            color: #646464;
            justify-content: space-between;
        }

        .booking-details-inner {
            display: flex;
            gap: 15px;
        }

        .icon {
            text-align: center;
            font: 400 32px Material Icons, sans-serif;
        }

        .point-section .date-time {
            flex-grow: 1;
            flex-basis: auto;
            font: 700 22px Roboto, sans-serif;
        }

        .point-section .time-info {
            display: flex;
            gap: 16px;
        }

        .point-section .time {
            flex-grow: 1;
            flex-basis: auto;
            margin: auto 0;
            font: 700 22px Roboto, sans-serif;
        }

        .booking-stats {
            display: flex;
            margin-top: 22px;
            gap: 20px;
        }

        .point-section .booking-button {
            border-radius: 40px;
            background-color: #eeb120;
            border-color: #eeb120;
            color: #fff;
            justify-content: center;
            flex-grow: 1;
            width: fit-content;
            padding: 22px 50px;
            font: 500 18px/133% DM Sans, sans-serif;
            transition: background-color 0.3s ease;
        }

        .point-section .booking-button:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }

        .point-section .booking-button-disable {
            border-radius: 40px;
            background-color: #797979;
            border-color: #797979;
            color: #fff;
            justify-content: center;
            flex-grow: 1;
            width: fit-content;
            padding: 22px 50px;
            font: 500 18px/133% DM Sans, sans-serif;
            cursor: context-menu; /* menandakan tidak bisa diklik */
        }

        .seats-remaining {
            border-radius: 40px;
            border-color: rgba(0, 0, 0, 1);
            border-style: solid;
            border-width: 1px;
            color: #000;
            text-align: center;
            justify-content: center;
            padding: 18px 25px;
            font: 700 26px Roboto, sans-serif;
        }
        .modal-header {
            font: 500 24px/167% Montserrat, sans-serif;
        }
        .modal-body {
            background-color: #f4f4f4;
        }
        .modal .date-label {
            display: flex;
            align-self: start;
            text-align: center;
        }
        .modal .date-label span {
            border-radius: 20px;
            background-color: #eeb120;
            color: #fff;
            padding: 4px 23px;
            font: 700 20px Montserrat, sans-serif;
        }
        .modal .content-row {
            display: flex;
            margin-top: 24px;
            gap: 18px;
        }
        .modal .stick-wrapper {
            display: flex;
            flex-direction: column;
            position: relative;
            margin-top: 25px;
            margin-bottom: auto;
            width: 10px;
            height: 340px; /* Sesuaikan dengan ketinggian yang diperlukan */
        }

        .modal .line {
            position: absolute;
            left: 50%; /* Atur posisi horizontal ke tengah */
            height: 100%;
            transform: translateX(-50%);
            height: 100%;
            width: 2px; /* Lebar garis */
            background-color: #000; /* Warna garis */
        }

        .modal .circle-1, .modal .circle-2 {
            position: absolute;
            background-color: #eeb120; /* Warna lingkaran */
            border-radius: 50%;
            width: 20px; /* Diameter lingkaran */
            height: 20px; /* Diameter lingkaran */
            left: 50%; /* Atur posisi horizontal ke tengah */
            transform: translateX(-50%);
        }

        .modal .circle-1 {
            top: 0; /* Atur lingkaran pertama di bagian atas */
            z-index: 1;
        }

        .modal .circle-2 {
            bottom: 0; /* Atur lingkaran kedua di bagian bawah */
        }
        .modal .text-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            flex-basis: 0;
            width: fit-content;
        }
        @media (max-width: 991px) {
            .modal .text-content {
                max-width: 100%;
            }
        }

        .modal .time-info {
            width: 160px;
            display: flex;
            gap: 12px;
            white-space: nowrap;
        }

        @media (max-width: 991px) {
        .modal .time-info {
            white-space: initial;
        }
        }

        .modal .time {
            color: #000;
            letter-spacing: 2.16px;
            flex-grow: 1;
            font: 800 36px Montserrat, sans-serif;
        }

        .modal .time-zone {
            color: #646464;
            align-self: start;
            margin-top: 15px;
            font: 400 16px Montserrat, sans-serif;
        }

        .modal .location {
            color: #000;
            font: 700 32px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .modal .location {
                max-width: 100%;
            }
        }

        .modal .address {
            color: #646464;
            margin-top: 13px;
            font: 700 16px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .modal .address {
                max-width: 100%;
            }
        }

        .modal .plate-number {
            display: flex;
            margin-top: 9px;
            gap: 10px;
            font-size: 16px;
            color: #fff;
            font-weight: 700;
            text-align: center;
            padding: 0 1px;
        }

        .modal .plate {
            background-color: #000;
            justify-content: center;
            padding: 9px 15px;
        }

        .modal .plate-separator {
            background-color: #000;
            width: 106px;
            /* height: 28px; */
        }

        .modal .mall-name {
            color: #000;
            margin-top: 86px;
            font: 700 32px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .modal .mall-name {
                max-width: 100%;
                margin-top: 40px;
            }
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

        /* Hover effect for cancel button */
        .modal .btn-cancel:hover {
            background-color: #eeeeee;
            /* Light gray background on hover */
        }

        /* CSS for book button */
        .modal .btn-book {
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

        /* Hover effect for book button */
        .btn-book:hover {
            background-color: #333333;
            /* Darker gray background on hover */
        }

/* Status container */
.status-container {
    position: fixed;
    bottom: 0;
    width: 100%;
    display: flex;
    flex-direction: column;
    color: #fff;
    justify-content: center;
    padding: 0;
    height: 120px; /* Fixed height */
    overflow: hidden;
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
}

.status-container .radio-off::before {
    content: 'cancel'; /* Or use the Unicode equivalent */
}

/* @media (max-width: 991px) {
    .status-container {
        height: 100px;
    }

    .status-container .radio-off {
        font-size: 40px;
        padding: 0 20px;
    }

    .status-container .icon-date-range, .status-container .icon-time, .status-container .icon-location {
        font-size: 30px;
    }

    .status-container .date, .status-container .time, .status-container .location, .status-container .license-plate, .status-container .status {
        font-size: 20px;
    }
} */

@media (max-width: 991px) {
    .status-container {
        height: 150px; /* Ubah tinggi menjadi lebih kecil */
    }

    .booking-details {
        gap: 10px; /* Ubah jarak antar elemen menjadi lebih kecil */
        overflow-x: auto;
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
                    <li class="nav-item active dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                            YESS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/yess" style="color: #000;">YESS</a></li>
                            <li><a class="dropdown-item" href="/komsel" style="color: #000;">Komsel</a></li>
                            <li><a class="dropdown-item active" href="/bareng" style="color: #000;">Bareng</a></li>
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
    
    <?php
        $points = [
            [
                'id' => 1,
                'region' => 'timur',
                'title' => 'Hotel Dafam Pacific Caesar T1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '20.00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'id' => 2,
                'region' => 'timur',
                'title' => 'Hotel Dafam Pacific Caesar T2',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16.00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 4,
                'seats_t' => 4
            ],
            [
                'id' => 3,
                'region' => 'barat',
                'title' => 'Hotel Dafam Pacific Caesar B1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16.00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'id' => 4,
                'region' => 'selatan',
                'title' => 'Hotel Dafam Pacific Caesar S1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16.00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'id' => 5,
                'region' => 'pusat',
                'title' => 'Hotel Dafam Pacific Caesar P1',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16.00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ],
            [
                'id' => 6,
                'region' => 'pusat',
                'title' => 'Hotel Dafam Pacific Caesar P2',
                'description' => 'Jl. Dr. Ir. H. Soekarno No.45c, Kalijudan, Kec. Mulyorejo, Surabaya, Jawa Timur.', 
                'date' => '2024-03-30',
                'time' => '16.00',
                'image' => 'https://cdn.builder.io/api/v1/image/assets/TEMP/52c6608380b375ed3bae2c5bba943d966a1aca55d824170efc6ec4445e95651e?apiKey=f9ed83d6b13f4286938197498a891b31&',
                'seats_o' => 0,
                'seats_t' => 8
            ]
        ];
    ?>

    <!-- Bareng Modal -->
    <?php foreach ($points as $point): ?>
        <div class="modal fade" id="barengModal<?php echo $point['id']; ?>" tabindex="-1" aria-labelledby="barengModalLabel<?php echo $point['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="barengModalLabel<?php echo $point['id']; ?>">PESAN BERANGKAT BARENG</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="date-label"><span><?php echo $point['date']; ?></span></div>
                    <div class="content-row">
                        <div class="stick-wrapper">
                            <div class="circle-1"></div>
                            <div class="line"></div>
                            <div class="circle-2"></div>
                        </div>
                        <div class="text-content">
                            <div class="time-info">
                                <div class="time"><?php echo $point['time']; ?></div>
                                <span class="time-zone">WIB</span>
                            </div>
                            <h2 class="location"><?php echo $point['title']; ?></h2>
                            <p class="address"><?php echo $point['description']; ?></p>
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
                    <button type="button" class="btn btn-primary btn-book">Book</button>
                </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div>
        <main class="container">
            <section class="banner">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a625017315edd3df1ced9adbd4876287d53705099e254e0127107ea08037277?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Church gathering">
                <h1 class="banner-heading">Berangkat Bareng</h1>
                <p class="banner-subheading">Berangkat ke gereja jadi lebih mudah dan hemat &gt;&gt;&gt;</p>
                <div class="info-box">
                    <div class="info-columns">
                        <div class="location-column">
                            <div class="location" region="timur">Timur</div>
                        </div>
                        <div class="location-column">
                            <div class="location-alt" region="barat">Barat</div>
                        </div>
                        <div class="location-column">
                            <div class="location-alt" region="selatan">Selatan</div>
                        </div>
                        <div class="location-column">
                            <div class="location-alt" region="pusat">Pusat</div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main-content">
                <?php foreach ($points as $point): ?>
                    <div class="point-section" point-id="<?php echo $point['id']; ?>" region="<?php echo $point['region']; ?>">
                        <div class="point-info">
                            <div class="point-img-column">
                                <img src="<?php echo $point['image']; ?>" alt="Point location" class="point-img">
                            </div>
                            <div class="point-details-column">
                                <div class="point-details">
                                    <div class="point-title-box">
                                        <h2 class="point-title"><?php echo $point['title']; ?></h2>
                                        <p class="point-description"><?php echo $point['description']; ?></p>
                                    </div>
                                    <div class="separator"></div>
                                    <div class="booking-info">
                                        <div class="booking-details">
                                            <div class="booking-details-inner">
                                                <span class="icon">date_range</span>
                                                <span class="date-time"><?php echo $point['date']; ?></span>
                                            </div>
                                            <div class="time-info">
                                                <span class="icon">access_time</span>
                                                <span class="time"><?php echo $point['time']; ?></span>
                                            </div>
                                        </div>
                                        <div class="booking-stats">
                                        <?php
                                                echo $point['seats_o'] < $point['seats_t'] ?
                                                '<button class="booking-button" data-bs-toggle="modal" data-bs-target="#barengModal'.$point['id'].'">BOOK A SEAT</button>' :
                                                '<button class="booking-button-disable">BOOK A SEAT</button>';
                                            ?>
                                            <div class="seats-remaining"><?php echo $point['seats_o']; ?> / <?php echo $point['seats_t']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>
        <section class="status-container">
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
        // "timur" menjadi nilai bawaan dari info-box saat halaman dimuat
        window.onload = function() {
            // "timur" menjadi nilai bawaan dari info-box
            const selectedRegion = "timur";
            updatePoints(selectedRegion);
        };

        // Tampilkan sections dari suatu region saat klik region tersebut
        document.querySelectorAll('.info-box .location, .info-box .location-alt').forEach(item => {
            item.addEventListener('click', event => {
                // Dapatkan nilai info-box yang dipilih
                const selectedRegion = event.target.getAttribute('region');

                // Reset all location styles to inactive
                document.querySelectorAll('.info-box .location, .info-box .location-alt').forEach(location => {
                    location.classList.remove('location');
                    location.classList.add('location-alt');
                });

                // Set the clicked location to active
                event.target.classList.remove('location-alt');
                event.target.classList.add('location');

                updatePoints(selectedRegion);
            });
        });

        // tampilkan sections dari region tertentu
        function updatePoints(selectedRegion) {
            // Tampilkan/sembunyikan points berdasarkan regionnya
            document.querySelectorAll('.point-section').forEach(event => {
                const pointId = event.getAttribute('point-id');
                const pointInfo = <?php echo json_encode($points); ?>;
                const pointData = pointInfo.find(p => p.id === parseInt(pointId));

                // Untuk point yang bersesuaian
                if ((selectedRegion === 'timur' && pointData.region === 'timur') ||
                (selectedRegion === 'barat' && pointData.region === 'barat') ||
                (selectedRegion === 'selatan' && pointData.region === 'selatan') ||
                (selectedRegion === 'pusat' && pointData.region === 'pusat')) {
                    event.style.display = 'block'; // Tampilkan point
                }
                else {
                    event.style.display = 'none'; // sembunyikan pointnya
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