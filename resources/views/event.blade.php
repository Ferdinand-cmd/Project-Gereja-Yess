<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YESS.SUB | Event</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:wght@600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500;700&display=swap">
    <style>
        :root {
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC", "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei", "Source Han Sans CN", sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: var(--default-font-family);
        }

        .main-container {
            padding: 20px;
            max-width: 1440px;
            margin: 0 auto;
            box-sizing: border-box;
        }

        .event-header-container {
            display: flex;
            /* Enable flexbox layout */
            align-items: center;
            /* Align items vertically */
            margin-top: 70px;
            /* Adjust the top margin to match the height of the navbar */
            flex-wrap: wrap;
        }

        .event-header {
            font-family: 'Kanit', sans-serif;
            /* Set font family */
            text-align: left;
            /* Align text to left */
            font-size: 3em;
            /* Set font size to 3em */
            color: black;
            /* Set color to black */
            font-weight: bold;
            /* Set font weight to bold */
            margin-right: 20px;
            /* Add right margin to create some distance */
            min-width: 250px;
        }

        .header-text {
            flex: 1;
            /* Take up remaining space */
        }

        /* Dropdown */

        .dropdown {
            margin-left: 10px;
            /* Add some left margin */
        }

        .custom-dropdown-button {
            font-family: 'DM Sans', sans-serif;
            font-weight: 500;
            font-size: 1em;
            background-color: #EEB120;
            /* Set background color to EEB120 */
            border-color: #EEB120;
            /* Set border color to match background color */
            color: black;
            padding: 10px 20px;
            /* Adjust padding for more space around the text */
            min-width: 120px;
            /* Set a minimum width to ensure button visibility */
        }

        .custom-dropdown-button:hover {
            background-color: #d4a100;
            /* Change background color on hover */
            border-color: #d4a100;
            /* Change border color on hover */
        }

        .custom-dropdown-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(238, 177, 32, 0.5);
            /* Add focus style */
        }

        .event-subheader-container {
            position: relative;
            width: max-content; /* Changed width to 'max-content' for better responsiveness */
            font-family: Open Sans Hebrew, var(--default-font-family);
            font-size: 24px; /* Adjusted font size for better readability */
            font-weight: 300;
            line-height: 50px; /* Adjusted line height for better spacing */
            text-align: left;
            white-space: nowrap;
            letter-spacing: 1.8px;
            margin-top: 10px; /* Adjusted margin for better spacing */
        }

        .event-subheader,
        .text-a {
            color: #000000;
            font-family: Open Sans Hebrew, var(--default-font-family);
            font-size: 24px; /* Adjusted font size for better readability */
            font-weight: 300;
            line-height: 50px; /* Adjusted line height for better spacing */
            text-align: left;
            letter-spacing: 1.8px; /* Adjusted letter spacing for better readability */
        }

        .text-a {
            margin-left: 10px; /* Adjusted margin-left for better spacing between text and arrow */
        }

        .event-container {
            display: flex;
            flex-direction: column;
            gap: 30px; /* Jarak antara event */
            position: relative; /* Tambahkan position relative untuk event card */
        }

        .event-card {
            display: flex;
            gap: 20px; /* Jarak antara gambar dan detail event */
            background-color: #f3f3f3;
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);
            cursor: pointer;
            margin: 20px;
        }

        .event-card:hover:not(.event-card:hover .register-button) {
            background-color: #e1e1e1;
            /* Change background color on hover */
        }

        .event-image-container {
            text-align: center;
            position: relative;
            width: 340px;
            height: 242px;
            margin: 20px;
        }

        .date-container {
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        .event-date {
            width: 100px;
            height: 60px;
            background: rgba(0, 0, 0, 0.25);
            font-size: 0px;
        }

        .month, .day {
            display: block;
            color: #f4f4f4;
            font-family: Roboto, var(--default-font-family);
            font-weight: 900;
            text-align: left;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            z-index: 2;
        }

        .month {
            font-size: 16px;
            line-height: 18.75px;
            margin: 7px 0 0 32px;
            letter-spacing: 1.6px;
        }

        .day {
            font-size: 32px;
            line-height: 37.5px;
            margin: -5px 0 0 6px;
            z-index: 1;
            text-align: center;
        }

        .event-details {
            flex: 1; /* Agar detail event mengambil sisa ruang */
            padding: 20px; /* Atur padding untuk memberikan ruang di sekitar detail event */
            position: relative; /* Needed to position the button absolutely within this container */
        }

        .event-title {
            font-family: Kanit, var(--default-font-family);
            font-weight: 600;
            font-size: 36px;
            line-height: 53.82px;
        }

        .event-info {
            font-family: Roboto, var(--default-font-family);
            font-weight: 700;
            font-size: 20px;
            line-height: 23px;
        }
        .event-description {
            font-family: Roboto, var(--default-font-family);
            font-weight: 400;
            font-size: 20px;
            line-height: 23.438px;
            letter-spacing: 0.4px;
            color: #646464;
            margin-bottom: 50px; /* Add some margin to the bottom to ensure space */
        }
        .register-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 16px 24px;
            background: #eeb120;
            border: none;
            border-radius: 40px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1em;
            font-weight: 500;
            color: #fff;
            cursor: pointer;
        }
        /* Modal */
        .modal-dialog {
            max-width: 90%;
            /* Set initial max-width to 90% of the viewport width */
            width: auto;
            /* Allow modal to expand based on content */
        }

        /* Set max-width for larger screens */
        @media (min-width: 1200px) {
            .modal-dialog {
                max-width: 982px;
                /* Set max-width to 982px for screens wider than 1200px */
            }
        }

        .form-label-daftar {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.11em;
            font-weight: normal;
            /* Regular weight */
        }

        .form-label-alergi,
        .form-label-informasi {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.33em;
            font-weight: medium;
        }

        .modal-body small {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.11em;
            font-weight: medium;
            color: #6D6D6D;
        }

        .modal-body img {
            max-width: 100%;
            /* Ensure the image does not exceed the modal's width */
            height: auto;
            /* Maintain the aspect ratio of the image */
        }

        .image-container {
            position: relative;
            /* Set position to relative */
        }

        .image-text-container {
            position: absolute;
            /* Set position to absolute */
            top: 50%;
            /* Align to the vertical center */
            left: 50%;
            /* Align to the horizontal center */
            transform: translate(-50%, -50%);
            /* Center the text */
            text-align: center;
            /* Center align the text */
            width: 90%;
            /* Set the width to 80% of its container */
        }

        .image-text-1 {
            font-family: 'Roboto Slab', serif;
            /* Use Roboto Slab font */
            font-weight: bold;
            font-size: 1.77em;
            color: white;
            width: 100%;
            /* Set the width to 100% */
            margin: 0 auto;
            /* Center the element horizontally */
            text-align: center;
            /* Center the text horizontally */
            display: flex;
            /* Use flexbox */
            justify-content: center;
            /* Center the content horizontally */
            align-items: center;
            /* Center the content vertically */
            padding: 20px;
            /* Increase padding to provide more space around the text */
            box-sizing: border-box;
            /* Include padding in the width calculation */
        }

        .image-text-2 {
            font-family: 'Inter', sans-serif;
            font-size: 0.83em;
            color: white;
        }

        .image-container img {
            width: 100%;
            /* Ensure the image fills its container */
            height: auto;
            /* Maintain aspect ratio */
        }

        .modal-footer {
            background-color: #a2a2a2;
        }

        /* CSS for cancel button */
        .btn-cancel {
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

        /* Hover effect for cancel button */
        .btn-cancel:hover {
            background-color: #eeeeee;
            /* Light gray background on hover */
        }

        /* CSS for submit button */
        .btn-submit {
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
        }

        /* Hover effect for submit button */
        .btn-submit:hover {
            background-color: #333333;
            /* Darker gray background on hover */
        }

        @media (max-width: 768px) {
            .event-header-container {
                flex-direction: column;
                text-align: center;
            }

            .event-header {
                text-align: center;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="main-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="z-index: 1000;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <div class="brand-text">
                        <img src="img/logo_putih.png" alt="" style="width: 20%; margin-left: 10px;">
                        <div class="lora-font">BEST CHURCH</div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" style="text-align:center;" id="navbarNav">
                    <ul class="navbar-nav" style="margin-bottom:10px;">
                        <li class="nav-item">
                            <a class="nav-link active" href="/admin">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pelayanan-admin">Pelayanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">KomSel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Bareng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/event-admin">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Penjadwalan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">Analisis</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Admin, {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/">Switch to User View</a></li>
                                    <li>
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="event-header-container">
            <div class="event-header">
                <div class="header-text">Upcoming Events</div>
            </div>
            <!-- Dropdown for event filtering -->
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle custom-dropdown-button" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Button for the dropdown text that will be replaced by the js method
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#" id="upcoming">Upcoming</a></li>
                    <li><a class="dropdown-item" href="#" id="archived">Archived</a></li>
                </ul>
            </div>
        </div>
        <div class="event-subheader-container">
            <span class="event-subheader">What's coming up at YESS Surabaya </span>
            <span class="text-a">>>></span>
        </div>

        <div class="event-container">
            <div class="event-card" event-id="1">
                <div class="event-image-container">
                    <img src="img/event-photo1.png" alt="Event Photo 1">
                    <div class="date-container">
                        <div class="event-date">
                            <span class="month">MAR</span><span class="day">30</span>
                        </div>
                    </div>
                </div>
                <div class="event-details">
                    <h2 class="event-title">Putus atau Terus</h2>
                    <p class="event-info">Ciputra World Mall 2nd floor | 30 Maret 2024 | 16.30 WIB</p>
                    <p class="event-description">YESS Surabaya Valentine's Day Celebration “Putus atau Terus”<br />Ini adalah kesempatan untuk terinspirasi sebagai pasangan! juga merupakan PENGALAMAN YANG HEBAT bagi kamu ya...</p>
                </div>
            </div>
            <div class="event-card" event-id="2">
                <div class="event-image-container">
                    <img src="img/event-photo2.png" alt="Event Photo 2">
                    <div class="date-container">
                        <div class="event-date">
                            <span class="month">APR</span><span class="day">19-21</span>
                        </div>
                    </div>
                </div>
                <div class="event-details">
                    <h2 class="event-title">YESS Leadership Mission Training VII</h2>
                    <p class="event-info">Desa Birkium, Soe, Nusa Tenggara Timur | 19-21 April 2024</p>
                    <p class="event-description">Biarlah semangat misi terus menyala dalam hidup kita.<br />Uis Neno nokan kit, Immanuel!<br />Sampe ketemu di YLMT, basodara dong!</p>
                    <button class="register-button" data-bs-toggle="modal" data-bs-target="#daftarModal" onclick="openFormModal()">
                        Daftar
                        <span class="material-icons">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="daftarModal" tabindex="-1"
            aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-custom-width">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title modal-event-title" id="formModalLabel">YESS Leardership Mission Training VII
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form content goes here -->
                        <label for="daftar" class="form-label form-label-daftar">Bagi jemaat yang ingin
                            mendaftar dalam event YESS Surabaya silahkan mengisi form pendaftaran event dibawah ini.</label>
                        <!-- Alergi Anda -->
                        <div class="mb-3">
                            <label for="alergi" class="form-label form-label-alergi">Alergi Anda (jika
                                tidak punya, isi "-")</label>
                            <textarea class="form-control" id="alergi" rows="3"
                                placeholder="Masukkan alergi Anda jika ada"></textarea>
                        </div>
                        <!-- Informasi keluarga yang dapat dihubungi -->
                        <div class="mb-3">
                            <label for="informasi" class="form-label form-label-informasi">Informasi
                                keluarga yang dapat dihubungi</label>
                            <textarea class="form-control" id="informasi" rows="3"
                                placeholder="Masukkan nama dan nomor telepon keluarga yang dapat dihubungi"></textarea>
                            <small>*sertakan nama dan nomor telepon aktif</small>
                        </div>
                        <div class="image-container">
                            <div class="image-text-container">
                                <p class="image-text-1">Cari circle rohani yang sehat dan bikin semangat?</p>
                                <p class="image-text-2">YUK SINI MERAPAT!</p>
                            </div>
                            <img src="img/form.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-submit">Submit</button>
                        <!-- You can include additional buttons or actions here -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid" style="background-color: black; color: white; border-radius: 30px 30px 0 0;">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-start">
                    <img src="img/ig.png" alt="Instagram">
                    <img src="img/tiktok.png" alt="TikTok">
                    <img src="img/yt.png" alt="YouTube">
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <span style="font-family: 'Roboto', sans-serif; font-size: 20px; margin-top: 20px;">Contact Us</span>
                    <img src="img/wa.png" alt="WhatsApp">
                </div>
            </div>
        </div>
    </div>
    <script>
        // Function to redirect to the event detail page
        function redirectToEventDetail(eventId) {
            // Construct the URL for the event detail page using the eventId
            var eventDetailURL = "event-detail.blade.php?id=" + eventId;

            // Redirect the user to the event detail page
            window.location.href = eventDetailURL;
        }

        // Function to handle register button click
        function openFormModal() {
            event.stopPropagation(); // Stop event propagation to prevent opening detail events
        }

        // Function to attach event listeners to event elements
        function attachEventListeners() {
            // Add event listener to all elements with class 'event'
            document.querySelectorAll('.event-card').forEach(event => {
                event.addEventListener('click', function() {
                    // Retrieve the event-id from the clicked event element
                    var eventId = this.getAttribute('event-id');

                    // Redirect to the event detail page
                    redirectToEventDetail(eventId);
                });
            });
        }

        // Call attachEventListeners initially
        attachEventListeners();

        // Set the initial button text to "Upcoming"
        document.getElementById("dropdownMenuButton").innerText = "Upcoming";

        // Set the "Upcoming" option as selected by default when the page loads
        window.onload = function() {
            document.getElementById("upcoming").classList.add("active");
            // Set the initial selectedDropdown value to "upcoming"
            var selectedDropdown = "upcoming";
            /* updateEvents(selectedDropdown); // Call the function to update events with the initial value */
            updateEventSubheader(selectedDropdown); // Call the function to update the event subheader with the initial value
        };

        // Update the button text and apply the active class when an option is clicked
        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', event => {
                // Remove the active class from all options
                document.querySelectorAll('.dropdown-item').forEach(option => {
                    option.classList.remove('active');
                });

                // Add the active class to the clicked option
                event.target.classList.add('active');

                // Update the button text to the selected option
                document.getElementById("dropdownMenuButton").innerText = event.target.innerText;

                // Get the selected dropdown value
                var selectedDropdown = event.target.id;
                // Call the function to update events with the selected value
                /* updateEvents(selectedDropdown); */
                updateEventSubheader(selectedDropdown); // Call the function to update the event subheader with the selected value
            });
        });

        // Function to update the content of the event subheader
        function updateEventSubheader(selectedDropdown) {
            const eventSubheader = document.querySelector('.event-subheader');
            eventSubheader.innerHTML = selectedDropdown === 'upcoming' ? 'What\'s coming up at YESS Surabaya' : 'Explore past events at YESS Surabaya';
        }
        
        /*
        // JavaScript function to handle dropdown change
        function updateEvents(selectedDropdown) {
            // Loop through all events and hide/show them based on the selected dropdown value
            document.querySelectorAll('.event-card').forEach(event => {
                const eventId = event.getAttribute('event-id');
                const eventInfo = <?php echo json_encode($events); ?>;
                const eventData = eventInfo.find(e => e.id === parseInt(eventId));

                if (selectedDropdown === 'upcoming' && !eventData.archived) {
                    event.style.display = 'block'; // Show the event
                } else if (selectedDropdown === 'archived' && eventData.archived) {
                    event.style.display = 'block'; // Show the event
                } else {
                    event.style.display = 'none'; // Hide the event
                }

                // Check if the "Daftar" button exists in the event
                const daftarButton = event.querySelector('.daftar-button');
                if (daftarButton) {
                    // If the button exists, hide it when the "Archived" option is selected
                    daftarButton.style.display = selectedDropdown === 'archived' ? 'none' : 'block';
                }
            });
        }
        */
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
