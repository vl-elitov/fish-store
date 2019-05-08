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
                    <h1 class="display-4 big-text"><?php if (get_field('jumborton')) the_field('jumborton'); ?></h1>
                    <p class="lead my-3"><?php if (get_field('main-text-after-jumborton')) the_field('main-text-after-jumborton'); ?></p>
                    <p>
                        <button data-toggle="modal" data-target=".contact-form"
                                class="rounded-0 contact-form-btn btn d-lg-none btn-primary btn-lg border-0 btn-block float-right text-uppercase text-white"
                                type="submit">Write to us
                        </button>
                    </p>
                </div>
                <div class="col-lg-5 offset-lg-1 px-0">
                    <?php echo do_shortcode('[contact-form-7 id="5" html_class="contact-form modal d-lg-block animated zoomIn needs-validation" title="Contact form 1"]') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="products">
        <h2 class="text-center">Products</h2>
        <?php
        $args = array('post_type' => 'Product', 'posts_per_page' => 100);
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
        <div class="container p-md-0 p-sm-0">
            <div class="row">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-lg-4 col-md-6 p-md-1 card border-0 p-lg-3 products__element">
                        <?php the_post_thumbnail(['', '250'], ['class' => 'card-img-top products__image']); ?>
                        <div class="card-body">
                            <p class="text-center products__title"><?php the_title(); ?></p>
                            <p class="text-center products__price"><?php the_field('price') ?><?php the_field('unit') ?>
                                / <?php the_field('weight_measure') ?> </p>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section id="delivery" class="delivery">
        <h2 class="text-center">Delivery</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="p-0"><?php if (get_field('delivery_text')) the_field('delivery_text') ?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <h2 class="text-center">Contacts</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="p-0"><?php if (get_field('about_contacts')) the_field('about_contacts') ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="map">
                        <?php if (get_field('map')) the_field('map') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>