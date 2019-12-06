document.addEventListener('DOMContentLoaded', (event) => {
    menuClick();
});

function menuClick() {
    let navMenu = document.getElementById("navMenu");

    navMenu.onclick = clicked;
}

function clicked() {
    this.classList.toggle("clicked")
}