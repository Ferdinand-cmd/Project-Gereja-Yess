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