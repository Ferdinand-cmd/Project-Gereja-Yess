<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Ladies Devotion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssladies.css" />
    <style>
        .container {
            margin-top: 100px;
        }

        /* Base styles */
        body {
            background-color: #ffffff;
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

        /* FOTO PELAYANAN */
        .content {
            margin-top: 70px;
            position: relative;
        }


        /* kegiatan - kegiatan*/
        .div {
            gap: 20px;
            display: flex;
        }

        @media (max-width: 991px) {
            .div {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
            }
        }

        .column {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 27%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .column {
                width: 100%;
            }
        }

        .div-2 {
            display: flex;
            flex-direction: column;
            align-self: stretch;
            font-size: 55px;
            color: #fff;
            font-weight: 700;
            line-height: 91%;
            margin: auto 0;
            padding: 0 20px;
        }

        @media (max-width: 991px) {
            .div-2 {
                margin-top: 40px;
                font-size: 40px;
            }
        }

        .div-3 {
            font-family: Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .div-3 {
                font-size: 40px;
            }
        }

        .div-4 {
            font-family: Montserrat, sans-serif;
            align-self: end;
            margin-top: 10px;
        }

        @media (max-width: 991px) {
            .div-4 {
                font-size: 40px;
            }
        }

        .div-5 {
            text-align: right;
            margin-top: 56px;
            font: 500 24px/30px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .div-5 {
                margin-top: 40px;
            }
        }

        .column-2 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 73%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .column-2 {
                width: 100%;
            }
        }

        .div-6 {
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .div-6 {
                max-width: 100%;
                margin-top: 40px;
            }
        }

        .column-3 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 55%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .column-3 {
                width: 100%;
            }
        }

        .img-1 {
            aspect-ratio: 1.06;
            object-fit: auto;
            object-position: center;
            width: 100%;
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .img-1 {
                max-width: 100%;
            }
        }

        .column-4 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 45%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .column-4 {
                width: 100%;
            }
        }

        .img-2 {
            aspect-ratio: 0.88;
            object-fit: auto;
            object-position: center;
            width: 100%;
            flex-grow: 1;
        }

        @media (max-width: 991px) {
            .img-2 {
                max-width: 100%;
            }
        }

        /* jadwal */
        .jadwal {
            overflow: hidden;
        }

        .jadwal,
        .jadwal * {
            box-sizing: border-box;
        }

        input,
        select,
        textarea,
        button {
            outline: 0;
        }

        .jadwal {
            position: relative;
            width: 1440px;
            height: 343px;
            margin: 0 auto;
            font-size: 0px;
        }

        .jadwal-kebaktian-ladies-devotion {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            position: relative;
            width: 1152px;
            height: 28px;
            margin: 5vh 0 0 113px;
            color: #ffffff;
            font-family: Montserrat, var(--default-font-family);
            font-size: 45px;
            font-weight: 700;
            text-align: center;
            white-space: nowrap;
            z-index: 2;
            line-height: 1.2;

        }

        .flex-row-c {
            position: relative;
            width: 1440px;
            height: 205px;
            margin: 110px 0 0 0;
            z-index: 3;
        }

        .ibadah-onsite-background {
            position: absolute;
            width: 711px;
            height: 205px;
            top: 0;
            left: 0;
            background: url('img/4193549b51b2ed046c0cdea0c093b450669f8fc2.png') no-repeat center;
            background-size: cover;
        }

        .ibadah-onsite {
            display: flex;
            align-items: flex-start;
            justify-content: flex-end;
            position: absolute;
            width: 339px;
            height: 47px;
            top: 32px;
            left: 63px;
            color: #ffffff;
            font-family: Montserrat, var(--default-font-family);
            font-size: 40px;
            font-weight: 700;
            line-height: 47px;
            text-align: right;
            white-space: nowrap;
            z-index: 9;
            text-shadow: 0 4px 4px #000000;
        }

        .setiap-senin-ciputra-world {
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
            position: absolute;
            width: 556px;
            height: 73px;
            top: 51px;
            left: 63px;
            color: #ffffff;
            font-family: Montserrat, var(--default-font-family);
            font-size: 24px;
            font-weight: 500;
            line-height: 40px;
            text-align: left;
            z-index: 6;
            text-shadow: 0 4px 4px #000000;
        }

        .ibadah-online-background {
            position: absolute;
            width: 711px;
            height: 144px;
            top: 0;
            left: 729px;
            background: url('img/20f96677-38aa-418a-8b3b-5a5b402c7bc9.png') no-repeat center;

            background-size: cover;
            z-index: 1;
        }

        .image {
            position: absolute;
            width: 141px;
            height: 104px;
            top: 26.069px;
            left: 79px;
            background: url('img/b6c0d1fed65da97a2e8557fdd1cda722a1d9d4ca.png') no-repeat center;
            background-size: cover;
            z-index: 5;

        }

        .ibadah-online {
            display: flex;
            align-items: flex-start;
            justify-content: flex-end;
            position: absolute;
            width: 344px;
            height: 50px;
            top: 32px;
            left: 318px;
            color: #000000;
            font-family: Montserrat, var(--default-font-family);
            font-size: 40px;
            font-weight: 700;
            line-height: 50px;
            text-align: right;
            white-space: nowrap;
            z-index: 7;
        }

        .setiap-jumat-live {
            display: flex;
            align-items: flex-start;
            justify-content: flex-end;
            position: absolute;
            width: 502px;
            height: 72px;
            top: 48px;
            left: 160px;
            color: #ffffff;
            font-family: Montserrat, var(--default-font-family);
            font-size: 24px;
            font-weight: 500;
            line-height: 40px;
            text-align: right;
            z-index: 8;
        }

        .best-church {
            display: flex;
            align-items: flex-start;
            justify-content: flex-end;
            position: absolute;
            width: 229px;
            height: 29px;
            top: 131px;
            left: 764px;
            color: #ffffff;
            font-family: Montserrat, var(--default-font-family);
            font-size: 30px;
            font-weight: 500;
            line-height: 29px;
            text-align: right;
            white-space: nowrap;
            z-index: 3;
        }

        /* upcoming event */
        .divupe {
            gap: 20px;
            display: flex;
            margin-top: 15vh;
        }

        @media (max-width: 991px) {
            .divupe {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
            }
        }

        .columnupe {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 33%;
            margin-left: 0px;
        }

        @media (max-width: 991px) {
            .columnupe {
                width: 100%;
            }
        }

        .imgupe {
            aspect-ratio: 1.02;
            object-fit: cover;
            object-position: center;
            width: 100%;
            overflow: hidden;
            min-height: 416px;
            margin-top: 5px;
            flex-grow: 1;
            align-items: end;
            color: #f5f5f5;
            font-weight: 900;
            white-space: nowrap;
            padding: 80px 60px 40px;
        }

        @media (max-width: 991px) {
            .imgupe {
                max-width: 100%;
                margin-top: 40px;
                white-space: initial;
            }
        }

        .columnupe-2 {
            display: flex;
            flex-direction: column;
            line-height: normal;
            width: 67%;
            margin-left: 20px;
        }

        @media (max-width: 991px) {
            .columnupe-2 {
                width: 100%;
            }
        }

        .divupe-2 {
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            color: #fff;
            padding: 0 20px;
        }

        @media (max-width: 991px) {
            .divupe-2 {
                max-width: 100%;
                margin-top: 40px;
            }
        }

        .divupe-3 {
            text-align: right;
            align-self: end;
            font: 500 50px/50px Montserrat, sans-serif;
        }

        @media (max-width: 991px) {
            .divupe-3 {
                font-size: 40px;
                line-height: 44px;
            }
        }

        .divupe-4 {
            margin-top: 31px;
            font: 600 40px Kanit, sans-serif;
        }

        @media (max-width: 991px) {
            .divupe-4 {
                max-width: 100%;
                font-size: 40px;
            }
        }

        .divupe-5 {
            color: #c1c1c1;
            margin-top: 14px;
            font: 700 25px Roboto, sans-serif;
        }

        @media (max-width: 991px) {
            .divupe-5 {
                max-width: 100%;
            }
        }

        .divupe-6 {
            color: #c1c1c1;
            letter-spacing: 0.56px;
            margin-top: 14px;
            font: 400 20px Roboto, sans-serif;
        }

        @media (max-width: 991px) {
            .divupe-6 {
                max-width: 100%;
            }
        }

        .divupe-7 {
            border-radius: 40px;
            background-color: #eeb120;
            align-self: start;
            display: flex;
            margin-top: 17px;
            gap: 8px;
            font-size: 18px;
            font-weight: 500;
            white-space: nowrap;
            line-height: 133%;
            padding: 16px 26px;
        }

        @media (max-width: 991px) {
            .divupe-7 {
                white-space: initial;
                padding: 0 20px;
            }
        }

        .divupe-8 {
            font-family: DM Sans, sans-serif;
        }

        .imgupe-2 {
            aspect-ratio: 1;
            object-fit: auto;
            object-position: center;
            width: 20px;
            margin: auto 0;
        }
    </style>
</head>

<body style="background-color:black;">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- whasap terbang -->
    <a href="https://api.whatsapp.com/send?phone=6285854526955&text=Halo%20mau%20tanya%20gereja"
        class="whatsapp-button">
        <img src="img/wa.png" alt="WhatsApp">
    </a>

    <!--Body / isi-->
    <div class="container">
        <div>
            <!--foto atas-->
            <div class="content" style="position: relative; z-index: 0; text-align: center;">
                <div class="container-fluid p-0">
                    <div
                        style="position: relative; display: flex; justify-content: center; align-items: center; height: 68vh;">
                        <img src="img/home ladies pic.png" alt="" class="w-100"
                            style="position: absolute; top: 0; left: 0; height: 410px; object-fit: cover; left: 0; top: 0;">

                    </div>
                </div>
            </div>

            <!--kegiatan-kegiatan-->
            <div>
                <div class="div">
                    <div class="column">
                        <div class="div-2">
                            <div class="div-3">KEGIATAN-</div>
                            <div class="div-4">KEGIATAN</div>
                            <div class="div-5">
                                Ladies Devotion mengadakan kegiatan workshop, ret-ret rohani,
                                fellowship, pelayanan sosial, bakti sosial, ibadah dan lainnya.
                            </div>
                        </div>
                    </div>
                    <div class="column-2">
                        <div class="div-6">
                            <div class="div">
                                <div class="column-3">
                                    <img src="img/kegiatan 1.png" class="img-1" />
                                </div>
                                <div class="column-4">
                                    <img src="img/kegiatan 2.png" class="img-2" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--JADWAL IBADAH-->
            <div class="jadwal">
                <span class="jadwal-kebaktian-ladies-devotion">JADWAL KEBAKTIAN <br /> LADIES DEVOTION
                </span>
                <div class="flex-row-c">
                    <div class="ibadah-onsite-background">
                        <span class="ibadah-onsite">IBADAH ONSITE</span><span
                            class="setiap-senin-ciputra-world"><br />SETIAP SENIN (MINGGU KE-1 DAN KE-3)<br />CIPUTRA
                            WORLD LANTAI
                            2 || JAM 18.00 WIB</span>
                    </div>
                    <div class="ibadah-online-background">
                        <div class="image"></div>
                        <span class="ibadah-online">IBADAH ONLINE</span><span class="setiap-jumat-live"><br />SETIAP
                            JU’MAT || 10.30 WIB<br />LIVE ON YOUTUBE</span>
                    </div>
                    <a class="best-church" href="https://www.youtube.com/@BESTCHURCH/videos">BEST CHURCH</a>
                </div>
            </div>
            <!-- upcomming event  -->
            <div>
                <div class="divupe">
                    <div class="columnupe">
                        <img loading="lazy" src="..." class="imgupe" />
                    </div>
                    <div class="columnupe-2">
                        <div class="divupe-2">
                            <div class="divupe-3">UPCOMING EVENT</div>
                            <div class="divupe-4">Makeup Workshop</div>
                            <div class="divupe-5">RUTAN II || 18.00 WIB || 19 Agustus 2023</div>
                            <div class="divupe-6">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor saepe rem voluptates
                                quibusdam eius accusamus repudiandae voluptate obcaecati, recusandae nostrum, inventore
                                optio maxime eveniet aliquid itaque qui doloribus molestias ipsum?
                            </div>
                            <div class="divupe-7">
                                <div class="divupe-8">Daftar</div>
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7f6f38dfafac6de01110ea9df97aa85852fb122659f3f42100348f7c20665b92?"
                                    class="imgupe-2" />
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
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="js/home.js"></script>
</body>

</html>
