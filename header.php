<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body class="bg-white">
	<header class="sticky top-0 bg-white/90 backdrop-blur-lg z-10 flex flex-col">
		<div class="container order-2">
			<div class="lg:flex lg:justify-between lg:items-center lg:gap-6">
				<div class="flex justify-between items-center h-20">
					<div class="flex items-center gap-12 lg:gap-6">
						<?php if (has_custom_logo()) { ?>
							<div class="w-20">
								<?php the_custom_logo(); ?>
							</div>
						<?php } else { ?>
							<div>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>
								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>
							</div>
						<?php } ?>
						<div class="text-sm hidden lg:block">
							<p>
								<?php the_field('address_field', 'options') ?>
							</p>
						</div>
						<div class="text-sm hidden lg:block">
							<p>
								<?php the_field('schedule_field', 'options') ?>
							</p>
						</div>
					</div>

					<div class="lg:hidden">
						<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
							<span class="material-symbols-sharp">
								menu
							</span>
						</a>
					</div>
				</div>

				<div class='flex gap-12 items-center justify-between mb-4 lg:mb-0'>
					<div class="flex gap-6 items-center">
						<a rel="noopener noreferrer" target="_blank" href="<?php the_field('facebook_field', 'options') ?>">
							<?php get_template_part('includes/facebook-icon'); ?>
						</a>
						<a rel="noopener noreferrer" target="_blank" href="<?php the_field('instagram_field', 'options') ?>">
							<?php get_template_part('includes/instagram-icon'); ?>
						</a>
						<a rel="noopener noreferrer" target="_blank" href="<?php the_field('tiktok_field', 'options') ?>">
							<?php get_template_part('includes/tiktok-icon'); ?>
						</a>
						<a href="mailto:<?php the_field('email_field', 'options') ?>">
							<?php get_template_part('includes/mail-icon'); ?>
						</a>
					</div>
					<a href="tel:<?php the_field('phone_field', 'options') ?>" class="relative px-6 py-3 font-semibold text-black group">
						<span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform -translate-x-2 -translate-y-2 bg-[#aecedf] group-hover:translate-x-0 group-hover:translate-y-0"></span>
						<span class="absolute inset-0 w-full h-full border-[3px] border-black"></span>
						<span class="relative flex gap-4">
							<?php the_field('phone_field', 'options') ?>
						</span>
					</a>
				</div>
			</div>
		</div>

		<div class="order-4 lg:order-1 bg-gray-50">
			<div class="container">
				<?php
				wp_nav_menu(
					array(
						'container_id'    => 'primary-menu',
						'container_class' => 'main-menu hidden lg:block py-6 lg:py-0   border-t lg:border-none',
						'menu_class'      => 'lg:flex mx-0 gap-x-6 flex-wrap justify-center',
						'theme_location'  => 'primary',
						'li_class'        => 'font-semibold text-sm p-2',
						'fallback_cb'     => false,
					)
				);
				?>
			</div>
		</div>

		<div class="order-3 lg:order-3">
			<div class="container">
				<?php
				wp_nav_menu(
					array(
						'container_id' => 'secondary-menu',
						'container_class' => 'main-menu hidden lg:block py-6 lg:py-0 lg:pb-2 border-t lg:border-none',
						'menu_class' => 'lg:flex mx-0 gap-x-6 flex-wrap justify-center',
						'theme_location' => 'secondary',
						'li_class' => 'font-semibold text-sm p-2',
						'fallback_cb' => false,
					)
				);
				?>
			</div>
		</div>
	</header>

	<div id="top" class="w-12 h-12 p-3 text-white bg-black fixed right-4 z-10 cursor-pointer transition-all bottom-4">
		<span class="material-symbols-sharp">
			arrow_upward
		</span>
	</div>