<?php
get_header();
?>
<main class="page">
    <section class="section">
        <h1 class="section__header" data-aos="flip-up">
            Drzwi
        </h1>
        <p class="section--page__text">
            W naszej ofercie znajdziecie Państwo pełną ofertę drzwi wewnętrznych i zewnętrznych, zarówno do mieszkania jak i do domu wolnostojącego. Polecamy także drzwi wewnętrzne przesuwne w systemach naściennych lub chowanych w ścianę.
        </p>
        <h2 class="section__header section__header--center">
            VEKA SL 82
        </h2>
        <p class="section--page__text">
            Drzwi wejściowe VEKA SL82 to nowoczesne i energooszczędne rozwiązanie dla najbardziej wymagających klientów. Zapewniają idealna izolację termiczną w dolnej części konstrukcji (niski próg). Bardzo dużą wytrzymałość i stabilność konstrukcji uzyskano, dzięki wzmocnieniom stalowym o dużych przekrojach. Możliwość zastosowania szczotki z okapnikiem. Bogata gama kolorów i wzorów pozwala na wybór drzwi dostosowanych do indywiduelanych potrzeb. Wygląd wraz z doskonałymi parametrami technicznymi ssprawiają, że drzwi VEKA SL82 to pewna inwestycja na długie lata
        </p>
        <p class="section--page__text">
            Posiadamy bogatą ofertę drzwi. Nie tylko zewnętrznych i wewnętrznych, ale także balkonowych czy tarasowych. Planując budowę domu, należy skrupulatnie przemyśleć jakie rozwiązanie w zakresie drzwi tarasowych nas interesuje. Poniżej przedstawiamy kilka możliwości w zakresie drzwi przesuwnych.
        </p>
    </section>

    <section class="section">
        <div class="windows windows--doors">
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/schemat-k.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    Schemat K
                </h3>
                <p class="windows__item__text">
                    Drzwi 3 częściowe z dwoma skrzydłami unoszono-przesuwnymi i przeszkolną częścią stałą.
                </p>
            </section>
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/schemat-f.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    Schemat F
                </h3>
                <p class="windows__item__text">
                    Drzwi 4-częściowe z czterma skyrzłami unoszono-przesuwnymi.
                </p>
            </section>
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/schemat-d.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    Schemat D
                </h3>
                <p class="windows__item__text">
                    Drzwi 2-częściowe z dwom skrzyłami unoszono-przesuwnymi.
                </p>
            </section>
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/schemat-c.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    Schemat C
                </h3>
                <p class="windows__item__text">
                    Drzwi 4-częściowe z dwoma skrzydłami unoszono-przesuwnymi i dwiema przeszklonymi częściami stałymi.
                </p>
            </section>
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/schemat-a.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    Schemat A
                </h3>
                <p class="windows__item__text">
                    Drzwi 2-częściowe ze skrzydłem unoszono-przesuwanym i przeszkloną częścią stałą.
                </p>
            </section>
        </div>
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
        <?php echo do_shortcode('[google_map_easy id="1"]'); ?>
    </section>
</main>

<?php
get_footer();
?>