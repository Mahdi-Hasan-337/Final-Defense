var el = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};

let myDocument = document.documentElement;
let btn = document.getElementById("btn");

btn.addEventListener("click", () => {
    if (!document.fullscreenElement &&
        !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement
    ) {
        if (myDocument.requestFullscreen) {
            myDocument.requestFullscreen();
        } else if (myDocument.msRequestFullscreen) {
            myDocument.msRequestFullscreen();
        } else if (myDocument.mozRequestFullScreen) {
            myDocument.mozRequestFullScreen();
        } else if (myDocument.webkitRequestFullscreen) {
            myDocument.webkitRequestFullscreen();
        }
        btn.classList.remove("fa-expand");
        btn.classList.add("fa-compress");
        btn.setAttribute("title", "Exit");

    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msexitFullscreen) {
            document.msexitFullscreen();
        } else if (document.mozexitFullscreen) {
            document.mozexitFullscreen();
        } else if (document.webkitexitFullscreen) {
            document.webkitexitFullscreen();
        }

        btn.classList.remove("fa-compress");
        btn.classList.add("fa-expand");
        btn.setAttribute("title", "Expand");
    }
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
