<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fish
 */

use classes\WalkerSocialMenu;

?>

</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12"><a class="logo" href="#"><?php bloginfo('site_name') ?></a></div>
            <div class="col-lg-3 col-md-5 p-lg-1">
                <p class="heading-footer">Contact</p>
                <?php if (get_field('contact_footer_info')) {
                    the_field('contact_footer_info');
                } ?>
            </div>
            <div class="col-lg-2 col-md-4 p-lg-1 col-sm-6 col-6">
                <p class="heading-footer">Menu</p>
                <?php
                $menuParameters = [
                    'theme_location' => 'footer',
                    'menu' => 'footer',
                    'container' => false,
                    'echo' => false,
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'menu-footer list-unstyled',
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'depth' => 0,
                ];
                echo wp_nav_menu($menuParameters);
                ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="follow mt-5">
                    <p class="follow__heading text-center">Follow Us</p>
                    <?php
                    echo wp_nav_menu(
                        array(
                            'theme_location' => 'social',
                            'menu' => 'Social links',
                            'menu_class' => 'd-flex  p-0 follow__list justify-content-center flex-wrap flex-row list-unstyled',
                            'depth' => 1,
                            'walker' => new WalkerSocialMenu,
                        )
                    );
                    ?>

                    <!--    <ul class="d-flex  p-0 follow__list justify-content-center flex-wrap flex-row list-unstyled">
                            <li class=""><a class="btn rounded-circle icons__facebook" href="path/to/settings"
                                            aria-label="Settings">
                                </a></li>
                            <li><a class="btn rounded-circle icons__google" href="path/to/settings" aria-label="Settings">
                                </a></li>
                            <li><a class="btn rounded-circle icons__twitter" href="path/to/settings" aria-label="Settings">
                                </a></li>
                            <li><a class="btn rounded-circle icons__instagram" href="path/to/settings"
                                   aria-label="Settings">
                                </a></li>
                        </ul>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-2 col-12 copyright">©All Rights Reserved.</div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
