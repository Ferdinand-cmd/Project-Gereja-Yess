<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Ladies Devotion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>
<style>
    body {
        overflow-x: hidden;
    }
</style>

<body style="background-color:black;">
    <!-- Navbar -->
    @include('partials.navbar')

    <!--Body / isi-->

    <!-- foto home -->
    <div class="div">
        <img src="img/home sunday.png" class="imgss" />
        <div class="div-2">
            <div class="div-3">
                <div class="div-4">We’re a church for the generations.</div>
                <div class="div-5">Sunday School - BEST SURABAYA</div>
                <a href="/jadwal-ibadah" class="div-6">Setiap Ibadah Umum disertai Sekolah Minggu</a>
            </div>
        </div>
    </div>

    <!-- upcomming event  -->
    <div>
        <div class="divupe">
            <div class="columnupe">
                <img src="..." class="imgupe" />
            </div>
            <div class="columnupe-2">
                <div class="divupe-2">
                    <div class="divupe-3">UPCOMING EVENT</div>
                    <div class="divupe-4">Perayaan Natal</div>
                    <div class="divupe-5">Ciputra World lt 2 || 18.00 WIB || 26 Desember 2023</div>
                    <div class="divupe-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor saepe rem voluptates quibusdam
                        eius accusamus repudiandae voluptate obcaecati, recusandae nostrum, inventore optio maxime
                        eveniet aliquid itaque qui doloribus molestias ipsum?
                    </div>
                    <div class="divupe-7">
                        <div class="divupe-8">Daftar</div>
                        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7f6f38dfafac6de01110ea9df97aa85852fb122659f3f42100348f7c20665b92?"
                            class="imgupe-2" />
                    </div>
                </div>
            </div>
        </div>

        <!-- superkid n dezealers -->
        <div class="divss">
            <div class="divss-2">
                <div class="divss-3">
                    <div class="columnss">
                        <div class="divss-4">
                            <div class="divss-5">SuperKids</div>
                            <div class="divss-6">
                                Program Sekolah minggu dimulai dari usia balita, hingga anak sekolah
                                dasar.
                            </div>
                        </div>
                    </div>
                    <div class="columnsk-2">
                        <img src="img/superkids.png" class="imgsk" />
                    </div>
                </div>
            </div>
            <div class="divss-7">
                <div class="divss-8">
                    <div class="columndz-3">
                        <img src="img/dzealers.png" class="imgdz-2" />
                    </div>
                    <div class="columnss-4">
                        <div class="divss-9">
                            <div class="divss-10">D’Zealers</div>
                            <div class="divss-11">
                                Program Sekolah minggu untuk anak usia remaja.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .divss {
                display: flex;
                flex-direction: column;
            }

            .divss-2 {
                align-self: center;
                width: 100%;
                max-width: 1395px;
            }

            @media (max-width: 991px) {
                .divss-2 {
                    max-width: 100%;
                }
            }

            .divss-3 {
                gap: 20px;
                display: flex;
            }

            @media (max-width: 991px) {
                .divss-3 {
                    flex-direction: column;
                    align-items: stretch;
                    gap: 0px;
                }
            }

            .columnss {
                display: flex;
                flex-direction: column;
                line-height: normal;
                width: 44%;
                margin-left: 0px;
            }

            @media (max-width: 991px) {
                .columnss {
                    width: 100%;
                }
            }

            .divss-4 {
                display: flex;
                flex-direction: column;
                align-self: stretch;
                color: #fff;
                margin: auto 0;
                padding: 0 20px;
            }

            @media (max-width: 991px) {
                .divss-4 {
                    max-width: 100%;
                    margin-top: 40px;
                }
            }

            .divss-5 {
                text-align: center;
                align-self: end;
                font: 900 50px Roboto Serif;
            }

            @media (max-width: 991px) {
                .divss-5 {
                    font-size: 35px;
                }
            }

            .divss-6 {
                text-align: right;
                margin-top: 15px;
                font: 500 24px/45px Montserrat, sans-serif;
            }

            @media (max-width: 991px) {
                .divss-6 {
                    max-width: 100%;
                }
            }

            .columnss-2 {
                display: flex;
                flex-direction: column;
                line-height: normal;
                width: 56%;
                margin-left: 20px;
            }

            @media (max-width: 991px) {
                .columnss-2 {
                    width: 100%;
                }
            }

            .imgsk {
                aspect-ratio: 2.44;
                object-fit: auto;
                object-position: center;
                width: 100%;
                flex-grow: 1;
                max-width: 1067px;
            }

            @media (max-width: 991px) {
                .imgsk {
                    max-width: 100%;
                    margin-top: 37px;
                }
            }

            @media (max-width: 640px) {
                .imgsk {
                    max-width: 329px;
                }
            }

            .divss-7 {
                margin-top: 51px;
                width: 100%;
            }

            @media (max-width: 991px) {
                .divss-7 {
                    max-width: 100%;
                    margin-top: 40px;
                }
            }

            .divss-8 {
                gap: 20px;
                display: flex;
            }

            @media (max-width: 991px) {
                .divss-8 {
                    flex-direction: column;
                    align-items: stretch;
                    gap: 0px;
                }
            }

            .columnss-3 {
                display: flex;
                flex-direction: column;
                line-height: normal;
                width: 50%;
                margin-left: 0px;
            }

            @media (max-width: 991px) {
                .columnss-3 {
                    width: 100%;
                }
            }

            .imgdz-2 {
                aspect-ratio: 2.44;
                object-fit: auto;
                object-position: center;
                width: 100%;
                flex-grow: 1;
            }

            @media (max-width: 991px) {
                .imgdz-2 {
                    max-width: 100%;
                    margin-top: 22px;
                }
            }

            @media (max-width: 640px) {
                .imgdz-2 {
                    margin-left: 69px;
                    max-width: 325px;
                }
            }

            .columnss-4 {
                display: flex;
                flex-direction: column;
                line-height: normal;
                width: 50%;
                margin-left: 20px;
            }

            @media (max-width: 991px) {
                .columnss-4 {
                    width: 100%;
                }
            }

            .divss-9 {
                display: flex;
                flex-direction: column;
                align-self: stretch;
                color: #fff;
                margin: auto 0;
                padding: 0 20px;
            }

            @media (max-width: 991px) {
                .divss-9 {
                    max-width: 100%;
                    margin-top: 40px;
                }
            }

            .divss-10 {
                font: 900 50px Roboto Serif;
            }

            @media (max-width: 991px) {
                .divss-10 {
                    max-width: 100%;
                    font-size: 35px;
                }
            }

            .divss-11 {
                margin-top: 21px;
                font: 500 24px/187.5% Montserrat, -apple-system, Roboto, Helvetica,
                    sans-serif;
            }

            @media (max-width: 991px) {
                .divss-11 {
                    max-width: 100%;
                }
            }
        </style>

        <!-- notes -->
        <div class="divn">
            “Encourages young minds to embrace the teachings of the Bible and cultivate a
            disposition that reflects the virtues of Christ.”
        </div>

    </div>


    <!-- CSS -->
    <style>
        .div {
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: relative;
            display: flex;
            min-height: 626px;
            font-weight: 400;
            text-align: center;
            justify-content: center;
        }

        .imgss {
            position: absolute;
            inset: 0;
            height: 90vh;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .div-2 {
            position: relative;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            width: 100%;
            height: 90vh;
            align-items: center;
            justify-content: center;
            margin-bottom: -1px;
            padding: 80px 60px;
        }

        @media (max-width: 991px) {
            .div-2 {
                max-width: 100%;
                padding: 0 20px;
            }
        }

        .div-3 {
            display: flex;
            margin-top: 53px;
            width: 100%;
            max-width: 1116px;
            flex-direction: column;
            align-items: center;
        }

        @media (max-width: 991px) {
            .div-3 {
                max-width: 100%;
                margin-top: 40px;
            }
        }

        .div-4 {
            color: #fff;
            letter-spacing: 1.92px;
            align-self: stretch;
            margin-top: -6vh;
            margin-bottom: -5vh;
            font: 80px/100% Roboto Serif;
            font-weight: bolder;
        }

        @media (max-width: 991px) {
            .div-4 {
                max-width: 100%;
                font-size: 60px;
                margin-top: -5vh;
                line-height: 60px;
            }
        }

        .div-5 {
            color: #d1d1d1;
            letter-spacing: 0.72px;
            margin-top: 6vh;
            font: italic 33px/361% Roboto, sans-serif;
        }

        @media (max-width: 991px) {
            .div-5 {
                max-width: 100%;
                margin-top: 40px;
            }
        }

        .div-6 {
            background-color: #eeb120;
            margin-top: 10px;
            color: #000;
            letter-spacing: 0.6px;
            justify-content: center;
            padding: 4px 3vh;
            font: 25px/230% Roboto Condensed, -apple-system, Roboto, Helvetica,
                sans-serif;
        }

        @media (max-width: 991px) {
            .div-6 {
                max-width: 100%;
                padding: 0 10px;
            }
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
            margin-top: -15vh;
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
                margin-top: -15vh;
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
            margin-top: -10vh;
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

        /* notes */

        .divn {
            align-items: center;
            color: #fff;
            text-align: center;
            justify-content: center;
            padding: 67px 60px;
            font: italic 400 32px/45px Montserrat, -apple-system, Roboto, Helvetica,
                sans-serif;
        }

        @media (max-width: 991px) {
            .divn {
                max-width: 100%;
                padding: 0 20px;
            }
        }
    </style>
