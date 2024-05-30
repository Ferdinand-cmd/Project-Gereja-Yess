<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bareng.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            display: flex;
            flex-direction: column;
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

        @media (max-width: 991px) {
            .banner {
                max-width: 100%;
                padding: 0 20px;
            }
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
            .banner-heading {
                max-width: 100%;
                font-size: 40px;
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
            width: 100%;
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

        .location-column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 25%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .location-column {
            width: 100%;
            }
        }

        .location {
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
        }

        @media (max-width: 991px) {
            .location {
            margin-top: 40px;
            padding: 0 20px;
            }
        }

        .location-alt {
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
        }

        @media (max-width: 991px) {
            .location-alt {
            margin-top: 40px;
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
            z-index: 10;
            display: flex;
            margin-top: -54px;
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
        }

        @media (max-width: 991px) {
            .point-details-column {
                width: 100%;
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

        .separator {
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

        .booking-details {
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

        .date-time {
            flex-grow: 1;
            flex-basis: auto;
            font: 700 22px Roboto, sans-serif;
        }

        .time-info {
            display: flex;
            gap: 16px;
        }

        .time {
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

        .booking-button {
            border-radius: 40px;
            background-color: #eeb120;
            color: #fff;
            justify-content: center;
            flex-grow: 1;
            width: fit-content;
            padding: 22px 50px;
            font: 500 18px/133% DM Sans, sans-serif;
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
    </style>
</head>

<body>
    <!-- navbar -->
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
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
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
                        <a class="nav-link active" href="/bareng">Bareng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event">Event</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->is_admin)
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
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
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
                'time' => '16.00',
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

    <main class="container">
        <section class="banner">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a625017315edd3df1ced9adbd4876287d53705099e254e0127107ea08037277?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Church gathering">
            <h1 class="banner-heading">Berangkat Bareng</h1>
            <p class="banner-subheading">Berangkat ke gereja jadi lebih mudah dan hemat &gt;&gt;&gt;</p>
            <div class="info-box">
                <div class="info-columns">
                    <div class="location-column">
                        <div class="location">Timur</div>
                    </div>
                    <div class="location-column">
                        <div class="location-alt">Barat</div>
                    </div>
                    <div class="location-column">
                        <div class="location-alt">Selatan</div>
                    </div>
                    <div class="location-column">
                        <div class="location-alt">Pusat</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="main-content">
            <?php foreach ($points as $point): ?>
                <div class="point-section">
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
                                        <button class="booking-button">BOOK A SEAT</button>
                                        <div class="seats-remaining">0 / 8</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </section>
    </main>

    <!-- Bareng Modal -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
