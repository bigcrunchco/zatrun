<?php 
//Öne çıkan görsel
add_theme_support( 'post-thumbnails' );
//Boyut
set_post_thumbnail_size( 300, 175, true );
add_image_size( 'extra-small', 100, 100, true );
add_image_size( 'small', 300, 175, true );
add_image_size( 'headline', 856, 470, true );

////////////////////////////////////////////////

//Site Başlık
function cavonews_wp_title( $title, $sep ) {
	global $paged, $page;
	//
	if ( is_feed() )
		return $title;

	
	$title .= get_bloginfo( 'name' );

	//
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	//
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'cavonews' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'cavonews_wp_title', 10, 2 );

////////////////////////////////////////////////

//Devamını oku
function new_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

////////////////////////////////////////////////

//Menüler
register_nav_menus( array(
	'main_menu' => 'Üst Menü',
	'footer_menu_1' => 'Alt Menü 1. Blok',
	'footer_menu_2' => 'Alt Menü 2. Blok',
	'footer_menu_3' => 'Alt Menü 3. Blok',
	'footer_menu_4' => 'Alt Menü 4. Blok',
) );


//Menü elemanına class ekleme özelliği
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

////////////////////////////////////////////////

//Aktif Menü
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
            $classes[] = 'active';
     }
     return $classes;
}

////////////////////////////////////////////////

//Sidebar
if ( function_exists('register_sidebar') )
     register_sidebars(1, array(
    'name' => 'Sidebar',
    'before_widget' =>'<div class="sidebox">',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' =>'</div>',
) );

////////////////////////////////////////////////

function cavonews_customizer($wp_customize) {
    //Bölümler
    $wp_customize->add_section('color_settings', array(
        'title' => __('Renk Ayarları', 'cavonews'),
        'priority' => 30,
    ));
    $wp_customize->add_section('featured_settings', array(
        'title' => __('Öne Çıkan Ayarları', 'cavonews'),
        'priority' => 30,
    ));
    $wp_customize->add_section('social_settings', array(
        'title' => __('Sosyal Ağlar', 'cavonews'),
        'priority' => 30,
    ));
    $wp_customize->add_section('ads_settings', array(
        'title' => __('Reklam Yerleşimi', 'cavonews'),
        'priority' => 30,
    ));

    //Reklamlar
        //Otomatik Reklamlar
        $wp_customize->add_setting('ads_auto', array(
            'default' => '',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_auto', array(
            'label' => __('Otomatik Reklamlar', 'cavonews'),
            'description' => __( 'Adsense otomatik reklamlar kodunu yerleştirin.' ),
            'type' => 'textarea', // Textarea tipini belirtin
            'section' => 'ads_settings',
        )));
        //Yazı Altı
        $wp_customize->add_setting('ads_post_bottom', array(
            'default' => '',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_post_bottom', array(
            'label' => __('Yazı Altı Reklam', 'cavonews'),
            'description' => __( 'Adsense Multiplex reklam kodunu yerleştirin.' ),
            'type' => 'textarea', // Textarea tipini belirtin
            'section' => 'ads_settings',
        )));
        //Masthead
        $wp_customize->add_setting('ads_masthead', array(
            'default' => '',
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ads_masthead', array(
            'label' => __('Masthead Reklam', 'cavonews'),
            'description' => __( 'Sitenin en üstü 970x250px reklam kodunu yerleştirin.' ),
            'type' => 'textarea', // Textarea tipini belirtin
            'section' => 'ads_settings',
        )));

    //Sosyal Ağlar
        //Instagram
        $wp_customize->add_setting('instagram', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field', // Kullanıcı adını temizleme fonksiyonu
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'instagram', array(
            'label' => __('Instagram', 'cavonews'),
            'description' => __( 'Instagram Kullanıcı adı' ),
            'section' => 'social_settings',
        )));

        //Facebook
        $wp_customize->add_setting('facebook', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field', // Kullanıcı adını temizleme fonksiyonu
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook', array(
            'label' => __('Facebook', 'cavonews'),
            'description' => __( 'Facebook Kullanıcı adı' ),
            'section' => 'social_settings',
        )));

        //X
        $wp_customize->add_setting('x', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field', // Kullanıcı adını temizleme fonksiyonu
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'x', array(
            'label' => __('X', 'cavonews'),
            'description' => __( 'X Kullanıcı adı' ),
            'section' => 'social_settings',
        )));

        //Youtube
        $wp_customize->add_setting('youtube', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field', // Kullanıcı adını temizleme fonksiyonu
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'youtube', array(
            'label' => __('Youtube', 'cavonews'),
            'description' => __( 'Başında @ olacak şekilde Youtube kullanıcı adı' ),
            'section' => 'social_settings',
        )));

    //Seçenekler
    $wp_customize->add_setting('primary_color', array(
        'default' => '#f73100',
        'sanitize_callback' => 'sanitize_hex_color', // Renk değerini temizleme fonksiyonu
    ));
    $wp_customize->add_setting('secondary_color', array(
        'default' => '#282a31',
        'sanitize_callback' => 'sanitize_hex_color', // Renk değerini temizleme fonksiyonu
    ));
	$wp_customize->add_setting('main_background_color', array(
        'default' => '#f2f2f3',
        'sanitize_callback' => 'sanitize_hex_color', // Renk değerini temizleme fonksiyonu
    ));
	$wp_customize->add_setting('site_logo', array(
        'default' => get_template_directory_uri() . '/images/cavonews.png',
        'sanitize_callback' => 'esc_url_raw', // URL'yi temizleme fonksiyonu
    ));
	$wp_customize->add_setting('site_icon', array(
        'default' => get_template_directory_uri() . '/images/cavonews-favicon.png',
        'sanitize_callback' => 'esc_url_raw', // URL'yi temizleme fonksiyonu
    ));

    //Inputlar
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primary_color', array(
        'label' => __('Ana Renk', 'cavonews'),
        'section' => 'color_settings',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secondary_color', array(
        'label' => __('İkincil Renk', 'cavonews'),
        'section' => 'color_settings',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_background_color', array(
        'label' => __('Arkaplan Rengi', 'cavonews'),
        'section' => 'color_settings',
    )));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
        'label' => __('Site Logosu', 'cavonews'),
        'section' => 'title_tagline',
        'settings' => 'site_logo',
    )));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_icon', array(
        'label' => __('Site İkonu', 'cavonews'),
        'section' => 'title_tagline',
        'settings' => 'site_icon',
    )));

	// Kategori seçimi
    $wp_customize->add_setting('headline_category', array(
        'default' => '',
        'sanitize_callback' => 'absint', // Sayıyı temizleme fonksiyonu
    ));
    $wp_customize->add_setting('featured_category', array(
        'default' => '',
        'sanitize_callback' => 'absint', // Sayıyı temizleme fonksiyonu
    ));
	class WP_Customize_Category_Dropdown_Control extends WP_Customize_Control {
        public function render_content() {
            $categories = get_categories();
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select <?php $this->link(); ?>>
                    <?php
                    foreach ( $categories as $category ) {
                        echo '<option value="' . esc_attr( $category->term_id ) . '" ' . selected( $this->value(), $category->slug, false ) . '>';
                        echo esc_html( $category->name );
                        echo '</option>';
                    }
                    ?>
                </select>
                <?php if ( ! empty( $this->description ) ) { ?>
                    <p class="description"><?php echo esc_html( $this->description ); ?></p>
                <?php } ?>
            </label>
            <?php
        }
    }
    
    $wp_customize->add_control(
        new WP_Customize_Category_Dropdown_Control($wp_customize, 'headline_category',
            array(
                'label'      => __( 'Manşet Kategorisi', 'cavonews' ),
                'description' => __( 'Ana manşette gözükecek yazıların geleceği kategori.' ),
                'settings'   => 'headline_category',
                'priority'   => 10,
                'section'    => 'featured_settings',
                'type'       => 'select',
            )
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Category_Dropdown_Control($wp_customize, 'featured_category',
            array(
                'label'      => __( 'Öne Çıkanlar Kategorisi', 'cavonews' ),
                'description' => __( 'Öne çıkanlarda gözükecek yazıların geleceği kategori.' ),
                'settings'   => 'featured_category',
                'priority'   => 10,
                'section'    => 'featured_settings',
                'type'       => 'select',
            )
        )
    );
}

add_action('customize_register', 'cavonews_customizer');

////////////////////////////////////////////////

//Popüler Haberler
function cavonews_popular_posts($post_id) {
	$count_key = 'popular_posts';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
function cavonews_track_posts($post_id) {
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	cavonews_popular_posts($post_id);
}
add_action('wp_head', 'cavonews_track_posts');

////////////////////////////////////////////////

//Tema Destekleri

add_theme_support( 'html5', array( 'search-form' ) );
add_theme_support('custom-header');

////////////////////////////////////////////////

