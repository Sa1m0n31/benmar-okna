/* AOS */
AOS.init({
    delay: 100,
    duration: 600
});

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

/* Form submit */
const formEl = document.querySelector(".wpcf7-form");
const formAfterSubmitEl = document.querySelector(".form__afterSubmit");

document.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log("submit");
    afterSubmit();
});

document.addEventListener( 'wpcf7mailinvalid', function( event ) {
    console.log("submit");
    afterSubmit();
});

document.addEventListener( 'wpcf7mailfailed', function( event ) {
    console.log("submit");
    afterSubmit();
});

document.addEventListener( 'wpcf7mailspam', function( event ) {
    console.log("spam");
    afterSubmit();
});

const afterSubmit = () => {
    formEl.style.display = "none";
    formAfterSubmitEl.style.display = "flex";
}

document.addEventListener("click", () => {
    const formErrors = document.querySelectorAll(".wpcf7-not-valid-tip");
    if(formErrors.length) {
        formErrors.forEach((item) => {
            item.style.display = "none";
        });
    }
});