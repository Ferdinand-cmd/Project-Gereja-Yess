<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Share&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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

        /* Navbar styles */
        .nav-item.active .nav-link,
        .nav-item:hover .nav-link {
            color: orange !important;
            border-bottom: 2px solid orange;
        }

        .dropdown-item:focus,
        .dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            color: orange !important;
            background-color: transparent !important;
        }

        .dropdown-menu a.dropdown-item:hover {
            color: orange !important;
            background-color: transparent !important;
        }

        /* Content */
        .container {
            margin-top: 100px;
        }

        /* Table styles */
        * {
            font-family: sans-serif;
        }

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #000;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #000;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #000;
        }

        .btn-add {
            border: 1px solid #000;
            background-color: #000;
            color: #fff;
            text-align: center;
            padding: 21px 60px;
            font-size: 24px;
            font-weight: 600;
            align-self: center;
            white-space: nowrap;
            margin-top: 31px;
            margin-bottom: 31px;
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

        /* CSS for cancel button */
        .modal .btn-cancel {
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

        /* Hover effect for cancel button & status container */
        .modal .btn-cancel:hover,
        .status-container:hover {
            background-color: #eeeeee;
            /* Light gray background on hover */
        }

        /* CSS for book & submit button */
        .modal .btn-save {
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

        /* Hover effect for save button */
        .btn-save:hover {
            background-color: #333333;
            /* Darker gray background on hover */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.admin-navbar')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1 id="mainTitle">Daftar Pendeta BEST Surabaya</h1>
            <div>
                <button class="btn btn-warning" id="toggleToPendeta">Pendeta</button>
                <button class="btn btn-secondary" id="toggleToJemaat">Jemaat</button>
            </div>
        </div>
        <div id="jemaatTable" style="display: none;">
            <h1></h1>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Gender</th>
                        <th>Tanggal Lahir</th>
                        <th>No. HP/Whatsapp</th>
                        <th>Kecamatan</th>
                        <th>Email</th>
                        <th>Komunitas</th>
                        <th>Status keanggotaan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Felita Lysandra</td>
                        <td>P</td>
                        <td>10 Februari 2003</td>
                        <td>089684753450</td>
                        <td>Tambaksari</td>
                        <td>felita@gmail.com</td>
                        <td>YESS</td>
                        <td>Aktif</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="pendetaTable">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>No. HP/Whatsapp</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pdt. Pendeta satu</td>
                        <td>0896754561</td>
                        <td>pendeta1@gmail.com</td>
                        <td>Gembala Surabaya</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn-add" tabindex="0" data-bs-toggle="modal" data-bs-target="#addModal">ADD</button>
        </div>
    </div>

    <!-- Modal add pendeta -->
    <div class="modal modal-add fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">ADD PENDETA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Your content here -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="wa" class="form-label">WA</label>
                        <input type="text" class="form-control" id="wa" name="wa" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <input type="text" class="form-control" id="role" name="role" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-secondary btn-save">SAVE</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/home.js') }}"></script>
    <script>
        document.getElementById('toggleToPendeta').addEventListener('click', function() {
            document.getElementById('jemaatTable').style.display = 'none';
            document.getElementById('pendetaTable').style.display = 'block';
            document.getElementById('mainTitle').textContent = 'Daftar Pendeta BEST Surabaya';
            this.classList.remove('btn-secondary');
            this.classList.add('btn-warning');
            document.getElementById('toggleToJemaat').classList.remove('btn-warning');
            document.getElementById('toggleToJemaat').classList.add('btn-secondary');
        });

        document.getElementById('toggleToJemaat').addEventListener('click', function() {
            document.getElementById('pendetaTable').style.display = 'none';
            document.getElementById('jemaatTable').style.display = 'block';
            document.getElementById('mainTitle').textContent = 'Daftar Jemaat BEST Surabaya';
            this.classList.remove('btn-secondary');
            this.classList.add('btn-warning');
            document.getElementById('toggleToPendeta').classList.remove('btn-warning');
            document.getElementById('toggleToPendeta').classList.add('btn-secondary');
        });
    </script>
</body>

</html>
