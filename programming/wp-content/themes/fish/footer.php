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
            <div class="col-lg-4 col-md-12"><a class="logo" href="#">FISH.STORE</a></div>
            <div class="col-lg-3 col-md-5 p-lg-1">
                <p class="heading-footer">Contact</p>
                <p>Lorem ipsum, #239, Tricity Plaza
                    982 Post St, San Francisco
                </p>
                <p>Phone: <a href="tel:9199999988888">+91 99999-88888</a></p>
                <p>E-mail: <a href="mail:mail@test.com">mail@test.com</a></p>
            </div>
            <div class="col-lg-2 col-md-4 p-lg-1 col-sm-6 col-6">
                <p class="heading-footer">Menu</p>
                <ul class="menu-footer list-unstyled">
                    <li><a href="/">Home</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#delivery">Delivery</a></li>
                    <li><a href="#contacts">Contacts</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="follow mt-5">
                    <p class="follow__heading text-center">Follow Us</p>
                    <ul class="d-flex  p-0 follow__list justify-content-center flex-wrap flex-row list-unstyled">
                        <li class=""><a class="btn rounded-circle icons__facebook" href="path/to/settings" aria-label="Settings">
                            </a></li>
                        <li><a class="btn rounded-circle icons__google" href="path/to/settings" aria-label="Settings">
                            </a></li>
                        <li><a class="btn rounded-circle icons__twitter" href="path/to/settings" aria-label="Settings">
                            </a></li>
                        <li><a class="btn rounded-circle icons__instagram" href="path/to/settings" aria-label="Settings">
                            </a></li>
                    </ul>
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
