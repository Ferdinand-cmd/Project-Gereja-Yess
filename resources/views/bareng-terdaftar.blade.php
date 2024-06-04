<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bareng.css" rel="stylesheet">
<style>
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
    font-size: 64px;
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
    width: 92px;
    height: 70px;
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
      font-size: 40px;
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
    font: 700 36px Kanit, sans-serif;
  }
  @media (max-width: 991px) {
    .card-title {
      margin-left: 10px;
    }
  }
  .card-divider {
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;
    border: 2px solid rgba(255, 255, 255, 1);
    background-color: #fff;
    margin-top: 19px;
    height: 2px;
  }
  @media (max-width: 991px) {
    .card-divider {
      max-width: 100%;
    }
  }
  .card-description {
    color: #000;
    align-self: center;
    margin-top: 21px;
    font: 500 16px Montserrat, sans-serif;
  }
  @media (max-width: 991px) {
    .card-description {
      max-width: 100%;
    }
  }
  .button-primary {
    border: 1px solid rgba(0, 0, 0, 1);
    background-color: #eeb120;
    align-self: center;
    margin-top: 17px;
    color: #000;
    text-align: center;
    justify-content: center;
    padding: 27px 54px;
    font: 700 36px Montserrat, sans-serif;
  }
  @media (max-width: 991px) {
    .button-primary {
      padding: 0 20px;
    }
  }
  .info-section {
    display: flex;
    margin-top: 43px;
    flex-direction: column;
  }
  @media (max-width: 991px) {
    .info-section {
      max-width: 100%;
      margin-top: 40px;
      padding: 0 20px;
    }
  }
  .info-title {
    color: #000;
    font: 700 36px Montserrat, sans-serif;
  }
  @media (max-width: 991px) {
    .info-title {
      max-width: 100%;
    }
  }
  .info-details {
    margin-top: 25px;
  }
  @media (max-width: 991px) {
    .info-details {
      max-width: 100%;
    }
  }
  .info-columns {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .info-columns {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 50%;
    margin-left: 0px;
  }
  @media (max-width: 991px) {
    .column {
      width: 100%;
    }
  }
  .info-text {
    color: #000;
    font: 600 24px Montserrat, sans-serif;
  }
  @media (max-width: 991px) {
    .info-text {
      max-width: 100%;
      margin-top: 40px;
    }
  }
  .column-2 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 50%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-2 {
      width: 100%;
    }
  }
  .count-section {
    border: 1px solid rgba(0, 0, 0, 1);
    background-color: #fff;
    align-self: end;
    display: flex;
    margin-top: 30px;
    padding-left: 18px;
    gap: 20px;
    color: #000;
    font-weight: 400;
    justify-content: space-between;
  }
  .count-label {
    margin: auto 0;
    font: 24px Kanit, sans-serif;
  }
  .count-value {
    border: 1px solid rgba(0, 0, 0, 1);
    background-color: #eeb120;
    text-align: center;
    justify-content: center;
    padding: 18px 27px;
    font: 36px Kanit, sans-serif;
  }
  @media (max-width: 991px) {
    .count-value {
      padding: 0 20px;
    }
  }
  /* .table {
    background-color: #000;
    display: flex;
    flex-direction: column;
    margin: 15px 42px 0;
    padding: 30px 4px 0;
  }
  @media (max-width: 991px) {
    .table {
      max-width: 100%;
      margin-right: 10px;
    }
  }
  .table-header {
    align-self: center;
    display: flex;
    width: 100%;
    max-width: 1157px;
    align-items: start;
    gap: 20px;
    color: #fff;
  }
  .table-header-item {
    text-align: center;
    letter-spacing: 1.68px;
    font: 700 24px Montserrat, sans-serif;
  }
  .table-body {
    background-color: #fff;
    display: flex;
    margin-top: 18px;
    gap: 20px;
    font-size: 20px;
    color: #000;
    font-weight: 400;
    text-align: center;
    padding: 26px 31px;
  }
  @media (max-width: 991px) {
    .table-body {
      max-width: 100%;
      flex-wrap: wrap;
      padding: 0 20px;
    }
  }
  .table-body-item {
    font-family: Montserrat, sans-serif;
    align-self: start;
  }
  .table-body-item-growing {
    font-family: Montserrat, sans-serif;
    flex-grow: 1;
    flex-basis: auto;
  }
  .color-alt-1 {
    background-color: #efefef;
    height: 70px;
  }
  .color-alt-2 {
    background-color: #fff;
    height: 70px;
  }
  .color-alt-3 {
    background-color: #efefef;
    height: 59px;
  } */
  .table {
    margin-top: 20px;
  }
</style>

<body>
    <!-- navbar -->
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
                        <a class="nav-link" href="/komsel">KomSel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/bareng">Bareng</a>
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

<main class="main-content">
  <section class="main-title">
    <button class="btn-back" onclick="goBackToBareng()"><span class="material-icons">arrow_back</span></button>
    <div class="breadcrumbs">Bareng &gt; Terdaftar Bareng</div>
  </section>
  <section class="card">
    <div class="card-title">Sabtu, 6 April 2024</div>
    <div class="card-divider"></div>
    <div class="card-description">Klik tombol ini, jika sudah siap berangkat ke tujuan</div>
    <button class="button-primary" tabindex="0">Siap Berangkat</button>
    <section class="info-section">
      <div class="info-title">Informasi Jemput</div>
      <div class="info-details">
        <div class="info-columns">
          <div class="column info-text">
            Waktu Keberangkatan : 16.00 <br>
            Titik jemput : Hotel Dafam Pacific Caesar <br>
            Tujuan : Ciputra World Surabaya
          </div>
          <div class="column-2 info-text">
            Nama Penjemput : Asep <br>
            Plat Nomor : L 1234 ABC <br>
            Kapasitas : 2 orang
          </div>
        </div>
      </div>
      <div class="count-section">
        <div class="count-label">Jumlah</div>
        <div class="count-value">2 / 2</div>
      </div>
    </section>
    <!-- <section class="table">
      <div class="table-header">
        <div class="table-header-item">No</div>
        <div class="table-header-item">Nama Jemaat</div>
        <div class="table-header-item">No WA</div>
        <div class="table-header-item">Status</div>
      </div>
      <div class="table-body">
        <div class="table-body-item">1</div>
        <div class="table-body-item-growing">Jackson Wang</div>
        <div class="table-body-item-growing">081357171234</div>
      </div>
      <div class="color-alt-1"></div>
      <div class="color-alt-2"></div>
      <div class="color-alt-3"></div>
    </section> -->
    <table class="table table-striped table-hover table-bordered border-secondary">
      <thead>
        <tr class="table-dark">
          <th>No</th>
          <th>Nama Jemaat</th>
          <th>No WA</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Steven Bryan Christanto</td>
          <td>081259263720</td>
          <td>Merah</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Ferdinand Immanuel</td>
          <td>081259263720</td>
          <td>Merah</td>
        </tr>
      </tbody>
    </table>
  </section>
</main>
<script>
  // Function to go back to the bareng page
  function goBackToBareng() {
    window.location.href = "bareng-jemput.blade.php"; // Redirect to bareng-jemput.blade.php
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>