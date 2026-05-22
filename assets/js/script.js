// LOADER
window.addEventListener("load", () => {
    document.querySelector(".loader").style.display = "none";
});

// MOBILE MENU
const menuToggle = document.querySelector(".menu-toggle");
const navLinks = document.querySelector(".nav-links");

menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});

// ANIMASI SCROLL
const cards = document.querySelectorAll(
    ".menu-card, .testi-card, .lokasi-card"
);

window.addEventListener("scroll", () => {

    cards.forEach(card => {

        let cardTop = card.getBoundingClientRect().top;

        if(cardTop < window.innerHeight - 100){
            card.classList.add("show");
        }

    });

});