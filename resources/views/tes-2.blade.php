<html>
    <head>
    </head>
    <body>
        <!-- Filter untuk Chart 1 dan Chart 2 -->
        <select id="monthDropdown1" class="header-dropdown form-select">
            <option value="all" selected>All</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <!-- dst -->
        </select>
        <select id="yearDropdown1" class="header-dropdown form-select">
            <option value="all">All</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>

        <div class="row">
            <div class="col">
                <div class="card-content"><canvas id="chart-1" style="max-width=600px;width:100%;"></canvas></div>
            </div>
            <div class="col">
                <div class="card-content"><canvas id="chart-2" style="max-width=600px;width:100%;"></canvas></div>
            </div>
        </div>

        <!-- Filter untuk Highlight Text -->
        <div class="section-header">
            <select id="monthDropdown2" class="header-dropdown form-select">
                <option value="all" selected>All</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <!-- dst -->
            </select>
            <select id="yearDropdown2" class="header-dropdown form-select">
                <option value="all">All</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>

        <div class="card-content">
            <div class="row">
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-header">BANYAK JEMAAT BARU</div>
                        <div class="highlight-text" id="newMembersCount">0</div>
                    </div>
                </div>
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-header">BANYAK BARENG</div>
                        <div class="highlight-text" id="barengCount">0</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-header">BANYAK KOMSEL BARU</div>
                        <div class="highlight-text" id="komselCount">0</div>
                    </div>
                </div>
                <div class="col">
                    <div class="stat-card">
                        <div class="stat-header">BANYAK PELAYAN BARU</div>
                        <div class="highlight-text" id="pelayanCount">0</div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script>
            // Data Dummy
            const attendanceData = [
                { name: "Jemaat A", date: "2023-01-05" },
                { name: "Jemaat B", date: "2023-02-10" },
                { name: "Jemaat C", date: "2023-03-20" },
                // Tambahkan data dummy lainnya sesuai kebutuhan
            ];

            const newMembersData = [
                { name: "Jemaat A", date: "2023-01-05" },
                { name: "Jemaat B", date: "2023-02-10" },
                { name: "Jemaat C", date: "2023-03-20" },
                { name: "Jemaat D", date: "2023-04-15" },
                { name: "Jemaat E", date: "2023-05-30" },
                // Tambahkan data dummy lainnya sesuai kebutuhan
            ];

            const barengData = [
                { name: "Bareng A", date: "2023-01-10" },
                { name: "Bareng B", date: "2023-02-15" },
                { name: "Bareng C", date: "2023-03-25" },
                // Tambahkan data dummy lainnya sesuai kebutuhan
            ];

            const komselData = [
                { name: "Komsel A", date: "2023-01-20" },
                { name: "Komsel B", date: "2023-02-25" },
                { name: "Komsel C", date: "2023-03-30" },
                // Tambahkan data dummy lainnya sesuai kebutuhan
            ];

            const pelayanData = [
                { name: "Pelayan A", date: "2023-01-25" },
                { name: "Pelayan B", date: "2023-02-28" },
                { name: "Pelayan C", date: "2023-03-15" },
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
                    legend: { display: false },
                    title: { display: true, text: 'Ibadah YESS' },
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
                    legend: { display: false },
                    title: { display: true, text: 'Komsel' },
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Inisialisasi data saat halaman dimuat
            updateCharts();
            updateStats();
            </script>

    </body>
</html>