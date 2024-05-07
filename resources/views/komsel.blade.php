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
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="css/komsel.css" rel="stylesheet">
</head>


<body>
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
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav" style="margin-bottom:10px;">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pelayanan">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/komsel">KomSel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bareng">Bareng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event">Event</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->is_admin)
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
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="awal" style="margin-top: 20px;">
        <div class="awal-2">
            <img loading="lazy" srcset="img/awal.png" class="img" />
            <div class="awal-3" style="margin-top: 20px;">
                <div class="awal-4">KomSel YESS</div>
                <div class="awal-5">Get connected and grow with us!</div>
            </div>
        </div>
        <button class="button button1" id = "butt1" onclick="myFunction()">Daftar Disini</button>

        <div id="myForm">
            @auth
                <!-- Form for logged-in users -->
                <div class="awalForm">
                    <div class="form1">Want to Join Us?</div>
                    <div class="form2">Fill out the form below and our team will reach out to you!</div>
                </div>
                <div class="awal-2-Form">
                    <form action="/register_potential_komsel" method="POST">
                        @csrf
                        <!-- Form fields -->
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" placeholder="Nama" required />
                            </div>
                            <div class="user-input-box">
                                <label for="umur">Umur</label>
                                <input type="number" id="umur" name="umur" placeholder="Umur" required />
                            </div>
                            <div class="user-input-box">
                                <label for="nomor">No. HP (WhatsApp)</label>
                                <input type="text" id="nomor" name="nomor" placeholder="No. HP (WhatsApp)"
                                    required />
                            </div>
                            <div class="user-input-box">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan"
                                    required />
                            </div>
                        </div>
                        <div class="kegiatan-details-box">
                            <span class="kegiatan-title">Kegiatan saat ini:</span>
                            <div class="kegiatan-category">
                                <input type="radio" name="kegiatan" id="sekolah" value="Sekolah">
                                <label for="sekolah">Sekolah</label>
                                <input type="radio" name="kegiatan" id="kuliah" value="Kuliah">
                                <label for="kuliah">Kuliah</label>
                                <input type="radio" name="kegiatan" id="bekerja" value="Bekerja">
                                <label for="bekerja">Bekerja</label>
                            </div>
                        </div>
                        <div class="form-submit-btn">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    Please <a href="/login">log in</a> to register.
                </div>
            @endauth
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <!-- code buat informasi dll -->

    <div class="awal2-2">
        <div class="awal2-3">
            <div class="column">
                <div class="awal2-4">
                    <div class="awal2-5">
                        Find a group where you can grow in your faith, get encouraged, and
                        create community.
                    </div>
                    <div class="awal2-6">
                        Every Tuesday at 19.00 WIB </div>
                    <div class="awal2-6-2">
                        Surabaya Timur | Surabaya Barat | Surabaya Selatan
                    </div>
                    <img loading="lazy" srcset="img/komsel2.png" class="awal2-img" />
                    <div class="awal2-7">
                        Discover our cell group, enhance your spiritual journey with us.
                    </div>
                </div>
            </div>
            <div class="column-2">
                <div class="awal2-8">
                    <img loading="lazy" srcset="img/komsel1.png" class="awal2-img-2" />
                    <img loading="lazy" srcset="img/komsel3.png" class="awal2-img-3" />
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/komsel.js"></script>

</body>

</html>
