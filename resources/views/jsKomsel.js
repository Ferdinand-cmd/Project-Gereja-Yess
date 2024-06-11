let buttonAtur = document.getElementById('aturbutton');
let buttonAbsen = document.getElementById('absenbutton');

buttonAtur.onclick = function(e) {
    e.preventDefault();
    window.location.href = "aturKomsel.blade.php";
}

buttonAbsen.onclick = function(e) {
    e.preventDefault();
    window.location.href = "absenKomsel.blade.php";
}

function myFunction() {
    var x = document.getElementById("myForm");
    var butt = document.getElementById("butt1");
    if (x.style.display === "block") {
        x.style.display = "none";
        butt.style.backgroundColor = "white";
        butt.style.color = "black";
    } else {
        x.style.display = "block";
        butt.style.backgroundColor = "#EEB120";
        butt.style.color = "white";
    }
}

// JS card

var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    effect: 'fade',
    loop: true,
    speed: 300,
    mousewheel: {
      invert: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      dynamicBullets: true
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });
