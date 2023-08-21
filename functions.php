<?php
function init_styles()
{
	wp_register_style(
		'theme',
		get_template_directory_uri() . '/style.css',
		array(),
		false,
		'all'
	);
	wp_enqueue_style('theme');
}

function init_scripts()
{
	wp_register_script(
		'theme',
		get_template_directory_uri() . '/script.js',
		false,
		false,
		true
	);
	wp_enqueue_script('theme');
}

function theme_setup()
{
	register_nav_menus(
		array(
			'primary'   => __('Primary Menu'),
			'secondary' => __('Secondary Menu'),
		)
	);
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

function nav_menu_add_li_class($classes, $item, $args, $depth)
{
	if (isset($args->li_class)) {
		$classes[] = $args->li_class;
	}

	if (isset($args->{"li_class_$depth"})) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}


add_action('wp_enqueue_scripts', 'init_styles');
add_action('wp_enqueue_scripts', 'init_scripts');
add_action('after_setup_theme', 'theme_setup');
add_filter('nav_menu_css_class', 'nav_menu_add_li_class', 10, 4);


// Custom Fields

add_action('acf/include_fields', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	$front_page_location = array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-options',
			),
		),
	);

	acf_add_local_field_group(array(
		'key' => 'basic_settings_group',
		'title' => 'Basic Settings',
		'fields' => array(
			array(
				'key' => 'email_field',
				'label' => 'Email',
				'name' => 'email',
				'type' => 'email',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => 'admin@ersted.com',
				'placeholder' => 'Email',
			),
			array(
				'key' => 'phone_field',
				'label' => 'Phone',
				'name' => 'phone',
				'type' => 'text',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => '+380950000000',
				'placeholder' => '+380....',
			),
			array(
				'key' => 'instagram_field',
				'label' => 'Instagram',
				'name' => 'instagram',
				'type' => 'url',
				'default_value' => 'https://instagram.com',
				'placeholder' => 'https://instagram.com/username',
			),
			array(
				'key' => 'facebook_field',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'url',
				'default_value' => 'https://fb.com',
				'placeholder' => 'https://fb.com/username',
			),
			array(
				'key' => 'tiktok_field',
				'label' => 'TikTok',
				'name' => 'tiktok',
				'type' => 'url',
				'default_value' => 'https://tiktok.com',
				'placeholder' => 'https://tiktok.com/username',
			),
			array(
				'key' => 'address_field',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'textarea',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => '136 W. Central Drive
				South El Monte, CA 91733',
				'placeholder' => 'Address',
				'new_lines' => 'br',
			),
			array(
				'key' => 'schedule_field',
				'label' => 'Schedule',
				'name' => 'schedule',
				'type' => 'textarea',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => 'Address',
				'placeholder' => 'Schedule',
				'new_lines' => 'br',
			),
			array(
				'key' => 'google_maps_field',
				'label' => 'Google Maps',
				'name' => 'google_maps',
				'type' => 'url',
				'default_value' => 'some value',
				'placeholder' => 'some value link',
			),
		),
		'location' => $front_page_location,
	));

	acf_add_local_field_group(array(
		'key' => 'hero_settings_group',
		'title' => 'Hero Settings',
		'fields' => array(
			array(
				'key' => 'hero_action_field',
				'label' => 'Hero Action',
				'name' => 'hero_action',
				'type' => 'text',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => 'Learn More',
				'placeholder' => 'Hero Action',
			),
			array(
				'key' => 'hero_link_field',
				'label' => 'Hero Link',
				'name' => 'hero_link',
				'type' => 'page_link',
				'wrapper' => array(
					'width' => '50',
				),
				'post_type' => array(
					0 => 'page',
				),
				'allow_archives' => false,
			),
		),
		'location' => $front_page_location,
	));

	acf_add_local_field_group(array(
		'key' => 'services_settings_group',
		'title' => 'Services Settings',
		'fields' => array(
			array(
				'key' => 'services_title_field',
				'label' => 'Services Title',
				'name' => 'services_title',
				'type' => 'text',
				'default_value' => 'Services',
				'placeholder' => 'Services Title',
			),
			array(
				'key' => 'services_subtitle_field',
				'label' => 'Services Subtitle',
				'name' => 'services_subtitle',
				'type' => 'text',
				'default_value' => 'Super Services',
				'placeholder' => 'Super Services',
			),
			array(
				'key' => 'services_action_field',
				'label' => 'Services Action',
				'name' => 'services_action',
				'type' => 'text',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => 'Free Consulting',
				'placeholder' => 'Free',
			),
			array(
				'key' => 'services_link_field',
				'label' => 'Services Link',
				'name' => 'services_link',
				'type' => 'page_link',
				'wrapper' => array(
					'width' => '50',
				),
				'post_type' => array(
					0 => 'page',
				),
				'allow_archives' => false,
			),
			array(
				'key' => 'services_field',
				'label' => 'Services',
				'name' => 'services',
				'type' => 'relationship',
				'post_type' => array(
					0 => 'page',
				),
				'filters' => array(
					0 => 'search',
				),
				'elements' => array(
					0 => 'featured_image',
				),
				'return_format' => 'object',
			),
		),
		'location' => $front_page_location,
	));

	acf_add_local_field_group(array(
		'key' => 'faq_setting_group',
		'title' => 'FAQ Settings',
		'fields' => array(
			array(
				'key' => 'faq_page_field',
				'label' => 'FAQ Page',
				'name' => 'faq_page',
				'type' => 'post_object',
				'post_type' => array(
					0 => 'page',
				),
				'return_format' => 'object',
			),
			array(
				'key' => 'faq_subtitle_field',
				'label' => 'FAQ Subtitle',
				'name' => 'faq_subtitle',
				'type' => 'text',
				'default_value' => 'Some FAQ',
				'placeholder' => 'Some FAQ',
			),
		),
		'location' => $front_page_location,
	));

	acf_add_local_field_group(array(
		'key' => 'form_setting_group',
		'title' => 'Form Settings',
		'fields' => array(
			array(
				'key' => 'form_title_field',
				'label' => 'Form Title',
				'name' => 'form_title',
				'type' => 'text',
				'default_value' => 'Form Title',
				'placeholder' => 'Form Title',
			),
			array(
				'key' => 'form_subtitle_field',
				'label' => 'Form Subtitle',
				'name' => 'form_subtitle',
				'type' => 'text',
				'default_value' => 'Form Subtitle',
				'placeholder' => 'Form Subtitle',
			),
			array(
				'key' => 'form_email_field',
				'label' => 'Form Email Description',
				'name' => 'form_email',
				'type' => 'textarea',
				'wrapper' => array(
					'width' => '33',
				),
				'default_value' => 'Form Email Description',
				'placeholder' => 'Form Email Description',
			),
			array(
				'key' => 'form_address_field',
				'label' => 'Form Address Description',
				'name' => 'form_address',
				'type' => 'textarea',
				'wrapper' => array(
					'width' => '33',
				),
				'default_value' => 'Form Address Description',
				'placeholder' => 'Form Address Description',
			),
			array(
				'key' => 'form_phone_field',
				'label' => 'Form Phone Description',
				'name' => 'form_phone',
				'type' => 'textarea',
				'wrapper' => array(
					'width' => '33',
				),
				'default_value' => 'Form Subtitle',
				'placeholder' => 'Form Subtitle',
			),
			array(
				'key' => 'form_id_field',
				'label' => 'Form ID',
				'name' => 'form_id',
				'type' => 'text',
				'default_value' => '0',
				'placeholder' => 'Form ID',
			),
		),
		'location' => $front_page_location,
	));

	acf_add_local_field_group(array(
		'key' => 'faq_setting_group',
		'title' => 'FAQ Settings',
		'fields' => array(
			array(
				'key' => 'faq_page_field',
				'label' => 'FAQ Page',
				'name' => 'faq_page',
				'type' => 'post_object',
				'post_type' => array(
					0 => 'page',
				),
				'return_format' => 'object',
			),
			array(
				'key' => 'faq_subtitle_field',
				'label' => 'FAQ Subtitle',
				'name' => 'faq_subtitle',
				'type' => 'text',
				'default_value' => 'Some FAQ',
				'placeholder' => 'Some FAQ',
			),
		),
		'location' => $front_page_location,
	));

	acf_add_local_field_group(array(
		'key' => 'error_setting_group',
		'title' => 'Error Page Settings',
		'fields' => array(
			array(
				'key' => 'error_title_field',
				'label' => '404 Title',
				'name' => 'error_title',
				'type' => 'text',
				'default_value' => '404 Title',
				'placeholder' => '404 Title',
			),
			array(
				'key' => 'error_subtitle_field',
				'label' => '404 Subtitle',
				'name' => 'error_subtitle',
				'type' => 'text',
				'default_value' => '404 Subtitle',
				'placeholder' => '404 Subtitle',
			),
			array(
				'key' => 'error_action_field',
				'label' => '404 Action',
				'name' => 'error_action',
				'type' => 'text',
				'default_value' => '404 Action',
				'placeholder' => '404 Action',
			),
		),
		'location' => $front_page_location,
	));
});

// Breadcrumbs

function theme_breadcrumbs()
{
	global $post;
	echo '<div class="opacity-70">';

	if (!is_front_page()) {
		echo '<a class="hover:underline" href="' . esc_url(home_url('/')) . '">' . __('Home') . '</a>';

		$ancestors = get_post_ancestors($post);
		$ancestors = array_reverse($ancestors);

		foreach ($ancestors as $ancestor) {
			echo '<span> / </span>';
			echo '<a class="hover:underline"s href="' . esc_url(get_permalink($ancestor)) . '">' . get_the_title($ancestor) . '</a>';
		}
	}

	echo '<span> / </span>';
	echo '<span>' . get_the_title() . '</span>';
	echo '</div>';
}

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}
