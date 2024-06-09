<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<head>
<style>
  .form-container {
    background-color: #f4f4f4;
    display: flex;
    max-width: 738px;
    padding: 36px 28px;
    flex-direction: column;
  }

  .form-header {
    color: #000;
    align-self: start;
    margin-left: 66px;
    font: 500 24px/167% Montserrat, sans-serif;
  }

  @media (max-width: 991px) {
    .form-header {
      margin-left: 10px;
    }
  }

  .separator {
    box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25) inset;
    border: 1px solid #fff;
    background-color: #fff;
    min-height: 1px;
    margin-top: 28px;
    width: 100%;
  }

  @media (max-width: 991px) {
    .separator {
      max-width: 100%;
    }
  }

  .form-content {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.25);
    background-color: #fff;
    z-index: 10;
    display: flex;
    width: 100%;
    padding: 35px 68px 0;
    flex-direction: column;
  }

  @media (max-width: 991px) {
    .form-content {
      padding: 35px 20px 0;
      max-width: 100%;
    }
  }

  .form-title {
    color: #000;
    font: 500 22px/182% Montserrat, sans-serif;
  }

  @media (max-width: 991px) {
    .form-title {
      max-width: 100%;
    }
  }

  .field-group {
    border-radius: 20px;
    background-color: #d9d9d9;
    display: flex;
    margin-top: 12px;
    flex-direction: column;
    align-items: start;
    font-weight: 400;
    padding: 16px 80px 16px 38px;
  }

  @media (max-width: 991px) {
    .field-group {
      padding: 16px 20px;
      max-width: 100%;
    }
  }

  .field {
    display: flex;
    width: 329px;
    max-width: 100%;
    gap: 20px;
    white-space: nowrap;
    align-items: center;
  }

  .field-quantity {
    background-color: #fff;
    color: #888;
    justify-content: center;
    padding: 13px 20px;
    font: 18px Kanit, sans-serif;
  }

  .field-label {
    color: #000;
    flex-grow: 1;
    font: 20px Kanit, sans-serif;
  }

  .buttons-container {
    background-color: #a2a2a2;
    display: flex;
    margin-top: 40px;
    gap: 20px;
    font-size: 20px;
    color: #000;
    font-weight: 700;
    white-space: nowrap;
    line-height: 120%;
    padding: 22px 80px 22px 80px;
  }

  @media (max-width: 991px) {
    .buttons-container {
      flex-wrap: wrap;
      padding: 22px 20px;
      white-space: initial;
    }
  }

  .button-cancel,
  .button-generate {
    font-family: DM Sans, sans-serif;
    border: 1px solid #;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 21px 34px;
    letter-spacing: 1.6px;
  }

  .button-cancel {
    background-color: #e5e5e5;
  }

  .button-generate {
    background-color: #52ff00;
    letter-spacing: 2px;
  }

  @media (max-width: 991px) {
    .button-cancel,
    .button-generate {
      padding: 21px 20px;
      white-space: initial;
    }
  }
</style>
</head>
<body>
<!-- <section class="form-container">
  <header class="form-header">Form Kebutuhan &gt; 7 April 2024</header>
  <div class="separator"></div>
  <article class="form-content">
    <h2 class="form-title">Jumlah kebutuhan pelayanan</h2>
    <div class="field-group">
      <div class="field">
        <div class="field-quantity">Jumlah</div>
        <p class="field-label">Usher</p>
      </div>
      <div class="field">
        <div class="field-quantity">Jumlah</div>
        <p class="field-label">Workship Leader</p>
      </div>
      <div class="field">
        <div class="field-quantity">Jumlah</div>
        <p class="field-label">Singer</p>
      </div>
    </div>
  </article>
  <div class="separator"></div>
  <footer class="buttons-container">
    <button class="button-cancel">CANCEL</button>
    <button class="button-generate">GENERATE</button>
  </footer>
</section> -->

<div class="row g-3 align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
  </div>
  <div class="col-auto">
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="col-auto">
    <span id="passwordHelpInline" class="form-text">
      Must be 8-20 characters long.
    </span>
  </div>
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
