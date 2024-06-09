<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
<style>
body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 1px 0;
}

.container {
  background-color: #fff;
  display: flex;
  width: 100%;
  padding-bottom: 80px;
  flex-direction: column;
}

@media (max-width: 991px) {
  .container {
    max-width: 100%;
  }
}

.header {
  box-shadow: 0px 6px 4px 0px rgba(0, 0, 0, 0.25);
  background-color: #000;
  z-index: 10;
  display: flex;
  width: 100%;
  gap: 20px;
  color: #f5f5f5;
  justify-content: space-between;
  padding: 36px 80px 36px 36px;
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

.logo-text {
  font-family: Montserrat, sans-serif;
  margin-top: 6px;
}

.nav {
  align-self: start;
  display: flex;
  margin-top: 18px;
  gap: 20px;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}

@media (max-width: 991px) {
  .nav {
    max-width: 100%;
    flex-wrap: wrap;
    white-space: initial;
  }
}

.nav-highlight {
  display: flex;
  flex-direction: column;
  color: #eeb120;
  font-weight: 800;
  margin: auto 0;
}

@media (max-width: 991px) {
  .nav-highlight {
    white-space: initial;
  }
}

.nav-item {
  font-family: Montserrat, sans-serif;
  align-self: center;
}

.nav-line {
  border-color: rgba(238, 177, 32, 1);
  border-style: solid;
  border-width: 3px;
  background-color: #eeb120;
  margin-top: 15px;
  height: 3px;
}

.section {
  display: flex;
  width: 100%;
  flex-direction: column;
  margin: 27px 0 174px;
  padding: 0 80px;
}

@media (max-width: 991px) {
  .section {
    max-width: 100%;
    margin-bottom: 40px;
    padding: 0 20px;
  }
}

.breadcrumb {
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .breadcrumb {
    margin-right: 7px;
    flex-wrap: wrap;
  }
}

.breadcrumb-icon {
  background-color: #000;
  border-radius: 50%;
  align-items: center;
  color: #fff;
  white-space: nowrap;
  text-align: center;
  justify-content: center;
  width: 65px;
  height: 65px;
  padding: 0 25px;
  font: 400 40px Material Icons, sans-serif;
}

@media (max-width: 991px) {
.exhibit-title {
    white-space: initial;
    padding: 0 20px;
  }
}

.exhibit-content-title {
  color: #000;
  align-self: start;
  margin-top: 12px;
  flex-grow: 1;
  flex-basis: auto;
  font: 700 60px Kanit, sans-serif;
}

@media (max-width: 991px) {
  .breadcrumb-icon {
    max-width: 100%;
    font-size: 40px;
  }
}

.main-content {
  background-color: #000;
  display: flex;
  margin-top: 26px;
  flex-direction: column;
  padding: 11px 63px 57px;
}

@media (max-width: 991px) {
  .main-content {
    max-width: 100%;
    margin-right: 7px;
    padding: 0 20px;
  }
}

.sub-header {
  display: flex;
  gap: 20px;
}

@media (max-width: 991px) {
  .sub-header {
    max-width: 100%;
    flex-wrap: wrap;
  }
}

.date {
  color: #fff;
  align-self: end;
  margin-top: 21px;
  flex-grow: 1;
  flex-basis: auto;
  font: 600 32px Kanit, sans-serif;
}

.edit-button {
  background-color: #eeb120;
  align-items: start;
  color: #000;
  white-space: nowrap;
  text-align: center;
  justify-content: center;
  padding: 12px 31px;
  font: 400 35px/63% Material Icons, -apple-system, Roboto, Helvetica, sans-serif;
}

@media (max-width: 991px) {
  .edit-button {
    white-space: initial;
    padding: 0 20px;
  }
}

.info-block {
  display: flex;
  margin-top: 57px;
  gap: 17px;
  font-weight: 400;
}

@media (max-width: 991px) {
  .info-block {
    max-width: 100%;
    flex-wrap: wrap;
    margin-top: 40px;
  }
}

.label {
  color: #fff;
  flex-grow: 1;
  margin: auto 0;
  font: 30px Kanit, sans-serif;
}

.value {
  background-color: #fff;
  align-items: start;
  color: #888;
  white-space: nowrap;
  justify-content: center;
  flex-grow: 1;
  width: fit-content;
  padding: 11px 17px;
  font: 18px Kanit, sans-serif;
}

@media (max-width: 991px) {
  .value {
    max-width: 100%;
    padding-right: 20px;
    white-space: initial;
  }
}

.job-roles {
  display: flex;
  margin-top: 40px;
  max-width: 100%;
  gap: 20px;
  font-size: 30px;
  color: #fff;
  font-weight: 400;
}

@media (max-width: 991px) {
  .job-roles {
    flex-wrap: wrap;
  }
}

.job-role {
  font-family: Kanit, sans-serif;
  flex-grow: 1;
  flex-basis: auto;
}

.input-group {
  display: flex;
  margin-top: 25px;
  gap: 20px;
  justify-content: space-between;
}

@media (max-width: 991px) {
  .input-group {
    max-width: 100%;
    flex-wrap: wrap;
  }
}

.input {
  background-color: #fff;
  width: 100%;
  height: 44px;
}

.return-button {
  background-color: #fff;
  width: 100%;
  align-items: start;
  color: #000;
  white-space: nowrap;
  justify-content: center;
  padding: 16px 60px 16px 75px;
}

@media (max-width: 991px) {
  .return-button {
    white-space: initial;
    padding: 0 20px 0 30px;
  }
}

.action-buttons {
  display: flex;
  margin-top: 42px;
  width: 100%;
  gap: 20px;
  font-size: 30px;
  color: #fff;
  font-weight: 400;
  justify-content: space-between;
}

@media (max-width: 991px) {
  .action-buttons {
    flex-wrap: wrap;
    margin-top: 40px;
  }
}

.section-title {
  display: flex;
  gap: 20px;
  justify-content: space-between;
  flex-wrap: wrap;
}

@media (max-width: 991px) {
  .section-title {
    max-width: 100%;
    margin-right: 2px;
  }
}

.return-container {
  background-color: #fff;
  align-self: end;
  width: 100%;
  height: 44px;
}

.main-button {
  background-color: #eeb120;
  align-self: center;
  margin-top: 74px;
  width: 321px;
  max-width: 100%;
  align-items: center;
  color: #fff;
  white-space: nowrap;
  letter-spacing: 2px;
  justify-content: center;
  padding: 23px 60px;
  font: 700 20px/120% DM Sans, sans-serif;
}

@media (max-width: 991px) {
  .main-button {
    margin-top: 40px;
    white-space: initial;
    padding: 0 20px;
  }
}
</style>
</head>
<body>

<div class="container">
  <header class="header">
    <div class="logo-container">
      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ea70bf3cf3b7e9699c799d874034d07d6142067effe5e2fe8d61eed42517eff5?apiKey=f9ed83d6b13f4286938197498a891b31&" alt="Church logo" class="logo" />
      <div class="logo-text">BEST CHURCH</div>
    </div>
    <nav class="nav">
      <div class="nav-highlight">
        <div class="nav-item">Home</div>
        <div class="nav-line"></div>
      </div>
      <div class="nav-item">Daftar <br /> Pelayanan</div>
      <div class="nav-item">KomSel</div>
      <div class="nav-item">Bareng</div>
      <div class="nav-item">Event</div>
      <div class="nav-item">Penjadwalan</div>
      <div class="nav-item">List <br /> Jemaat</div>
      <div class="nav-item">Analisis</div>
    </nav>
  </header>
  <section class="section">
    <div class="breadcrumb">
      <div class="breadcrumb-icon">keyboard_arrow_left</div>
      <div class="exhibit-content-title">Pelayanan Umum - Ciputra World</div>
    </div>
    <div class="main-content">
      <div class="sub-header">
        <div class="date">Minggu, 7 April 2024</div>
        <div class="edit-button">mode_edit</div>
      </div>
      <div class="info-block">
        <div class="label">Topik :</div>
        <div class="value">Topik</div>
      </div>
      <div class="info-block">
        <div class="label">Pendeta :</div>
        <div class="value">Pendeta</div>
      </div>
      <div class="job-roles">
        <div class="job-role">Pemain Musik</div>
        <div class="job-role">Kameramen</div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="return-button">Nama</div>
      <div class="action-buttons">
        <div class="job-role">Worship Leader</div>
        <div class="job-role">Multimedia</div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="action-buttons">
        <div class="job-role">Singer</div>
        <div class="job-role">Usher</div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="input-group">
        <div class="input"></div>
        <div class="input"></div>
      </div>
      <div class="return-container"></div>
      <div class="return-container"></div>
      <div class="main-button">KEMBALI</div>
    </div>
  </section>
</div>

<!-- Material Icons CDN -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
