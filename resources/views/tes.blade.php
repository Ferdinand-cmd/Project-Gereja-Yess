<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>

<div class="filter-container">
    <label for="monthDropdown">Select Month:</label>
    <select id="monthDropdown" class="form-select">
        <option value="all">All</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <!-- Tambahkan opsi bulan lainnya -->
    </select>

    <label for="yearDropdown">Select Year:</label>
    <select id="yearDropdown" class="form-select">
        <option value="all">All</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <!-- Tambahkan opsi tahun lainnya -->
    </select>
</div>

<canvas id="chart-1" style="width:100%"></canvas>

<script>
const attendanceData = [
    { name: "Steven", date: "2023-01-05" },
    { name: "Ferdinand", date: "2023-01-15" },
    { name: "Felita", date: "2023-02-10" },
    { name: "Isabella", date: "2023-03-20" },
    { name: "Albert", date: "2023-03-25" },
    // Tambahkan data dummy lainnya sesuai kebutuhan
];

// Mengatur dropdown
const monthDropdown = document.getElementById("monthDropdown");
const yearDropdown = document.getElementById("yearDropdown");

monthDropdown.addEventListener("change", updateChart);
yearDropdown.addEventListener("change", updateChart);

function updateChart() {
    const selectedMonth = monthDropdown.value;
    const selectedYear = yearDropdown.value;

    const filteredData = attendanceData.filter(data => {
        const date = new Date(data.date);
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const year = date.getFullYear().toString();

        return (selectedMonth === "all" || selectedMonth === month) &&
               (selectedYear === "all" || selectedYear === year);
    });

    const names = filteredData.map(data => data.name);
    const counts = names.reduce((acc, name) => {
        acc[name] = (acc[name] || 0) + 1;
        return acc;
    }, {});

    const labels = Object.keys(counts);
    const data = Object.values(counts);

    const chart = new Chart("chart-1", {
        type: "bar",
        data: {
            labels: labels,
            datasets: [{
                backgroundColor: "green",
                data: data
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: "Ibadah YESS"
            }
        }
    });
}

// Inisialisasi chart saat halaman dimuat
updateChart();
</script>

</body>
</html>
