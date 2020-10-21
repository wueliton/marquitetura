<?php /* Template Name: Blog */
$keywords = "Marquitetura, MARQ, Arquitetura, Arquiteto, Arquiteto em São Paulo, Arquiteto na Grande São Paulo, Arquiteto consultoria on-line, Arquiteto online, Arquitetura moderna, Melhor preço Arquiteto, Casa dos meus Sonhos, Arquitetura dos meus Sonhos, projeto de casa, design de interiores, interior design, decoração, casa moderna, blog, novidades, newsletter";
$title = "Blog";
$description = "Descubra e Acompanhe todas as nossas Novidades!";
include("includes/head.php");
?>
<body <?=body_class();?>>
	<header class="internalPage">
		<a href="#menu" class="toggle" id="toggleBtn">
			<div class="nav-icon1">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</a>
		<a href="<?=get_site_url();?>" class="logo"><img src="<?=get_template_directory_uri()?>/source/images/logo_black.png" alt="Marquitetura" title="Marquitetura"></a>	
	</header>
	<div class="menuContainer">
		<div class="toggleMenu">
			<?=wp_nav_menu("menu");?>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1><?=the_title()?></h1>
				</div>
				<div class="col-md-7">
					<p></p>
				</div>
			</div>
		</div>
	</section>

	<div class="container blogPage">
		<?php
			$exclude = get_cat_ID('Portfólio');
			$wp_query = new WP_Query(array('category__not_in'=>$exclude,'posts_per_page' => 5,"paged" => $paged,'meta_query' => array(array('key' => '_thumbnail_id'))));

			if($wp_query->have_posts()) {
				while($wp_query->have_posts()) {
					$wp_query->the_post();

					$text = wp_strip_all_tags(get_the_content());
					$textResume = explode("\n", wordwrap($text, 165));
					$categories = get_the_category();

			?>
				<div class="col-md-12">
					<a href="<?=get_permalink()?>"><h2><?=the_title();?></h2></a>
					<div class="postDetails">
						<?=the_category()?>
						<span class="date">Postado em: <span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?></span></span>
					</div>
					<a href="<?=get_permalink()?>"><?=the_post_thumbnail()?></a>
					<p>
					<?php
						$text = wp_strip_all_tags(get_the_content());
						$textResume = explode("\n", wordwrap($text, 360));
						echo $textResume[0]."...";
					?>
					</p>
					<a href="<?=get_permalink()?>"><button class="btn-primary right">Continue lendo</button></a>
				</div>
			<?php
				}
			}
			else {
			?>
				<div class="col-md-12">
					<h3>Desculpe, mas ainda não temos nenhum conteúdo.</h3>
				</div>
			<?php
			}
		?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pagination">
				    <?php
				        echo paginate_links( array(
				            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
				            'total'        => $wp_query->max_num_pages,
				            'current'      => max( 1, get_query_var( 'paged' ) ),
				            'format'       => '/page/%#%',
				            'show_all'     => false,
				            'type'         => 'plain',
				            'end_size'     => 2,
				            'mid_size'     => 1,
				            'prev_next'    => true,
				            'prev_text'    => sprintf( '<i></i> %1$s', __( '<button class="btn-primary">Posts Recentes</button>', 'text-domain' ) ),
				            'next_text'    => sprintf( '%1$s <i></i>', __( '<button class="btn-primary">Mais Antigos</button>', 'text-domain' ) ),
				            'add_args'     => false,
				            'add_fragment' => '',
				        ) );
				    ?>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer() ?>
</body>
</html>