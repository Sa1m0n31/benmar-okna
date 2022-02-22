<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Benmarokna
 */

?>

<footer class="footer">
    <section class="footer__col">
        <ul class="footer__col__list">
            <li>
                <a href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    Oferta
                </a>
            </li>
            <li>
                <a href="<?php echo get_page_link(get_page_by_title('O nas')->ID); ?>">
                    O nas
                </a>
            </li>
            <li>
                <a href="/#kontakt">
                    Kontakt
                </a>
            </li>
        </ul>
    </section>
    <section class="footer__col footer__col--center">
        <h5>
            Copyright &copy; Benmarokna.eu
        </h5>
        <h5>
            Projekt i wykonanie: <a class="skyloLink" href="https://skylo.pl" rel="noreferrer">skylo.pl</a>
        </h5>
    </section>
    <section class="footer__col footer__col--right">
        <ul class="footer__col__list">
            <li>
                <a href="<?php echo get_page_link(get_page_by_title('Polityka prywatności')->ID); ?>">
                    Polityka prywatności
                </a>
            </li>
        </ul>
    </section>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
