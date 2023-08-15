<?
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

add_action('wp_enqueue_scripts', 'init_styles');
add_action('wp_enqueue_scripts', 'init_scripts');

// Custom Fields

add_action('acf/include_fields', function () {
	if (!function_exists('acf_add_local_field_group')) {
		return;
	}

	$front_page_location = array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
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
				'type' => 'text',
				'default_value' => 'https://tiktok.com',
				'placeholder' => 'https://tiktok.com/username',
			),
			array(
				'key' => 'address_field',
				'label' => 'Address',
				'name' => 'address',
				'type' => 'text',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => 'Some address',
				'placeholder' => 'Some address',
			),
			array(
				'key' => 'schedule_field',
				'label' => 'Schedule',
				'name' => 'schedule',
				'type' => 'text',
				'wrapper' => array(
					'width' => '50',
				),
				'default_value' => 'Address',
				'placeholder' => 'Address',
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
		'key' => 'hero_settings_group',
		'title' => 'Hero Settings',
		'fields' => array(
			array(
				'key' => 'hero_title_field',
				'label' => 'Hero Title',
				'name' => 'hero_title',
				'type' => 'text',
				'default_value' => 'Hello',
				'placeholder' => 'Hero Title',
			),
			array(
				'key' => 'hero_subtitle_field',
				'label' => 'Hero Subtitle',
				'name' => 'hero_subtitle',
				'type' => 'text',
				'default_value' => 'World',
				'placeholder' => 'Hero Subtitle',
			),
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
				'allow_archives' => 1,
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
				'allow_archives' => 1,
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
				'return_format' => 'object',
			),
		),
		'location' => $front_page_location,
	));
});
