<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>YESS.SUB | Jadwal Ibadah</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<link href="css/jadwal_ibadah.css" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #000 !important;">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="#">
            <div class="brand-text" style="display: inline-block; margin-left: 10px; color: #f5f5f5;">
                <img src="img/bestchurch.png" alt="" style="width: 60%;">
            </div>
        </a>
        <div class="navbar-nav mx-auto" style="text-align: center;">
            <ul class="navbar-nav" style="margin-bottom: 10px;">
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
        </div>
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
</nav>

<!-- whasap terbang -->
<a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja" class="whatsapp-button">
        <img src="img/wa.png" alt="WhatsApp">
</a>
<!-- content -->
<div>
    <!-- taruh sini -->

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>



<!-- jadwal ibadah html -->
<div class="div">
    <div class="fotoAwal">
    <img
        loading="lazy"
        srcset="img/jadwal/expecting.png"
        class="img"
    />
    <div class="expecting">
        We’re
        <br>
        expecting
        <br>
        you!
    </div>
    </div>
    <div class="worship">Ibadah Worship Night</div>
    <div class="worshipAlamat">Worship Night - Ciputra World Mall 2nd Floor</div>
    <div class="info1">Join us this Friday - 29 Maret 2024</div>
    <div class="contInfoWorship">
        <img
            loading="lazy"
            srcset="img/jadwal/worship.png"
            class="img-3"
        />
        <div class="topikInfoWorship">topik(optional)</div>
        <div class="waktuInfoWorship">18.30 WIB</div>
        <div class="pendetaInfoWorship">Pdt Rubin Ong</div>
    </div>
    <div class="yessUmum">
        <div class="YESSAlamat">YESS - Ciputra World Mall 2nd Floor</div>
        <div class="YESSinfo">Ibadah YESS</div>
        <div class="space">
        <div class="contYESS">
            <div class="columnImgYESS">
            <img
                loading="lazy"
                srcset="img/jadwal/yess.png"
                class="img-4"
            />
            </div>
            <div class="columninfoYESS">
            <div class="contInfoYESS">
                <div class="borderInfoYESS">
                <div class="InfoYESSTanggal">Join us this Saturday - 30 Maret 2024</div>
                <div class="InfoYESSTopik">Thank You, Next?</div>
                <div class="InfoYESSPendeta">Pendeta : PS. Andi Joe</div>
                <div class="InfoYESSOpen">Open Gate : 16.30 WIB</div>
                </div>
                <a href="https://www.google.com/maps/dir//yess+best+church/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x2dd7fd60f866f4a3:0x2143b72c2c5c982e?sa=X&ved=1t:3061&ictx=111" class="map button1"><span>DAPATKAN ARAH</span></a>
            </div>
            </div>
        </div>
        </div>
        <div class="tglUmum">Join us this Sunday - 31 Maret 2024</div>
        <div class="judulUmum">Kebaktian Umum</div>
        <div class="lokasiUmum"><span style="color:#265BA4; font-weight: bold;">Ciputra World</span> - <span style="color:#ff4949; font-weight: bold;">Pondok Tjandra</span> - <span style="color:#EEB120; font-weight: bold;">Dafam</span></div>
        <div class="space2">
        <div class="contCard">
            <!-- card flip pertama ciputra world umum-->
            <div class="columnCard">
                <div class="container">
                    <div class="card">
                        <div class="front">
                            <img
                            loading="lazy"
                            srcset="img/jadwal/cw.png"
                            class="img-7"
                            />
                        </div>
                        <div class="back">
                            <img
                            loading="lazy"
                            srcset="img/jadwal/cw.png"
                            class="img-back"
                            />
                        <div class = "contInformasiIbadah">
                            <ul>
                                <li>Ibadah 1 - 10.30 WIB<br> topik(kalo ada)<br> Rubin Ong</li>
                                <li>Ibadah 2 - 10.30 WIB<br> topik(kalo ada)<br> Rubin Ong</li>
                                <li>jumlah tergantung-> jumlah ibadah di database</li>
                                
                            </ul>
                            <span style="background-color:#265BA4; color: white;border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;">Ciputra World Surabaya 2nd floor Jl. Mayjend Sungkono No. 89</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- card flip kedua -> pondok tjandra umum-->
            <div class="columnCard">
                <div class="container">
                    <div class="card">
                        <div class="front">
                            <img
                            loading="lazy"
                            srcset="img/jadwal/pok.png"
                            class="img-7"
                            />
                        </div>
                        <div class="back">
                            <img
                            loading="lazy"
                            srcset="img/jadwal/pok.png"
                            class="img-back"
                            />
                        <div class = "contInformasiIbadah">
                            <ul>
                                <li>Ibadah 1 - 10.30 WIB<br> topik(kalo ada)<br> Rubin Ong</li>
                                <li>Ibadah 2 - 10.30 WIB<br> topik(kalo ada)<br> Rubin Ong</li>
                                
                            </ul>
                            <span style="background-color:#ff4949; color: white;border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;">Pondok Tjandra Indah Sports Club Jl. Taman Asri Selatan No. 48 </span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- card flip ketiga dafam umum-->
            <div class="columnCard">
                <div class="container">
                    <div class="card">
                        <div class="front">
                            <img
                            loading="lazy"
                            srcset="img/jadwal/dafam.png"
                            class="img-7"
                            />
                        </div>
                        <div class="back">
                            <img
                            loading="lazy"
                            srcset="img/jadwal/dafam.png"
                            class="img-back"
                            />
                        <div class = "contInformasiIbadah">
                            <ul>
                                <li>Ibadah 1 - 10.30 WIB<br> topik(kalo ada)<br> Rubin Ong</li>
                                <li>Ibadah 2 - 10.30 WIB<br> topik(kalo ada)<br> Rubin Ong</li>
                                
                            </ul>
                            <span style="background-color:#EEB120; color: black;  border-bottom-left-radius: 30px;border-bottom-right-radius: 30px;">Hotel Dafam Jl. Dr. Ir. H. Soekarno No. 45-C</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/jadwal_ibadah.js"></script> 

</body>
</html>
