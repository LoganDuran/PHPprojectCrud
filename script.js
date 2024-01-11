// Responsive Header

const hamburgerMenu = document.querySelector(".hamMenu");
const nav = document.querySelector(".nav");
const header = document.querySelector(".header");

hamburgerMenu.addEventListener("click", () => {
    hamburgerMenu.classList.toggle("active")
});

hamburgerMenu.addEventListener("click", () => {
    nav.classList.toggle("active")
});

hamburgerMenu.addEventListener("click", () => {
    header.classList.toggle("active")
});
