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
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="css/cssKomsel.css" rel="stylesheet">
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
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid justify-content-between">
            <a class="navbar-brand" href="#">
                <div class="brand-text" style="display: inline-block; margin-left: 10px; color: #f5f5f5;">
                    <img src="img/bestchurch.png" alt="" style="width: 60%;">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" style="text-align: center;">
                    <li class="nav-item active" style="margin-right: 20px;">
                        <a class="nav-link" href="/" style="color: #f5f5f5;">Home</a>
                    </li>
                    <li class="nav-item dropdown" style="margin-right: 20px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                            YESS
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/yess" style="color: #000;">YESS</a></li>
                            <li><a class="dropdown-item" href="/komsel" style="color: #000;">Komsel</a></li>
                            <li><a class="dropdown-item" href="/bareng" style="color: #000;">Bareng</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/jadwal" style="color: #f5f5f5;">Jadwal</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/ladies-devotion" style="color: #f5f5f5;">Ladies Devotion</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/sunday-school" style="color: #f5f5f5;">Sunday School</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/event" style="color: #f5f5f5;">Event</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="/pelayanan" style="color: #f5f5f5;">Pelayanan</a>
                    </li>
                </ul>
                <div class="navbar-nav" style="text-align: right;">
                    <ul class="navbar-nav">
                        @auth
                        <li class="nav-item dropdown" style="margin-right: 20px;">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #f5f5f5;">
                                Welcome, {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                @if (auth()->user()->is_admin)
                                <li><a class="dropdown-item" href="/admin" style="color: #000;">Admin Dashboard</a></li>
                                @endif
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" style="color: #000;">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link login-link-border" href="/login" style="color: #f5f5f5; border: 1px solid #fff; border-radius: 5px; padding: 8px 20px;">Login</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- whasap terbang -->
    <a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja" class="whatsapp-button">
            <img src="img/wa.png" alt="WhatsApp">
    </a>
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

    
    <!-- BARU -->
    <!-- Informasi event khusus KOMSEL -->
    <div class="contEventKomsel">
        <div class="contCard">
        <div class="swiper-container">
            <div class="swiper-wrapper">

            <!-- isi card 1 -> ini yg buat nambahanin isi/jumlah cardnya -->
            <div class="slider-item swiper-slide">
                <div class="slider-item-content">
                    <div class="content">
                        <span>Selasa, 21 Mei 2024</span>
                        <div class="title">
                            Komsel Gabungan YESS Pro Dafam x CW
                        </div>
                        <div class="textLokasi">
                            Lokasi : Ruko Robert Dafam (Klaska)
                        </div>
                        <div class="textKeterangan">
                            Keterangan : Ruko Klaska Jagir, masuk dari depan tulisan Klaska, di ruko kiri jalan, pintu ruko warna kuning
                        </div>
                    </div>
                </div>
            </div>

            <!-- isi card 2 -->
            <div class="slider-item swiper-slide">
                <div class="slider-item-content">
                    <div class="content">
                        <span>Selasa, 21 Mei 2024</span>
                        <div class="title">
                            Outing Komsel Nonton  
                        </div>
                        <div class="textLokasi">
                            Lokasi : Pakuwon Trade Center
                        </div>
                        <div class="textKeterangan">
                            Keterangan : Lorem ipsum
                        </div>
                    </div>
                </div>
            </div>


            <div class="slider-buttons">
            <button class="swiper-button-prev">Prev</button>
            <button class="swiper-button-next">Next</button>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </div>
      <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.5/swiper-bundle.min.js'></script>



    <!-- tombol khusus ketua komsel-> Atur komsel & absen komsel -->

    <div>
        <div class="container-fluid px-2 contButtonKetua">
            <div class="row g-2">
                <div class="col-6 d-grid">
                    <button class="pushable" id ="aturbutton" style ="background: hsl(345deg 100% 47%);"onclick="klikButtonAtur()">
                        <span class="front" style ="background: hsl(340deg 100% 32%);">
                            ATUR KOMSEL
                        </span>
                    </button>
                </div>
                <div class="col-6 d-grid">
                    <button class="pushable" id ="absenbutton" style ="background: hsl(215, 100%, 52%);" onclick="klikButtonAbsen()">
                        <span class="front"style ="background:  hsl(210, 100%, 32%);">
                            ABSEN KOMSEL
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>




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
<br>
<br>
<br>

   
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/jsKomsel.js"></script>
</body>
</html>