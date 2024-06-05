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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bareng.css" rel="stylesheet">
    <style>
        .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 0 2px;
        }

        .wrapper {
        background-color: #fff;
        display: flex;
        padding-bottom: 80px;
        flex-direction: column;
        align-items: center;
        }

        .main-content {
        z-index: 10;
        margin-top: 20px;
        width: 100%;
        max-width: 1244px;
        }

        @media (max-width: 991px) {
        .main-content {
            max-width: 100%;
        }
        }

        .section {
            margin-top: 80px;
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
        .section {
            flex-direction: column;
            align-items: stretch;
            gap: 0px;
        }
        }

        .column {
            display: flex;
            flex-direction: column;
            width: 71%;
        }

        @media (max-width: 991px) {
        .column {
            width: 100%;
        }
        }

        .column-header {
        display: flex;
        margin-top: 38px;
        gap: 11px;
        font-size: 32px;
        font-weight: 500;
        text-align: center;
        letter-spacing: 1.6px;
        line-height: 156%;
        }

        @media (max-width: 991px) {
        .column-header {
            margin-top: 40px;
            flex-wrap: wrap;
        }
        }

        .header-detail {
        font-family: Kanit, sans-serif;
        border-radius: 20px 20px 0px 0px;
        border: 1px solid rgba(0, 0, 0, 1);
        background-color: #f4f4f4;
        color: #000;
        justify-content: center;
        padding: 24px 31px;
        }

        @media (max-width: 991px) {
        .header-detail {
            padding: 0 20px;
        }
        }

        .header-detail-secondary {
        font-family: Kanit, sans-serif;
        border-radius: 20px 20px 0px 0px;
        border: 1px solid rgba(0, 0, 0, 1);
        background-color: #d9d9d9;
        color: #989898;
        white-space: nowrap;
        justify-content: center;
        padding: 24px 52px;
        }

        @media (max-width: 991px) {
        .header-detail-secondary {
            white-space: initial;
            padding: 0 20px;
        }
        }

        .column-secondary {
        display: flex;
        flex-direction: column;
        width: 29%;
        margin-left: 20px;
        }

        @media (max-width: 991px) {
        .column-secondary {
            width: 100%;
        }
        }

        .action-card {
        border-radius: 25px;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        background-color: #000;
        display: flex;
        gap: 20px;
        color: #eeb120;
        text-align: center;
        width: 100%;
        padding: 23px 45px;
        }

        @media (max-width: 991px) {
        .action-card {
            margin-top: 40px;
            padding: 0 20px;
        }
        }

        .icon {
        align-self: start;
        font: 52px Material Icons, sans-serif;
        }

        @media (max-width: 991px) {
        .icon {
            font-size: 40px;
        }
        }

        .action-text {
        flex-grow: 1;
        font: 38px Kanit, sans-serif;
        }

        .content-card {
        border-radius: 20px;
        border: 1px solid rgba(0, 0, 0, 1);
        background-color: #f4f4f4;
        display: flex;
        width: 100%;
        max-width: 1328px;
        flex-direction: column;
        color: #000;
        padding: 28px 42px;
        }

        @media (max-width: 991px) {
        .content-card {
            max-width: 100%;
            margin-bottom: 40px;
            padding: 0 20px;
        }
        }

        .card-header {
        display: flex;
        width: 690px;
        gap: 20px;
        }

        @media (max-width: 991px) {
        .card-header {
            flex-wrap: wrap;
        }
        }

        .card-title {
        letter-spacing: 1.68px;
        margin: auto 0;
        font: 700 24px Montserrat, sans-serif;
        }

        .card-subtitle {
        border: 1px solid rgba(0, 0, 0, 1);
        background-color: #fff;
        justify-content: center;
        flex-grow: 1;
        padding: 20px;
        font: 400 20px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
        .card-subtitle {
            max-width: 100%;
        }
        }

        /* .card-main {
        background-color: #000;
        display: flex;
        margin-top: 28px;
        flex-direction: column;
        text-align: center;
        padding: 6px 0;
        } */

        /* @media (max-width: 991px) {
        .card-main {
            max-width: 100%;
        }
        } */

        /* .card-main-header {
        display: flex;
        width: 100%;
        gap: 20px;
        font-size: 24px;
        color: #fff;
        font-weight: 700;
        }

        @media (max-width: 991px) {
        .card-main-header {
            max-width: 100%;
            flex-wrap: wrap;
        }
        } */

        /* .card-item {
        flex-grow: 1;
        margin: auto 0;
        font-family: Montserrat, sans-serif;
        letter-spacing: 1.68px;
        } */

        /* .card-main-action {
        background-color: #eeb120;
        align-self: stretch;
        color: #000;
        justify-content: center;
        padding: 15px 40px;
        font: 400 60px Material Icons, sans-serif;
        }

        @media (max-width: 991px) {
        .card-main-action {
            font-size: 40px;
            padding: 0 20px;
        }
        } */

        /* .list-item {
        background-color: #fff;
        display: flex;
        margin-top: 6px;
        width: 100%;
        gap: 20px;
        padding: 10px 20px 10px 80px;
        }

        @media (max-width: 991px) {
        .list-item {
            flex-wrap: wrap;
            padding-left: 20px;
        }
        }

        .list-text {
        flex-grow: 1;
        margin: auto 0;
        font: 20px Montserrat, sans-serif;
        }

        .list-actions {
        display: flex;
        gap: 7px;
        } */

        .secondary-item {
        background-color: #efefef;
        display: flex;
        width: 100%;
        gap: 20px;
        padding: 10px 20px 10px 80px;
        }

        @media (max-width: 991px) {
        .secondary-item {
            flex-wrap: wrap;
            padding-left: 20px;
        }
        }

        .secondary-text {
        flex-grow: 1;
        margin: auto 0;
        font: 20px Montserrat, sans-serif;
        }

        .secondary-actions {
            display: flex;
            gap: 7px;
        }

        .secondary-action-icon {
            background-color: #eeb120;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            padding: 0 17px;
            font: 32px Material Icons, sans-serif;
        }

        .footer-spacer {
        background-color: #fff;
        height: 70px;
        }

        .footer-spacer-secondary {
        background-color: #efefef;
        height: 70px;
        }

        .content-card .table {
            margin-top: 20px;
        }

        .table-main-action {
            background-color: #eeb120; 
            font: 400 32px Material Icons, sans-serif;
            width: 100%;
        }

        .action-icon {
        background-color: #eeb120;
        border-color: #eeb120;
        align-items: center;
        justify-content: center;
        font: 32px Material Icons, sans-serif;
        }

        .table-main-action:hover, .action-icon:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
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
                        <a class="nav-link active" href="/admin">Bareng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event-admin">Event</a>
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
    <div class="container">
        <section class="wrapper">
            <main class="main-content">
                <section class="section">
                    <div class="column">
                        <div class="column-header">
                            <div class="header-detail">DETAIL JEMPUT</div>
                            <div class="header-detail-secondary">KEBERANGKATAN</div>
                        </div>
                    </div>
                    <div class="column-secondary">
                        <div class="action-card">
                            <div class="icon">directions_car</div>
                            <div class="action-text">Penjemput</div>
                        </div>
                    </div>
                </section>
                <section class="content-card">
                    <div class="card-header">
                        <div class="card-title">Tujuan</div>
                        <div class="card-subtitle">Hotel Dafam Pacific Caesar</div>
                    </div>
                    <!-- <div class="card-main">
                        <div class="card-main-header">
                            <div class="card-item">Titik Jemput</div>
                            <div class="card-item">Wilayah</div>
                            <div class="card-item">Waktu</div>
                            <div class="card-main-action">add_circle_outline</div>
                        </div>
                        <div class="list-item">
                            <div class="list-text">Hotel Dafam Pacific Caesar</div>
                            <div class="list-actions">
                            <div class="action-icon">delete</div>
                            <div class="action-icon">mode_edit</div>
                            </div>
                        </div>
                        <div class="secondary-item">
                            <div class="secondary-text">Pakuwon Trade Center Lobby A&W</div>
                            <div class="secondary-actions">
                                <div class="secondary-action-icon">delete</div>
                                <div class="secondary-action-icon">mode_edit</div>
                            </div>
                        </div>
                    </div> -->
                    <table class="table table-striped table-hover table-bordered border-secondary">
                        <thead>
                            <tr class="table-dark">
                                <th>Titik Jemput</th>
                                <th>Wilayah</th>
                                <th>Waktu</th>
                                <th><button class="table-main-action">add_circle_outline</button></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Hotel Dafam Pacific Caesar</td>
                                <td>Timur</td>
                                <td>12.00</td>
                                <td>
                                    <button class="action-icon">mode_edit</button>
                                    <button class="action-icon">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Pakuwon Trade Center Lobby A&W</td>
                                <td>Timur</td>
                                <td>13.00</td>
                                <td>
                                    <button class="action-icon">mode_edit</button>
                                    <button class="action-icon">delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
            </main>
            <footer>
                <div class="footer-spacer"></div>
                <div class="footer-spacer-secondary"></div>
            </footer>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<html>