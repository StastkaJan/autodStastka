document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("mobileMenuOpen").onclick = openMobileMenu;
    document.querySelectorAll(".mobile")[1].children[0].onclick = closeMobileMenu;
});

function openMobileMenu() {
    document.querySelectorAll(".mobile")[1].classList.add("clicked");
}

function closeMobileMenu() {
    document.querySelectorAll(".mobile")[1].classList.remove("clicked");
}