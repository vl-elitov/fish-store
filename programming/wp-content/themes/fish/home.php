<?php
/**
 * Created by PhpStorm.
 * User: Vladimir
 * Email: anufrievv.vvladimir@gmail.com
 * Date: 4/23/19
 * Time: 2:27 PM
 */
?>
<?php get_header(); ?>
<section id="first-screen" class="first-screen">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="display-4 big-text">Welcome to our
                    fish store!</h1>
                <p class="lead my-3">Only here you can buy the most delicious
                    unique fish throughout the state.</p>
                <p>
                    <button data-toggle="modal" data-target=".contact-form"
                            class="rounded-0 contact-form-btn btn d-lg-none btn-primary btn-lg border-0 btn-block float-right text-uppercase text-white"
                            type="submit">Write to us
                    </button>
                </p>
            </div>
            <div class="col-lg-5 offset-lg-1 px-0">
                <form class="contact-form modal d-lg-block animated zoomIn needs-validation" novalidate="">
                    <div class="container">
                        <div class="row">
                            <div class="col-10 col-lg-12">
                                <p class="text-center text-uppercase contact-form__heading">Contact Us</p>
                            </div>
                            <div class="col-2 d-lg-none">
                                <button type="button" class="close contact-form__close" data-dismiss="modal"
                                        aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder=""
                                       value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="PhoneNumber">Phone number</label>
                                <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber"
                                       placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid phone number is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="message">Text message</label>
                                <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                                <div class="invalid-feedback">
                                    Valid text message is required.
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn contact-form__send btn-primary btn-lg btn-block" type="submit">
                                    SEND
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 d-lg-none">
                                <div class="follow">
                                    <p class="follow__heading text-center">Follow Us</p>
                                    <ul class="d-flex  p-0 follow__list justify-content-center flex-wrap flex-row list-unstyled">
                                        <li class=""><a class="btn rounded-circle icons__facebook"
                                                        href="path/to/settings" aria-label="Settings">
                                            </a></li>
                                        <li><a class="btn rounded-circle icons__google" href="path/to/settings"
                                               aria-label="Settings">
                                            </a></li>
                                        <li><a class="btn rounded-circle icons__twitter" href="path/to/settings"
                                               aria-label="Settings">
                                            </a></li>
                                        <li><a class="btn rounded-circle icons__instagram" href="path/to/settings"
                                               aria-label="Settings">
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>


                </form>
            </div>
        </div>
    </div>
</section>
<section id="products" class="products">
    <h2 class="text-center">Products</h2>
    <div class="container p-md-0 p-sm-0">
        <div class="row">
            <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                <img class="card-img-top products__image"
                     data-src="holder.js/511px550?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                     alt="Thumbnail [100%x225]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169de8115a8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169de8115a8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.3515625%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="card-body">
                    <p class="text-center products__title">Cyprinus carpio</p>
                    <p class="text-center products__price">20$/kg</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                <img class="card-img-top products__image"
                     data-src="holder.js/511px550?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                     alt="Thumbnail [100%x225]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169de8115a8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169de8115a8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.3515625%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="card-body">
                    <p class="text-center products__title">Cyprinus carpio</p>
                    <p class="text-center products__price">20$/kg</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                <img class="card-img-top products__image"
                     data-src="holder.js/511px550?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                     alt="Thumbnail [100%x225]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169de8115a8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169de8115a8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.3515625%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="card-body">
                    <p class="text-center products__title">Cyprinus carpio</p>
                    <p class="text-center products__price">20$/kg</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                <img class="card-img-top products__image"
                     data-src="holder.js/511px550?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                     alt="Thumbnail [100%x225]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169de8115a8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169de8115a8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.3515625%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="card-body">
                    <p class="text-center products__title">Cyprinus carpio</p>
                    <p class="text-center products__price">20$/kg</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                <img class="card-img-top products__image"
                     data-src="holder.js/511px550?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                     alt="Thumbnail [100%x225]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169de8115a8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169de8115a8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.3515625%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="card-body">
                    <p class="text-center products__title">Cyprinus carpio</p>
                    <p class="text-center products__price">20$/kg</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                <img class="card-img-top products__image"
                     data-src="holder.js/511px550?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                     alt="Thumbnail [100%x225]"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_169de8115a8%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_169de8115a8%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.3515625%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
                <div class="card-body">
                    <p class="text-center products__title">Cyprinus carpio</p>
                    <p class="text-center products__price">20$/kg</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="delivery" class="delivery">
    <h2 class="text-center">Delivery</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda autem
                    non quam!
                    Doloribus eius enim, error exercitationem illum laboriosam molestiae necessitatibus nisi officia
                    optio pariatur quod velit voluptates voluptatibus!</p>
            </div>
        </div>
    </div>
</section>
<section id="contacts" class="contacts">
    <h2 class="text-center">Contacts</h2>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda autem
                    non quam!
                    Doloribus eius enim, error exercitationem illum laboriosam molestiae necessitatibus nisi officia
                    optio pariatur quod velit voluptates voluptatibus!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12087.828828836036!2d-74.00234905741695!3d40.76296592168228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25850a4606051%3A0x1976b26060ef9a02!2z0JDQtNGB0LrQsNGPINC60YPRhdC90Y8sINCd0YzRji3QmdC-0YDQuiwg0KHQqNCQ!5e0!3m2!1sru!2sru!4v1554377856352!5m2!1sru!2sru"
                            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>