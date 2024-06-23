<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Komsel (Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 2px;
            margin-top: 80px;
        }

        .wrapper {
            display: flex;
            padding-bottom: 80px;
            flex-direction: column;
            align-items: center;
        }

        .main-content {
            z-index: 10;
            margin-top: 20px;
            width: 100%;
            max-width: 1244px;
        }

        @media (max-width: 991px) {
            .main-content {
                max-width: 100%;
            }
        }

        .content-card {
            border-radius: 20px;
            border: 1px solid rgba(0, 0, 0, 1);
            background-color: #f4f4f4;
            display: flex;
            width: 100%;
            max-width: 1328px;
            flex-direction: column;
            color: #000;
            padding: 28px 42px;
        }

        @media (max-width: 991px) {
            .content-card {
                max-width: 100%;
                margin-bottom: 40px;
                padding: 0 20px;
            }
        }

        /* Modal */
        .modal-header {
            font: 500 24px/167% Montserrat, sans-serif;
        }

        .modal-body {
            background-color: #f4f4f4;
        }

        .modal-footer {
            background-color: #a2a2a2;
        }

        .modal-atur .table {
            vertical-align: middle;
        }

        .modal-atur th {
            --bs-table-bg: #eeb120;
        }

        /* CSS for save & cancel button */
        .modal .btn-cancel,
        .btn-atur {
            background-color: #ffffff;
            /* White background */
            color: #000000;
            /* Black text color */
            font-family: 'DM Sans', sans-serif;
            font-size: 1.11em;
            font-weight: bold;
            /* Bold weight */
            width: 150px;
            /* Set width to 150px */
        }

        /* Hover effect for cancel & atur button */
        .modal .btn-cancel:hover,
        .btn-atur:hover {
            background-color: #eeeeee;
            /* Light gray background on hover */
        }

        /* CSS for save & ok button */
        .modal .btn-save,
        .btn-ok {
            background-color: #000000;
            /* Black background */
            color: #ffffff;
            /* White text color */
            font-family: 'DM Sans', sans-serif;
            font-size: 1.11em;
            font-weight: bold;
            /* Bold weight */
            width: 150px;
            /* Set width to 150px */
            border-color: #000;
        }

        /* Hover effect for ok button */
        .modal .btn-save:hover,
        .btn-ok:hover {
            background-color: #333333;
            /* Darker gray background on hover */
        }

        .table-main-action {
            background-color: #eeb120;
            font: 400 32px Material Icons, sans-serif;
            width: 100%;
        }

        .action-icon {
            background-color: #eeb120;
            border-color: #eeb120;
            align-items: center;
            justify-content: center;
            font: 32px Material Icons, sans-serif;
        }

        .table-main-action:hover,
        .action-icon:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.admin-navbar')

    <!-- atur modal -->
    <div class="modal modal-lg modal-atur fade" id="aturModal" tabindex="-1" aria-labelledby="aturModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aturModalLabel">Atur Kebaktian & Tempat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <table class="table table-striped table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th>Kebaktian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="kebaktian-table">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="umum" name="umum" value="umum" required>
                                </td>
                                <td>
                                    <button class="action-icon" onclick="deleteKebaktian(this)">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="yess" name="yess" value="yess" required></td>
                                <td>
                                    <button class="action-icon" onclick="deleteKebaktian(this)">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="night" name="night" value="worship night" required></td>
                                <td>
                                    <button class="action-icon" onclick="deleteKebaktian(this)">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="new-kebaktian" name="new-kebaktian"></td>
                                <td>
                                    <button class="action-icon" onclick="addKebaktian()">add</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th>Tempat</th>
                                <th>Alamat Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tempat-table">
                            <tr>
                                <td>
                                    <input type="text" class="form-control" id="ciputra world" name="ciputra world" value="Ciputra World" required>
                                </td>
                                <td>Jl. Siwalankerto 121-131</td>
                                <td>
                                    <button class="action-icon" onclick="deleteTempat(this)">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="pondok tjandra" name="pondok tjandra" value="Pondok Tjandra" required></td>
                                <td>Jl. Siwalankerto 121-131</td>
                                <td>
                                    <button class="action-icon" onclick="deleteTempat(this)">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="dafam" name="dafam" value="Dafam" required></td>
                                <td>Jl. Siwalankerto 121-131</td>
                                <td>
                                    <button class="action-icon" onclick="deleteTempat(this)">delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" id="new-tempat" name="new-tempat"></td>
                                <td><input type="text" class="form-control" id="new-alamat" name="new-alamat"></td>
                                <td>
                                    <button class="action-icon" onclick="addTempat()">add</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container">
        <section class="wrapper">
            <main class="main-content">
                <section class="content-card" id="content-card">
                    <div class="row">
                        <div class="col">
                            <label for="kebaktian" class="form-label">Kebaktian</label>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="tempat" class="form-label">Tempat</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <button type="button" class="btn btn-secondary btn-atur" data-bs-toggle="modal" data-bs-target="#aturModal">ATUR</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <select class="form-select" id="kebaktian">
                                    <option value="" selected disable>Pilih kebaktian</option>
                                    <option value="umum">Umum</option>
                                    <option value="night">Worship Night</option>
                                    <option value="yess">YESS</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <select class="form-select" id="tempat">
                                    <option value="" selected disable>Pilih tempat</option>
                                    <option value="ciputra world">Ciputra World</option>
                                    <option value="dafam">Dafam</option>
                                    <option value="pondok tjandra">Pondok Tjandra</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <button type="button" class="btn btn-primary btn-ok">OK</button>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer>
                <div class="footer-spacer"></div>
                <div class="footer-spacer-secondary"></div>
            </footer>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btnOk = document.querySelector('.btn-ok');

            btnOk.addEventListener('click', function() {
                var tempat = document.getElementById('tempat').value;
                var kebaktian = document.getElementById('kebaktian').value;

                if (tempat && kebaktian) {
                    var url = 'penjadwalan-' + kebaktian + '-admin';
                    window.location.href = url;
                } else {
                    alert('Silakan pilih tempat dan kebaktian!');
                }
            });
        });

        function deleteKebaktian(element) {
            var row = element.closest('tr');
            row.remove();
        }

        function addKebaktian() {
            var table = document.getElementById('kebaktian-table');
            var newKebaktian = document.getElementById('new-kebaktian').value;
            if (newKebaktian) {
                var newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td><input type="text" class="form-control" value="${newKebaktian}" required></td>
                    <td><button class="action-icon" onclick="deleteKebaktian(this)">delete</button></td>
                `;
                table.insertBefore(newRow, table.lastElementChild);
                document.getElementById('new-kebaktian').value = '';
            }
        }

        function deleteTempat(element) {
            var row = element.closest('tr');
            row.remove();
        }

        function addTempat() {
            var table = document.getElementById('tempat-table');
            var newTempat = document.getElementById('new-tempat').value;
            var newAlamat = document.getElementById('new-alamat').value;
            if (newTempat && newAlamat) {
                var newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td><input type="text" class="form-control" value="${newTempat}" required></td>
                    <td>${newAlamat}</td>
                    <td><button class="action-icon" onclick="deleteTempat(this)">delete</button></td>
                `;
                table.insertBefore(newRow, table.lastElementChild);
                document.getElementById('new-tempat').value = '';
                document.getElementById('new-alamat').value = '';
            }
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
