<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YESS.SUB | Analisis (Admin)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .main-container {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 48px;
            margin-top: 80px;
        }

        .section-header {
            display: flex;
            gap: 20px;
            font-size: 28px;
            font-weight: 700;
            color: #000;
            letter-spacing: 1.4px;
            line-height: 179%;
            padding: 0 1px;
        }

        @media (max-width: 991px) {
            .section-header {
                flex-wrap: wrap;
            }
        }

        .header-dropdown-container {
            margin-left: auto;
        }

        .header-dropdown {
            /* width: 290px; */
            height: 56px;
            width: fit-content;
            border-radius: 15px;
            display: inline-block;
        }

        .main-section {
            margin-top: 15px;
            width: 100%;
            max-width: 1338px;
        }

        @media (max-width: 991px) {
            .main-section {
                max-width: 100%;
            }
        }

        .card {
            background-color: #eee;
            box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            padding: 28px;
            font-size: 24px;
            font-weight: 700;
            color: #000;
            letter-spacing: 1.2px;
            line-height: 208%;
            width: 100%;
        }

        @media (max-width: 991px) {
            .card {
                padding: 0 20px;
                margin-top: 14px;
                max-width: 100%;
            }
        }

        .card-title {
            font-family: Montserrat, sans-serif;
        }

        .card-content {
            border: 1px solid rgba(0, 0, 0, 1);
            border-radius: 20px;
            background-color: #fff;
            height: 321px;
            margin-top: 28px auto 0 auto;
            max-width: 100%;

        }

        canvas {
            width: 100% !important;
            height: auto !important;
        }

        .stat-card {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            /* padding-bottom: 20px; */
            margin: 10px;
            background-color: #fff;
            border: 1px solid rgba(0, 0, 0, 1);
            border-radius: 20px;
            text-align: center;
            height: 70%;
        }

        .stat-header {
            background-color: #eeb120;
            border-radius: 20px 20px 0 0;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 1.2px;
            border: 1px solid rgba(0, 0, 0, 1);
            height: 50%;
        }

        .highlight-text {
            font-size: 36px;
            font-weight: 600;
            letter-spacing: 3.2px;
            /* margin-top: 20px; */
            font-family: Montserrat, sans-serif;
            /* height: 50%; */
        }

        .baris-2 {
            width: 100%;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('partials.admin-navbar')
    <div class="main-container">
        <div class="row baris-2">
            <div class="col">
                <div class="card">
                    <div class="section-header">
                        <div class="card-title">JEMAAT TER-AKTIF</div>
                        <div class="header-dropdown-container">
                            <select id="monthDropdown1" class="header-dropdown form-select">
                                <option value="all" selected>All</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                            <select id="yearDropdown1" class="header-dropdown form-select">
                                <option value="all" selected>All</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>
                    <div class ="row">
                        <div class="col">
                            <div class="card-content"><canvas id="chart-1"></canvas></div>
                        </div>
                        <div class="col">
                            <div class="card-content"><canvas id="chart-2"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row baris-2">
            <div class="col">
                <div class="card">
                    <div class="section-header">
                        <div class="card-title">CARD TITLE</div>
                    </div>
                    <div class ="row">
                        <div class="col">
                            <div class="card-content"><canvas id="chart-3"></canvas></div>
                        </div>
                        <div class="col">
                            <div class="card-content"><canvas id="chart-4"></canvas></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row baris-2">
            <div class="col">
                <div class="card">
                    <div class="section-header">
                        <div class="card-title">PENINGKATAN JUMLAH JEMAAT</div>
                    </div>
                    <div class="card-content"><canvas id="chart-5"></canvas></div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="section-header">
                        <div class="header-dropdown-container">
                            <select id="monthDropdown2" class="header-dropdown form-select">
                                <option value="all" selected>All</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                            <select id="yearDropdown2" class="header-dropdown form-select">
                                <option value="all" selected>All</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col">
                                <div class="stat-card">
                                    <div class="stat-header">JEMAAT BARU</div>
                                    <div class="highlight-text" id="newMembersCount">50</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <div class="stat-header">BARENG</div>
                                    <div class="highlight-text" id="barengCount">50</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="stat-card">
                                    <div class="stat-header">KOMSEL BARU</div>
                                    <div class="highlight-text" id="komselCount">50</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="stat-card">
                                    <div class="stat-header">PELAYAN BARU</div>
                                    <div class="highlight-text" id="pelayanCount">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="main-section">
            <div class="cards-wrapper">
                <div class="card column">
                    <div class="stats-wrapper">
                        <div class="stat-card">
                            <div class="stat-header">JUMLAH JEMAAT</div>
                            <div class="highlight-text">50</div>
                        </div>
                        <div class="highlight-content column">
                            <div class="highlight-bar"></div>
                            <div class="highlight-description">
                                <div class="highlight-info">JUMLAH BOOKING BARENG</div>
                                <div class="highlight-value">50</div>
                            </div>
                        </div>
                    </div>
                    <div class="summary-wrapper">
                        <div class="summary-card">
                            <div class="summary-header">JUMLAH JEMAAT BARU</div>
                            <div class="summary-value">50</div>
                        </div>
                        <div class="additional-info-wrapper">
                            <div class="additional-card">
                                <div class="additional-header">JUMLAH ANGGOTA PELAYANAN BARU</div>
                                <div class="additional-value">50</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script>
        // Data Dummy
        const attendanceData = [{
                name: "Jemaat A",
                date: "2023-01-05"
            },
            {
                name: "Jemaat B",
                date: "2023-02-10"
            },
            {
                name: "Jemaat C",
                date: "2023-03-20"
            },
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        const newMembersData = [{
                name: "Jemaat A",
                date: "2023-01-05"
            },
            {
                name: "Jemaat B",
                date: "2023-02-10"
            },
            {
                name: "Jemaat C",
                date: "2023-03-20"
            },
            {
                name: "Jemaat D",
                date: "2023-04-15"
            },
            {
                name: "Jemaat E",
                date: "2023-05-30"
            },
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        const barengData = [{
                name: "Bareng A",
                date: "2023-01-10"
            },
            {
                name: "Bareng B",
                date: "2023-02-15"
            },
            {
                name: "Bareng C",
                date: "2023-03-25"
            },
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        const komselData = [{
                name: "Komsel A",
                date: "2023-01-20"
            },
            {
                name: "Komsel B",
                date: "2023-02-25"
            },
            {
                name: "Komsel C",
                date: "2023-03-30"
            },
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        const pelayanData = [{
                name: "Pelayan A",
                date: "2023-01-25"
            },
            {
                name: "Pelayan B",
                date: "2023-02-28"
            },
            {
                name: "Pelayan C",
                date: "2023-03-15"
            },
            // Tambahkan data dummy lainnya sesuai kebutuhan
        ];

        // Filter untuk Chart 1 dan 2
        const monthDropdown1 = document.getElementById("monthDropdown1");
        const yearDropdown1 = document.getElementById("yearDropdown1");

        // Filter untuk Stat Cards
        const monthDropdown2 = document.getElementById("monthDropdown2");
        const yearDropdown2 = document.getElementById("yearDropdown2");

        monthDropdown1.addEventListener("change", updateCharts);
        yearDropdown1.addEventListener("change", updateCharts);

        monthDropdown2.addEventListener("change", updateStats);
        yearDropdown2.addEventListener("change", updateStats);

        function filterData(data, selectedMonth, selectedYear) {
            return data.filter(item => {
                const date = new Date(item.date);
                const month = (date.getMonth() + 1).toString().padStart(2, '0');
                const year = date.getFullYear().toString();

                return (selectedMonth === "all" || selectedMonth === month) &&
                    (selectedYear === "all" || selectedYear === year);
            });
        }

        function updateCharts() {
            const selectedMonth = monthDropdown1.value;
            const selectedYear = yearDropdown1.value;

            const filteredAttendanceData = filterData(attendanceData, selectedMonth, selectedYear);

            const labels = filteredAttendanceData.map(item => item.name);
            const data = labels.map(() => Math.floor(Math.random() * 100));

            chart1.data.labels = labels;
            chart1.data.datasets[0].data = data;
            chart1.update();

            chart2.data.labels = labels;
            chart2.data.datasets[0].data = data;
            chart2.update();
        }

        function updateStats() {
            const selectedMonth = monthDropdown2.value;
            const selectedYear = yearDropdown2.value;

            const filteredNewMembers = filterData(newMembersData, selectedMonth, selectedYear);
            const filteredBareng = filterData(barengData, selectedMonth, selectedYear);
            const filteredKomsel = filterData(komselData, selectedMonth, selectedYear);
            const filteredPelayan = filterData(pelayanData, selectedMonth, selectedYear);

            document.getElementById("newMembersCount").textContent = filteredNewMembers.length;
            document.getElementById("barengCount").textContent = filteredBareng.length;
            document.getElementById("komselCount").textContent = filteredKomsel.length;
            document.getElementById("pelayanCount").textContent = filteredPelayan.length;

        }

        // Inisialisasi Chart 1
        const ctx1 = document.getElementById('chart-1').getContext('2d');
        const chart1 = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    backgroundColor: 'green',
                    data: []
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Ibadah YESS'
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Inisialisasi Chart 2
        const ctx2 = document.getElementById('chart-2').getContext('2d');
        const chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    backgroundColor: 'blue',
                    data: []
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: 'Komsel'
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Inisialisasi Chart 3
        var x3 = ["A", "B", "C", "D", "E"];
        var y3 = [55, 49, 44, 24, 15];
        var colors3 = [
            "#e69f00",
            "#56b4e9",
            "#009e73",
            "#f0e442",
            "#0072b2"
        ];

        new Chart("chart-3", {
        type: "pie",
        data: {
            labels: x3,
            datasets: [{
            backgroundColor: colors3,
            data: y3
            }]
        },
        options: {
            title: {
                display: true,
                text: "Title"
            },
            responsive: true,
            maintainAspectRatio: false
        }
        });

        // Inisialisasi Chart 4
        var x4 = ["A", "B", "C", "D", "E"];
        var y4 = [55, 49, 44, 24, 15];
        var colors4 = [
            "#e69f00",
            "#56b4e9",
            "#009e73",
            "#f0e442",
            "#0072b2"
        ];

        new Chart("chart-4", {
        type: "pie",
        data: {
            labels: x4,
            datasets: [{
            backgroundColor: colors4,
            data: y4
            }]
        },
        options: {
            title: {
                display: true,
                text: "Title"
            },
            responsive: true,
            maintainAspectRatio: false
        }
        });

        // Inisialisasi chart 5
        const x5 = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
        const y5 = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

        new Chart("chart-5", {
            type: "line",
            data: {
                labels: x5,
                datasets: [{
                    fill: false,
                    lineTension: 0,
                    backgroundColor: "rgba(0,0,255,1.0)",
                    borderColor: "rgba(0,0,255,0.1)",
                    data: y5
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 6,
                            max: 16
                        }
                    }],
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Inisialisasi data saat halaman dimuat
        updateCharts();
        updateStats();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
