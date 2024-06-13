<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Pelayanan</title>
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
    <link href="css/pelayanan.css" rel="stylesheet">
    <style>
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
    </style>
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
                    <li class="nav-item" style="margin-right: 20px;">
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
                    <li class="nav-item active" style="margin-right: 20px;">
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

    <div class="container" style="padding-top: 20px;">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
    </div>

    <div class="awal" style="margin-top: 20px;">
        <div class="awal-2">
            <img loading="lazy" srcset="img/backgoundptop.png" class="img" />
            <div class="awal-3" style="margin-top: 20px;">
                <div class="awal-4">PELAYANAN YESS</div>
                <div class="awal-5">Rindu untuk melayani ?</div>
            </div>
        </div>
        <button class="button button1" id = "butt1" onclick="myFunction()">Daftar Disini</button>

        <div id="myForm">
        @auth
            <div class="awalForm">
                <div class="form1">PENDAFTARAN EVENT</div>
                <div class="form2">Bagi jemaat yang ingin mendaftar dalam event YESS Surabaya silahkan mengisi form pendaftaran event dibawah ini</div>
            </div>
            <div class="awal-2-Form">
                <form action="/register_event" method="POST">
                    @csrf
                    <!-- Dropdown for 'Tipe' -->
                    <div class="kegiatan-details-box">
                        <span class="kegiatan-title">Tempat Pelayanan: </span>
                        <div class="kegiatan-category">
                            <select name="tipe" required>
                                <option value="" disabled selected>Pilih Tempat Pelayanan</option>
                                <option value="Umum - Ciputra World">Umum - Ciputra World</option>
                                <option value="Umum - Dafam">Umum - Dafam</option>
                                <option value="Umum - Pondok Chandra">Umum - Pokchan</option>
                                <option value="YESS">YESS - Ciputra World</option>
                            </select>
                        </div>
                    </div>

                    <!-- Radio buttons for 'Role' -->
                    <div class="kegiatan-details-box">
                        <span class="kegiatan-title">Role: </span>
                        <div class="kegiatan-category">
                            <input type="radio" name="role" id="usher" value="Usher" required><label for="usher">Usher</label>
                            <input type="radio" name="role" id="singer" value="Singer" required><label for="singer">Singer</label>
                            <input type="radio" name="role" id="multimedia" value="Multimedia" required><label for="multimedia">Multimedia</label>
                            <input type="radio" name="role" id="camera" value="Camera" required><label for="camera">Camera</label>
                            <input type="radio" name="role" id="pemain_musik" value="Pemain Musik" required><label for="pemain_musik">Pemain Musik</label>
                        </div>
                    </div>

                    <!-- Alasan user -->
                    <div class="user-input">
                            <label for="alasan"><b>Alasan (Max 200 characters):</b></label>
                            <textarea id="alasan" name="alasan" required maxlength="200" placeholder="Your reason..." style="width: 100%"></textarea>
                        </div>
                    
                    <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                    <div class="form-submit-btn">
                        <input type="submit" value="Register">
                    </div>
                </form>
            </div>
        @else
            <div class="alert alert-info" role="alert">
                Please <a href="/login">login</a> to register for events.
            </div>
        @endauth
    </div>


    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Registration Success</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your registration has been successfully submitted!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Registration Failed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    There was an error submitting your registration. Please try again.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- start pelayanan -->
    <div class="content">
        <span class="where-can-i-serve" style="margin-top: 100px;">Where can I serve?</span><span
            class="at-yess-community">At YESS Community, we make it easy to use your gifts and talents
            here.</span>
        <div class="flex-row-d">
            <div class="rectangle-6">
                <div class="rectangle-7">
                    <span class="creative-writing-content">Creative writing, content in social media, if you are
                        creative
                        we have a place for you!</span>
                </div>
                <div class="rectangle-8">
                    <div class="screenshot-removebg-preview"></div>
                </div>
                <span class="worship-leader">Worship Leader</span>
                <div class="rectangle-9"></div>
            </div>
            <div class="rectangle-a">
                <div class="rectangle-b">
                    <div class="screenshot-preview"></div>
                    <div class="rectangle-c"><span class="singer">Singer</span></div>
                </div>
                <div class="rectangle-d">
                    <span class="creative-writing">Creative writing, content in social media, if you are creative
                        we have a place for you!</span>
                </div>
            </div>
            <div class="rectangle-e">
                <div class="rectangle-f">
                    <span class="creative-writing-10">Creative writing, content in social media, if you are creative
                        we have a place for you!</span>
                </div>
                <div class="rectangle-11">
                    <div class="screenshot-preview-12"></div>
                </div>
                <div class="rectangle-13">
                    <button class="pemain-musik">Pemain Musik</button>
                </div>
            </div>
            <div class="rectangle-14">
                <div class="rectangle-15">
                    <span class="creative-writing-16">Creative writing, content in social media, if you are creative
                        we have a place for you!</span>
                </div>
                <div class="rectangle-17">
                    <div class="screenshot-preview-18"></div>
                </div>
                <div class="rectangle-19">
                    <span class="kameramen">Kameramen</span>
                </div>
            </div>
            <div class="rectangle-1a">
                <div class="rectangle-1b">
                    <span class="creative-writing-content-1c">Creative writing, content in social media, if you are
                        creative
                        we have a place for you!</span>
                </div>
                <div class="rectangle-1d">
                    <div class="screenshot"
                    style="background: url(img/multimedia.png) no-repeat center;"></div>
                </div>
                <div class="rectangle-1e">
                    <span class="multimedia">Multimedia</span>
                </div>
            </div>
            <div class="rectangle-1f">
                <div class="rectangle-20">
                    <div class="screenshot-21"
                        style="background: url(img/usher.png) no-repeat center;">
                    </div>
                    <div class="group"></div>
                    <div class="rectangle-22"><span class="usher">Usher</span></div>
                    <div class="rectangle-23">
                        <span class="creative-writing-content-24">Creative writing, content in social media, if you are
                            creative
                            we have a place for you!</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="container-black">
            <div class="row">
                <div class="col-md-6">
                    <img src="E:\Download to E\MANPROY\home ferdi\assets\images\backgroundpbottom.png"
                        alt="Background Image" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="text-container">
                        <p class="text-white-build">Build relationships that build the church.</p>
                        <p class="text-white-unlock">When you serve in the church, you begin to unlock your God-given
                            purpose in life. All you have to do is sign up, click the link below to get started!</p>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="container-fluid" style="background-color: black; color: white;">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <img src="img/ig.png" alt="Instagram">
                    <img src="img/tiktok.png" alt="TikTok">
                    <img src="img/yt.png" alt="YouTube">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="js/komsel.js"></script>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        @if (session('success'))
            var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
                keyboard: false
            });
            successModal.show();
        @elseif (session('error'))
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {
                keyboard: false
            });
            errorModal.show();
        @endif
    });
</script>


</html>
