<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YESS.SUB | Pelayanan (admin)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
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

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" style="text-align:center;" id="navbarNav">
        <ul class="navbar-nav" style="margin-bottom:10px;">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
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
            <a class="nav-link" href="/event">Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/event">Penjadwalan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/event">Analisis</a>
          </li>
        </ul>
        <ul class="navbar-nav login-link">
          <li class="nav-item">
            <a class="nav-link login-link-border" href="/login">Edit</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!-- content -->
<div class="container" style="margin-top: 100px;">
  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="background-color: white;">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="pengajuan-tab" data-bs-toggle="pill" href="#pengajuan" role="tab" aria-controls="pengajuan" aria-selected="true" style="color: black; background-color: #D9D9D9;">Pengajuan Pelayanan</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="daftar-tab" data-bs-toggle="pill" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false" style="color: black;">Daftar Anggota Pelayanan</a>
    </li>
  </ul>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pengajuan" role="tabpanel" aria-labelledby="pengajuan-tab">
      <div class="container bg-white p-3" style="width: 80%; margin-top: 20px; border: 1px solid black;" id="userContainer">
        <div class="row">
          <div class="col-md-4">
            <img src="img/event-photo1.jpg" alt="Profile Picture" class="img-thumbnail">
          </div>
          <div class="col-md-8">
            <h1>Nama User</h1>
            <p>Umur, Pekerjaan</p>
            <p>Role Pelayanan</p>
            <p>Alasan ingin melayani:</p>
            <textarea class="form-control" rows="3"></textarea>
            <button onclick="approve()" style="background-color: green;">Approve</button>
            <button onclick="reject()" style="background-color: red;">Reject</button>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="daftar" role="tabpanel" aria-labelledby="daftar-tab">
    </div>
</div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="js/home.js"></script>
  <script>
  // untuk ganti warna pils
  const pengajuanTab = document.getElementById('pengajuan-tab');
  const daftarTab = document.getElementById('daftar-tab');

  daftarTab.addEventListener('click', function() {
    pengajuanTab.classList.remove('active');
    pengajuanTab.style.backgroundColor = '';

    daftarTab.classList.add('active');
    daftarTab.style.backgroundColor = '#D9D9D9';
  });

  pengajuanTab.addEventListener('click', function() {
    daftarTab.classList.remove('active');
    daftarTab.style.backgroundColor = '';

    pengajuanTab.classList.add('active');
    pengajuanTab.style.backgroundColor = '#D9D9D9';
  });
</script>
<script>
function approve() {
  var container = document.getElementById("userContainer");
  var daftarTab = document.getElementById("daftar");
  daftarTab.appendChild(container);
}

function reject() {
  var container = document.getElementById("userContainer");
  container.remove();
}
</script>
</body>
</html>
