<?php
/**
 * Template Name: Home page
 *
 * @package flex-theme
 */
get_header();
?>

<div class="main-content">
    <section class="hero-section" style="background-image: url('<?php the_field('hero_background_image'); ?>');">
        <div class="container">
            <div class="inner">
                <h2><?php the_field('hero_title'); ?></h2>
                <p><?php the_field('hero_subtitle'); ?></p>
                <form action="" method="post" autocomplete="off">
                    <div class="form-field">
                        <input type="email" name="email" placeholder="Enter your email" />
                    </div>
                    <div class="submit-field">
                        <button>Start 30-day  Free Trial</button>
                    </div>                    
                </form>
                <div class="hero-desc">
                    <?php the_field('hero_form_desc'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="logo-partner">
        <?php if(get_field('partners_list_images')): ?>
            <div class="container">
                <?php foreach(get_field('partners_list_images') as $item): ?>
                    <div class="logo-item">
                        <img src="<?php echo $item; ?>" alt="" />
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>

    <section class="our-coaches">
        <div class="container">
            <h2>Our Coaches Love Us</h2>

            <?php if(have_rows('coaches_list')): ?>
                <div class="list-coache">
                    <?php while(have_rows('coaches_list')): the_row(); ?>
                        <div class="list-item">
                            <div class="qoute-icon"></div>
                            <div class="img-left" style="background-image: url('<?php the_sub_field('image'); ?>')"></div>
                            <div class="box-qoute">
                                <h4><?php the_sub_field('desc'); ?></h4>
                                <p class="author"><b><?php the_sub_field('name'); ?></b></p>
                                <p><?php the_sub_field('position'); ?> @ <b><?php the_sub_field('place'); ?></b></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>        
        </div>
    </section>
</div>

<?php get_footer(); ?>