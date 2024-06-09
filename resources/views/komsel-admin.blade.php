<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Komsel (Admin)</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link href="css/style.css" rel="stylesheet">
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

        .khusus-button {
        border-radius: 25px;
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
        background-color: #000;
        color: #eeb120;
        width: 100%;
        padding: 23px 23px;
        font: 38px Kanit, sans-serif;
        text-align: center;
        }

        @media (max-width: 991px) {
        .khusus-button {
            margin-top: 40px;
            padding: 0 20px;
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
        }

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
        } */

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

        /* Detail komsel */
        .tabel-detail-komsel, .tabel-event-khusus {
            font-family: Montserrat, sans-serif;
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
  .modal-add-komsel .modal-body, .modal-edit-komsel .modal-body {
    background-color: #000;
  }
  .modal-add-komsel .form-label, .modal-edit-komsel .form-label {
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

        /* Presensi Komsel */
        .presensi-date {
            font: 600 24px Kanit, sans-serif;
        }
        .detail-presensi {
            background-color: #eeb120;
            border-color: #d4a100;
            width: 100%;
            height: 100%;
        }
        .detail-presensi:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }

        /* Modal detail presensi */
        .modal-detail .date {
            color: #000;
            align-self: start;
            margin-left: 27px;
            font: 700 36px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .modal-detail .date {
                margin-left: 10px;
            }
        }

        .modal-detail .main-section {
            margin-top: 15px;
        }

        @media (max-width: 991px) {
            .modal-detail .main-section {
                max-width: 100%;
            }
        }

        .modal-detail .columns {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .modal-detail .columns {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
            }
        }

        .modal-detail .column-half {
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        @media (max-width: 991px) {
            .modal-detail .column-half {
                width: 100%;
            }
        }

        .modal-detail .outer-box {
            border-radius: 30px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            border: 1px solid #000;
            background-color: #fff;
            flex-grow: 1;
            width: 100%;
            padding: 31px 19px 55px;
        }

        @media (max-width: 991px) {
            .modal-detail .outer-box {
                max-width: 100%;
                margin-top: 8px;
                padding-left: 20px;
            }
        }

        .modal-detail .box-content {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .modal-detail .box-content {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
            }
        }

        .modal-detail .column-large {
            display: flex;
            flex-direction: column;
            width: 77%;
        }

        @media (max-width: 991px) {
            .modal-detail .column-large {
                width: 100%;
            }
        }

        .modal-detail .text-container {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            color: #000;
        }

        @media (max-width: 991px) {
            .modal-detail .text-container {
                margin-top: 40px;
            }
        }

        .modal-detail .subtitle {
            text-align: left;
            letter-spacing: 1.6px;
            font: 600 32px/156% Kanit, sans-serif;
        }

        .modal-detail .details {
            letter-spacing: 1px;
            margin-top: 45px;
            font: 400 20px/50px Kanit, sans-serif;
            text-align: left;
        }

        @media (max-width: 991px) {
            .modal-detail .details {
                margin-top: 40px;
            }
        }

        .modal-detail .column-small {
            display: flex;
            flex-direction: column;
            width: 23%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .modal-detail .column-small {
                width: 100%;
            }
        }

        .modal-detail .image {
            aspect-ratio: 1;
            object-fit: auto;
            width: 100px;
            max-width: 100%;
            align-self: stretch;
            margin: auto 0;
        }

        @media (max-width: 991px) {
            .modal-detail .image {
                margin-top: 40px;
            }
        }

        /* Modal event khusus */
        .modal-edit-khusus .form-label {
            font: 600 20px Montserrat, sans-serif;
        }
        .modal-edit-khusus input, .modal-edit-khusus textarea {
            font: 600 16px Montserrat, sans-serif;
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
                        <a class="nav-link active" href="/admin">KomSel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Bareng</a>
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
    
    <datalist id="datalist">
        <option value="Ferdinand">
        <option value="Felita">
        <option value="Fernando">
        <option value="Ferari">
        <option value="Ferdandi">
        <option value="Felali">
        <option value="Ferguso">
        <option value="Ferdian">
    </datalist>

    <!-- Modal add komsel -->
    <div class="modal modal-add-komsel fade" id="addKomsel" tabindex="-1" aria-labelledby="addKomselLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addKomselLabel">ADD KOMSEL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="aKKomsel" class="form-label">Nama Komsel</label>
                        <input type="text" class="form-control" id="aKKomsel" name="aKKomsel" placeholder="Nama Komsel" required>
                    </div>
                    <div class="mb-3" style="position: relative;">
                        <label for="aKKetua" class="form-label">Nama Ketua</label>
                        <input class="form-control" list="datalist" id="aKKetua" name="aKKetua" placeholder="Search Nama Ketua" required>
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
                        </select> 
                    </div>-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SAVE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit komsel -->
    <div class="modal modal-edit-komsel fade" id="editKomsel" tabindex="-1" aria-labelledby="editKomselLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKomselLabel">EDIT KOMSEL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="eKKomsel" class="form-label">Nama Komsel</label>
                        <input type="text" class="form-control" id="eKKomsel" name="eKKomsel" placeholder="Nama Komsel" required>
                    </div>
                    <div class="mb-3" style="position: relative;">
                        <label for="eKKetua" class="form-label">Nama Ketua</label>
                        <input class="form-control" list="datalist" id="eKKetua" name="eKKetua" placeholder="Search Nama Ketua" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SAVE</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal detail presensi -->
    <div class="modal modal-lg modal-detail fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">DETAIL PRESENSI KOMSEL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <time class="date">Sabtu, 6 April 2024</time>
                    <div class="container text-center">
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="outer-box">
                                    <div class="box-content">
                                        <div class="column-large">
                                            <div class="text-container">
                                                <h2 class="subtitle">YESSPRO CW</h2>
                                                <p class="details">
                                                    Nama ketua: <br>
                                                    Jumlah hadir: <br>
                                                    Keterangan:
                                                </p>
                                            </div>
                                        </div>
                                        <figure class="column-small">
                                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8c8985dd44e2f169afd33c57649d592a952f007a9889226292865e8e90d5cbc?apiKey=f9ed83d6b13f4286938197498a891b31&" class="image" alt="Komsel YESSPRO CW"/>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="outer-box">
                                    <div class="box-content">
                                        <div class="column-large">
                                            <div class="text-container">
                                                <h2 class="subtitle">YESS CW</h2>
                                                <p class="details">
                                                    Nama ketua: <br>
                                                    Jumlah hadir: <br>
                                                    Keterangan:
                                                </p>
                                            </div>
                                        </div>
                                        <figure class="column-small">
                                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f20dfe6dd1609dcacebe1d079fff08b96e55176179aadf90ece40c04aac8b749?apiKey=f9ed83d6b13f4286938197498a891b31&" class="image" alt="Komsel YESS CW"/>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <!-- Salinan dari yang atas -->
                            <div class="col">
                                <div class="outer-box">
                                    <div class="box-content">
                                        <div class="column-large">
                                            <div class="text-container">
                                                <h2 class="subtitle">YESSPRO CW</h2>
                                                <p class="details">
                                                    Nama ketua: <br>
                                                    Jumlah hadir: <br>
                                                    Keterangan:
                                                </p>
                                            </div>
                                        </div>
                                        <figure class="column-small">
                                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8c8985dd44e2f169afd33c57649d592a952f007a9889226292865e8e90d5cbc?apiKey=f9ed83d6b13f4286938197498a891b31&" class="image" alt="Komsel YESSPRO CW"/>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="outer-box">
                                    <div class="box-content">
                                        <div class="column-large">
                                            <div class="text-container">
                                                <h2 class="subtitle">YESS CW</h2>
                                                <p class="details">
                                                    Nama ketua: <br>
                                                    Jumlah hadir: <br>
                                                    Keterangan:
                                                </p>
                                            </div>
                                        </div>
                                        <figure class="column-small">
                                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f20dfe6dd1609dcacebe1d079fff08b96e55176179aadf90ece40c04aac8b749?apiKey=f9ed83d6b13f4286938197498a891b31&" class="image" alt="Komsel YESS CW"/>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit event khusus -->
    <div class="modal modal-edit-khusus fade" id="editKhusus" tabindex="-1" aria-labelledby="editKhususLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editKhususLabel">EDIT EVENT KHUSUS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="eENama" class="form-label">Nama Event</label>
                        <input type="text" class="form-control" id="eENama" name="eENama" placeholder="Nama Event" required>
                    </div>
                    <div class="mb-3">
                        <label for="eELokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="eELokasi" name="eELokasi" placeholder="Lokasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="eEKeterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="eEKeterangan" name="eEKeterangan" rows="4" required></textarea>
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
                            <div class="header-detail" id="detail-komsel">DETAIL KOMSEL</div>
                            <div class="header-detail-secondary" id="presensi-komsel">PRESENSI KOMSEL</div>
                        </div>
                    </div>
                    <div class="column-secondary" id="column-secondary">
                        <button id="khusus-button" class="khusus-button">
                            <div>EVENT KHUSUS</div>
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
        const detailKomsel = document.getElementById('detail-komsel');
        const presensiKomsel = document.getElementById('presensi-komsel');
        var content1 = ''; // diisi oleh toogleDetails() & dipakai untuk event klik EVENT KHUSUS
        const contentCard = document.getElementById('content-card');

        // "detail-komsel" menjadi nilai bawaan dari content-card saat halaman dimuat
        window.onload = function() {
            // "detail-komsel" menjadi nilai bawaan dari content-card
            toggleDetails('detail-komsel');
        };

        // tampilkan detail-komsel atau presensi-komsel di content-card
        function toggleDetails(type) {
            const columnSecondary = document.getElementById('column-secondary');

            if (type === 'detail-komsel') {
                detailKomsel.classList.add('header-detail');
                detailKomsel.classList.remove('header-detail-secondary');
                presensiKomsel.classList.add('header-detail-secondary');
                presensiKomsel.classList.remove('header-detail');

                content1 =
                `<table class="table table-striped table-bordered border-secondary tabel-detail-komsel">
                    <thead>
                        <tr class="table-dark">
                            <th>Nama Komsel</th>
                            <th>Ketua Komsel</th>
                            <th><button class="table-main-action" data-bs-toggle="modal" data-bs-target="#addKomsel">add_circle_outline</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>YESS CW</td>
                            <td>Veronica</td>
                            <td>
                                <button class="action-icon" data-bs-toggle="modal" data-bs-target="#editKomsel">mode_edit</button>
                                <button class="action-icon">delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>YESSPRO CW</td>
                            <td>Steven Bryan Christanto</td>
                            <td>
                                <button class="action-icon" data-bs-toggle="modal" data-bs-target="#editKomsel">mode_edit</button>
                                <button class="action-icon">delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>`;
            } else {
                detailKomsel.classList.add('header-detail-secondary');
                detailKomsel.classList.remove('header-detail');
                presensiKomsel.classList.add('header-detail');
                presensiKomsel.classList.remove('header-detail-secondary');

                content1 = `
                <table class="table table-striped table-bordered border-secondary">
                    <tbody>
                        <tr>
                            <td class="presensi-date">Selasa, 2 April 2024</td>
                            <td><button class="detail-presensi" data-bs-toggle="modal" data-bs-target="#detailModal"><span class="material-icons">arrow_forward</span></button></td>
                        </tr>
                        <tr>
                            <td class="presensi-date">Selasa, 9 April 2024</td>
                            <td><button class="detail-presensi" data-bs-toggle="modal" data-bs-target="#detailModal"><span class="material-icons">arrow_forward</span></button></td>
                        </tr>
                        <tr>
                            <td class="presensi-date">Selasa, 16 April 2024</td>
                            <td><button class="detail-presensi" data-bs-toggle="modal" data-bs-target="#detailModal"><span class="material-icons">arrow_forward</span></button></td>
                        </tr>
                        <tr>
                            <td class="presensi-date">Selasa, 23 April 2024</td>
                            <td><button class="detail-presensi" data-bs-toggle="modal" data-bs-target="#detailModal"><span class="material-icons">arrow_forward</span></button></td>
                        </tr>
                    </tbody>
                </table>`;
            }
            contentCard.innerHTML = content1;
        }

        document.addEventListener('DOMContentLoaded', () => {
            detailKomsel.addEventListener('click', () => {
                toggleDetails('detail-komsel');
            });

            presensiKomsel.addEventListener('click', () => {
                toggleDetails('presensi-komsel');
            });
        });

        // skrip untuk event khusus
        const khususButton = document.getElementById('khusus-button');

        const content2 = `
        <table class="table table-striped table-bordered border-secondary tabel-event-khusus">
            <thead>
                <tr class="table-dark">
                    <th>No</th>
                    <th>Nama Pembuat</th>
                    <th>Tanggal</th>
                    <th>Nama Event</th>
                    <th>Lokasi</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Steven Bryan Christanto</td>
                    <td>2024-06-24</td>
                    <td>Komsel Gabungan YESS Pro Dafam x CW</td>
                    <td>Ruko Robert Dafam</td>
                    <td>Ini adalah event yang sangat menarik</td>
                    <td>
                        <button class="action-icon" data-bs-toggle="modal" data-bs-target="#editKhusus">mode_edit</button>
                        <button class="action-icon">delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Steven Bryan Christanto</td>
                    <td>2024-06-24</td>
                    <td>Komsel Gabungan YESS Pro Dafam x CW</td>
                    <td>Ruko Robert Dafam</td>
                    <td>Ini adalah event yang sangat menarik</td>
                    <td>
                        <button class="action-icon" data-bs-toggle="modal" data-bs-target="#editKhusus">mode_edit</button>
                        <button class="action-icon">delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        `;


        let isOriginalContent = true;

        khususButton.addEventListener('click', () => {
            // Periksa isi halaman saat ini & ubah ke isi yang berlawanan
            if (isOriginalContent) {
                contentCard.innerHTML = content2;
                khususButton.innerHTML = 'KEMBALI';
            } else {
                contentCard.innerHTML = content1;
                khususButton.innerHTML = 'EVENT KHUSUS';
            }

            // Balikkan status isOriginalContent
            isOriginalContent = !isOriginalContent;
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<html>