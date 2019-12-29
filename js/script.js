document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById("navMenu").onclick = clicked;

    window.onscroll = header;
});

function clicked() {
    this.classList.toggle("clicked")
}

function header() {
    let header = document.getElementById("clickAction");
    let firstPageHeight = document.querySelectorAll(".firstPage")[0].clientHeight;

    if (document.body.scrollTop > firstPageHeight/2 || document.documentElement.scrollTop > firstPageHeight/2) {
        header.classList.add("nonTop");
    } else {
        header.classList.remove("nonTop");
    }
};