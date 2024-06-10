<html>
    <head>
    <!-- Material Icons CDN -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 1px 0;
  }

  .main-content {
    background-color: #fff;
    display: flex;
    width: 100%;
    padding-bottom: 80px;
    flex-direction: column;
    align-items: center;
  }

  @media (max-width: 991px) {
    .main-content {
      max-width: 100%;
    }
  }

  .header {
    box-shadow: 0px 6px 4px 0px rgba(0, 0, 0, 0.25);
    background-color: #000;
    align-self: stretch;
    z-index: 10;
    display: flex;
    width: 100%;
    gap: 20px;
    color: #f5f5f5;
    justify-content: space-between;
    padding: 36px 80px;
  }

  @media (max-width: 991px) {
    .header {
      max-width: 100%;
      flex-wrap: wrap;
      padding: 0 20px;
    }
  }

  .logo-container {
    display: flex;
    flex-direction: column;
    font-size: 15px;
    font-weight: 400;
  }

  .logo {
    aspect-ratio: 2.7;
    object-fit: auto;
    object-position: center;
    width: 108px;
    align-self: center;
  }

  .site-title {
    font-family: Montserrat, sans-serif;
    margin-top: 6px;
  }

  .navbar {
    align-self: start;
    display: flex;
    margin-top: 18px;
    gap: 20px;
    font-size: 18px;
    font-weight: 500;
    white-space: nowrap;
  }

  @media (max-width: 991px) {
    .navbar {
      max-width: 100%;
      flex-wrap: wrap;
      white-space: initial;
    }
  }

  .home-item {
    display: flex;
    flex-direction: column;
    color: #eeb120;
    font-weight: 800;
    margin: auto 0;
  }

  .home-link {
    font-family: Montserrat, sans-serif;
    align-self: center;
  }

  .active-indicator {
    border-color: rgba(238, 177, 32, 1);
    border-style: solid;
    border-width: 3px;
    background-color: #eeb120;
    margin-top: 15px;
    height: 3px;
  }

  .nav-item {
    text-align: center;
    font-family: Montserrat, sans-serif;
  }

  .event-info {
    display: flex;
    margin-top: 27px;
    gap: 20px;
    padding: 0 20px;
  }

  @media (max-width: 991px) {
    .event-info {
      flex-wrap: wrap;
    }
  }

  .back-button {
    background-color: #000;
    border-radius: 50%;
    align-items: center;
    color: #fff;
    text-align: center;
    width: 65px;
    height: 65px;
    padding: 0 25px;
    font: 400 40px Material Icons, sans-serif;
  }

  @media (max-width: 991px) {
    .back-button {
      padding: 0 20px;
    }
  }

  .event-title {
    color: #000;
    align-self: start;
    margin-top: 13px;
    flex-grow: 1;
    font: 700 60px Kanit, sans-serif;
  }

  @media (max-width: 991px) {
    .event-title {
      max-width: 100%;
      font-size: 40px;
    }
  }

  .event-details {
    background-color: #000;
    display: flex;
    width: 100%;
    max-width: 1263px;
    flex-direction: column;
    margin: 34px 0 167px;
    padding: 2px 69px 80px;
  }

  @media (max-width: 991px) {
    .event-details {
      max-width: 100%;
      margin-bottom: 40px;
      padding: 0 20px;
    }
  }

  .edit-section {
    display: flex;
    gap: 20px;
  }

  @media (max-width: 991px) {
    .edit-section {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }

  .date {
    color: #fff;
    align-self: end;
    margin-top: 21px;
    flex-grow: 1;
    font: 600 32px Kanit, sans-serif;
  }

  .edit-button {
    background-color: #eeb120;
    color: #000;
    text-align: center;
    padding: 12px 31px;
    font: 400 35px/63% Material Icons, -apple-system, Roboto, Helvetica, sans-serif;
  }

  .schedule-section {
    display: flex;
    margin-top: 57px;
    gap: 20px;
    font-weight: 400;
    white-space: nowrap;
  }

  @media (max-width: 991px) {
    .schedule-section {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }

  .schedule-label {
    color: #fff;
    margin: auto 0;
    font: 30px Kanit, sans-serif;
  }

  .schedule-time {
    background-color: #fff;
    color: #888;
    flex-grow: 1;
    padding: 13px 16px;
    font: 18px Kanit, sans-serif;
  }

  .topics-section {
    display: flex;
    margin-top: 17px;
    gap: 17px;
    font-weight: 400;
  }

  @media (max-width: 991px) {
    .topics-section {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }

  .topic-label {
    color: #fff;
    flex-grow: 1;
    margin: auto 0;
    font: 30px Kanit, sans-serif;
  }

  .topic-info {
    background-color: #fff;
    color: #888;
    white-space: nowrap;
    justify-content: center;
    flex-grow: 1;
    padding: 11px 17px;
    font: 18px Kanit, sans-serif;
  }

  .personnel-section {
    display: flex;
    margin-top: 22px;
    gap: 20px;
    font-weight: 400;
  }

  @media (max-width: 991px) {
    .personnel-section {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }

  .person-label {
    color: #fff;
    flex-grow: 1;
    font: 30px Kanit, sans-serif;
  }

  .person-info {
    background-color: #fff;
    color: #888;
    white-space: nowrap;
    justify-content: center;
    flex-grow: 1;
    padding: 13px 17px;
    font: 18px Kanit, sans-serif;
  }

  .role-section {
    display: flex;
    margin-top: 40px;
    width: 748px;
    max-width: 100%;
    gap: 20px;
    font-size: 30px;
    color: #fff;
    font-weight: 400;
  }

  @media (max-width: 991px) {
    .role-section {
      flex-wrap: wrap;
    }
  }

  .role-label {
    font-family: Kanit, sans-serif;
    flex-grow: 1;
  }

  .role-input {
    background-color: #fff;
    width: 532px;
    max-width: 100%;
    height: 44px;
  }

  .name-section {
    display: flex;
    gap: 20px;
    justify-content: space-between;
  }

  @media (max-width: 991px) {
    .name-section {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }

  .name-label {
    background-color: #fff;
    width: 532px;
    max-width: 100%;
    height: 44px;
  }

  .name-info {
    background-color: #fff;
    width: 533px;
    max-width: 100%;
    height: 44px;
  }

  .footer-label {
    background-color: #fff;
    width: 532px;
    max-width: 100%;
    align-items: start;
    color: #000;
    justify-content: center;
    padding: 16px 60px 16px 75px;
    font: 400 24px Kanit, sans-serif;
  }

  @media (max-width: 991px) {
    .footer-label {
      white-space: initial;
      padding: 0 20px 0 30px;
    }
  }

  .action-section {
    display: flex;
    margin-top: 42px;
    width: 742px;
    max-width: 100%;
    gap: 20px;
    font-size: 30px;
    color: #fff;
    font-weight: 400;
  }

  @media (max-width: 991px) {
    .action-section {
      flex-wrap: wrap;
      margin-top: 40px;
    }
  }

  .action-label {
    font-family: Kanit, sans-serif;
    flex-grow: 1;
  }

  .action-input {
    background-color: #fff;
    width: 532px;
    max-width: 100%;
    height: 44px;
  }

  .bottom-section {
    display: flex;
    margin-top: 20px;
    gap: 20px;
    justify-content: space-between;
  }

  .bottom-label {
    background-color: #fff;
    width: 532px;
    max-width: 100%;
    height: 44px;
  }

  .bottom-input {
    background-color: #fff;
    width: 533px;
    max-width: 100%;
    height: 44px;
  }

  .footer-section {
    display: flex;
    gap: 20px;
    justify-content: space-between;
  }

  .footer-item {
    background-color: #fff;
    width: 532px;
    max-width: 100%;
    height: 44px;
  }

  .footer-input {
    background-color: #fff;
    width: 533px;
    max-width: 100%;
    height: 44px;
  }
</style>
    </head>
    <body>

<div class="container">
  <header class="main-content">
    <div class="header">
      <div class="logo-container">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ea70bf3cf3b7e9699c799d874034d07d6142067effe5e2fe8d61eed42517eff5?apiKey=f9ed83d6b13f4286938197498a891b31&" class="logo" alt="Best Church Logo" />
        <div class="site-title">BEST CHURCH</div>
      </div>
      <nav class="navbar">
        <div class="home-item">
          <div class="home-link">Home</div>
          <div class="active-indicator"></div>
        </div>
        <div class="nav-item">
          Daftar <br /> Pelayanan
        </div>
        <div class="nav-item">KomSel</div>
        <div class="nav-item">Bareng</div>
        <div class="nav-item">Event</div>
        <div class="nav-item">Penjadwalan</div>
        <div class="nav-item">
          List <br /> Jemaat
        </div>
        <div class="nav-item">Analisis</div>
      </nav>
    </div>
    <div class="event-info">
      <div class="back-button" tabindex="0" role="button">keyboard_arrow_left</div>
      <h1 class="event-title">Pelayanan Worship Night - Ciputra World</h1>
    </div>
    <section class="event-details">
      <div class="edit-section">
        <div class="date">Jumat, 5 April 2024</div>
        <div class="edit-button" tabindex="0" role="button">mode_edit</div>
      </div>
      <div class="schedule-section">
        <div class="schedule-label">Waktu</div>
        <div class="schedule-time">Waktu</div>
      </div>
      <div class="topics-section">
        <div class="topic-label">Topik :</div>
        <div class="topic-info">Topik</div>
      </div>
      <div class="personnel-section">
        <div class="person-label">Pendeta :</div>
        <div class="person-info">Pendeta</div>
      </div>
      <div class="role-section">
        <div class="role-label">Pemain Musik</div>
        <div class="role-label">Kameramen</div>
      </div>
      <div class="name-section">
        <div class="name-label"></div>
        <div class="name-info"></div>
      </div>
      <div class="footer-section">
        <div class="footer-item"></div>
        <div class="footer-input"></div>
      </div>
      <div class="footer-label">nama</div>
      <div class="action-section">
        <div class="action-label">Worship Leader</div>
        <div class="action-label">Multimedia</div>
      </div>
      <div class="bottom-section">
        <div class="bottom-label"></div>
        <div class="bottom-input"></div>
      </div>
      <div class="footer-section">
        <div class="footer-item"></div>
        <div class="footer-input"></div>
      </div>
      <div class="topics-section">
        <div class="topic-label">Singer</div>
        <div class="topic-info">Usher</div>
      </div>
      <div class="bottom-section">
        <div class="bottom-label"></div>
        <div class="bottom-input"></div>
      </div>
      <div class="footer-section">
        <div class="footer-item"></div>
        <div class="footer-input"></div>
      </div>
      <div class="footer-label">nama</div>
    </section>
  </header>
</div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script>
        </script>

    </body>
</html>