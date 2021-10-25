<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Benmarokna
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <header class="header">
        <a class="header__mobilePhone d-mobile" href="tel:+48731731207">
            <img class="img--80" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone.svg'; ?>" alt="telefon" />
        </a>

        <a class="header__logo" href="<?php echo home_url(); ?>">
            <img class="img header__logo__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/benmarokna-logo.png'; ?>" alt="benmar-okna" />
        </a>

        <menu class="header__menu d-desktop">
            <ul class="header__menu__list">
                <li class="header__menu__item">
                    <a class="header__menu__link" href="<?php echo home_url(); ?>">
                        Strona główna
                    </a>
                </li>
                <li class="header__menu__item">
                    <a class="header__menu__link" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                        Oferta
                    </a>
                </li>
                <li class="header__menu__item">
                    <a class="header__menu__link" href="<?php echo get_page_link(get_page_by_title('O nas')->ID); ?>">
                        O nas
                    </a>
                </li>
                <li class="header__menu__item">
                    <a class="header__menu__link" href="<?php echo get_page_link(get_page_by_title('Nasze realizacje')->ID); ?>">
                        Nasze realizacje
                    </a>
                </li>
                <li class="header__menu__item">
                    <a class="header__menu__link" href="<?php echo home_url() . '#kontakt'; ?>">
                        Kontakt
                    </a>
                </li>
            </ul>

            <section class="header__menu__contact d-desktop">
                <span>
                    Zadzwoń do nas!
                </span>
                <a class="header__menu__contact__btn button--hover">
                    <img class="header__menu__contact__btn__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/phone.svg'; ?>" alt="telefon" />
                    731 731 201
                </a>
            </section>
        </menu>

        <button class="menuBtn d-mobile" onclick="toggleMobileMenu()">
            <img class="img mobileMenuClose" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/menu.svg'; ?>" />
            <img class="img mobileMenuOpen" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.svg'; ?>" />
        </button>

        <menu class="mobileMenu">
            <ul class="mobileMenu__list">
                <li class="mobileMenu__list__item">
                    <a class="mobileMenu__list__link" href="<?php echo get_home_url(); ?>">
                        Strona główna
                    </a>
                </li>
                <li class="mobileMenu__list__item">
                    <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('O nas')->ID); ?>">
                        O nas
                    </a>
                </li>
                <li class="mobileMenu__list__item">
                    <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                        Oferta
                    </a>
                </li>
                <li class="mobileMenu__list__item">
                    <a class="mobileMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Nasze realizacje')->ID); ?>">
                        Nasze realizacje
                    </a>
                </li>
            </ul>
        </menu>
    </header>