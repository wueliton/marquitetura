<?php 

function load_scripts() {
	wp_enqueue_style('template',get_template_directory_uri()."/source/css/style.css", array(), '1.0', 'all');
	wp_enqueue_script('template',get_template_directory_uri()."/source/js/script.js",array('jquery'),false,true);
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size(705, 450, true);
add_image_size('home-size', 445, 445, true);

add_action('wp_enqueue_scripts', 'load_scripts');

register_nav_menus(
	array(
		'index_menu' => "Menu",
	)
);

function themeperso($wp_customize) {
	$wp_customize->add_section('about', array(
		'title'			=> 'Sobre',
		'description'	=> 'Sessão Sobre - Página Inicial'
	));

	$wp_customize->add_setting('set_about_title', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_about_title', array(
		'label'			=> 'Título Sessão Sobre',
		'description'	=> 'Escreva o Título da Sessão Sobre',
		'section'		=> 'about',
		'settings'		=> 'set_about_title',
		'type'			=> 'text'
	));

	$wp_customize->add_setting('set_about_subtitle', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_about_subtitle', array(
		'label'			=> 'Subtítulo',
		'description'	=> 'Escreva o Subtítulo da Sessão Sobre',
		'section'		=> 'about',
		'settings'		=> 'set_about_subtitle',
		'type'			=> 'text'
	));

	$wp_customize->add_setting('set_about_text', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_about_text', array(
		'label'			=> 'Texto Sobre',
		'description'	=> 'Escreva o Texto de Sobre',
		'section'		=> 'about',
		'settings'		=> 'set_about_text',
		'type'			=> 'textarea'
	));

	$wp_customize->add_setting('set_about_image', array(
		'default' 	=> ''
	));

	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ctrl_about', array(
		'label'		=> 'Imagem de Destaque',
		'width'		=> '500',
		'height'	=> '481',
		'section'	=> 'about',
		'settings'	=> 'set_about_image'
	)));

	$wp_customize->add_section('style', array(
		'title'			=> 'Descubra seu Estilo',
		'description'	=> 'Sessão Descubra seu Estilo - Página Inicial'
	));

	$wp_customize->add_setting('set_style_title', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_style_title', array(
		'label'			=> 'Título Sessão Descubra seu Estilo',
		'description'	=> 'Escreva o Título da Sessão Descubra seu Estilo',
		'section'		=> 'style',
		'settings'		=> 'set_style_title',
		'type'			=> 'text'
	));

	$wp_customize->add_setting('set_style_subtitle', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_style_subtitle', array(
		'label'			=> 'Subtítulo Sessão Descubra seu Estilo',
		'description'	=> 'Escreva o Subtítulo da Sessão Descubra seu Estilo',
		'section'		=> 'style',
		'settings'		=> 'set_style_subtitle',
		'type'			=> 'text'
	));

	$wp_customize->add_setting('set_style_text', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_style_text', array(
		'label'			=> 'Texto Sessão Descubra seu Estilo',
		'description'	=> 'Escreva o Texto da Sessão Descubra seu Estilo',
		'section'		=> 'style',
		'settings'		=> 'set_style_text',
		'type'			=> 'textarea'
	));

	$wp_customize->add_setting('set_style_button', array(
		'default' 	=> ''
	));

	$wp_customize->add_control('ctr_style_button', array(
		'label'			=> 'Botão Sessão Descubra seu Estilo',
		'description'	=> 'Escreva o Texto do Botão da Sessão Descubra seu Estilo',
		'section'		=> 'style',
		'settings'		=> 'set_style_button',
		'type'			=> 'text'
	));
}

add_action('customize_register', 'themeperso');

function strip_images($content){
	return preg_replace('/<img[^>]+./','',$content);
}

function my_pagination() {
	global $wp_query;

	echo paginate_links( array(
		'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		'total'        => $wp_query->max_num_pages,
		'current'      => max( 1, get_query_var( 'paged' ) ),
		'format'       => '?paged=%#%',
		'show_all'     => false,
		'type'         => 'plain',
		'end_size'     => 2,
		'mid_size'     => 1,
		'prev_next'    => true,
		'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
		'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
		'add_args'     => false,
		'add_fragment' => '',
	) );
}

function my_related_posts() {
	$exclude = get_cat_ID('Portfólio');
	$args = array('posts_per_page' => 4, 'post_in' => get_the_tag_list(),'category__not_in'=>$exclude);
	$the_query = new WP_Query( $args );
	while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-md-3">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
				<h3><?php the_title(); ?></h3></a>
			</div>
			<?php
		}
	endwhile;
	wp_reset_postdata();
}

function chooseBackground() {
	$background = rand(1,4);
	echo "background{$background}";
}