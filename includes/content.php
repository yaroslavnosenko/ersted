<article id="post-<?php the_ID(); ?>">
    <header class="text-center">
        <? the_title(sprintf('<h2 class="text-4xl lg:text-6xl tracking-tight font-extrabold"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
        <? theme_breadcrumbs(); ?>
        <? if (get_post_type() !== 'page') { ?>
            <time datetime="<? the_date('c'); ?>" itemprop="datePublished" class="block"><?= get_the_date(); ?></time>
        <? } ?>
    </header>
    <div class="flex justify-center">
        <? the_post_thumbnail() ?>
    </div>
    <div class="prose mx-auto">
        <? the_content(); ?>
    </div>
</article>