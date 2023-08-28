<article class="pb-16" id="post-<?php the_ID(); ?>">
    <header class="text-center py-16">
        <?php the_title(sprintf('<h1 class="text-4xl lg:text-6xl tracking-tight font-extrabold pb-2"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
        <?php theme_breadcrumbs(); ?>
        <?php if (get_post_type() !== 'page') { ?>
            <time datetime="<?php the_date('c'); ?>" itemprop="datePublished" class="block"><?php echo get_the_date(); ?></time>
        <?php } ?>
    </header>
    <div class="flex justify-center">
        <?php the_post_thumbnail() ?>
    </div>
    <div class="prose mx-auto mt-16">
        <?php the_content(); ?>
    </div>
</article>