<footer>
    <div class="pt-16">
        <div class="container">
            <div class="max-w-2xl text-center mx-auto">
                <h2 class="text-4xl lg:text-5xl tracking-tight font-extrabold">
                    <? the_field('form_title_field', 'options') ?>
                </h2>
                <p class="opacity-60 text-xl">
                    <? the_field('form_subtitle_field', 'options') ?>
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 pt-12">
                <div class="text-center">
                    <div class="inline-block relative p-4 font-semibold text-black group">
                        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-[#aecedf] group-hover:translate-x-0 group-hover:translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full border-[3px] border-black"></span>
                        <span class="relative">
                            <span class="material-symbols-sharp">
                                stacked_email
                            </span>
                        </span>
                    </div>
                    <p class="my-4 opacity-60">
                        <? the_field('form_email_field', 'options') ?>
                    </p>
                    <a href="mailto:<? the_field('email_field', 'options') ?>" class="font-bold hover:underline uppercase">
                        <? the_field('email_field', 'options') ?>
                    </a>
                </div>

                <div class="text-center">
                    <div class="inline-block relative p-4 font-semibold text-black group">
                        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-[#aecedf] group-hover:translate-x-0 group-hover:translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full border-[3px] border-black"></span>
                        <span class="relative">
                            <span class="material-symbols-sharp">
                                storefront
                            </span>
                        </span>
                    </div>
                    <p class="my-4 opacity-60">
                        <? the_field('form_address_field', 'options') ?>
                    </p>
                    <span class="font-bold hover:underline uppercase">
                        <? the_field('address_field', 'options') ?>
                    </span>
                </div>

                <div class="text-center">
                    <div class="inline-block relative p-4 font-semibold text-black group">
                        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-[#aecedf] group-hover:translate-x-0 group-hover:translate-y-0"></span>
                        <span class="absolute inset-0 w-full h-full border-[3px] border-black"></span>
                        <span class="relative">
                            <span class="material-symbols-sharp">
                                phone_in_talk
                            </span>
                        </span>
                    </div>
                    <p class="my-4 opacity-60">
                        <? the_field('form_phone_field', 'options') ?>
                    </p>
                    <a href="tel:<? the_field('phone_field', 'options') ?>" class="font-bold hover:underline uppercase">
                        <? the_field('phone_field', 'options') ?>
                    </a>
                </div>
            </div>
            <div class="pt-16">
                <?php echo do_shortcode('[contact-form-7 id="' . get_field('form_id_field', 'options') . '"]');
                ?>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-20 mt-16">
        <div class="container">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <?php if (has_custom_logo()) { ?>
                        <div class="w-20">
                            <?php the_custom_logo(); ?>
                        </div>
                    <?php } ?>
                    <p class="mt-4 opacity-70">
                        &copy;
                        <?= date_i18n('Y'); ?> -
                        <?= get_bloginfo('name'); ?>
                    </p>
                </div>
                <div class="font-semibold">
                    <?php
                    wp_nav_menu(
                        array(
                            'container_id'    => 'primary-menu',
                            'theme_location'  => 'secondary',
                            'li_class'        => 'footer-menu-li',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </div>
                <div class="font-semibold">
                    <?php
                    wp_nav_menu(
                        array(
                            'container_id'    => 'primary-menu',
                            'theme_location'  => 'primary',
                            'li_class'        => 'footer-menu-li',
                            'fallback_cb'     => false,
                        )
                    );
                    ?>
                </div>
                <div>
                    <div class="flex gap-6 items-center">
                        <a rel="noopener noreferrer" target="_blank" href="<? the_field('facebook_field', 'options') ?>">
                            <? get_template_part('includes/facebook-icon'); ?>
                        </a>
                        <a rel="noopener noreferrer" target="_blank" href="<? the_field('instagram_field', 'options') ?>">
                            <? get_template_part('includes/instagram-icon'); ?>
                        </a>
                        <a rel="noopener noreferrer" target="_blank" href="<? the_field('tiktok_field', 'options') ?>">
                            <? get_template_part('includes/tiktok-icon'); ?>
                        </a>
                        <a href="mailto:<? the_field('email_field', 'options') ?>">
                            <span class="material-symbols-sharp">
                                stacked_email
                            </span>
                        </a>
                    </div>
                    <p class="py-4 md:py-8"><? the_field('address_field', 'options') ?></p>
                    <p class="opacity-70"><? the_field('schedule_field', 'options') ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<? wp_footer(); ?>

</body>

</html>