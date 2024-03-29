<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>YESS.SUB | Event</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- YESS, BEST CHURCH, and Profile Picture -->
      <a class="navbar-brand" href="#">
        <img src="img/{{ $profile }}" class="profile-picture" alt="Profile Picture">
        <div class="brand-text">
          <div>YESS</div>
          <span class="lora-font">BEST CHURCH</span>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto text-center"> <!-- Use text-center to center the nav items -->
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a> <!-- Added 'active' class here -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pelayanan">Pelayanan</a> <!-- Removed 'active' class here -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/komsel">KomSel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bareng">Bareng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/event">Event</a>
          </li>
        </ul>
        <ul class="navbar-nav login-link">
          <li class="nav-item">
            <a class="nav-link login-link-border" href="/login">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1>Hello</h1>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>