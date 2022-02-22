<?php
get_header();
?>
<main class="page">
    <section class="section">
        <h1 class="section__header" data-aos="flip-up">
            Ogrodzenia
        </h1>
        <p class="section--page__text" data-aos="fade-right">
            Tak jak w przypadku innych produktów, zajmujemy się dystrybucją i montażem ogrodzeń. A nasza oferta zawiera tylko sprawdzone pozycje! Możemy zaoferować Państwu między-innymi: siatki ogrodzeniowe, panele ogrodzeniowe czy akcesoria do ogrodzeń. Profesjonalnie doradzimy Państwu w dobrze ogrodzenia, które spełni Państwa oczekiwania. Zarówno te dotyczące konserwacji czy trwałości, jak i te dotyczące estetyki produktu.
        </p>
        <h2 class="section__header section__header--center">
            Siatki ogrodzeniowe
        </h2>
        <p class="section--page__text">
            Drzwi wejściowe VEKA SL82 to nowoczesne i energooszczędne rozwiązanie dla najbardziej wymagających klientów. Zapewniają idealna izolację termiczną w dolnej części konstrukcji (niski próg). Bardzo dużą wytrzymałość i stabilność konstrukcji uzyskano, dzięki wzmocnieniom stalowym o dużych przekrojach. Możliwość zastosowania szczotki z okapnikiem. Bogata gama kolorów i wzorów pozwala na wybór drzwi dostosowanych do indywiduelanych potrzeb. Wygląd wraz z doskonałymi parametrami technicznymi ssprawiają, że drzwi VEKA SL82 to pewna inwestycja na długie lata.
        </p>
    </section>

    <section class="windows">
        <section class="windows__item windows__item--50">
            <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/siatka1.png'; ?>" alt="okna" />
            <h3 class="windows__item__header windows__item__header--noBorder">
                Siatka z drutu ocynkowanego
            </h3>
        </section>
        <section class="windows__item windows__item--50">
            <img class="windows__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/siatka2.png'; ?>" alt="okna" />
            <h3 class="windows__item__header windows__item__header--noBorder">
                Siatka z drutu ocynkowanego - powlekanego
            </h3>
        </section>
    </section>

    <section class="windows">
        <section class="windows__item windows__item--50">
            <img class="windows__item__img windows__item__img--table" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/tabelka1.png'; ?>" alt="okna" />
        </section>
        <section class="windows__item windows__item--50">
            <img class="windows__item__img windows__item__img--table" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/tabelka2.png'; ?>" alt="okna" />
        </section>
    </section>

    <section class="section section--text">
        <h2 class="section__header section__header--center">
            Panele ogrodzeniowe
        </h2>
        <p class="section--page__text">
            W ramach świadczonych usług, a także sprzedaży, mamy bogaty asortyment z zakresu paneli ogrodzeniowych. Realizujemy ogrodzenia panelowe z podmuruwką lub bez niej. Oferujemy kilkanaście systemów łączenia poszczególnych paneli ze sobą. W naszym asortymencie znajdą Państwo zarówno: panele ogrodzeniowe klasyczne jak i 3D.
        </p>
        <h2 class="section__header section__header--center">
            Siatka leśna
        </h2>
        <p class="section--page__text">
            Różnego rodzaju siatki leśne, są bardzo popularne w trakcie budowy domu lub obiektów inwestorskich. Zabezpieczają teren przed dewastacją, a także chronią postronnych przechodniów. Idealna na okres przejściowy czy w przypadku dużego areału i problemów ze zwierzyną łowną.
        </p>
        <h2 class="section__header section__header--center">
            Ogrodzenia polisadowe
        </h2>
        <p class="section--page__text">
            Ogrodzenie z paneli palisadowych to obecnie najmodniejszy na rynku typ ogrodzenia. Elegancki, minimalistyczny design palisady doskonale komponuje się z nowoczesną architekturą. Panele palisadowe mogą być w wersji ocynkowanej ogniowo lub ocynkowanej i malowanej proszkowo.
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