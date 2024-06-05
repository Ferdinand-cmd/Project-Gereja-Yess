<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/film.css" rel="stylesheet">
    <style>
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
    <a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja" class="whatsapp-button">
            <img src="img/wa.png" alt="WhatsApp">
    </a>
    <!-- content -->
    <div class="content">
        <!-- Home BG + Maps -->
        <div class="container-fluid">
            <div
                style="position: relative; display: flex; justify-content: center; align-items: center; height: 100vh;">
                <img src="img/home_bg2.png" alt=""
                    style="position: absolute; top: 0; width: 100vw; height: 100vh;">
                <div
                    style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; font-size: 20px;">
                    <img src="img/logo_putih.png" alt="" style="width: 20%;">
                    <br>
                    <p style="font-family: 'Montserrat', sans-serif; margin: 0; text-align: center;">
                        EVERY SATURDAY 17:00 WIB <br>
                        BEST CHURCH, CIPUTRA WORLD MALL 2ND FLOOR<br>
                        SURABAYA
                    </p>
                    <div style="margin-top: 20px;">
                        <a href="/"
                            style="border: 1px solid #fff; padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                            JADWAL IBADAH
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event -->
        <div class="container-white">
            <h5
                style="color: #EEB120; text-align: left; margin-bottom: 0; font-family: 'Roboto', sans-serif; font-weight: bold;">
                Soon-To-Happen</h5>
            <h2 style="text-align: left; font-family: 'Kanit', sans-serif;">Upcoming Events</h2>
            <div class="film-carousel">
                <button class="prev">&#10094;</button>
                <div class="film-list">
                    <div class="film">
                        <div class="date-box">30 MAR</div>
                        <img src="img/event.png" alt="Film 1" style="width: 300px;">
                        <div class="film-details">
                            <h4
                                style="color: #EEB120; text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">
                                Putus atau Terus 1</h4>
                            <p class="date-time"
                                style="text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">📅 30
                                Maret 2024 | ⏰ 17:00 WIB</p>
                        </div>
                    </div>
                    <div class="film">
                        <div class="date-box">30 MAR</div>
                        <img src="img/event.png" alt="Film 1" style="width: 300px;">
                        <div class="film-details">
                            <h4
                                style="color: #EEB120; text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">
                                Putus atau Terus 2</h4>
                            <p class="date-time"
                                style="text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">📅 30
                                Maret 2024 | ⏰ 17:00 WIB</p>
                        </div>
                    </div>
                    <div class="film">
                        <div class="date-box">30 MAR</div>
                        <img src="img/event.png" alt="Film 1" style="width: 300px;">
                        <div class="film-details">
                            <h4
                                style="color: #EEB120; text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">
                                Putus atau Terus 3</h4>
                            <p class="date-time"
                                style="text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">📅 30
                                Maret 2024 | ⏰ 17:00 WIB</p>
                        </div>
                    </div>
                    <div class="film-last">
                        <div class="date-box">30 MAR</div>
                        <img src="img/event.png" alt="Film 1" style="width: 300px;">
                        <div class="film-details">
                            <h4
                                style="color: #EEB120; text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">
                                Putus atau Terus 4</h4>
                            <p class="date-time"
                                style="text-align: left; margin-left:10px; font-family: 'Roboto', sans-serif;">📅 30
                                Maret 2024 | ⏰ 17:00 WIB</p>
                        </div>
                    </div>
                </div>
                <button class="next">&#10095;</button>
            </div>
        </div>
        <!-- pelayanan best -->
        <div class="container-fluid" style="margin-top: 20px;">
            <div
                style="position: relative; display: flex; justify-content: center; align-items: center; height: 70vh;">
                <img src="img/programbest.png" alt=""
                    style="position: absolute; top: 0; width: 100vw; height: 70vh; object-fit: cover;">
                <div
                    style="position: absolute; top: 30; left: 0; right: 0; bottom: 0; display: flex; flex-direction: column; justify-content: top; align-items: center; color: white; font-size: 20px; text-align: center;">
                    <h1 style="font-family: 'DM Sans', sans-serif; font-weight: bold; margin-bottom: 10px;">Program Regenerasi Gereja BEST</h1>
                    <h2 style="font-family: 'DM Sans', sans-serif;">FIND MORE ABOUT YESS ></h2>
                </div>
            </div>
        </div>

        <!-- Ladies devotion + Sunday school -->
        <div class="container-fluid" style="overflow-x: hidden; padding: 0;">
            <div class="row no-gutters">
                <div class="col-sm-6" style="position: relative;">
                    <img src="img/ladiesdevotion.png" alt="" style="width: 120%; height: 50vh; object-fit: cover; box-shadow: 0 4px 8px -4px rgba(0, 0, 0, 0.3);">
                    <div style="position: absolute; top: 20%; left: 10%; text-align: left; color: #fff;">
                        <h2 style="font-family: 'Share', cursive; font-weight: bold;">Ladies Devotion</h2>
                        <h3 style="font-family: 'DM Sans', sans-serif;">A woman of God</h3>
                        <br>
                        <a href="/ladiesdevotion" style="padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                            Learn More >
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" style="position: relative;">
                    <img src="img/sundayschool.png" alt="" style="width: 120%; height: 50vh; object-fit: cover; box-shadow: 0 4px 8px -4px rgba(0, 0, 0, 0.3);">
                    <div style="position: absolute; top: 20%; right: 10%; text-align: right; color: #fff;">
                        <h2 style="font-family: 'Share', cursive; font-weight: bold;">Sunday School</h2>
                        <h3 style="font-family: 'DM Sans', sans-serif;">Equipping kids and building families</h3>
                        <br>
                        <a href="/sundayschool" style="padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                            Learn More >
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Youtube -->
        <div class="container-fluid">
            <div class="row" style="background-color: #FF5E5E; color: white; padding: 20px;">
                <div class="col-md-6" style="display: flex; flex-direction: column; justify-content: center;">
                    <h2 style="font-size: 26px; margin-bottom: 0; font-family: 'Roboto', sans-serif;">Subscribe to our
                        YouTube channel</h2>
                    <div style="position: relative;">
                        <p style="font-size: 140px;"><strong><em>SEE MORE</em></strong></p>
                        <div
                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(255, 255, 0, 0.5); width: 650px; height: 80px; color: black; text-align: center; font-size: 54px; font-family: 'Roboto', sans-serif; font-weight: bold;">
                            <p>on YESS BEST WORLD</p>
                        </div>
                    </div>
                    <h2 style="text-align: right;">Stay up to date with weekly content</h2>
                </div>
                <div class="col-md-6 text-right">
                    <a href="https://www.youtube.com/channel/UCMgeyZoGQMWNAy_DdkC26eg">
                        <img src="img/youtube.png" alt="YouTube Logo"
                            style="width: 80px; margin-bottom: 20px; float: right;">
                    </a>
                    <iframe width="1114" height="448" src="https://www.youtube.com/embed/WWPg-qThoms"
                        title="Hari Terbaik - LOJ Worship | Adoration Night Vol. 4" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                        style="max-width: 100%; border-radius: 50px; box-shadow: 0px 10px 8px rgba(0, 0, 0, 0.4);"></iframe>
                </div>
            </div>
        </div>
        <!-- Gembala -->
        <div class="container-fluid">
            <div class="row" style="margin-top: 20px;">
                <img src="img/gembala.png" alt="Gembala Image" style="width: 100vw; max-width: 100%;">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>

</html>
