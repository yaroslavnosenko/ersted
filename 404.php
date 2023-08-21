<?php get_header(); ?>

<section class="py-12 pt-24 border-b">
    <div class="container">
        <div class="max-w-2xl text-center mx-auto mb-8">
            <h1 class="text-4xl lg:text-6xl tracking-tight font-extrabold mb-8" id="hero-title">
                <? the_field('error_title_field', 'options') ?>
            </h1>
            <p class="text-black/60 text-xl mb-8" id="hero-subtitle">
                <? the_field('error_subtitle_field', 'options') ?>
            </p>
            <a href="<?= esc_url(home_url()) ?>" class="w-full md:w-auto flex gap-3 font-semibold justify-center" id="hero-action">
                <span class="hover:underline">
                    <? the_field('error_action_field', 'options') ?>
                </span>
                <span class="material-symbols-sharp">
                    trending_flat
                </span>
            </a>
        </div>
    </div>
</section>

<? get_footer();
