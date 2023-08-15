<footer>
    <div class="py-12">
        <div class="container">
            <div class="max-w-2xl text-center mx-auto mb-8">
                <h2 class="text-4xl lg:text-5xl tracking-tight font-extrabold mb-8">
                    <? the_field('form_title_field') ?>
                </h2>
                <p class="opacity-60 text-xl mb-8">
                    <? the_field('form_subtitle_field') ?>
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
                        <? the_field('form_email_field') ?>
                    </p>
                    <a href="mailto:<? the_field('email_field') ?>" class="font-bold hover:underline uppercase">
                        <? the_field('email_field') ?>
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
                        <? the_field('form_address_field') ?>
                    </p>
                    <span class="font-bold hover:underline uppercase">
                        <? the_field('address_field') ?>
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
                        <? the_field('form_phone_field') ?>
                    </p>
                    <a href="tel:<? the_field('phone_field') ?>" class="font-bold hover:underline uppercase">
                        <? the_field('phone_field') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 py-12 mt-12">
        <div class="container">
            <div class="flex gap-12">
                <?php if (has_custom_logo()) { ?>
                    <div class="w-20">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php } ?>
                <div class="flex gap-8 items-center">
                    <a rel="noopener noreferrer" target="_blank" href="<?php echo get_theme_mod('instagram') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a rel="noopener noreferrer" target="_blank" href="<?= get_theme_mod('facebook') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a href="mailto:<?= get_theme_mod('email') ?>">
                        <span class="material-symbols-sharp">
                            stacked_email
                        </span>
                    </a>
                </div>
            </div>
            <p class="mt-4 opacity-70">
                &copy;
                <?= date_i18n('Y'); ?> -
                <?= get_bloginfo('name'); ?>
            </p>
        </div>
    </div>
</footer>

<? wp_footer(); ?>

</body>

</html>