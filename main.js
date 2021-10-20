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
