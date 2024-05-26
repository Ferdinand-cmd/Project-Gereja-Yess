<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Event</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap">
        <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #fff;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            display: flex;
            margin-top: 70px;
            width: 100%;
            flex-direction: column;
            padding: 0 80px;
        }

        @media (max-width: 991px) {
            .main-content {
            max-width: 100%;
            margin-top: 40px;
            padding: 0 20px;
            }
        }

        .title {
            color: #000;
            align-self: left;
            font: 700 100px Kanit, sans-serif;
            padding-top: 20px;
        }

        @media (max-width: 991px) {
            .title {
                max-width: 100%;
                font-size: 40px;
            }
        }

        .subtitle {
            color: #000;
            letter-spacing: 1.8px;
            align-self: left;
            margin-top: 23px;
            font: 300 36px/50px Open Sans Hebrew, -apple-system, Roboto, Helvetica, sans-serif;
        }

        @media (max-width: 991px) {
            .subtitle {
            max-width: 100%;
            }
        }

        .event-section {
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: #f4f4f4;
            align-self: end;
            margin-top: 53px;
            width: 1205px;
            max-width: 100%;
            padding: 27px 65px;
        }

        @media (max-width: 991px) {
            .event-section {
            margin: 40px 10px 0 0;
            padding: 0 20px;
            }
        }

        .event-container {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .event-container {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }

        .event-date {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 37%;
            margin-left: 0px;
        }

        .event-details {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 63%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .event-date,
            .event-details {
            width: 100%;
            }
        }

        .event-wrapper {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            display: flex;
            aspect-ratio: 1.4;
            flex-grow: 1;
            align-items: end;
            color: #f5f5f5;
            font-weight: 900;
            white-space: nowrap;
            padding: 80px 60px 0;
        }

        @media (max-width: 991px) {
            .event-wrapper {
            margin-top: 40px;
            white-space: initial;
            }
        }

        .event-image {
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .event-month {
            letter-spacing: 1.6px;
            font: 16px Roboto, sans-serif;
        }

        .event-day {
            letter-spacing: 3.2px;
            margin-top: 6px;
            font: 32px Roboto, sans-serif;
        }

        .event-title {
            display: flex;
            flex-direction: column;
            align-self: stretch;
            font-size: 20px;
            color: #646464;
            margin: auto 0;
        }

        @media (max-width: 991px) {
            .event-title {
            max-width: 100%;
            margin-top: 40px;
            }
        }

        .event-title-heading {
            color: #000;
            font: 600 36px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .event-title-heading {
            max-width: 100%;
            }
        }

        .event-location {
            font-family: Roboto, sans-serif;
            font-weight: 700;
            margin-top: 5px;
        }

        @media (max-width: 991px) {
            .event-location {
            max-width: 100%;
            }
        }

        .event-description {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            letter-spacing: 0.4px;
            margin-top: 15px;
        }

        @media (max-width: 991px) {
            .event-description {
            max-width: 100%;
            }
        }

        .more-events-section {
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            background-color: #f4f4f4;
            align-self: end;
            margin-top: 44px;
            width: 1205px;
            max-width: 100%;
            padding: 27px 65px;
        }

        @media (max-width: 991px) {
            .more-events-section {
            margin: 40px 10px 0 0;
            padding: 0 20px;
            }
        }

        .more-events-container {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .more-events-container {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }

        .more-events-date-section {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 31%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .more-events-date-section {
            width: 100%;
            }
        }

        .more-events-wrapper {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            display: flex;
            aspect-ratio: 1.4;
            flex-grow: 1;
            align-items: end;
            color: #f5f5f5;
            font-weight: 900;
            white-space: nowrap;
            padding: 80px 60px 0;
        }

        @media (max-width: 991px) {
            .more-events-wrapper {
                margin-top: 40px;
                white-space: initial;
            }
        }

        .more-events-image {
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .more-events-month {
            letter-spacing: 1.6px;
            align-self: center;
            font: 16px Roboto, sans-serif;
        }

        .more-events-day {
            margin-top: 6px;
            font: 32px Roboto, sans-serif;
        }

        .more-events-details {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 69%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .more-events-details {
            width: 100%;
            }
        }

        .more-event-info {
            margin-top: 32px;
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .more-event-info {
            max-width: 100%;
            margin-top: 40px;
            }
        }

        .more-event-container {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .more-event-container {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
            }
        }

        .more-events-title-section {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 83%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .more-events-title-section {
            width: 100%;
            }
        }

        .more-events-title {
            display: flex;
            flex-direction: column;
            font-size: 20px;
            color: #646464;
        }

        @media (max-width: 991px) {
            .more-events-title {
            max-width: 100%;
            }
        }

        .more-events-title-heading {
            color: #000;
            font: 600 36px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .more-events-title-heading {
            max-width: 100%;
            }
        }

        .more-events-location {
            font-family: Roboto, sans-serif;
            font-weight: 700;
            margin-top: 5px;
        }

        @media (max-width: 991px) {
            .more-events-location {
            max-width: 100%;
            }
        }

        .more-events-description {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            letter-spacing: 0.4px;
            margin-top: 15px;
        }

        @media (max-width: 991px) {
            .more-events-description {
            max-width: 100%;
            }
        }

        .register-now {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 17%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .register-now {
                width: 100%;
            }
        }

        .register-btn-container {
            justify-content: center;
            border-radius: 40px;
            display: flex;
            margin-top: 155px;
            flex-grow: 1;
            flex-direction: column;
            font-size: 18px;
            color: #fff;
            font-weight: 500;
            white-space: nowrap;
            line-height: 133%;
        }

        @media (max-width: 991px) {
            .register-btn-container {
            margin-top: 40px;
            white-space: initial;
            }
        }

        .register-btn-wrapper {
            border-radius: 40px;
            background-color: #eeb120;
            display: flex;
            gap: 8px;
            padding: 16px 24px;
        }

        @media (max-width: 991px) {
            .register-btn-wrapper {
            white-space: initial;
            padding: 0 20px;
            }
        }

        .register-btn-text {
            font-family: DM Sans, sans-serif;
        }

        .register-btn-icon {
            aspect-ratio: 1;
            object-fit: auto;
            object-position: center;
            width: 20px;
            margin: auto 0;
        }
    </style>
<body>
    <div class="container">
        <main class="main-content">
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
            <h1 class="title">Upcoming Events</h1>
            <h2 class="subtitle"> What's coming up at YESS Surabaya <span style="letter-spacing: 3.6px">>>></span> </h2>
            <div class="event-section">
            <div class="event-container">
                <div class="event-date">
                <div class="event-wrapper">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/822aeb911358eaa71c142746dc40e2caece2dca05e0077f1ca59a46b32605bde?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Event Image" class="event-image" />
                </div>
                </div>
                <div class="event-details">
                <div class="event-title">
                    <h3 class="event-title-heading">Putus atau Terus</h3>
                    <p class="event-location">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</p>
                    <p class="event-description">
                    YESS Surabaya Valentine's Day Celebration “Putus atau Terus” <br>
                    Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...
                    </p>
                </div>
                </div>
            </div>
            </div>
            <div class="more-events-section">
            <div class="more-events-container">
                <div class="more-events-date-section">
                <div class="more-events-wrapper">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9eee4a4433c5aa9edd3838b6b293dcf4f77d334c5c2ae416679cc83373b1feed?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="More Events Image" class="more-events-image" />
                </div>
                </div>
                <div class="more-events-details">
                    <div class="more-event-info">
                        <div class="more-event-container">
                            <div class="more-events-title-section">
                                <div class="more-events-title">
                                <h3 class="more-events-title-heading">YESS Leadership Mission Training VII</h3>
                                <p class="more-events-location">Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</p>
                                <p class="more-events-description">
                                    Biarlah semangat misi terus menyala dalam hidup kita. <br>
                                    Uis Neno nokan kit, Immanuel! <br>
                                    Sampe ketemu di YLMT, basodara dong!
                                </p>
                                </div>
                            </div>
                            <div class="register-now">
                                <div class="register-btn-container">
                                    <div class="register-btn-wrapper">
                                        <div class="register-btn-text">Daftar</div>
                                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/01cac3dbc82fd7f6575f07d9ed7397898505c51f25963c4a87b4f1bee395eb53?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Register Icon" class="register-btn-icon" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>