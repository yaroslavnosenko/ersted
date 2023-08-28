<?php
/*
Template Name: Contacts Page
*/
get_header(); ?>
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
<section>
    <iframe class="w-full h-96 block" src="<?php the_field('google_maps_field', 'options') ?>" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<?php get_footer();
