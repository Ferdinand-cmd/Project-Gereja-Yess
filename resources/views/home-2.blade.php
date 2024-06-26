<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link href="css/film.css" rel="stylesheet">
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

        /* Untuk membuat tulisan BEST berwarna orange dan memiliki garis bawah orange saat berada di halaman BEST */
        .nav-item.active .nav-link,
        .nav-item:hover .nav-link {
            color: orange !important;
            border-bottom: 2px solid orange;
        }

        /* Untuk mengubah warna teks dan garis bawah saat item dropdown ditekan */
        .dropdown-item:focus,
        .dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Untuk mengubah warna teks dan garis bawah saat item dropdown aktif */
        .dropdown-item.active,
        .dropdown-item:active {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Untuk mengubah warna teks saat dropdown dihover */
        .dropdown-menu a.dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Modal ketersediaan */
        .modal-header {
            font: 500 24px/167% Montserrat, sans-serif;
        }

        .modal-body {
            background-color: #f4f4f4;
        }

        .modal-footer {
            background-color: #a2a2a2;
        }

        .modal-ketersediaan .table {
            vertical-align: middle;
        }

        .modal-ketersediaan th {
            --bs-table-bg: #eeb120;
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

        /* CSS for book & submit button */
        .modal .btn-book,
        .modal .btn-submit {
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
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Ketersediaan modal -->
    <div class="modal modal-ketersediaan fade" id="ketersediaanModal" tabindex="-1"
        aria-labelledby="ketersediaanModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ketersediaanModalLabel">Ketersediaan Penjemput April 2024</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    Kamu terdaftar sebagai:
                    <div class="container mt-4">
                        <div class="d-flex flex-wrap">
                            <button type="button" class="btn btn-dark m-2" disabled>Singer</button>
                            <button type="button" class="btn btn-dark m-2" disabled>Usher</button>
                            <button type="button" class="btn btn-warning m-2"><span
                                    class="material-icons">add_circle_outline</span> Daftar lainnya</button>
                        </div>
                    </div>

                    Untuk yang bersedia melakukan pelayanan, bisa mencentang sesuai jadwal ibadah mingguan di bawah:
                    <table class="table table-striped table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th>Hari, tanggal</th>
                                <th>Bersedia</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sabtu, 6 April 2024</td>
                                <td><input type="checkbox" id="dateOpt2024-04-06" name="checkDate" value="2024-04-06">
                                </td>
                            </tr>
                            <tr>
                                <td>Sabtu, 20 April 2024</td>
                                <td><input type="checkbox" id="dateOpt2024-04-20" name="checkDate" value="2024-04-20">
                                </td>
                            </tr>
                            <tr>
                                <td>Sabtu, 27 April 2024</td>
                                <td><input type="checkbox" id="dateOpt2024-04-27" name="checkDate" value="2024-04-27">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-submit">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <!-- whasap terbang -->
    <a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja"
        class="whatsapp-button">
        <img src="img/wa.png" alt="WhatsApp">
    </a>
    <!-- content -->
    <div class="content">
        <!-- Home BG + Maps -->
        <div class="container-fluid">
            <div
                style="position: relative; display: flex; justify-content: center; align-items: center; height: 100vh;">
                <img src="img/home_bg.png" alt=""
                    style="position: absolute; top: 0; width: 100vw; height: 100vh;">
                <div
                    style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; color: white; font-size: 20px;">
                    <br>
                    <div style="font-family: 'Montserrat', sans-serif; text-align: center; color: #YourColorCode;">
                        <h2>Blessing in the SpiriT - BEST</h2>
                        <h1><strong>BEST CHURCH SURABAYA</strong></h1>
                        <p>SURABAYA</p>
                    </div>

                    <div style="margin-top: 20px;">
                        <a href="/jadwal-ibadah"
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
                    <h1 style="font-family: 'DM Sans', sans-serif; font-weight: bold; margin-bottom: 10px;">Program
                        Regenerasi Gereja BEST</h1>
                    <h2 style="font-family: 'DM Sans', sans-serif;">FIND MORE ABOUT YESS ></h2>
                </div>
            </div>
        </div>

        <!-- Ladies devotion + Sunday school -->
        <div class="container-fluid" style="overflow-x: hidden; padding: 0;">
            <div class="row no-gutters">
                <div class="col-sm-6" style="position: relative;">
                    <img src="img/ladiesdevotion.png" alt=""
                        style="width: 120%; height: 50vh; object-fit: cover; position: relative;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)); pointer-events: none;">
                    </div>
                    <div style="position: absolute; top: 20%; left: 10%; text-align: left; color: #fff; z-index: 10;">
                        <h2 style="font-family: 'Share', cursive; font-weight: bold;">Ladies Devotion</h2>
                        <h3 style="font-family: 'DM Sans', sans-serif;">A woman of God</h3>
                        <br>
                        <a href="/ladiesdevotion"
                            style="padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                            Learn More >
                        </a>
                    </div>
                </div>
                <div class="col-sm-6" style="position: relative;">
                    <img src="img/sundayschool.png" alt=""
                        style="width: 120%; height: 50vh; object-fit: cover; position: relative;">
                    <div
                        style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)); pointer-events: none;">
                    </div>
                    <div
                        style="position: absolute; top: 20%; right: 10%; text-align: right; color: #fff; z-index: 10;">
                        <h2 style="font-family: 'Share', cursive; font-weight: bold;">Sunday School</h2>
                        <h3 style="font-family: 'DM Sans', sans-serif;">Equipping kids and building families</h3>
                        <br>
                        <a href="/sundayschool"
                            style="padding: 8px 20px; text-decoration: none; color: #fff; font-family: 'Montserrat';">
                            Learn More >
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Youtube video -->
        <div class="container" style="width: 80%; margin: auto; text-align: center;">
            <br>
            <br>
            <h1>NEW TO BEST Church?</h1>
            <p>Watch this video to learn about what we have in BEST CHURCH!</p>
            <div
                style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;">
                <iframe src="https://www.youtube.com/embed/Ss6ndKDgbi4?si=P8eLZAl1mAuaRDQa"
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <br>
            <br>
        </div>

        <!-- Youtube channel -->
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
                    <br>
                    <a href="https://www.youtube.com/channel/UCMgeyZoGQMWNAy_DdkC26eg">
                        <img src="img/channel.png" alt="">
                    </a>

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
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            const myModal = new bootstrap.Modal(document.getElementById('ketersediaanModal'));
            myModal.show();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>

</html>
