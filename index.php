<?php
get_header();
?>

<main class="hero">
    <img class="img hero__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/benmarokna.png'; ?>" alt="benmar-okna" />
    <main class="hero__content">
        <h1 class="hero__content__header">
            Zadbamy o Twoje bezpieczeństwo i wygodę.
        </h1>
        <h2 class="hero__content__subheader">
            Systemy okienne, drzwi, bramy garażowe, ogrodzenia, rolety, systemy tarasowe i aluminiowe. Postaw na <b>sprawdzone rozwiązania</b> i <b>zaufaj profesjonalistom</b>.
        </h2>
        <a class="button--hero" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
            Poznaj naszą ofertę
        </a>
    </main>
</main>

<section class="hero__offer">
    <section class="hero__offer__item" data-aos="zoom-in">
        <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/windows.svg'; ?>" alt="okna" />
        <h3 class="hero__offer__item__header">
            Okna
        </h3>
        <p class="hero__offer__item__text">
            Oferujemy wysokiej jakości okna. Cechą szczególną naszych produktów jest ich wysoka izolacja termiczna i akustyczna.
        </p>
        <a class="hero__offer__item__button button--hover" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
            Sprawdź ofertę
        </a>
    </section>
    <section class="hero__offer__item" data-aos="zoom-in">
        <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/door.svg'; ?>" alt="drzwi" />
        <h3 class="hero__offer__item__header">
            Drzwi
        </h3>
        <p class="hero__offer__item__text">
            Sprzedawane przez nas drzwi są doskonale wyizolowane cieplnie i akustycznie. Prezentują wysoką estetykę wykonania.
        </p>
        <a class="hero__offer__item__button button--hover" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
            Sprawdź ofertę
        </a>
    </section>
    <section class="hero__offer__item" data-aos="zoom-in">
        <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/fence.svg'; ?>" alt="ogrodzenia" />
        <h3 class="hero__offer__item__header">
            Ogrodzenia
        </h3>
        <p class="hero__offer__item__text">
            Oferowane przez nas ogrodzenia cenione produkty przez konsumenta. Gwarantują wysoką jakość i trwałość na lata.
        </p>
        <a class="hero__offer__item__button button--hover" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
            Sprawdź ofertę
        </a>
    </section>
    <section class="hero__offer__item" data-aos="zoom-in">
        <img class="hero__offer__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/garage.svg'; ?>" alt="okna" />
        <h3 class="hero__offer__item__header">
            Bramy garażowe
        </h3>
        <p class="hero__offer__item__text">
            Proponujemy bezpieczne bramy garażowe i automatykę do bram, która sprawi, że obsługa bramy będzie jeszcze łatwiejsza.
        </p>
        <a class="hero__offer__item__button button--hover" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
            Sprawdź ofertę
        </a>
    </section>
</section>

<section class="section section--aboutUs">
    <article class="section--aboutUs__left" data-aos="fade-right">
        <h3 class="section--aboutUs__header">
            Dlaczego warto nam zaufać?
        </h3>
        <p class="section--aboutUs__text">
            Jeżeli cenisz sobie sprawny kontakt na każdym etapie realizacji zamówienia, to dobrze trafiłeś. Stawiamy na relacje partnerskie z naszymi Klientami i zawsze służymy rozmową oraz radą. W ramach współpracy profesjonalnie Ci doradzimy, by produkt, który zamówisz, spełnił Twoje oczekiwania. Na dodatek zagwarantujemy Ci jedną z najlepszych cen na rynku oraz szybką realizację zamówienia. Jednym słowem - zaoszczędzisz czas i pieniądze.
        </p>
        <p class="section--aboutUs__text">
            Zajmujemy się głównie sprzedażą i instalacją systemów okiennych, drzwi, bram garażowych, ogrodzeń, rolet, systemów tarasowych czy aluminiowych. Od ponad 10 lat działamy aktywnie na rynku lokalnym. Obsługując klientów z Województwa Kujawsko-Pomorskiego, Warmińsko-Mazurskiego i Mazowieckiego. Stawiamy na sprawdzone rozwiązania i wysokiej jakości produkty. Właśnie dlatego nasi klienci, są zadowoleni z naszych usług i chętnie nas polecają.
        </p>
        <a class="hero__offer__item__button button--aboutUsSection button--hover" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
            Dowiedz się więcej
        </a>
    </article>
    <figure class="section--aboutUs__imgWrapper" data-aos="fade-left">
        <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/okna.png'; ?>" alt="benmar-okna" />
    </figure>
</section>

<section class="section section--numbers">
    <h2 class="section--numbers__header" data-aos="flip-up">
        BENMAR OKNA w liczbach
    </h2>
    <main class="section--numbers__main">
        <section class="section--numbers__item" data-aos="zoom-in">
                <span class="section--numbers__number">
                    100+
                </span>
            <span class="section--numbers__label">
                    Zadowoleni klienci
                </span>
        </section>

        <img class="section--numbers__x" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/x.png'; ?>" alt="x" />

        <section class="section--numbers__item" data-aos="zoom-in">
                <span class="section--numbers__number">
                    23
                </span>
            <span class="section--numbers__label">
                    Dostawcy
                </span>
        </section>

        <img class="section--numbers__x" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/x.png'; ?>" alt="x" />

        <section class="section--numbers__item" data-aos="zoom-in">
                <span class="section--numbers__number">
                    16
                </span>
            <span class="section--numbers__label">
                    Lata doświadczenia
                </span>
        </section>
    </main>
</section>

<section class="section section--partners">
    <h2 class="section--aboutUs__header firstHeader" data-aos="flip-up">
        Nasi partnerzy
    </h2>
    <h3 class="secondHeader" data-aos="flip-up">
        Dobieramy dostawców do Twoich potrzeb
    </h3>
    <main class="section--partners__main">
        <button class="section--partners__arrow" data-aos="fade-right" onclick="partnersCarouselPrev()">
            <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/circle_left.svg'; ?>" alt="poprzedni" />
        </button>

        <main class="partnersCarousel" data-aos="zoom-in">
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

        <button class="section--partners__arrow" data-aos="fade-left" onclick="partnersCarouselNext()">
            <img class="img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/circle_right.svg'; ?>" alt="nastepny" />
        </button>
    </main>
</section>

<section class="section section--form">
    <span id="kontakt"></span>
    <h2 class="section--aboutUs__header firstHeader" data-aos="flip-up">
        Masz pytania? Napisz do nas
    </h2>
    <h3 class="secondHeader" data-aos="flip-up">
        Skorzystaj z poniższego formularza kontaktowego.
    </h3>

    <?php
        echo do_shortcode('[contact-form-7 id="13" title="Formularz 1"]');
    ?>

    <div class="form__afterSubmit">
        <h3 class="form__afterSubmit__header">
            Formularz został wysłany
        </h3>
        <h3 class="form__afterSubmit__header">
            Odpowiemy najszybciej jak to możliwe
        </h3>
    </div>
</section>

<section class="section section--contact">
    <h2 class="contact__header">
        Dane kontaktowe
    </h2>
    <main class="contact__main">
        <section class="contact__item" data-aos="fade-up">
            <img class="contact__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/info.svg'; ?>" alt="info" />
            <main class="contact__item__text">
                <h3>
                    <b>Benmar</b> Beata Szefler
                </h3>
                <h3>
                    <b>NIP:</b> 8781555664
                </h3>
                <h3>
                    <b>REGON:</b> 340451469
                </h3>
            </main>
        </section>

        <section class="contact__item" data-aos="fade-up">
            <img class="contact__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/home.svg'; ?>" alt="home" />
            <main class="contact__item__text">
                <h3>
                    <b>Siedziba:</b> Białkowo 39a,
                </h3>
                <h3>
                    87-400 Golub-Dobrzyń
                </h3>
                <h3>
                    <b>Sklep stacjonarny:</b> Szosa Rypińska 3,
                </h3>
                <h3>
                    87-400 Golub-Dobrzyń
                </h3>
            </main>
        </section>

        <section class="contact__item" data-aos="fade-up">
            <img class="contact__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone.svg'; ?>" alt="kontakt" />
            <main class="contact__item__text">
                <h3>
                    <b>Tel:</b> 731 731 201
                </h3>
                <h3>
                    <b>E-mail:</b> biuro@benmarokna.eu
                </h3>
            </main>
        </section>
    </main>
</section>
<section class="section map" data-aos="zoom-in">
    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
</section>

<?php
get_footer();
?>
