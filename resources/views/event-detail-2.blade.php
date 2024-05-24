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
            --primary-color: #eeb120;
            --secondary-color: #646464;
            --background-color: #f4f4f4;
            --text-color: #000000;
            --border-color: #000000;
            --button-background: #000000;
            --button-text-color: #ffffff;
        }
        body, html {
            margin: 0;
            padding: 0;
            font-family: var(--default-font-family);
            background-color: var(--background-color);
        }
        .main-container {
            max-width: 1440px;
            margin: 0 auto;
            background-color: #f4f4f4;
        }
        .content {
            width: calc(100% - 100px);
            max-width: 1337px;
            background: #fff;
            margin: 95px auto 35px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
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
        .content .event-image {
            width: 100%;
            height: auto;
            max-width: 1169px;
            margin: 20px 0;
            background: url(./assets/images/405b79a68a003c32aab00353cd2b98feedf55647.png) no-repeat center;
            background-size: cover;
        }
        .content .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px 0;
        }
        .content .event-title {
            font-family: Kanit, var(--default-font-family);
            font-size: 48px;
            font-weight: 600;
        }
        .content .event-title h1 {
            font-size: 2em;
            margin: 0;
        } 
        .content .register-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background: var(--primary-color);
            border: none;
            border-radius: 40px;
            font-family: DM Sans, var(--default-font-family);
            font-size: 1em;
            font-weight: 500;
            color: #fff;
            cursor: pointer;
        }
        .content .event-info {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 20px;
            font-family: Roboto, var(--default-font-family);
            font-size: 30px;
            font-weight: 500;
            color: #646464;
        }
        .content .event-description {
            font-family: Roboto, var(--default-font-family);
            font-size: 1em;
            font-weight: 400;
            color: var(--secondary-color);;
            line-height: 1.5;
            letter-spacing: 0.48px;
            margin: 20px 0;
        }
        .modal-event-title {
            font-weight: bold;
            font-size: 1.5em;
            color: black;
            font-family: 'Kanit', sans-serif;
        }
        .form-label-daftar {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.11em;
            font-weight: normal;
        }
        .form label {
            font-size: 1em;
            color: var(--text-color);
            font-family: 'Montserrat', sans-serif;
            font-size: 1.33em;
            font-weight: medium;
        }
        .modal-body small {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.11em;
            font-weight: medium;
            color: #6D6D6D;
        }
        .form textarea {
            padding: 10px;
            font-size: 1em;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            width: 100%;
        }
        .image-container {
            position: relative;
            /* Set position to relative */
        }
        .image-text-container {
            position: absolute;
            /* Set position to absolute */
            top: 50%;
            /* Align to the vertical center */
            left: 50%;
            /* Align to the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the text */
            text-align: center;
            /* Center align the text */
            width: 90%;
            /* Set the width to 80% of its container */
        }
        .image-text-1 {
            font-family: 'Roboto Slab', serif;
            /* Use Roboto Slab font */
            font-weight: bold;
            font-size: 1.77em;
            color: white;
            width: 100%;
            /* Set the width to 100% */
            margin: 0 auto;
            /* Center the element horizontally */
            text-align: center;
            /* Center the text horizontally */
            display: flex;
            /* Use flexbox */
            justify-content: center;
            /* Center the content horizontally */
            align-items: center;
            /* Center the content vertically */
            padding: 20px;
            /* Increase padding to provide more space around the text */
            box-sizing: border-box;
            /* Include padding in the width calculation */
        }
        .image-text-2 {
            font-family: 'Inter', sans-serif;
            font-size: 0.83em;
            color: white;
        }
        .image-container img {
            width: 100%;
            /* Ensure the image fills its container */
            height: auto;
            /* Maintain aspect ratio */
        }
        .form .modal-footer {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .form-container .modal-footer button {
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }
        .form-container .modal-footer .cancel-button {
            background: #ccc;
        }
        .form-container .modal-footer .submit-button {
            background: var(--button-background);
            color: var(--button-text-color);
        }
        /* Set max-width for larger screens */
        @media (min-width: 1200px) {
            .modal-dialog {
                max-width: 982px;
                /* Set max-width to 982px for screens wider than 1200px */
            }
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
        <!-- Content -->
        <div class="content">
            <!-- Tombol kembali ke events -->
            <button class="back-button">
                <span class="material-icons">arrow_back</span>
                Kembali ke events
            </button>
            <div class="event-image"></div>

            <!-- Header -->
            <div class="event-header">
                <h1 class="event-title">YESS Leardership Mission Training VII</h1>
                <button class="register-button" data-bs-toggle="modal" data-bs-target="#daftarModal">
                    Daftar
                    <span class="material-icons">arrow_forward</span>
                </button>
            </div>
            <!-- Event details -->
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

            <!-- Modal -->
            <div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title modal-event-title" id="exampleModalLabel">PENDAFTARAN EVENT</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Your form content goes here -->
                            <label for="daftar" class="form-label form-label-daftar">Bagi jemaat yang ingin
                                mendaftar dalam event YESS Surabaya silahkan mengisi form pendaftaran event dibawah ini.</label>
                            <form>
                                <div class="mb-3">
                                    <label for="allergies" class="form-label">Alergi Anda (jika tidak punya, isi "-")</label>
                                    <textarea class="form-control" id="allergies"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="familyInfo" class="form-label">Informasi keluarga yang dapat dihubungi</label>
                                    <textarea class="form-control" id="familyInfo"></textarea>
                                    <small class="form-text text-muted">*Sertakan nama dan nomor telepon aktif</small>
                                </div>
                            </form>
                            <div class="image-container">
                                <div class="image-text-container">
                                    <p class="image-text-1">Cari circle rohani yang sehat dan bikin semangat?</p>
                                    <p class="image-text-2">YUK SINI MERAPAT!</p>
                                </div>
                                <img src="img/form.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                            <button type="button" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </div>
                </div>
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