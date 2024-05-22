<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap">
    <style>
        :root {
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei", "Source Han Sans CN", sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .main-container {
            padding: 20px;
            max-width: 1440px;
            margin: 0 auto;
        }

        .upcoming-events {
            display: block;
            position: relative;
            color: #000000;
            font-family: Kanit, var(--default-font-family);
            font-size: 48px; /* Adjusted font size for better readability */
            font-weight: 700; /* Adjusted font weight for better visibility */
            margin: 87px 0 0 0; /* Adjusted margin for better alignment */
            line-height: 40px; /* Adjusted line height for better spacing */
            text-align: left;
        }

        .whats-coming-up {
            position: relative;
            width: max-content; /* Changed width to 'max-content' for better responsiveness */
            font-family: Open Sans Hebrew, var(--default-font-family);
            font-size: 24px; /* Adjusted font size for better readability */
            font-weight: 300;
            line-height: 50px; /* Adjusted line height for better spacing */
            text-align: left;
            white-space: nowrap;
            letter-spacing: 1.8px;
            margin-top: 10px; /* Adjusted margin for better spacing */
        }

        .whats-coming-up-3,
        .text-a {
            color: #000000;
            font-family: Open Sans Hebrew, var(--default-font-family);
            font-size: 24px; /* Adjusted font size for better readability */
            font-weight: 300;
            line-height: 50px; /* Adjusted line height for better spacing */
            text-align: left;
            letter-spacing: 1.8px; /* Adjusted letter spacing for better readability */
        }

        .text-a {
            margin-left: 10px; /* Adjusted margin-left for better spacing between text and arrow */
        }

        .event-container {
            display: flex;
            flex-direction: column;
            gap: 30px; /* Jarak antara event */
            position: relative; /* Tambahkan position relative untuk event card */
        }

        .event-card {
            display: flex;
            gap: 20px; /* Jarak antara gambar dan detail event */
            background-color: #f3f3f3;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
        }

        .event-image {
            display: flex;
            position: relative;
            width: 340px;
            height: 242px;
            background: url('./assets/images/91488b59-a008-433a-bfa3-7b16f3389423.png') no-repeat center;
            background-size: cover;
        }

        .date-container {
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            position: absolute;
            bottom: 0;
            right: 0;
            margin-bottom: 10px; /* Atur jarak dari bawah */
            margin-right: 10px; /* Atur jarak dari kanan */
        }

        .event-date {
            width: 100px;
            height: 60px;
            background: rgba(0, 0, 0, 0.25);
            font-size: 0px;
        }

        .month, .day {
            display: block;
            color: #f4f4f4;
            font-family: Roboto, var(--default-font-family);
            font-weight: 900;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            z-index: 2;
        }

        .month {
            font-size: 16px;
            line-height: 18.75px;
            margin: 7px 0 0 32px;
            letter-spacing: 1.6px;
        }

        .day {
            font-size: 32px;
            line-height: 37.5px;
            margin: -5px 0 0 6px;
            z-index: 1;
            text-align: center;
        }

        .event-details {
            flex: 1; /* Agar detail event mengambil sisa ruang */
            padding: 20px; /* Atur padding untuk memberikan ruang di sekitar detail event */
        }

        .event-title {
            font-family: Kanit, var(--default-font-family);
            font-weight: 600;
            font-size: 36px;
            line-height: 53.82px;
        }

        .event-location {
            font-family: Roboto, var(--default-font-family);
            font-weight: 700;
            font-size: 20px;
            line-height: 23px;
        }

        .event-message {
            font-family: Roboto, var(--default-font-family);
            font-weight: 400;
            font-size: 20px;
            line-height: 23.438px;
            letter-spacing: 0.4px;
        }

        .event-action {
            position: absolute;
            bottom: 10px; /* Atur jarak dari bawah */
            right: 10px; /* Atur jarak dari kanan */
        }

        .button-8 {
            position: relative; /* Jadikan posisi relative */
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            width: 150px; /* Lebar tombol */
            height: 56px; /* Tinggi tombol */
            border-radius: 40px;
            overflow: hidden; /* Hindari overflow */
        }

        .button-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            cursor: pointer;
            background: #eeb120;
            border: none;
            border-radius: inherit; /* Gunakan border-radius dari parent */
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .button-background:hover {
            opacity: 1;
        }

        .button-text {
            position: relative;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            line-height: 24px;
            text-align: center;
            z-index: 1; /* Pastikan tulisan berada di atas latar belakang */
        }

        .button-shadow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #6b46ff;
            border-radius: inherit; /* Gunakan border-radius dari parent */
            z-index: -1;
        }

        .right-9 {
            flex-shrink: 0;
            position: relative;
            width: 20px;
            height: 20px;
            z-index: 36;
            overflow: hidden;
        }

        .safe-area {
            position: relative;
            width: 16.667px;
            height: 16.667px;
            margin: 1.667px 0 0 1.667px;
            z-index: 37;
            overflow: visible auto;
        }

        .vector-a {
            position: relative;
            width: 16.5px;
            height: 13.167px;
            margin: 1.75px 0 0 0.08px;
            background: url(./assets/images/70b8ff2f-ef35-4258-af7f-b37ee796edb8.png) no-repeat center;
            background-size: 100% 100%;
            z-index: 38;
        }
    </style>
</head>
<body>
    <div class="main-container">
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

        <span class="upcoming-events">Upcoming Events</span>
        <div class="whats-coming-up">
            <span class="whats-coming-up-3">What's coming up at YESS Surabaya </span>
            <span class="text-a">>>></span>
        </div>

        <div class="event-container">
            <div class="event-card">
                <div class="event-image">
                    <div class="date-container">
                        <div class="event-date">
                            <span class="month">MAR</span><span class="day">30</span>
                        </div>
                    </div>
                </div>
                <div class="event-details">
                    <h2 class="event-title">Putus atau Terus</h2>
                    <p class="event-location">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</p>
                    <p class="event-description">YESS Surabaya Valentine's Day Celebration “Putus atau Terus”<br />Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...</p>
                </div>
            </div>
            <div class="event-card">
                <div class="event-image">
                    <div class="date-container">
                        <div class="event-date">
                            <span class="month">APR</span><span class="day">19-21</span>
                        </div>
                    </div>
                </div>
                <div class="event-details">
                    <h2 class="event-title">YESS Leadership Mission Training VII</h2>
                    <p class="event-location">Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</p>
                    <p class="event-message">Biarlah semangat misi terus menyala dalam hidup kita.<br />Uis Neno nokan kit, Immanuel!<br />Sampe ketemu di YLMT, basodara dong!</p>
                    <div class="event-action">
                        <div class="button-8">
                            <button class="button-background"></button>
                            <div class="button-shadow"></div>
                            <span class="button-text">Daftar</span>
                            <div class="right-9">
                                <div class="safe-area">
                                    <div class="vector-a"></div>
                                </div>
                            </div>
                        </div>
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
                <div class="col-md-6 d-flex justify-content-end">
                    <span style="font-family: 'Roboto', sans-serif; font-size: 20px; margin-top: 20px;">Contact Us</span>
                    <img src="img/wa.png" alt="WhatsApp">
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
