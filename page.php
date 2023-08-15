<?php get_header(); ?>
<div class="border-b">
    <div class="container">
        <div class="mx-auto max-w-5xl">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('includes/content');
                }
            }
            ?>
        </div>
    </div>
</div>
<?php get_footer();
