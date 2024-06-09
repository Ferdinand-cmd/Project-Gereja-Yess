<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YESS.SUB | Penjadwalan YESS (Admin)</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
        <link href="css/style.css" rel="stylesheet">
        <style>
            .main-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px;
            padding: 1px 0;
            }

            .wrapper {
            background-color: #fff;
            display: flex;
            width: 100%;
            padding-bottom: 80px;
            flex-direction: column;
            }

            @media (max-width: 991px) {
            .wrapper {
                max-width: 100%;
            }
            }

            .section-container {
            display: flex;
            margin-top: 52px;
            width: 100%;
            flex-direction: column;
            padding: 0 80px;
            }

            @media (max-width: 991px) {
            .section-container {
                max-width: 100%;
                margin-top: 40px;
                padding: 0 20px;
            }
            }

            .arrow-btn-b {
            background-color: black;
            border: none;
            border-radius: 50%;
            padding: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .arrow-btn-b .material-icons {
            color: white;
            font-size: 24px;
        }

        .arrow-link, .arrow-link-b {
            text-decoration: none;
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

            .content {
            margin-top: 41px;
            }

            @media (max-width: 991px) {
            .content {
                max-width: 100%;
                margin: 40px 7px 0 0;
            }
            }

            .right-column {
            line-height: normal;
            }

            @media (max-width: 991px) {
            .right-column {
                width: 100%;
            }
            }

            .right-content {
            border-radius: 30px;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(0, 0, 0, 1);
            background-color: #f4f4f4;
            /* display: flex;
            flex-grow: 1;
            flex-direction: column; */
            width: 100%;
            padding: 17px 10px;
            }

            @media (max-width: 991px) {
            .right-content {
                max-width: 100%;
            }
            }

            .right-header {
                font: 600 40px Kanit, sans-serif;
                margin: 20px 0;
            }

            .right-wrapper {
            z-index: 10;
            display: flex;
            margin-top: -7px;
            flex-direction: column;
            }

            @media (max-width: 991px) {
            .right-wrapper {
                max-width: 100%;
            }
            }

            /* Switch */
            /* Switch Off Color */
            .form-check-input {
                background-color: #8e8e8e;
            }

            /* Switch On Color */
            .form-check-input:checked {
                background-color: #eeb120;
            }

            /* Switch On Color */
            .form-check-input+.form-check-label::before {
                border-color: #eeb120;
            }

            /* Circle Inside Switch Color */
            .form-check-input+.form-check-label::after {
                background-color: #f4f4f4;
                /* This ensures the circle color */
            }

            /* CSS for bareng & save button */
            .btn-bareng, .modal .btn-save {
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

            /* Hover effect for bareng & save button */
            .btn-bareng:hover, .modal .btn-save:hover {
                background-color: #333333;
                /* Darker gray background on hover */
            }

            .arrow-btn {
                border: 3px solid rgba(0, 0, 0, 1);
                background-color: #eeb120;
                padding: 5px 0;
                width: 100%;
            }

            .arrow-btn:hover {
                background-color: #d4a100;
                /* Change background color on hover */
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
                            <a class="nav-link active" href="/pelayanan-admin">Pelayanan</a>
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

        <!-- Modal kebutuhan -->
        <div class="modal modal-kebutuhan fade" id="kebutuhanModal" tabindex="-1" aria-labelledby="kebutuhanLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kebutuhanLabel">Form Detail Ibadah YESS 6 April 2024</h5>
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
                        <a href="penjadwalan-yess-kebutuhan-admin.blade.php" class="arrow-link">
                            <button type="button" class="btn btn-primary btn-save">GENERATE</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="wrapper">
                <main class="section-container">
                <div>
                    <a href="penjadwalan-admin.blade.php" class="arrow-link-b">
                        <button class="arrow-btn-b">
                            <span class="material-icons">arrow_back</span>
                        </button>
                    </a>
                    <h2 class="section-header">YESS - Ciputra World</h2>
                </div>
                <section class="content">
                    <div class="right-column">
                        <div class="right-content">
                            <div class="right-header">Bulan & Tahun</div>
                            <div class="right-wrapper">
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col">
                                            <label for="bulan">Bulan</label>
                                            <select class="form-control" id="bulan" name="bulan" required>
                                                <option value="" disabled selected>Pilih Bulan</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="tahun">Tahun</label>
                                            <select class="form-control" id="tahun" name="tahun" required>
                                                <option value="" disabled selected>Pilih Tahun</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-borderless">
                                    <thead>
                                        <tr class="table-dark">
                                            <th scope="col">Availability</th>
                                            <th scope="col">Jadwal ibadah</th>
                                            <th scope="col">Atur Bareng</th>
                                            <th scope="col">Detail ibadah YESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="availability1" checked>
                                                    <label class="form-check-label" for="availability1">On</label>
                                                </div>
                                            </td>
                                            <td>Sabtu, 6 April 2014</td>
                                            <td class="bareng-cell">
                                                <a href="tes.blade.php" class="arrow-link">
                                                    <button type="button" class="btn btn-primary btn-bareng">BARENG</button>
                                                </a>
                                            </td>
                                            <td class="arrow-cell">
                                                <button class="arrow-btn" data-bs-toggle="modal" data-bs-target="#kebutuhanModal"><span class="material-icons">arrow_forward</span></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="availability2" checked>
                                                    <label class="form-check-label" for="availability2">On</label>
                                                </div>
                                            </td>
                                            <td>Sabtu, 13 April 2014</td>
                                            <td class="bareng-cell">
                                                <a href="tes.blade.php" class="arrow-link">
                                                    <button type="button" class="btn btn-primary btn-bareng">BARENG</button>
                                                </a>
                                            </td>
                                            <td class="arrow-cell">
                                                <button class="arrow-btn" data-bs-toggle="modal" data-bs-target="#kebutuhanModal"><span class="material-icons">arrow_forward</span></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="event-details">
                                    <div class="left">
                                        <div class="availability">Availability</div>
                                        <div class="schedule">Jadwal ibadah</div>
                                    </div>
                                    <div class="details">Detail Ibadah Umum</div>
                                </div>
                                <div class="event-info">
                                    <div class="info-wrapper">
                                        <div class="status">
                                            <div class="status-icon"></div>
                                            <div class="status-text">On</div>
                                        </div>
                                        <div class="event-day">Minggu, 7 April 2024</div>
                                    </div>
                                    <div class="arrow-3">arrow_forward</div>
                                </div>
                                <div class="inactive-info">
                                    <div class="info-wrapper">
                                        <div class="inactive-status">
                                            <div class="inactive-text">Off</div>
                                            <div class="inactive-icon"></div>
                                        </div>
                                        <div class="inactive-day">Minggu, 14 April 2024</div>
                                    </div>
                                </div>
                                <div class="event-info-2">
                                    <div class="status-wrapper">
                                        <div class="status-2">
                                            <div class="icon-2"></div>
                                            <div class="text-2">On</div>
                                        </div>
                                        <div class="event-day-2">Minggu, 21 April 2024</div>
                                    </div>
                                    <div class="arrow-3">arrow_forward</div>
                                </div>
                                <div class="event-info-3">
                                    <div class="event-day-3">Minggu, 28 April 2024</div>
                                    <div class="arrow-3">arrow_forward</div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </section>
                </main>
            </div>
        </div>
    </body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all switch elements
            var switches = document.querySelectorAll('.form-check-input');

            // Iterate over each switch and add event listener
            switches.forEach(function(switchElement) {
                switchElement.addEventListener('change', function() {
                    // Get the corresponding label and row elements
                    var switchLabel = document.querySelector('label[for="' + switchElement.id + '"]');
                    var tableRow = switchElement.closest('tr');
                    var arrowCell = tableRow.querySelector('.arrow-cell');
                    var arrowButton = arrowCell.querySelector('.arrow-btn');
                    var barengCell = tableRow.querySelector('.bareng-cell');
                    var barengButton = barengCell.querySelector('.btn-bareng');

                    // Check the switch state
                    if (switchElement.checked) {
                        // If switch is on, change label text to "On"
                        switchLabel.textContent = 'On';
                        // Remove table-secondary class from row
                        tableRow.classList.remove('table-secondary');
                        // If arrow button is not present, add it back
                        if (!arrowButton) {
                            var newArrowButton = document.createElement('button');
                            newArrowButton.classList.add('arrow-btn');
                            newArrowButton.setAttribute('data-bs-toggle', 'modal');
                            newArrowButton.setAttribute('data-bs-target', '#kebutuhanModal');
                            newArrowButton.innerHTML = '<span class="material-icons">arrow_forward</span>';
                            arrowCell.appendChild(newArrowButton);
                        }
                        // If bareng button is not present, add it back
                        if (!barengButton) {
                            var newBarengLink = document.createElement('a');
                            newBarengLink.href = "tes.blade.php";
                            newBarengLink.classList.add('arrow-link');
                            
                            var newBarengButton = document.createElement('button');
                            newBarengButton.type = 'button';
                            newBarengButton.classList.add('btn', 'btn-primary', 'btn-bareng');
                            newBarengButton.textContent = 'BARENG';
                            
                            newBarengLink.appendChild(newBarengButton);
                            barengCell.appendChild(newBarengLink);
                        }
                    } else {
                        // If switch is off, change label text to "Off"
                        switchLabel.textContent = 'Off';
                        // Add table-secondary class to row
                        tableRow.classList.add('table-secondary');
                        // Remove the arrow button element
                        if (arrowButton) {
                            arrowButton.remove();
                        }
                        // Remove the bareng button element
                        if (barengButton) {
                            barengButton.closest('.arrow-link').remove();
                        }
                    }
                });
            });
        });

    
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</html>