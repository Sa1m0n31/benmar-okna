/* Partners carousel */
const partnersCarousel = new Siema({
    selector: ".partnersCarousel",
    loop: true,
    perPage: {
        996: 3,
        100: 1
    }
});

const partnersCarouselNext = () => {
    partnersCarousel.next();
}

const partnersCarouselPrev = () => {
    partnersCarousel.prev();
}

setInterval(() => {
    if(partnersCarousel) partnersCarousel.next();
}, 2000);

/* Mobile menu */
const mobileMenuOpenImg = document.querySelector(".mobileMenuOpen");
const mobileMenuCloseImg = document.querySelector(".mobileMenuClose");
const mobileMenu = document.querySelector(".mobileMenu");
let mobileMenuOpen = false;

const toggleMobileMenu = () => {
    if(mobileMenuOpen) {
        mobileMenuOpen = false;
        mobileMenu.style.display = "none";
        mobileMenuOpenImg.style.display = "none";
        mobileMenuCloseImg.style.display = "block";
    }
    else {
        mobileMenuOpen = true;
        mobileMenu.style.display = "flex";
        mobileMenuOpenImg.style.display = "block";
        mobileMenuCloseImg.style.display = "none";
    }
}
