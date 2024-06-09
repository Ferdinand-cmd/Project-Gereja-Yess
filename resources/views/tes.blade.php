<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
<table class="table table-borderless">
    <thead>
        <tr class="table-dark">
            <th scope="col">Availability</th>
            <th scope="col">Jadwal ibadah</th>
            <th scope="col">Detail ibadah umum</th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="availability1">
                    <label class="form-check-label" for="availability1">Off</label>
                </div>
            </td>
            <td>Minggu, 7 April 2014</td>
            <td class="arrow-cell">
                <button class="arrow-btn">
                    <span class="material-icons">arrow_forward</span>
                </button>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="availability2">
                    <label class="form-check-label" for="availability2">Off</label>
                </div>
            </td>
            <td>Minggu, 14 April 2014</td>
            <td class="arrow-cell">
                <button class="arrow-btn">
                    <span class="material-icons">arrow_forward</span>
                </button>
            </td>
        </tr>
    </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all switch elements
    var switches = document.querySelectorAll('.form-check-input');

    // Iterate over each switch and add event listener
    switches.forEach(function(switchElement) {
        switchElement.addEventListener('change', function() {
            // Get the corresponding label and row elements
            var switchLabel = document.querySelector('label[for="' + switchElement.id + '"]');
            var tableRow = switchElement.closest('tr');
            var arrowCell = tableRow.querySelector('.arrow-cell');
            var arrowButton = arrowCell.querySelector('.arrow-btn');

            // Check the switch state
            if (switchElement.checked) {
                // If switch is on, change label text to "On"
                switchLabel.textContent = 'On';
                // Remove table-secondary class from row
                tableRow.classList.remove('table-secondary');
                // If arrow button is not present, add it back
                if (!arrowButton) {
                    var newButton = document.createElement('button');
                    newButton.classList.add('arrow-btn');
                    newButton.innerHTML = '<span class="material-icons">arrow_forward</span>';
                    arrowCell.appendChild(newButton);
                }
            } else {
                // If switch is off, change label text to "Off"
                switchLabel.textContent = 'Off';
                // Add table-secondary class to row
                tableRow.classList.add('table-secondary');
                // Remove the arrow button element
                if (arrowButton) {
                    arrowButton.remove();
                }
            }
        });
    });
});



</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>
