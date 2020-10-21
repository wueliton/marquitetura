<?php /* Template Name: Portfólio */
$keywords = "Marquitetura, MARQ, Arquitetura, Arquiteto, Arquiteto em São Paulo, Arquiteto na Grande São Paulo, Arquiteto consultoria on-line, Arquiteto online, Arquitetura moderna, Melhor preço Arquiteto, Casa dos meus Sonhos, Arquitetura dos meus Sonhos, projeto de casa, design de interiores, interior design, decoração, casa moderna";
$title = "Portfólio";
$description = "Projetos de arquitetura e interiores, trazendo sempre um design único como parte principal de suas concepções arquitetônicas.";
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

	<section class="titleSection">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1>portfólio</h1>
				</div>
				<div class="col-md-7">
					<p>Descubra um universo inteiro esperando por você.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="portfolioPage">
		<div class="row">
			<?php
			$portfolio = new WP_Query(array('category_name'=>'Portfólio'));

			if($portfolio->have_posts()) {
				while($portfolio->have_posts()) {
					$portfolio->the_post();

					$text = wp_strip_all_tags(get_the_content());
					$textResume = explode("\n", wordwrap($text, 165));
			?>
			<a href="<?=get_permalink()?>" class="col-xl-4 col-lg-6 col-sm-6 col-12">
				<?=the_post_thumbnail()?>
				<div class="imageText">
					<h3><?=get_the_title()?></h3>
					<p><?=$textResume[0]?>...</p>
				</div>
			</a>
			<?php
				}
			}
			?>
		</div>
	</div>
	<?php get_footer() ?>
</body>
</html>