<?php
get_header();
?>
<main class="page">
    <section class="section">
        <h1 class="section__header" data-aos="flip-up">
            Okna
        </h1>
        <p class="section--page__text" data-aos="fade-right">
            Okna to nasza pasja, a w naszej ofercie goszczą już od ponad 10 lat! Zajmujemy się produkcją, sprzedażą a także ich montażem. Nasza firma ma bogatą ofertę okien Państwu do zaprezentowania. W połączeniu z nowoczesnym i profesjonalnym montażem, współpraca z nami gwarantuje satysfakcje i spełnienie wszystkich potrzeb.
        </p>
        <p class="section--page__text" data-aos="fade-right">
            Poniżej przedstawiliśmy przekroje profili okiennych najbardziej nowoczesnych i energooszczędnych okien w naszej ofercie. Należą do nich miedzy innymi takie modele jak: VEKA SL 82, PASSIVE LINE S czy IDEAL 8000. Dzięki stałej współpracy z producentem tych profili, jesteśmy w stanie zaoferować Państwu najwyższej jakości produkty w bardzo atrakcyjnych cenach. Poniżej dodajemy dane na temat termoizolacyjności.
        </p>
    </section>

    <section class="section">
        <div class="windows">
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/okna1.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    VEKA SL 82
                </h3>
                <p class="windows__item__text">
                    Współczynnik izolacyjności termicznej profili Uf = 1,0 W/m²K.
                </p>
            </section>
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/okna2.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    PASSIVE LINE S
                </h3>
                <p class="windows__item__text">
                    Współczynnik izolacyjności termicznej profili Uf = 0,78 W/m²K.
                </p>
            </section>
            <section class="windows__item">
                <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/okna3.png'; ?>" alt="okna" />
                <h3 class="windows__item__header">
                    IDEAL 8000
                </h3>
                <p class="windows__item__text">
                    Współczynnik izolacyjności termicznej profili Uf = 1,0 W/m²K
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