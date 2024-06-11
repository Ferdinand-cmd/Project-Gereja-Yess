<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Row and Col Example</title>
  <!-- Link to Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .col-proportional {
      flex: 1 0 auto;
      word-wrap: break-word;
      white-space: normal;
    }
  </style>
</head>
<body>

<div class="container mt-4">
  <!-- Elemen di atas dengan width: 100% -->
  <div class="row">
    <div class="col-12" style="background-color: lightblue;">
      Elemen dengan width 100%
    </div>
  </div>
  <!-- Row dengan dua kolom -->
  <div class="row" style="background-color: lightgray;">
    <div class="col d-flex flex-wrap p-2" style="width: 100%;">
      <div class="col-proportional bg-primary text-white m-2 p-2">
        Kolom 1 dengan teks yang cukup panjang agar bisa turun ke baris berikutnya jika diperlukan.
      </div>
      <div class="col-proportional bg-secondary text-white m-2 p-2">
        Kolom 2 dengan teks yang lebih panjang lagi agar bisa turun ke baris berikutnya jika diperlukan. Ini untuk memastikan bahwa pengaturan flexbox dan CSS kita bekerja dengan baik.
      </div>
    </div>
  </div>
</div>

<!-- Link to Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
