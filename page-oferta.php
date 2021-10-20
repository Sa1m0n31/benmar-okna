<?php
get_header();
?>

<main class="page">
    <section class="section">
        <h1 class="section__header">
            O firmie
        </h1>
        <p class="section--page__text">
            Od ponad 10 lat dostarczamy okna, drzwi, ogrodzenia i bramy dla firm i osób prywatnych. Naszym motto jest wysoka jakość i trwałość naszych produktów i montaży. Posiadamy nie tylko doświadczenie, ale również niezbędną wiedzę techniczną, która jest niezbędna przy realizacji zamówień dla przemysłu, mniejszych firm, a także obsługi osób prywatnych.
        </p>
    </section>

    <section class="hero__offer hero__offer--page">
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/windows.svg'; ?>" alt="okna" />
            <h3 class="hero__offer__item__header">
                Okna
            </h3>
            <p class="hero__offer__item__text">
                Oferujemy wysokiej jakości okna. Cechą szczególną naszych produktów jest ich wysoka izolacja termiczna i akustyczna.
            </p>
            <a class="hero__offer__item__button" href="/">
                Sprawdź ofertę
            </a>
        </section>
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/door.svg'; ?>" alt="drzwi" />
            <h3 class="hero__offer__item__header">
                Drzwi
            </h3>
            <p class="hero__offer__item__text">
                Sprzedawane przez nas drzwi są doskonale wyizolowane cieplnie i akustycznie. Prezentują wysoką estetykę wykonania.
            </p>
            <a class="hero__offer__item__button" href="/">
                Sprawdź ofertę
            </a>
        </section>
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/fence.svg'; ?>" alt="ogrodzenia" />
            <h3 class="hero__offer__item__header">
                Ogrodzenia
            </h3>
            <p class="hero__offer__item__text">
                Oferowane przez nas ogrodzenia cenione produkty przez konsumenta. Gwarantują wysoką jakość i trwałość na lata.
            </p>
            <a class="hero__offer__item__button" href="/">
                Sprawdź ofertę
            </a>
        </section>
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/garage.svg'; ?>" alt="okna" />
            <h3 class="hero__offer__item__header">
                Bramy garażowe
            </h3>
            <p class="hero__offer__item__text">
                Proponujemy bezpieczne bramy garażowe i automatykę do bram, która sprawi, że obsługa bramy będzie jeszcze łatwiejsza.
            </p>
            <a class="hero__offer__item__button" href="/">
                Sprawdź ofertę
            </a>
        </section>
    </section>

    <section class="section section--b2b section--list">
        <h2 class="section__header center">
            Dostawcy
        </h2>
        <p class="section--page__text">
            Odnieśliśmy sukces między innymi ze względu na sprawdzonych partnerów i dostawców. To właśnie, dzięki takim firmom jak Hormann czy AdamS jesteśmy w stanie zapewnić Państwu:
        </p>

        <section class="section">
            <section class="section--flex__section section__redList--offer">
                <h3 class="section--flex__section__header">
                    Co zyskasz na współpracy z nami?
                </h3>
                <ul class="section__redList">
                    <li>
                        Terminowość dostaw
                    </li>
                    <li>
                        Szeroka gama asortymentu
                    </li>
                    <li>
                        Możliwość kompleksowej obsługi
                    </li>
                    <li>
                        Wygodny system płatności
                    </li>
                    <li>
                        Profesjonalne doradztwo
                    </li>
                </ul>
            </section>
        </section>
    </section>

    <section class="section section--partners">
        <h2 class="section--aboutUs__header firstHeader">
            Nasi partnerzy
        </h2>
        <h3 class="secondHeader">
            Dobieramy dostawców do Twoich potrzeb
        </h3>
        <main class="section--partners__main">
            <button class="section--partners__arrow" onclick="partnersCarouselPrev()">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/circle_left.svg'; ?>" alt="poprzedni" />
            </button>

            <main class="partnersCarousel">
                <figure class="partnersCarouselImgWrapper">
                    <img class="partnersCarousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Hormann.png'; ?>" alt="hormann" />
                </figure>
                <figure class="partnersCarouselImgWrapper">
                    <img class="partnersCarousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Barański.png'; ?>" alt="hormann" />
                </figure>
                <figure class="partnersCarouselImgWrapper">
                    <img class="partnersCarousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Mart-Tom.png'; ?>" alt="hormann" />
                </figure>
                <figure class="partnersCarouselImgWrapper">
                    <img class="partnersCarousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Hormann.png'; ?>" alt="hormann" />
                </figure>
                <figure class="partnersCarouselImgWrapper">
                    <img class="partnersCarousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Barański.png'; ?>" alt="hormann" />
                </figure>
                <figure class="partnersCarouselImgWrapper">
                    <img class="partnersCarousel__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/Mart-Tom.png'; ?>" alt="hormann" />
                </figure>
            </main>

            <button class="section--partners__arrow" onclick="partnersCarouselNext()">
                <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/circle_right.svg'; ?>" alt="nastepny" />
            </button>
        </main>
    </section>
</main>

<?php
get_footer();
?>
