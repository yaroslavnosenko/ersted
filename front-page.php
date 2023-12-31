<?php get_header(); ?>

<div class="container">

    <!-- HERO -->
    <section class="max-w-2xl mx-auto py-16">
        <h1 class="text-4xl text-center lg:text-6xl tracking-tight font-extrabold mb-8">
            <?php the_title(); ?>
        </h1>
        <div id="hero-content" class="max-h-96 overflow-hidden relative">
            <div class="text-black/60 mb-8 prose"><?php the_content() ?></div>
            <div id="hero-content-shadow" class="absolute bottom-0 h-32 w-full bg-gradient-to-t from-white to-transparent"></div>
        </div>
        <button class="w-full md:w-auto flex gap-3 font-semibold mt-8" id="more-button">
            <span class="hover:underline">
                <?php the_field('hero_action_field', 'options'); ?>
            </span>
            <?php get_template_part('includes/arrow-icon'); ?>
        </button>
    </section>

    <!-- SERVICES -->
    <section class="mx-auto max-w-5xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            <?php
            $services = get_field('services_field', 'options');
            foreach ($services as $post) {
                setup_postdata($post);

            ?>
                <a href="<?php the_permalink(); ?>" class="block aspect-video lg:aspect-square relative">
                    <?php the_post_thumbnail('post-thumbnail', array('class' => 'aspect-video lg:aspect-square object-cover	object-center')); ?>
                    <div class="absolute w-full h-full top-0 flex items-end p-4 bg-gradient-to-t from-black to-transparent">
                        <h2 class="text-white text-xl lg:text-2xl font-medium hover:underline">
                            <?php the_title(); ?>
                        </h2>
                    </div>
                </a>
            <?php
            }
            wp_reset_postdata();
            ?>
        </div>

        <div class=" grid grid-cols-1 lg:grid-cols-2 gap-8 py-16">
            <h2 class="text-2xl lg:text-4xl tracking-tight font-extrabold lg:max-w-md">
                <?php the_field('services_title_field', 'options') ?>
            </h2>
            <div>
                <p class="opacity-60 mb-8">
                    <?php the_field('services_subtitle_field', 'options') ?>
                </p>
                <a class="inline-block relative p-6 py-3 w-full lg:w-auto font-semibold text-black group text-center" href="<?php the_field('services_link_field', 'options') ?>">
                    <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-[#aecedf] group-hover:translate-x-0 group-hover:translate-y-0"></span>
                    <span class="absolute inset-0 w-full h-full border-[3px] border-black"></span>
                    <span class="relative">
                        <?php the_field('services_action_field', 'options') ?>
                    </span>
                </a>
            </div>
        </div>
    </section>
</div>

<!-- FAQ -->
<section class="border-y py-16">
    <div class="container">
        <div class="max-w-5xl mx-auto">
            <?php
            $page = get_field('faq_page_field', 'options');
            if ($page) {
            ?>
                <h2 class="text-2xl lg:text-4xl tracking-tight font-extrabold mb-2">
                    <?php echo $page->post_title ?>
                </h2>
                <p class="opacity-60 text-lg">
                    <?php the_field('faq_subtitle_field', 'options') ?>
                </p>
                <div class="prose prose-p:mb-8 prose-p:opacity-60 prose-headings:mt-0 prose-headings:mb-4 prose-headings:text-xl prose-headings:lg:text-2xl mt-8 max-w-full text-black">
                    <?php echo apply_filters('the_content', $page->post_content); ?>
                </div>
            <?php
            } else {
                echo '<h2>FAQ page not found or not published.</h2>';
            }
            ?>
        </div>
    </div>
</section>

<!-- BLOG -->
<section class="py-16">
    <div class="container">
        <div class="mx-auto max-w-5xl">
            <?php

            $posts_page_id = get_option('page_for_posts');
            $page_title    = get_the_title($posts_page_id);

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $latest_posts = get_posts($args);

            ?>
            <h2 class="text-2xl lg:text-4xl text-center tracking-tight font-extrabold mb-12">
                <?php echo $page_title ?>
            </h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <?php
                if ($latest_posts) {
                    foreach ($latest_posts as $post) {
                        setup_postdata($post);
                ?>
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'aspect-video object-cover	object-center')); ?>
                                <header class="mt-4 text-xl font-semibold hover:underline">
                                    <?php the_title() ?>
                                </header>
                                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="block opacity-70 text-sm mt-2"><?php echo get_the_date(); ?></time>
                            </article>
                        </a>
                <?php
                    }
                    wp_reset_postdata();
                } else {
                    echo '<p>No posts found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <iframe class="w-full h-96 block" src="<?php the_field('google_maps_field', 'options') ?>" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php get_footer(); ?>