<style>
  * {
    margin: 0;
    padding: 0;
  }

  .container {
    background-color: #fff;
    display: flex;
    flex-direction: column;
  }

  .header {
    box-shadow: 0px 6px 4px 0px rgba(0, 0, 0, 0.25);
    background-color: #000;
    display: flex;
    width: 100%;
    align-items: start;
    gap: 20px;
    color: #f5f5f5;
    justify-content: space-between;
    padding: 35px 42px;
  }

  @media (max-width: 991px) {
    .header {
      max-width: 100%;
      flex-wrap: wrap;
      padding: 0 20px;
    }
  }

  .logo-section {
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

  .brand-title {
    font-family: Montserrat, sans-serif;
    margin-top: 6px;
  }

  .nav {
    align-self: end;
    display: flex;
    margin-top: 24px;
    align-items: start;
    gap: 20px;
    font-size: 18px;
    font-weight: 500;
    white-space: nowrap;
    justify-content: space-between;
  }

  @media (max-width: 991px) {
    .nav {
      max-width: 100%;
      flex-wrap: wrap;
      white-space: initial;
    }
  }

  .nav-item {
    display: flex;
    flex-direction: column;
  }

  @media (max-width: 991px) {
    .nav-item {
      white-space: initial;
    }
  }

  .home-link {
    font-family: Montserrat, sans-serif;
    align-self: center;
    color: #eeb120;
    font-weight: 800;
  }

  .active-link-indicator {
    border: 3px solid #eeb120;
    background-color: #eeb120;
    margin-top: 15px;
    height: 3px;
  }

  .nav-link {
    font-family: Montserrat, sans-serif;
  }

  .login-section {
    border-radius: 40px;
    border: 1px solid rgba(64, 64, 64, 1);
    display: flex;
    margin-top: 4px;
    gap: 4px;
    font-size: 20px;
    color: #fff;
    font-weight: 700;
    line-height: 120%;
    padding: 16px 24px;
  }

  @media (max-width: 991px) {
    .login-section {
      padding: 0 20px;
    }
  }

  .login-text {
    font-family: Montserrat, sans-serif;
  }

  .login-icon {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 20px;
    margin: auto 0;
  }

  .main-content {
    display: flex;
    margin-top: 70px;
    width: 100%;
    flex-direction: column;
    padding: 0 80px;
  }

  @media (max-width: 991px) {
    .main-content {
      max-width: 100%;
      margin-top: 40px;
      padding: 0 20px;
    }
  }

  .title {
    color: #000;
    align-self: left;
    font: 700 100px Kanit, sans-serif;
  }

  @media (max-width: 991px) {
    .title {
      max-width: 100%;
      font-size: 40px;
    }
  }

  .subtitle {
    color: #000;
    letter-spacing: 1.8px;
    align-self: left;
    margin-top: 23px;
    font: 300 36px/50px Open Sans Hebrew, -apple-system, Roboto, Helvetica, sans-serif;
  }

  @media (max-width: 991px) {
    .subtitle {
      max-width: 100%;
    }
  }

  .event-section {
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    background-color: #f4f4f4;
    align-self: end;
    margin-top: 53px;
    width: 1205px;
    max-width: 100%;
    padding: 27px 65px;
  }

  @media (max-width: 991px) {
    .event-section {
      margin: 40px 10px 0 0;
      padding: 0 20px;
    }
  }

  .event-container {
    gap: 20px;
    display: flex;
  }

  @media (max-width: 991px) {
    .event-container {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }

  .event-date {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 37%;
    margin-left: 0px;
  }

  .event-details {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 63%;
    margin-left: 20px;
  }

  @media (max-width: 991px) {
    .event-date,
    .event-details {
      width: 100%;
    }
  }

  .event-wrapper {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    display: flex;
    aspect-ratio: 1.4;
    flex-grow: 1;
    align-items: end;
    color: #f5f5f5;
    font-weight: 900;
    white-space: nowrap;
    padding: 80px 60px 0;
  }

  @media (max-width: 991px) {
    .event-wrapper {
      margin-top: 40px;
      white-space: initial;
    }
  }

  .event-image {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
  }

  .event-date-wrapper {
    position: relative;
    background-color: rgba(0, 0, 0, 0.25);
    display: flex;
    margin-top: 102px;
    flex-direction: column;
    padding: 10px 31px;
  }

  @media (max-width: 991px) {
    .event-date-wrapper {
      margin-top: 40px;
      white-space: initial;
      padding: 0 20px;
    }
  }

  .event-month {
    letter-spacing: 1.6px;
    font: 16px Roboto, sans-serif;
  }

  .event-day {
    letter-spacing: 3.2px;
    margin-top: 6px;
    font: 32px Roboto, sans-serif;
  }

  .event-title {
    display: flex;
    flex-direction: column;
    align-self: stretch;
    font-size: 20px;
    color: #646464;
    margin: auto 0;
  }

  @media (max-width: 991px) {
    .event-title {
      max-width: 100%;
      margin-top: 40px;
    }
  }

  .event-title-heading {
    color: #000;
    font: 600 36px Kanit, sans-serif;
  }

  @media (max-width: 991px) {
    .event-title-heading {
      max-width: 100%;
    }
  }

  .event-location {
    font-family: Roboto, sans-serif;
    font-weight: 700;
    margin-top: 21px;
  }

  @media (max-width: 991px) {
    .event-location {
      max-width: 100%;
    }
  }

  .event-description {
    font-family: Roboto, sans-serif;
    font-weight: 400;
    letter-spacing: 0.4px;
    margin-top: 36px;
  }

  @media (max-width: 991px) {
    .event-description {
      max-width: 100%;
    }
  }

  .more-events-section {
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
    background-color: #f4f4f4;
    align-self: end;
    margin-top: 44px;
    width: 1205px;
    max-width: 100%;
    padding: 27px 39px 14px;
  }

  @media (max-width: 991px) {
    .more-events-section {
      margin: 40px 10px 0 0;
      padding: 0 20px;
    }
  }

  .more-events-container {
    gap: 20px;
    display: flex;
  }

  @media (max-width: 991px) {
    .more-events-container {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }

  .more-events-date-section {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 31%;
    margin-left: 0px;
  }

  @media (max-width: 991px) {
    .more-events-date-section {
      width: 100%;
    }
  }

  .more-events-wrapper {
    display: flex;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    display: flex;
    aspect-ratio: 1.4;
    flex-grow: 1;
    align-items: end;
    color: #f5f5f5;
    font-weight: 900;
    white-space: nowrap;
    padding: 80px 60px 0;
  }

  @media (max-width: 991px) {
    .more-events-wrapper {
      margin-top: 40px;
      white-space: initial;
    }
  }

  .more-events-image {
    position: absolute;
    inset: 0;
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
  }

  .more-events-date-wrapper {
    position: relative;
    background-color: rgba(0, 0, 0, 0.25);
    display: flex;
    margin-top: 102px;
    flex-direction: column;
    padding: 10px 13px 10px 6px;
  }

  @media (max-width: 991px) {
    .more-events-date-wrapper {
      margin-top: 40px;
      white-space: initial;
    }
  }

  .more-events-month {
    letter-spacing: 1.6px;
    align-self: center;
    font: 16px Roboto, sans-serif;
  }

  .more-events-day {
    margin-top: 6px;
    font: 32px Roboto, sans-serif;
  }

  .more-events-details {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 69%;
    margin-left: 20px;
  }

  @media (max-width: 991px) {
    .more-events-details {
      width: 100%;
    }
  }

  .more-event-info {
    margin-top: 32px;
    flex-grow: 1;
  }

  @media (max-width: 991px) {
    .more-event-info {
      max-width: 100%;
      margin-top: 40px;
    }
  }

  .more-event-container {
    gap: 20px;
    display: flex;
  }

  @media (max-width: 991px) {
    .more-event-container {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }

  .more-events-title-section {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 83%;
    margin-left: 0px;
  }

  @media (max-width: 991px) {
    .more-events-title-section {
      width: 100%;
    }
  }

  .more-events-title {
    display: flex;
    flex-direction: column;
    font-size: 20px;
    color: #646464;
  }

  @media (max-width: 991px) {
    .more-events-title {
      max-width: 100%;
    }
  }

  .more-events-title-heading {
    color: #000;
    font: 600 36px Kanit, sans-serif;
  }

  @media (max-width: 991px) {
    .more-events-title-heading {
      max-width: 100%;
    }
  }

  .more-events-location {
    font-family: Roboto, sans-serif;
    font-weight: 700;
    margin-top: 12px;
  }

  @media (max-width: 991px) {
    .more-events-location {
      max-width: 100%;
    }
  }

  .more-events-description {
    font-family: Roboto, sans-serif;
    font-weight: 400;
    letter-spacing: 0.4px;
    margin-top: 36px;
  }

  @media (max-width: 991px) {
    .more-events-description {
      max-width: 100%;
    }
  }

  .register-now {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 17%;
    margin-left: 20px;
  }

  @media (max-width: 991px) {
    .register-now {
      width: 100%;
    }
  }

  .register-btn-container {
    justify-content: center;
    border-radius: 40px;
    display: flex;
    margin-top: 155px;
    flex-grow: 1;
    flex-direction: column;
    font-size: 18px;
    color: #fff;
    font-weight: 500;
    white-space: nowrap;
    line-height: 133%;
  }

  @media (max-width: 991px) {
    .register-btn-container {
      margin-top: 40px;
      white-space: initial;
    }
  }

  .register-btn-wrapper {
    border-radius: 40px;
    background-color: #eeb120;
    display: flex;
    gap: 8px;
    padding: 16px 24px;
  }

  @media (max-width: 991px) {
    .register-btn-wrapper {
      white-space: initial;
      padding: 0 20px;
    }
  }

  .register-btn-text {
    font-family: DM Sans, sans-serif;
  }

  .register-btn-icon {
    aspect-ratio: 1;
    object-fit: auto;
    object-position: center;
    width: 20px;
    margin: auto 0;
  }
</style>
<div class="container">
  <header class="header">
    <div class="logo-section">
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ea70bf3cf3b7e9699c799d874034d07d6142067effe5e2fe8d61eed42517eff5?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Logo" class="logo" />
      <div class="brand-title">BEST CHURCH</div>
    </div>
    <nav class="nav">
      <div class="nav-item">
        <div class="home-link">Home</div>
        <div class="active-link-indicator"></div>
      </div>
      <div class="nav-link">Pelayanan</div>
      <div class="nav-link">KomSel</div>
      <div class="nav-link">Bareng</div>
      <div class="nav-link">Event</div>
    </nav>
    <div class="login-section">
      <div class="login-text">LOGIN</div>
      <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a390d2d67c38a09e5eaa47f4f91e71fe983d5058d777d8b5676bf31987f5a54e?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Login Icon" class="login-icon" />
    </div>
  </header>
  <main class="main-content">
    <h1 class="title">Upcoming Events</h1>
    <h2 class="subtitle"> What's coming up at YESS Surabaya <span style="letter-spacing: 3.6px">>>></span> </h2>
    <div class="event-section">
      <div class="event-container">
        <div class="event-date">
          <div class="event-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/822aeb911358eaa71c142746dc40e2caece2dca05e0077f1ca59a46b32605bde?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Event Image" class="event-image" />
            <div class="event-date-wrapper">
              <div class="event-month">MAR</div>
              <div class="event-day">30</div>
            </div>
          </div>
        </div>
        <div class="event-details">
          <div class="event-title">
            <h3 class="event-title-heading">Putus atau Terus</h3>
            <p class="event-location">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</p>
            <p class="event-description">
              YESS Surabaya Valentine's Day Celebration “Putus atau Terus” <br>
              Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...
            </p>
          </div>
        </div>
      </div>
    </div>
    <section class="more-events-section">
      <div class="more-events-container">
        <div class="more-events-date-section">
          <div class="more-events-wrapper">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9eee4a4433c5aa9edd3838b6b293dcf4f77d334c5c2ae416679cc83373b1feed?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="More Events Image" class="more-events-image" />
            <div class="more-events-date-wrapper">
              <div class="more-events-month">APR</div>
              <div class="more-events-day">19-21</div>
            </div>
          </div>
        </div>
        <div class="more-events-details">
          <div class="more-event-info">
            <div class="more-event-container">
              <div class="more-events-title-section">
                <div class="more-events-title">
                  <h3 class="more-events-title-heading">YESS Leadership Mission Training VII</h3>
                  <p class="more-events-location">Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</p>
                  <p class="more-events-description">
                    Biarlah semangat misi terus menyala dalam hidup kita. <br>
                    Uis Neno nokan kit, Immanuel! <br>
                    Sampe ketemu di YLMT, basodara dong!
                  </p>
                </div>
              </div>
              <div class="register-now">
                <div class="register-btn-container">
                  <div class="register-btn-wrapper">
                    <div class="register-btn-text">Daftar</div>
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/01cac3dbc82fd7f6575f07d9ed7397898505c51f25963c4a87b4f1bee395eb53?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Register Icon" class="register-btn-icon" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>