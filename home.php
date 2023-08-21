<?php

get_header();

$posts_page_id = get_option('page_for_posts');
$page_title = get_the_title($posts_page_id);
$home_url = esc_url(home_url());

?>

<div class="py-24 mb-12 border-b">
    <div class="container">
        <div class="mx-auto max-w-5xl">
            <header class="mb-12">
                <h1 class="text-4xl lg:text-6xl text-center tracking-tight font-extrabold mb-2">
                    <?php echo $page_title ?>
                </h1>
                <div class="breadcrumb opacity-70 text-center">
                    <a class="breadcrumb-link hover:underline" href="<?php echo $home_url ?>"><?php echo __("Home") ?></a>
                    <span> / </span>
                    <?php echo $page_title ?>
                </div>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <?php the_post_thumbnail('post-thumbnail', array('class' => 'aspect-video object-cover	object-center')); ?>
                                <header class="mt-4 text-xl font-semibold hover:underline">
                                    <?php the_title() ?>
                                </header>
                                <time itemprop="datePublished" datetime="<?php echo get_the_date('c'); ?>" class="block opacity-70 text-sm mt-2"><?php echo get_the_date(); ?></time>
                            </article>
                        </a>
                <?php
                    }
                } else {
                    echo '<p>No posts found.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
