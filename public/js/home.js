document.addEventListener('DOMContentLoaded', function() {
    var nextButton = document.querySelector('.next');
    var filmList = document.querySelector('.film-list');

    if (nextButton && filmList) {
        nextButton.addEventListener('click', function() {
            filmList.scrollLeft += 100;
        });
    }

    var prevButton = document.querySelector('.prev');
    if (prevButton && filmList) {
        prevButton.addEventListener('click', function() {
            filmList.scrollLeft -= 100;
        });
    }
});
