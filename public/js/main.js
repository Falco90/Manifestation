function showPopup() {

    if (popup.style.display === "none") {
        popup.style.display = "block";
    } else {
        popup.style.display = "none";
    }
}

var box = document.getElementById("show");

if (box != null) {
    box.addEventListener("click", showPopup);
}