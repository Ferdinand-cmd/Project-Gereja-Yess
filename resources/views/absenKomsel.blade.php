<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Komsel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

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

        /* Styling Navbar */
        .navbar-nav .nav-item.active .nav-link,
        .navbar-nav .nav-item:hover .nav-link {
            color: orange !important;
            border-bottom: 2px solid orange;
        }

        .navbar-nav .dropdown-item:focus,
        .navbar-nav .dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        .navbar-nav .dropdown-item.active,
        .navbar-nav .dropdown-item:active {
            color: orange !important;
            background-color: transparent !important;
        }

        .navbar-nav .dropdown-menu a.dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }



        /* Content */
        body {
            background-color: #fff;
            display: flex;
            flex-direction: column;
        }

        .main-content {
            display: flex;
            margin-top: 100px;
            width: 100%;
            flex-direction: column;
            padding: 0 55px;
        }

        @media (max-width: 991px) {
            .main-content {
                max-width: 100%;
                padding: 0 20px;
            }
        }

        .main-title {
            align-self: start;
            display: flex;
            gap: 20px;
            font-size: 40px;
            color: #000;
            font-weight: 600;
        }

        @media (max-width: 991px) {
            .main-title {
                flex-wrap: wrap;
                font-size: 40px;
            }
        }

        .btn-back {
            border-radius: 35px;
            align-items: center;
            /* Mengatur isi (tanda panah) menjadi terpusat secara vertikal */
            justify-content: center;
            /* Mengatur isi (tanda panah) menjadi terpusat secara horizontal */
            display: flex;
            /* Menjadikan elemen tampilan flex */
            background: linear-gradient(0deg, #eeb120 0%, #eeb120 100%), #eeb120;
            border-color: rgba(0, 0, 0, 1);
            border-style: solid;
            border-width: 1px;
            width: 80px;
            height: 60px;
        }

        .btn-back:hover {
            box-shadow: #eeb120 0 6px 8px;
            transform: translateY(-2px);
            border-color: transparent;
        }

        .btn-back:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .breadcrumbs {
            font-family: Kanit, sans-serif;
            align-self: start;
            flex-grow: 1;
            flex-basis: auto;

        }

        @media (max-width: 991px) {
            .breadcrumbs {
                max-width: 100%;
                font-size: 25px;
            }
        }

        .card {
            border-radius: 20px;
            border: 1px solid rgba(0, 0, 0, 1);
            background-color: #f4f4f4;
            display: flex;
            margin-top: 12px;
            padding: 39px 42px 10px;
            flex-direction: column;
        }

        @media (max-width: 991px) {
            .card {
                max-width: 100%;
            }
        }

        .card-title {
            color: #000;
            align-self: start;
            margin-left: 31px;
            margin-top: -15px;
            font: 700 26px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .card-title {
                margin-left: 10px;
            }
        }

        .card-divider {
            height: 5px;
            margin-top: 5px;
            margin-bottom: 10px;
            background: linear-gradient(to bottom,
                    transparent 2px,
                    black 2px,
                    black 3px,
                    transparent 3px);
        }

        @media (max-width: 991px) {
            .card-divider {
                max-width: 100%;
            }
        }

        /* search nama jemaat */

        .sub-header {
            color: #000;
            text-align: center;
            letter-spacing: 2px;
            /* margin-top: 23px; */
            font: 500 17px Montserrat, sans-serif;
        }

        .search-container {
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

        .search-icon {
            color: #fff;
            text-align: center;
            /* flex-grow: 1; */
            margin: auto 0;
            font: 24px Material Icons, sans-serif;
        }

        .search-input {
            background-color: #fff;
            color: #888;
            justify-content: center;
            flex-grow: 1;
            width: fit-content;
            /* padding: 26px 31px; */
            font: 24px Kanit, sans-serif;
        }

        /* jumlah */
        .modal-counter-box {
            display: flex;
            justify-content: flex-end;
        }

        /* Text "Jumlah" */
        .modal-counter-text {
            background-color: white;
            /* Set background color to white */
            color: black;
            /* Set text color to black */
            display: inline-block;
            /* Make the text inline-block */
            padding: 5px 10px;
            /* Add padding around the text */
        }

        /* Counter */
        .modal-counter {
            background-color: #EEB120;
            /* Set background color to EEB120 */
            color: black;
            /* Set text color to black */
            display: inline-block;
            /* Make the counter inline-block */
            padding: 5px 10px;
            /* Add padding around the counter */
            font-size: 1.15em;
            /* Set the font size to 16px or any other desired value */
            width: 100px;
            text-align: center;
        }

        /* button save */
        .buttonSave {
            appearance: none;
            background-color: #000000;
            border: 2px solid #1A1A1A;
            border-radius: 15px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            margin: 0;
            min-height: 60px;
            min-width: 0;
            outline: none;
            padding: 16px 24px;
            text-align: center;
            text-decoration: none;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 100%;
            will-change: transform;
        }

        .buttonSave:disabled {
            pointer-events: none;
        }

        .buttonSave:hover {
            box-shadow: hsl(215, 100%, 50%) 0 8px 10px;
            transform: translateY(-2px);
            border-color: transparent;
            background-color: hsl(215, 100%, 50%);
        }

        .buttonSave:active {
            box-shadow: none;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')


    <!-- konten -->
    <main class="main-content">
        <section class="main-title">
            <button class="btn-back" onclick="goBackToKomsel()"><span class="material-icons"
                    style="font-size: 60%;">arrow_back</span></button>
            <div class="breadcrumbs">Komsel &gt; Atur Komsel</div>
        </section>

        <section class="card mb-4">
            <div class="card-title">Sabtu, 6 April 2024</div>
            <div class="card-divider"></div>
            <!-- Form fields -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="user-input-box">
                            <label for="inputGambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="inputGambar" name="inputGambar"
                                accept="image/*" required style="border-radius: 0; border-color: #939393;">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-4">
                        <div class="user-input-box mt-3">
                            <label for="keterangan" class="mb-2">Keterangan</label>
                            <textarea class="form-control" id="keterangan" rows="3" style="border-radius: 0; border-color: #939393;"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            </div>


            <!-- daftarkan -->
            <div class="sub-header">Cari Nama Jemaat</div>
            <div class="search-container mb-3" style="width: 85%; align-self: center;">
                <span class="search-icon" role="img" aria-label="search">search</span>
                <input class="search-input" style="font-size: small; padding: 1%;" type="search" placeholder="Search"
                    aria-label="Search">
            </div>
            <table class="table table-striped table-bordered border-secondary mb-4">
                <thead>
                    <tr class="table-dark">
                        <th style="padding-top: 1.5%; ">Daftar nama jemaat yang sudah melakukan absensi
                            <div class="modal-counter-box "
                                style="display: block; background-color: white; float: right;  ">
                                <div class="modal-counter-text">Jumlah</div>
                                <div class="modal-counter">xx</div>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jackson Wang</td>
                    </tr>
                </tbody>
            </table>
            </div>

            <!-- button save -->
            <button type="button" class="btn btn-dark btn-lg btn-block buttonSave mb-4">Save</button>


        </section>



    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        // Function to go back to the komsel page
        function goBackToKomsel() {
            window.location.href = "komsel.blade.php";
        }
    </script>
</body>

</html>
