<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Bareng (Admin)</title>
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
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .header-detail:hover {
            background-color: #e0e0e0;
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
        padding: 24px 31px;
        transition: background-color 0.3s;
        cursor: pointer;
        }

        .header-detail-secondary:hover {
            background-color: #c0c0c0;
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

        .penjemput-button {
        border-radius: 25px;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        background-color: #000;
        display: flex;
        gap: 20px;
        color: #eeb120;
        text-align: center;
        width: 100%;
        padding: 23px 23px;
        }

        @media (max-width: 991px) {
        .penjemput-button {
            margin-top: 40px;
            padding: 0 10px;
        }
        }

        .icon {
        align-self: start;
        font: 32px Material Icons, sans-serif;
        }

        .penjemput-text {
        flex-grow: 1;
        font: 24px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
        .icon {
            font-size: 24px;
        }
        .penjemput-text {
            font-size: 18px;
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
        
        padding: 20px;
        font: 400 20px Montserrat, sans-serif;
        
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

        th, td {
            vertical-align: middle;
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

        /* Modal penjemput */

        .modal-penjemput .sub-header {
        color: #000;
        text-align: center;
        letter-spacing: 2px;
        /* margin-top: 23px; */
        font: 500 20px Montserrat, sans-serif;
    }

    .modal-penjemput .search-container {
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        background-color: #000;
        display: flex;
        gap: 20px;
        font-weight: 400;
        white-space: nowrap;
        padding: 8px 33px;
        margin: 7px 0;
        max-width: 100%;
    }

    .modal-penjemput .search-icon {
        color: #fff;
        text-align: center;
        /* flex-grow: 1; */
        margin: auto 0;
        font: 24px Material Icons, sans-serif;
    }

    .modal-penjemput .search-input {
        background-color: #fff;
        color: #888;
        justify-content: center;
        flex-grow: 1;
        width: fit-content;
        /* padding: 26px 31px; */
        font: 24px Kanit, sans-serif;
    }

    .modal-penjemput .modal-dialog {
  max-width: 100%;
  margin: 0 auto;
}

.modal-penjemput .modal-content {
  max-height: 90vh;
  overflow-y: auto;
}

.modal-penjemput .table-responsive {
  max-height: 70vh;
  overflow-y: auto;
}

.modal-penjemput .table {
  width: 100%;
  max-width: 100%;
}

@media (max-width: 991px) {
    .modal-penjemput .modal-dialog {
    max-width: 100%;
    margin: 0 auto;
  }

  .modal-penjemput .modal-content {
    max-height: 90vh;
    overflow-y: auto;
  }

  .modal-penjemput .table-responsive {
    max-height: 50vh;
    overflow-y: auto;
  }
}


        /* Add & edit titik modal */
  /* .input-wrapper {
    display: flex;
    flex-direction: column;
    flex-grow: 1;
    flex-basis: 0;
    width: fit-content;
  }
  .input-label {
    color: #fff;
    font: 24px Kanit, sans-serif;
  }
  .input-field {
    background-color: #fff;
    margin-top: 9px;
    align-items: flex-start;
    justify-content: center;
    padding: 14px 18px;
    font: 20px Kanit, sans-serif;
    color: #888;
  }
  @media (max-width: 991px) {
    .input-field {
      max-width: 100%;
      padding-right: 20px;
    }
  }
  .section-heading {
    color: #fff;
    margin-top: 40px;
    font: 24px Kanit, sans-serif;
  }
  @media (max-width: 991px) {
    .section-heading {
      max-width: 100%;
    }
  }
  .select-field {
    background-color: #fff;
    margin-top: 14px;
    width: 230px;
    max-width: 100%;
    align-items: flex-start;
    padding: 14px 18px;
    font: 20px Kanit, sans-serif;
    color: #888;
  }
  @media (max-width: 991px) {
    .select-field {
      padding-right: 20px;
    }
  } */
  .modal-add-titik .modal-body, .modal-edit-titik .modal-body {
    background-color: #000;
  }
  .modal-add-titik .form-label, .modal-edit-titik .form-label {
    color: #fff;
    font: 24px Kanit, sans-serif;
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
        .btn-save {
            background-color: #333333;
            /* Darker gray background on hover */
        }

        /* Keberangkatan */
        .content-date {
            display: flex;
            flex-direction: row;
            gap: 20px;
            font-weight: 700;
        }

        .content-date span,
        .content-date .view-button,
        .content-date .jumlah-jemaat {
            display: flex;
            align-items: center;
        }

        .content-date span {
            margin-top: 17px;
            font-size: 36px;
        }

        .view-button {
            margin-left: auto;
            border: 1px solid #000;
            background-color: #eeb120;
            text-align: center;
            padding: 16px 30px;
            font-size: 24px;
            font-family: Montserrat, sans-serif;
        }
        .view-button:hover {
            background-color: #d4a100;
            /* Change background color on hover */
        }
        .counter-box {
            width: 80px;
            height: 30px;
            background-color: white;
            color: black;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
            margin-left: 10px;
        }
        .jumlah-jemaat {
            margin-left: auto;
            border: 1px solid #000;
            background-color: #fff;
            text-align: center;
            padding: 16px 30px;
            font-size: 24px 400 Kanit, sans-serif;

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

        .details-header {
            color: #646464;
            font: 700 24px Montserrat, sans-serif;
            margin-top: 10px;
            
        }

        .details-content {
            margin-top: 14px;
            display: flex;
            flex-direction: column;
        }

        .hotel-info {
            border: 1px solid #000;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .hotel-info div {
            background-color: #000;
            color: #fff;
            padding: 14px 60px;
            font-weight: 500 20px Montserrat, sans-serif;
            font-size: 20px;
        }

        .hotel-info-2 {
            border: 1px solid #000;
            background-color: #fff;
            padding-left: 10px;
            padding-right: 10px;
        }

        .hotel-info-2 table {
            vertical-align: middle;
        }
        .hotel-info-2 th {
            --bs-table-bg: #eeb120;
        }
        .save-button, .back-button {
            border: 1px solid #000;
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 21px 60px;
            font-size: 24px;
            font-weight: 600;
            align-self: center;
            white-space: nowrap;
            margin-top: 31px;
        }
        .save-button:hover, .back-button:hover {
            border: 1px solid #333;
            background-color: #333;
            /* Darker gray background on hover */
        }

        @media (max-width: 991px) {
            .content-date span {
                white-space: initial;
                padding: 0 20px;
            }

            .view-button {
                padding: 0 20px;
            }

            .jumlah-jemaat {
                padding: 0 20px;
            }

            .details-section {
                max-width: 100%;
                padding: 0 20px;
            }

            .details-header {
                max-width: 100%;
            }

            .details-content {
                max-width: 100%;
            }

            .hotel-info {
                max-width: 100%;
                margin-top: 26px;
            }

            .hotel-info div {
                padding: 0 20px;
            }

            .save-button, .back-button {
                white-space: initial;
                padding: 0 20px;
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

    <!-- Modal Penjemput -->
<div class="modal modal-lg modal-penjemput fade" id="penjemputModal" tabindex="-1" aria-labelledby="penjemputModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="penjemputModalLabel">Detail Penjemput</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="sub-header">Daftarkan Penjemput Baru</div>
    <div class="search-container">
        <span class="search-icon" role="img" aria-label="search">search</span>
        <input class="search-input" type="search" placeholder="Search" aria-label="Search">
    </div>
    <div class="table-responsive">
                    <table class="table table-striped table-bordered border-secondary">
                        <thead>
                            <tr class="table-dark">
                                <th>Nama Penjemput</th>
                                <th>Plat Nomor</th>
                                <th>Kapasitas</th>
                                <th>Titik Jemput</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Asep</td>
                                <td><input type="text" value="L 1234 ABC" required></td>
                                <td><input type="number" value="10" required></td>
                                <td>
                                    <select class="form-select" required>
                                        <option value="Hotel Dafam Pacific Caesar" selected>Hotel Dafam Pacific Caesar</option>
                                        <option value="Pakuwon Trade Center Lobby A&W">Pakuwon Trade Center Lobby A&W</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Steven</td>
                                <td><input type="text" value="L 5678 ABC" required></td>
                                <td><input type="number" value="12" required></td>
                                <td>
                                    <select class="form-select" required>
                                        <option value="Hotel Dafam Pacific Caesar">Hotel Dafam Pacific Caesar</option>
                                        <option value="Pakuwon Trade Center Lobby A&W" selected>Pakuwon Trade Center Lobby A&W</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
    </div>
                </div>
                </div>
            </div>
        </div>

    <!-- Modal add titik jemput -->
    <div class="modal modal-add-titik fade" id="addTitikModal" tabindex="-1" aria-labelledby="addTitikModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addTitikModalLabel">ADD JEMPUT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="aTTitik" class="form-label">Titik Jemput</label>
                                <input type="date" class="form-control" id="aTTitik" name="aTTitik"
                                    required>
                            </div>
                            <div class="col">
                                <label for="aTWaktu" class="form-label">Waktu Jemput</label>
                                <input type="time" class="form-control" id="aTWaktu" name="aTWaktu" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="aTWilayah" class="form-label">Wilayah</label>
                        <select class="form-select" id="aTRegion" required>
                        <option value="" disabled selected>Pilih Wilayah</option>
        <option value="timur">Timur</option>
        <option value="barat">Barat</option>
        <option value="selatan">Selatan</option>
        <option value="pusat">Pusat</option>
      </select>
                    </div>
                    
      <!-- <div class="input-wrapper">
        <label for="pickup-point" class="input-label">Titik Jemput</label>
        <input type="text" id="pickup-point" class="input-field" placeholder="Titik Jemput">
      </div>
      <div class="input-wrapper">
        <label for="pickup-time" class="input-label">Waktu Jemput</label>
        <input type="text" id="pickup-time" class="input-field" placeholder="Waktu Jemput">
      </div>
    <div class="input-wrapper">
      <label for="region" class="input-label">Wilayah</label>
      <select id="region" class="select-field">
        <option>Pilih Wilayah</option>
      </select> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SAVE</button>
                </div>
                </div>
            </div>
        </div>

            <!-- Modal edit titik jemput -->
    <div class="modal modal-edit-titik fade" id="editTitikModal" tabindex="-1" aria-labelledby="editTitikModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTitikModalLabel">EDIT JEMPUT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="eTTitik" class="form-label">Titik Jemput</label>
                                <input type="date" class="form-control" id="eTTitik" name="eTTitik"
                                    required>
                            </div>
                            <div class="col">
                                <label for="eTWaktu" class="form-label">Waktu Jemput</label>
                                <input type="time" class="form-control" id="eTWaktu" name="eTWaktu" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="eTWilayah" class="form-label">Wilayah</label>
                        <select class="form-select" id="eTRegion" required>
                        <option value="" disabled selected>Pilih Wilayah</option>
        <option value="timur">Timur</option>
        <option value="barat">Barat</option>
        <option value="selatan">Selatan</option>
        <option value="pusat">Pusat</option>
      </select>
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
                <section class="section">
                    <div class="column">
                        <div class="column-header">
                            <div class="header-detail" id="detail-jemput">DETAIL JEMPUT</div>
                            <div class="header-detail-secondary" id="keberangkatan">KEBERANGKATAN</div>
                        </div>
                    </div>
                    <div class="column-secondary" id="column-secondary">
                        <button class="penjemput-button" data-bs-toggle="modal" data-bs-target="#penjemputModal">
                            <div class="icon">directions_car</div>
                            <div class="penjemput-text">Penjemput</div>
                        </button>
                    </div>
                </section>
                <section class="content-card" id="content-card">
                </section>
            </main>
            <footer>
                <div class="footer-spacer"></div>
                <div class="footer-spacer-secondary"></div>
            </footer>
        </section>
    </div>
    <script>
        const detailJemput = document.getElementById('detail-jemput');
        const keberangkatan = document.getElementById('keberangkatan');

        // "detail-jemput" menjadi nilai bawaan dari content-card saat halaman dimuat
        window.onload = function() {
            // "detail-jemput" menjadi nilai bawaan dari content-card
            toggleDetails('detail-jemput');
        };

        function toggleDetails(type) {
            const columnSecondary = document.getElementById('column-secondary');
            const contentCard = document.getElementById('content-card');

            if (type === 'detail-jemput') {
                detailJemput.classList.add('header-detail');
                detailJemput.classList.remove('header-detail-secondary');
                keberangkatan.classList.add('header-detail-secondary');
                keberangkatan.classList.remove('header-detail');

                columnSecondary.style.display = 'flex';

                contentCard.innerHTML =
                `<div class="card-header">
                    <div class="card-title">Tujuan</div>
                    <div class="card-subtitle">Hotel Dafam Pacific Caesar</div>
                </div>
                <table class="table table-striped table-hover table-bordered border-secondary">
                    <thead>
                        <tr class="table-dark">
                            <th>Titik Jemput</th>
                            <th>Wilayah</th>
                            <th>Waktu</th>
                            <th><button class="table-main-action" data-bs-toggle="modal" data-bs-target="#addTitikModal">add_circle_outline</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hotel Dafam Pacific Caesar</td>
                            <td>Timur</td>
                            <td>12.00</td>
                            <td>
                                <button class="action-icon" data-bs-toggle="modal" data-bs-target="#editTitikModal">mode_edit</button>
                                <button class="action-icon">delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Pakuwon Trade Center Lobby A&W</td>
                            <td>Timur</td>
                            <td>13.00</td>
                            <td>
                                <button class="action-icon" data-bs-toggle="modal" data-bs-target="#editTitikModal">mode_edit</button>
                                <button class="action-icon">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>`;
            } else {
                detailJemput.classList.add('header-detail-secondary');
                detailJemput.classList.remove('header-detail');
                keberangkatan.classList.add('header-detail');
                keberangkatan.classList.remove('header-detail-secondary');

                columnSecondary.style.display = 'none';

                contentCard.innerHTML = `
                <div class="content-date">
                    <span>Sabtu, 6 April 2024</span>
                    <div id="view-button" class="view-button">Lihat terdaftar bareng</div>
                </div>
                <div class="divider"></div>
                <div id="details-section" class="details-section">
                    <h3 class="details-header">Lihat Keberangkatan Penjemput ke Tujuan</h3>
                    <div class="details-content">
                        <div class="row">
                            <div class="col">
                                <div class="hotel-info">
                                    <div>Hotel Dafam Pacific Caesar</div>
                                </div>
                                <div class="hotel-info-2">
                                <table class="table table-striped table-bordered border-secondary">
                                    <thead>
                                        <tr>
                                            <th>Nama penjemput</th>
                                            <th>Sudah</th>
                                            <th>Waktu berangkat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Asep</td>
                                            <td><input type="checkbox"></td>
                                            <td>14.00</td>
                                        </tr>
                                        <tr>
                                            <td>Steven</td>
                                            <td><input type="checkbox"></td>
                                            <td>15.00</td>
                                        </tr>
                                        <tr>
                                            <td>Ferdinand</td>
                                            <td><input type="checkbox"></td>
                                            <td>16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="col">
                                <div class="hotel-info">
                                    <div>Pakuwon Trade Center Lobby A&W</div>
                                </div>
                                <div class="hotel-info-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="save-button" tabindex="0">SAVE</button>
                </div>`;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            detailJemput.addEventListener('click', () => {
                toggleDetails('detail-jemput');
            });

            keberangkatan.addEventListener('click', () => {
                toggleDetails('keberangkatan');
            });

            document.body.addEventListener('click', (event) => {
                if (event.target.id === 'view-button') {
                    const viewButton = event.target;
                    const detailsSection = document.getElementById('details-section');

                    viewButton.innerHTML =`
                        <div class="button-text">Jumlah</div>
                        <div class="counter-box">2 / 5</div>
                    `;

                    detailsSection.innerHTML = `
                    <table class="table table-striped table-hover table-bordered border-secondary">
                        <thead>
                            <tr class="table-dark">
                                <th>No</th>
                                <th>Nama Jemaat</th>
                                <th>No WA</th>
                                <th>Titik Jemput</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Steven Bryan Christanto</td>
                                <td>081259263720</td>
                                <td>Timur</td>
                                <td>Merah</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ferdinand Immanuel</td>
                                <td>081259263720</td>
                                <td>Timur</td>
                                <td>Merah</td>
                            </tr>
                        </tbody>
                    </table>
                    <button id="back-button" class="back-button" tabindex="0">BACK</button>
                    `;
                } else if (event.target.id === 'back-button') {
                    const viewButton = document.getElementById('view-button');
                    const detailsSection = document.getElementById('details-section');

                    viewButton.innerHTML = 'Lihat terdaftar bareng';

                    detailsSection.innerHTML = `
                    <h3 class="details-header">Lihat Keberangkatan Penjemput ke Tujuan</h3>
                    <div class="details-content">
                        <div class="row">
                            <div class="col">
                                <div class="hotel-info">
                                    <div>Hotel Dafam Pacific Caesar</div>
                                </div>
                                <div class="hotel-info-2">
                                <table class="table table-striped table-bordered border-secondary">
                                    <thead>
                                        <tr>
                                            <th>Nama penjemput</th>
                                            <th>Sudah</th>
                                            <th>Waktu berangkat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Asep</td>
                                            <td><input type="checkbox"></td>
                                            <td>14.00</td>
                                        </tr>
                                        <tr>
                                            <td>Steven</td>
                                            <td><input type="checkbox"></td>
                                            <td>15.00</td>
                                        </tr>
                                        <tr>
                                            <td>Ferdinand</td>
                                            <td><input type="checkbox"></td>
                                            <td>16.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                            </div>
                            <div class="col">
                                <div class="hotel-info">
                                    <div>Pakuwon Trade Center Lobby A&W</div>
                                </div>
                                <div class="hotel-info-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="save-button" class="save-button" tabindex="0">SAVE</button>
                    `;
                }
            });
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<html>