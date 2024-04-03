document.querySelector('.next').addEventListener('click', function() {
    document.querySelector('.film-list').scrollLeft += 200; // Atur jumlah scroll yang sesuai
});

document.querySelector('.prev').addEventListener('click', function() {
    document.querySelector('.film-list').scrollLeft -= 200; // Atur jumlah scroll yang sesuai
});
