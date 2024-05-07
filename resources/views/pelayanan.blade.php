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
    <link href="css/style.css" rel="stylesheet">
    <link href="css/pelayanan.css" rel="stylesheet">

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
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pelayanan">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/komsel">KomSel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bareng">Bareng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/event">Event</a>
                    </li>
                </ul>
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
                                    <!-- Assuming 'is_admin' attribute exists -->
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
                    <div class="form2">Bagi jemaat yang ingin mendaftar dalam event YESS Surabaya silahkan mengisi form
                        pendaftaran event dibawah ini</div>
                </div>
                <div class="awal-2-Form">
                    <form action="/register_event" method="POST">
                        @csrf
                        <div class="main-user-info">
                            <div class="user-input-box">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="user-input-box">
                                <label for="umur">Umur</label>
                                <input type="number" id="umur" name="umur" placeholder="Umur" required>
                            </div>
                            <div class="user-input-box">
                                <label for="nomor">No. HP (Whatapp)</label>
                                <input type="text" id="nomor" name="no_hp" placeholder="No. HP (WhatsApp)"
                                    required>
                            </div>
                            <div class="user-input-box">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
                            </div>

                        </div>
                        <div class="user-input-box">
                            <label for="alasan">Alasan (Max 200 characters):</label>
                            <textarea id="alasan" name="alasan" required maxlength="200" placeholder="Your reason..." style="width: 100%"></textarea>
                        </div>
                        <div class="kegiatan-details-box">
                            <span class="kegiatan-title">Kegiatan saat ini : </span>
                            <div class="kegiatan-category">
                                <input type="radio" name="kegiatan_saat_ini" value="Sekolah" required>
                                <label for="sekolah">Sekolah</label>
                                <input type="radio" name="kegiatan_saat_ini" value="Kuliah" required>
                                <label for="kuliah">Kuliah</label>
                                <input type="radio" name="kegiatan_saat_ini" value="Bekerja" required>
                                <label for="bekerja">Bekerja</label>
                            </div>
                        </div>
                        <div class="kegiatan-details-box">
                            <span class="kegiatan-title">Role : </span>
                            <div class="kegiatan-category">
                                <input type="radio" name="role" id="usher" value="Usher" required><label
                                    for="usher">Usher</label>
                                <input type="radio" name="role" id="singer" value="Singer" required><label
                                    for="singer">Singer</label>
                                <input type="radio" name="role" id="multimedia" value="Multimedia" required><label
                                    for="multimedia">Multimedia</label>
                                <input type="radio" name="role" id="camera" value="Camera" required><label
                                    for="camera">Camera</label>
                                <input type="radio" name="role" id="pemain_musik" value="Pemain Musik"
                                    required><label for="pemain_musik">Pemain Musik</label>
                            </div>
                        </div>
                        <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                        <div class="form-submit-btn">
                            <input type="submit" value="Register">
                    </form>
                </div>
            @else
                <div class="alert alert-info" role="alert">
                    Please <a href="/login">login</a> to register for events.
                </div>
            @endauth
        </div>
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
                    <div class="screenshot"></div>
                </div>
                <div class="rectangle-1e">
                    <span class="multimedia">Multimedia</span>
                </div>
            </div>
            <div class="rectangle-1f">
                <div class="rectangle-20">
                    <div class="screenshot-21"
                        style="background: url(img/c5df6ea5a38488013a1e325e2697ef8cd193853e.png) no-repeat center;">
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
                <div class="col-md-6 d-flex justify-content-end">
                    <span style="font-family: 'Roboto', sans-serif; font-size: 20px; margin-top: 20px;">Contact
                        Us</span>
                    <img src="img/wa.png" alt="WhatsApp">
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
