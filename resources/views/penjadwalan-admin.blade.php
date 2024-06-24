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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    <!-- Tabel untuk kebaktian -->
                    <table class="table table-striped table-bordered border-secondary">
                        <thead>
                            <tr>
                                <th>Jenis Kebaktian</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="kebaktian-table">
                            <!-- Iterasi kebaktian dari database -->
                            @foreach($kebaktians as $kebaktian)
                            <tr>
                                <td contenteditable="true" data-id="{{ $kebaktian->id }}" class="editable-field">{{ $kebaktian->jenis }}</td>
                                <td>
                                    <button type="button" class="action-icon" onclick="deleteKebaktian(this)">delete</button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Baris untuk menambah kebaktian baru -->
                            <tr id="newRow">
                                <td>
                                    <form id="addKebaktianForm" onsubmit="addNewKebaktian(event)">
                                        @csrf
                                        <input type="text" class="form-control" id="new-kebaktian" name="new-kebaktian" placeholder="Tambah kebaktian baru" required>
                                </td>
                                <td>
                                    <button type="submit" class="action-icon">add</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tabel untuk tempat -->
                    <table class="table table-striped table-bordered border-secondary mt-4">
                        <thead>
                            <tr>
                                <th>Tempat</th>
                                <th>Alamat Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tempat-table">
                            @foreach($tempats as $tempat)
                            <tr>
                                <td contenteditable="true" data-id="{{ $tempat->id }}" class="editable-field">{{ $tempat->tempat }}</td>
                                <td contenteditable="true" data-id="{{ $tempat->id }}" class="editable-field">{{ $tempat->alamat }}</td>
                                <td>
                                    <button type="button" class="action-icon" onclick="deleteTempat(this)">delete</button>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Baris untuk menambah tempat baru -->
                            <tr id="newTempatRow">
                                <td>
                                    <form id="addTempatForm" onsubmit="addTempat(event)">
                                        @csrf
                                        <input type="text" class="form-control" id="new-tempat" name="new-tempat" placeholder="Tambah tempat baru" required>
                                </td>
                                <td>
                                    <input type="text" class="form-control" id="new-alamat" name="new-alamat" placeholder="Tambah alamat baru" required>
                                </td>
                                <td>
                                    <button type="submit" class="action-icon">add</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-cancel" data-bs-dismiss="modal">CANCEL</button>
                    <button type="button" class="btn btn-primary btn-save" data-bs-dismiss="modal" onclick="saveState()">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="container">
        <section class="wrapper">
            <main class="main-content">
                <section class="content-card" id="content-card">
                    <div class="row mt-3 justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary btn-atur" data-bs-toggle="modal" data-bs-target="#aturModal">ATUR</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="kebaktian" class="form-label">Kebaktian</label>
                            <div class="mb-3">
                                <select class="form-select" id="kebaktian">
                                    <option value="" selected disabled>Pilih kebaktian</option>
                                    @foreach($kebaktians as $kebaktian)
                                        <option value="{{ $kebaktian->jenis }}">{{ $kebaktian->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>  
                        </div>
                        <div class="col">
                            <label for="tempat" class="form-label">Tempat</label>
                            <div class="mb-3">
                                <select class="form-select" id="tempat">
                                    <option value="" selected disabled>Pilih tempat</option>
                                    @foreach($tempats as $tempat)
                                        <option value="{{ $tempat->id }}">{{ $tempat->tempat }}</option>
                                    @endforeach
                                </select>
                            </div> 
                        </div>
                        <div class="col">
                            <label for="tema" class="form-label">Tema</label>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="tema">
                            </div>
                        </div>
                        <div class="col">
                            <label for="tanggal" class="form-label">Tanggal</label>
                            <div class="mb-3">
                                <input type="date" class="form-control" id="tanggal">
                            </div>
                        </div>
                        <div class="col">
                            <label for="jam" class="form-label">Jam</label>
                            <div class="mb-3">
                                <input type="time" class="form-control" id="jam">
                            </div>
                        </div>
                        <div class="col">
                            <label for="pembicara" class="form-label">Pembicara</label>
                            <div class="mb-3">
                                <select class="form-select" id="pembicara">
                                    <option value="" selected disabled>Pilih pembicara</option>
                                    <!-- Loop through pendeta data -->
                                    @foreach($pendetas as $pendeta)
                                        <option value="{{ $pendeta->id }}">{{ $pendeta->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                        <label for="pelayanan" class="form-label">Pelayanan</label>
                            <table class="table table-bordered table-striped" style="border: 1px solid #dee2e6;">
                                <thead>
                                    <tr>
                                        <th class="text-center align-middle" style="background-color: #000; color: #ffffff;">Jenis Pelayanan</th>
                                        <th class="text-center align-middle" style="background-color: #000; color: #ffffff;">Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center align-middle">Pemain Musik - Gitar</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Pemain Musik - Bass</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Pemain Musik - Piano</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Pemain Musik - Drum</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Worship Leader</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Singer</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Kameramen</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Multimedia</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Usher</td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle"></td>
                                        <td class="text-center align-middle">
                                            <button type="button" class="btn btn-primary btn-ok">Generate</button>
                                        </td>                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-end">
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary btn-ok">OK</button>
                        </div>
                    </div>
                </section>
            </main>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            console.log("Document is ready!");

            // Tangani klik tombol "SUBMIT"
            $('.btn-save').click(function() {
                console.log("Submit button clicked!");

                // Panggil fungsi untuk menyimpan state
                saveState();
            });
        });

        // Fungsi untuk menambah kebaktian baru
        function addNewKebaktian(event) {
            event.preventDefault(); // Prevent default form submission
            
            // Get the value from the input field
            var newKebaktian = document.getElementById('new-kebaktian').value;
            
            if (newKebaktian === '') {
                return; // Do not add empty input
            }
            
            // Create new row HTML
            var newRow = '<tr><td contenteditable="true" class="editable-field">' + newKebaktian + '</td>' +
                        '<td><button type="button" class="action-icon" onclick="deleteKebaktian(this)">delete</button></td></tr>';
            
            // Insert new row above the last row (above the form row)
            var lastRowIndex = document.getElementById('newRow').rowIndex;
            document.getElementById('kebaktian-table').insertRow(lastRowIndex - 1).innerHTML = newRow;
            
            // Clear the input field after adding
            document.getElementById('new-kebaktian').value = '';
        }

        // Fungsi untuk menandai baris kebaktian untuk dihapus
        function deleteKebaktian(button) {
            var row = button.parentNode.parentNode;
            var id = row.querySelector('.editable-field').dataset.id;

            // Hapus baris dari tampilan (front-end)
            row.style.display = 'none';

            // Tandai untuk dihapus dari database dengan menyimpan ID
            row.classList.add('to-delete');

            // Jika ada id, hapus dari database
            if (id) {
                $.ajax({
                    url: '/penjadwalan-admin/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(result) {
                        console.log('Deleted:', result);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            }
        }

        function addTempat(event) {
            event.preventDefault(); // Prevent default form submission

            // Get the values from the input fields
            var newTempat = document.getElementById('new-tempat').value;
            var newAlamat = document.getElementById('new-alamat').value;

            if (newTempat === '' || newAlamat === '') {
                return; // Do not add empty input
            }

            // Prepare the data to be sent
            var data = {
                _token: '{{ csrf_token() }}',
                tempat: newTempat,
                alamat: newAlamat
            };

            console.log('Data to be sent:', data); // Log the data

            // Send the data to the server using AJAX
            $.ajax({
                url: '{{ route('penjadwalan-admin.store') }}',
                method: 'POST',
                data: JSON.stringify(data),
                contentType: 'application/json',
                success: function(response) {
                    console.log('Response from server:', response); // Log the response
                    // Create new row HTML
                    var newRow = '<tr><td contenteditable="true" class="editable-field">' + newTempat + '</td>' +
                                '<td contenteditable="true" class="editable-field">' + newAlamat + '</td>' +
                                '<td><button type="button" class="action-icon" onclick="deleteTempat(this)">delete</button></td></tr>';

                    // Insert new row above the last row (above the form row)
                    var lastRowIndex = document.getElementById('newTempatRow').rowIndex;
                    document.getElementById('tempat-table').insertRow(lastRowIndex - 1).innerHTML = newRow;

                    // Clear the input fields after adding
                    document.getElementById('new-tempat').value = '';
                    document.getElementById('new-alamat').value = '';
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        // Fungsi untuk menandai baris tempat untuk dihapus
        function deleteTempat(button) {
            var row = button.parentNode.parentNode;
            var id = row.querySelector('.editable-field').dataset.id;

            // Hapus baris dari tampilan (front-end)
            row.style.display = 'none';

            // Tandai untuk dihapus dari database dengan menyimpan ID
            row.classList.add('to-delete');

            // Jika ada id, hapus dari database
            if (id) {
                $.ajax({
                    url: '/penjadwalan-admin/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(result) {
                        console.log('Deleted:', result);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            }
        }

        function saveState() {
            var kebaktians = [];
            var tempats = [];
            var toDeleteKebaktian = [];
            var toDeleteTempat = [];

            // Ambil semua baris kebaktian dari tabel kecuali baris terakhir (newRow)
            $('#kebaktian-table tr').not('#newRow').each(function() {
                var jenis = $(this).find('.editable-field').text().trim();
                var id = $(this).find('.editable-field').data('id');
                if (jenis) {
                    kebaktians.push({ id: id, jenis: jenis });
                }
            });

            // Ambil semua baris tempat dari tabel kecuali baris terakhir (newTempatRow)
            $('#tempat-table tr').not('#newTempatRow').each(function() {
                var tempat = $(this).find('.editable-field').eq(0).text().trim();
                var alamat = $(this).find('.editable-field').eq(1).text().trim();
                var id = $(this).find('.editable-field').data('id');
                if (tempat && alamat) {
                    tempats.push({ id: id, tempat: tempat, alamat: alamat });
                }
            });

            // Ambil semua baris yang ditandai untuk dihapus dari kebaktian
            $('#kebaktian-table tr.to-delete').each(function() {
                var id = $(this).find('.editable-field').data('id');
                if (id) {
                    toDeleteKebaktian.push(id);
                }
            });

            // Ambil semua baris yang ditandai untuk dihapus dari tempat
            $('#tempat-table tr.to-delete').each(function() {
                var id = $(this).find('.editable-field').data('id');
                if (id) {
                    toDeleteTempat.push(id);
                }
            });

            console.log("Kebaktians data:", kebaktians);
            console.log("Tempats data:", tempats);
            console.log("To delete Kebaktians IDs:", toDeleteKebaktian);
            console.log("To delete Tempats IDs:", toDeleteTempat);

            // Kirim data ke server via AJAX untuk menyimpan ke basis data
            $.ajax({
                url: '{{ route('penjadwalan-admin.store') }}',
                method: 'POST',
                contentType: 'application/json',
                dataType: 'json',
                data: JSON.stringify({ 
                    kebaktians: kebaktians, 
                    tempats: tempats,
                    toDeleteKebaktian: toDeleteKebaktian, 
                    toDeleteTempat: toDeleteTempat, 
                    _token: '{{ csrf_token() }}' 
                }),
                success: function(response) {
                    console.log('Success:', response);
                    // Hapus baris yang ditandai setelah data disimpan
                    $('#kebaktian-table').find('.to-delete').remove();
                    $('#tempat-table').find('.to-delete').remove();
                    // Tutup modal jika diperlukan
                    $('#aturModal').modal('hide');
                    // Tetap refresh halaman setelah perubahan berhasil
                    location.reload();
                },
                error: function(error) {
                    console.error('Error:', error);
                    // Tetap refresh halaman meskipun terjadi error
                    location.reload();
                }
            });
        }


    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
