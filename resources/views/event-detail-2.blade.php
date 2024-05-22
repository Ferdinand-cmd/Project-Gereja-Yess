<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YESS.SUB | Event Detail</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap" />
    <style>
        :root {
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei", "Source Han Sans CN", sans-serif;
        }
        body, html {
            margin: 0;
            padding: 0;
            font-family: var(--default-font-family);
        }
        .main-container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            background-color: #f4f4f4;
        }
        .content {
            width: calc(100% - 100px);
            max-width: 1337px;
            background-color: #ffffff;
            margin: 95px auto 35px auto;
            padding: 35px;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
            border-radius: 10px;
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
        .event-image {
            width: 100%;
            height: auto;
            max-width: 1169px;
            margin: 20px 0;
            background: url(./assets/images/405b79a68a003c32aab00353cd2b98feedf55647.png) no-repeat center;
            background-size: cover;
        }
        .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .event-title {
            font-family: Kanit, var(--default-font-family);
            font-size: 48px;
            font-weight: 600;
        }
        .register-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background-color: #eeb120;
            border: none;
            border-radius: 40px;
            font-family: DM Sans, var(--default-font-family);
            font-size: 18px;
            font-weight: 500;
            color: #ffffff;
            cursor: pointer;
        }
        .event-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            font-family: Roboto, var(--default-font-family);
            font-size: 30px;
            font-weight: 500;
            color: #646464;
        }
        .event-description {
            font-family: Roboto, var(--default-font-family);
            font-size: 24px;
            font-weight: 400;
            color: #646464;
            line-height: 1.5;
            letter-spacing: 0.48px;
            margin-bottom: 40px;
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
        <div class="content">
            <button class="back-button">
                <span class="material-icons">arrow_back</span>
                Kembali ke events
            </button>
            <div class="event-image"></div>
            <div class="event-header">
                <h1 class="event-title">YESS Leardership Mission Training VII</h1>
                <button class="register-button">
                    Daftar
                    <span class="material-icons">arrow_forward</span>
                </button>
            </div>
            <div class="event-info">
                <span class="material-icons">date_range</span>
                <span>19-21 April 2024</span>
            </div>
            <div class="event-info">
                <span class="material-icons">location_on</span>
                <span>Desa Bikium, Soe, Nusa Tenggara Timur</span>
            </div>
            <p class="event-description">
                Biarlah semangat misi terus menyala dalam hidup kita.<br />
                Uis Neno nokan kit, Immanuel!<br />
                Sampe ketemu di YLMT, basodara dong!
            </p>
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