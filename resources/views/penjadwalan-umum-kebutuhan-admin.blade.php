<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Penjadwalan Umum Kebutuhan (Admin)</title>
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
        margin-top: 80px;
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

        .section-header {
            color: #000;
            font: 700 64px Kanit, sans-serif;
            display: inline-block;
            margin-left: 10px;
        }

        @media (max-width: 991px) {
            .section-header {
                max-width: 100%;
                margin-left: 5px;
                margin-right: 6px;
                font-size: 40px;
            }
        }

        .main-content-2 {
        background-color: #000;
        display: flex;
        margin-top: 26px;
        flex-direction: column;
        padding: 11px 63px 57px;
        }

        @media (max-width: 991px) {
        .main-content-2 {
            max-width: 100%;
            margin-right: 7px;
            padding: 0 20px;
        }
        }

        .sub-header {
        display: flex;
        gap: 20px;
        }

        @media (max-width: 991px) {
        .sub-header {
            max-width: 100%;
            flex-wrap: wrap;
        }
        }

        .date {
            color: #fff;
            align-self: end;
            margin-top: 21px;
            flex-grow: 1;
            flex-basis: auto;
            font: 600 32px Kanit, sans-serif;
        }

        .btn-edit {
        background-color: #eeb120;
        /* align-items: start; */
        color: #000;
        /* white-space: nowrap; */
        /* text-align: center;
        justify-content: center; */
        padding: 12px 31px;
        font: 400 35px/63% Material Icons, -apple-system, Roboto, Helvetica, sans-serif;
        }

        .btn-edit:hover {
            background-color: #d4a100;
            /* Change background color on hover */
        }

        @media (max-width: 991px) {
        .btn-edit {
            padding: 0 20px;
        }
        }

        .main-content-2 label {
            color: #fff;
        }

        th, td {
            vertical-align: middle;
        }

        .arrow-btn {
            background-color: black;
            border: none;
            border-radius: 50%;
            padding: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .arrow-btn .material-icons {
            color: white;
            font-size: 24px;
        }

        .arrow-link {
            text-decoration: none;
        }

        /* Modal */
        .modal-header {
            font: 500 24px/167% Montserrat, sans-serif;
        }
        .modal-body {
            background-color: #000;
        }
        .modal-footer {
            background-color: #a2a2a2;
        }
        .form-label {
            color: #fff;
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

        /* CSS for save button */
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
        .btn-save:hover {
            background-color: #333333;
            /* Darker gray background on hover */
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
                        <a class="nav-link" href="/event-admin">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">Penjadwalan</a>
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

    <!-- Modal edit komsel -->
    <div class="modal modal-edit fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">EDIT KOMSEL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="eTopik" class="form-label">Topik</label>
                        <input type="text" class="form-control" id="eTopik" name="eTopik" required>
                    </div>
                    <div class="mb-3">
                        <label for="ePendeta" class="form-label">Nama Pendeta</label>
                        <input type="text" class="form-control" id="ePendeta" name="ePendeta" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SAVE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container">
        <section class="wrapper">
            <main class="main-content">
                <div>
                    <a href="penjadwalan-umum-detail-admin.blade.php" class="arrow-link">
                        <button class="arrow-btn">
                            <span class="material-icons">arrow_back</span>
                        </button>
                    </a>
                    <h2 class="section-header">Detail Ibadah Umum - Ciputra World</h2>
                </div>
                <div class="main-content-2">
                    <div class="sub-header">
                        <div class="date">Minggu, 7 April 2024</div>
                        <button class="btn-edit" data-bs-toggle="modal" data-bs-target="#editModal">mode_edit</button>
                    </div>
                    <div class="mb-3 row">
                        <label for="topik" class="col-sm-2 col-form-label">Topik</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="topik" name="topik" value="Kecerdasan Buatan" disabled readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pendeta" class="col-sm-2 col-form-label">Pendeta</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pendeta" name="pendeta" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="musik">Pemain Musik</label>
                            <input type="text" class="form-control" id="musik1" name="musik1" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="musik2" name="musik2" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="musik3" name="musik3" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                        <div class="col">
                        <label class="kameramen">Kameramen</label>
                            <input type="text" class="form-control" id="kam1" name="kam1" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="kam2" name="kam2" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="wl">Worship Leader</label>
                            <input type="text" class="form-control" id="wl1" name="wl1" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="wl2" name="wl2" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                        <div class="col">
                        <label class="mm">Multimedia</label>
                            <input type="text" class="form-control" id="mm1" name="mm1" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="mm2" name="mm2" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="singer">Singer</label>
                            <input type="text" class="form-control" id="singer1" name="singer1" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="singer2" name="singer2" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="singer3" name="singer3" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                        <div class="col">
                        <label class="usher">Usher</label>
                            <input type="text" class="form-control" id="usher1" name="usher1" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="usher2" name="usher2" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="usher3" name="usher3" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="usher4" name="usher4" value="Steven Bryan Christanto" disabled readonly>
                            <input type="text" class="form-control" id="usher5" name="usher5" value="Steven Bryan Christanto" disabled readonly>
                        </div>
                    </div>
                </div>
            </main>
        </section>
    </div>
    <script>
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<html>