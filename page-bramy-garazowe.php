<?php
get_header();
?>
<main class="page">
    <section class="section">
        <h1 class="section__header" data-aos="flip-up">
            Bramy garażowe
        </h1>
        <p class="section--page__text" data-aos="fade-right">
            Oferowane przez nas bramy garażowe cechują się wysoką jakością i trwałość. Oferujemy tylko niezawodne rozwiązania na lata. Sprzedajemy i instalujemy zarówno bramy automatyczne, jak i ręczne – wszystko w zależności od indywidualnych potrzeb klienta. Dodatkowo dysponujemy różnymi rozwiązaniami w zakresie napędów do bram automatycznych. Właśnie dlatego, jesteśmy w stanie obsłużyć Cię kompleksowo i sprostać wszystkim Twoim wymaganiom.
        </p>
        <h2 class="section__header section__header--center">
            System automatyki
        </h2>
        <p class="section--page__text section--page__text--mb">
            Oferowane przez nas bramy garażowe, cechują się wysoką jakością i pożądaną funkcjonalnością. Na większość oferowanych produktów z tej dziedziny dajemy do 10 lat gwarancji. Daje Państwu to pewność o nieusterkowości systemów przez nas sprzedawanych. Serdecznie zapraszamy do kontaktu.
        </p>
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