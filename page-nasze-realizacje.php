<?php
get_header();
?>

<main class="page">
    <section class="section">
        <h1 class="section__header">
            Nasze realizacje
        </h1>
        <p class="section--page__text">
            Od ponad 10 lat dostarczamy okna, drzwi, ogrodzenia i bramy dla firm i osób prywatnych. Naszym motto jest wysoka jakość i trwałość naszych produktów i montaży. Posiadamy nie tylko doświadczenie, ale również niezbędną wiedzę techniczną, która jest niezbędna przy realizacji zamówień dla przemysłu, mniejszych firm, a także obsługi osób prywatnych.
        </p>
    </section>

    <section class="hero__offer hero__offer--page hero__offer--page--portfolio">
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/windows.svg'; ?>" alt="okna" />
            <h3 class="hero__offer__item__header">
                Okna
            </h3>
            <a class="hero__offer__item__button" href="/">
                Zobacz realizacje
            </a>
        </section>
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/door.svg'; ?>" alt="drzwi" />
            <h3 class="hero__offer__item__header">
                Drzwi
            </h3>
            <a class="hero__offer__item__button" href="/">
                Zobacz realizacje
            </a>
        </section>
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/fence.svg'; ?>" alt="ogrodzenia" />
            <h3 class="hero__offer__item__header">
                Ogrodzenia
            </h3>
            <a class="hero__offer__item__button" href="/">
                Zobacz realizacje
            </a>
        </section>
        <section class="hero__offer__item">
            <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/garage.svg'; ?>" alt="okna" />
            <h3 class="hero__offer__item__header">
                Bramy garażowe
            </h3>
            <a class="hero__offer__item__button" href="/">
                Zobacz realizacje
            </a>
        </section>
    </section>

    <section class="section section--marginSmall">
        <h1 class="section__header section__header--small">
            Dowiedz się więcej
        </h1>
        <p class="section--marginSmall__text">
            Chcesz wiedzieć więcej? Serdecznie zapraszamy do poszczególnych zakładek na naszej stronie. Dowiesz się z nich szczegółów na temat naszej oferty, dowiesz się kim jesteśmy oraz w jaki sposób się z nami skontaktować. Już nie możemy się doczekać wspólnej pracy!
        </p>
        <section class="flex marginTop flex--portfolio">
            <a class="button--red button--margin" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                Sprawdź naszą ofertę
            </a>
            <a class="button--red button--margin" href="<?php echo home_url() . '#kontakt'; ?>">
                Skontaktuj się z nami
            </a>
            <a class="button--red button--margin" href="<?php echo get_page_link(get_page_by_title('O nas')->ID); ?>">
                Dowiedz się więcej o nas
            </a>
        </section>
    </section>
</main>

<?php
get_footer();
?>
