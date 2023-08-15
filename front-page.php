<? get_header(); ?>

<div class="container">
    <section class="max-w-2xl text-center mx-auto">
        <h1 class="text-4xl lg:text-6xl tracking-tight font-extrabold mb-8">
            <? the_title(); ?>
        </h1>
        <div class="text-black/60 text-xl mb-8"><? the_content() ?></div>
        <a href="<?= get_permalink(get_theme_mod('hero-action-page')) ?>" class="w-full md:w-auto flex gap-3 font-semibold justify-center">
            <span class="hover:underline">
                <?= get_field('hero_action'); ?>
            </span>
            <span class="material-symbols-sharp">
                trending_flat
            </span>
        </a>
    </section>
    <section class="max-w-2xl text-center mx-auto">
        <h1 class="text-4xl lg:text-6xl tracking-tight font-extrabold mb-8">
            <? the_title(); ?>
        </h1>
        <div class="text-black/60 text-xl mb-8"><? the_content() ?></div>
        <a href="<?= get_permalink(get_theme_mod('hero-action-page')) ?>" class="w-full md:w-auto flex gap-3 font-semibold justify-center">
            <span class="hover:underline">
                <?= get_field('hero_action'); ?>
            </span>
            <span class="material-symbols-sharp">
                trending_flat
            </span>
        </a>
    </section>
</div>


<? get_footer(); ?>