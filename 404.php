<?php get_header(); ?>

<section class="py-12 pt-24 border-b">
    <div class="container">
        <div class="max-w-2xl text-center mx-auto mb-8">
            <h1 class="text-4xl lg:text-6xl tracking-tight font-extrabold mb-8" id="hero-title">
                <?php the_field('error_title_field', 'options') ?>
            </h1>
            <p class="text-black/60 text-xl mb-8" id="hero-subtitle">
                <?php the_field('error_subtitle_field', 'options') ?>
            </p>
            <a href="<?php echo esc_url(home_url()) ?>" class="w-full md:w-auto flex gap-3 font-semibold justify-center" id="hero-action">
                <span class="hover:underline">
                    <?php the_field('error_action_field', 'options') ?>
                </span>
                <?php get_template_part('includes/arrow-icon'); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer();
