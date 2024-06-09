<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Pelayanan Umum Detail (Admin)</title>
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
        }

        @media (max-width: 991px) {
            .section-header {
                max-width: 100%;
                margin-right: 6px;
                font-size: 40px;
            }
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

        .content-date {
            margin-left: 10px;
            font-weight: 700;
            display: inline-block;
        }

        @media (max-width: 991px) {
            .content-date {
                margin-left: 5px;
            }
        }

        .content-date span {
            display: flex;
            align-items: center;
        }

        .content-date span {
            margin-top: 17px;
            font-size: 36px;
        }

        .divider {
            box-shadow: inset 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            border: 2px solid #fff;
            background-color: #fff;
            margin-top: 13px;
            height: 2px;
        }

        .details-section {
            display: flex;
            flex-direction: column;
        }


        .details-content {
            margin-top: 14px;
            display: flex;
            flex-direction: column;
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

        /* Modal kebutuhan */
        .title-content {
            color: #000;
            font: 500 22px/182% Montserrat, sans-serif;
        }
        @media (max-width: 991px) {
            .title-content {
            max-width: 100%;
            }
        }
        .field-group {
            border-radius: 20px;
            background-color: #d9d9d9;
            display: flex;
            margin-top: 12px;
            flex-direction: column;
            align-items: start;
            font-weight: 400;
            padding: 16px 80px 16px 38px;
        }
        @media (max-width: 991px) {
            .field-group {
                padding: 16px 20px;
                max-width: 100%;
            }
        }

        .footer-spacer {
        background-color: #fff;
        height: 70px;
        }

        .footer-spacer-secondary {
        background-color: #efefef;
        height: 70px;
        }

        @media (max-width: 991px) {
            .content-date span {
                white-space: initial;
                padding: 0 20px;
            }

            .details-section {
                max-width: 100%;
                padding: 0 20px;
            }


            .details-content {
                max-width: 100%;
            }
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

    <!-- Modal add ibadah -->
    <div class="modal modal-add fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">ADD JADWAL IBADAH</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="time" class="form-control" id="waktu" name="waktu" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendeta" class="form-label">Pendeta</label>
                        <input type="text" class="form-control" id="pendeta" name="pendeta" required>
                    </div>
                    <div class="mb-3">
                        <label for="topik" class="form-label">Topik (opsional)</label>
                        <input class="form-control" id="topik" name="topik">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SAVE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal kebutuhan -->
    <div class="modal modal-kebutuhan fade" id="kebutuhanModal" tabindex="-1" aria-labelledby="kebutuhanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="kebutuhanLabel">Form Kebutuhan 7 April 2024</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <h2 class="title-content">Jumlah kebutuhan pelayanan</h2>
                    <div class="field-group">
                        <div class="mb-3">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <input type="number" id="usher" placeholder="Jumlah" class="form-control" required>
                                </div>
                                <div class="col-auto">
                                    <label for="usher" class="col-form-label">Usher</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <input type="number" id="wl" placeholder="Jumlah" class="form-control" required>
                                </div>
                                <div class="col-auto">
                                    <label for="wl" class="col-form-label">Worship Leader</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <input type="number" id="singer" placeholder="Jumlah" class="form-control" required>
                                </div>
                                <div class="col-auto">
                                    <label for="singer" class="col-form-label">Singer</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <a href="penjadwalan-umum-kebutuhan-admin.blade.php" class="arrow-link">
                        <button type="button" class="btn btn-primary btn-save">GENERATE</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container">
        <section class="wrapper">
            <main class="main-content">
                <h2 class="section-header">Detail Ibadah Umum - Ciputra World</h2>
                <section class="content-card">
                    <div>
                        <a href="penjadwalan-umum-admin.blade.php" class="arrow-link">
                            <button class="arrow-btn">
                                <span class="material-icons">arrow_back</span>
                            </button>
                        </a>
                        <div class="content-date">
                            <span>Sabtu, 6 April 2024</span>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div id="details-section" class="details-section">
                        <div class="details-content">
                            <table class="table table-striped table-bordered border-secondary">
                                <thead>
                                    <tr class="table-dark">
                                        <th>Ke-</th>
                                        <th>Waktu</th>
                                        <th>Pendeta</th>
                                        <th>Topik</th>
                                        <th><button class="table-main-action" data-bs-toggle="modal" data-bs-target="#addModal">add_circle_outline</button></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>10.30</td>
                                        <td>Steven Bryan Christanto</td>
                                        <td>Kecerdasan Buatan</td>
                                        <td>
                                            <button class="action-icon" data-bs-toggle="modal" data-bs-target="#kebutuhanModal">arrow_forward</button>
                                            <button class="action-icon">delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>13.00</td>
                                        <td>Steven Bryan Christanto</td>
                                        <td>Data Mining</td>
                                        <td>
                                            <button class="action-icon" data-bs-toggle="modal" data-bs-target="#kebutuhanModal">arrow_forward</button>
                                            <button class="action-icon">delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </main>
            <footer>
                <div class="footer-spacer"></div>
                <div class="footer-spacer-secondary"></div>
            </footer>
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