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
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
  
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



    /* Content */
    body {
      background-color: #fff;
      display: flex;
      flex-direction: column;
    }
    .main-content {
      display: flex;
      margin-top: 100px;
      width: 100%;
      flex-direction: column;
      padding: 0 55px;
    }
    @media (max-width: 991px) {
      .main-content {
        max-width: 100%;
        padding: 0 20px;
      }
    }
    .main-title {
      align-self: start;
      display: flex;
      gap: 20px;
      font-size: 40px;
      color: #000;
      font-weight: 600;
    }
    @media (max-width: 991px) {
      .main-title {
        flex-wrap: wrap;
        font-size: 40px;
      }
    }
    .btn-back {
      border-radius: 35px;
      align-items: center; /* Mengatur isi (tanda panah) menjadi terpusat secara vertikal */
      justify-content: center; /* Mengatur isi (tanda panah) menjadi terpusat secara horizontal */
      display: flex; /* Menjadikan elemen tampilan flex */
      background: linear-gradient(0deg, #eeb120 0%, #eeb120 100%), #eeb120;
      border-color: rgba(0, 0, 0, 1);
      border-style: solid;
      border-width: 1px;
      width: 80px;
      height: 60px;
    }

    .btn-back:hover {
  box-shadow:  #eeb120 0 6px 8px;
  transform: translateY(-2px);
  border-color: transparent;
}

.btn-back:active {
  box-shadow: none;
  transform: translateY(0);
}
    .breadcrumbs {
      font-family: Kanit, sans-serif;
      align-self: start;
      flex-grow: 1;
      flex-basis: auto;
      
    }
    @media (max-width: 991px) {
      .breadcrumbs {
        max-width: 100%;
        font-size: 25px;
      }
    }
    .card {
      border-radius: 20px;
      border: 1px solid rgba(0, 0, 0, 1);
      background-color: #f4f4f4;
      display: flex;
      margin-top: 12px;
      padding: 39px 42px 10px;
      flex-direction: column;
    }
    @media (max-width: 991px) {
      .card {
        max-width: 100%;
      }
    }
    .card-title {
      color: #000;
      align-self: start;
      margin-left: 31px;
      margin-top: -15px;
      font: 700 26px Kanit, sans-serif;
    }
    @media (max-width: 991px) {
      .card-title {
        margin-left: 10px;
      }
    }
    .card-divider {
  height: 5px;
  margin-top: 5px;
  margin-bottom: 10px;
  background: linear-gradient(
    to bottom,
    transparent 2px,
    black 2px,
    black 3px,
    transparent 3px
  );
}
    @media (max-width: 991px) {
      .card-divider {
        max-width: 100%;
      }
    }
    

    .modal-counter-box {
            display: flex;
            justify-content: flex-end;
        }

        /* icon delete + edit */
        .action-icon {
        background-color: #eeb120;
        border-color: #eeb120;
        align-items: center;
        justify-content: center;
        font: 32px Material Icons, sans-serif;
        }

        .table-main-action:hover, .action-icon:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }

        /* modal/form */
    /* Modal Body */
    .add-event-modal .modal-body,
        .edit-event-modal .modal-body {
            background-color: #F2F2F2;
        }

        /* CSS for adjusting modal body layout */
        .add-event-modal .modal-body .row,
        .edit-event-modal .modal-body .row {
            display: flex;
        }

        .add-event-modal .modal-body .col,
        .edit-event-modal .modal-body .col {
            flex: 1;
            margin-right: 10px;
            /* Add margin between date and time inputs */
        }

        /* Modal footer */
        .add-event-modal .modal-footer,
        .edit-event-modal .modal-footer {
            background-color: #a2a2a2;
            font-family: DM Sans, sans-serif;
            font-weight: bold;
        }

        /* Cancel Button */
        .add-event-modal .btn-cancel,
        .edit-event-modal .btn-cancel {
            background-color: #e5e5e5;
            color: black;
        }

        /* Save Button */
        .add-event-modal .btn-save,
        .edit-event-modal .btn-save {
            background-color:#eeb120;
            color: black;
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

    
    <!-- konten -->
    <main class="main-content">
        <section class="main-title">
          <button class="btn-back" onclick="goBackToAturKomsel()"><span class="material-icons" style="font-size: 60%;">arrow_back</span></button>
          <div class="breadcrumbs">Komsel &gt; Atur Komsel &gt; Event Khusus</div>
        </section>

        <section class="card mb-4">
            <div class="card-title">Sabtu, 6 April 2024 &nbsp &nbsp 
                <button class="action-icon modal-counter-box edit-event-button" data-bs-toggle="modal" data-bs-target="#editEventModal" style="display: block; background-color:#eeb120; float: right; ">mode_edit</button>

                <button class="action-icon"  class="modal-counter-box " style="display: block; background-color:#eeb120; float: right; ">delete</button>
            </div></div>
            <div class="card-divider" ></div>
            <!-- Form fields -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col mb-3">
                        <div class="user-input-box" >
                            <label for="namaEvent" class="form-label" >Nama Event</label>
                                <input type="text" class="form-control"id="namaEvent" name="namaEvent" style="border-radius: 0; border-color: #939393;"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col ">
                        <div class="user-input-box" >
                            <label for="lokasi" class="form-label" >Lokasi</label>
                                <input type="text" class="form-control"id="namaEvent" name="lokasi"  style="border-radius: 0; border-color: #939393;"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        <div class="user-input-box mt-3 mb-3">
                                <label for="keterangan" class="mb-2">Keterangan</label>
                                <textarea class="form-control" id="keterangan" rows="3" style="border-radius: 0; border-color: #939393;" ></textarea>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    
    <!-- form edit -->
    <div class="modal fade modal-lg edit-event-modal" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title" id="editEventModalLabel">EDIT Event Khusus</h5>
                    
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="aNamaEvent" class="form-label">Nama Event</label>
                        <input type="text" class="form-control" id="aNamaEvent" name="aNamaEvent" required>
                    </div>
                    <div class="mb-3">
                        <label for="aLokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="aLokasi" name="aLokasi" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="aKeterangan" class="form-label">Keterangan</label>
                        <textarea class="form-control" id="aKeterangan" name="aKeterangan" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel float-start" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-save float-end" onclick="editEvent()">Save</button>
                </div>
            </div>
        </div>
    </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Function to go back to the komsel page
        function goBackToAturKomsel() {
          window.location.href = "aturKomsel.blade.php"; 
        }
      </script>
</body>
</html>