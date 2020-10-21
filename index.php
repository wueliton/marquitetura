<?php
$keywords = "Marquitetura, MARQ, Arquitetura, Arquiteto, Arquiteto em São Paulo, Arquiteto na Grande São Paulo, Arquiteto consultoria on-line, Arquiteto online, Arquitetura moderna, Melhor preço Arquiteto, Casa dos meus Sonhos, Arquitetura dos meus Sonhos, projeto de casa, design de interiores, interior design, decoração, casa moderna";
$title = "Arquitetura + Design";
$description = "Projetos de arquitetura e interiores, trazendo sempre um design único como parte principal de suas concepções arquitetônicas.";
include("includes/head.php");
?>
<body <?=body_class();?>>
	<header class="home <?=chooseBackground()?>">
		<a href="#menu" class="toggle" id="toggleBtn">
			<div class="nav-icon1">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</a>
		<div class="toggleMenu">
			<?=wp_nav_menu("menu");?>
		</div>
		<div class="text">
			<h1>arq<br/><span>+</span>design.</h1>
			<span class="scroll">role a página <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
			<a href="" class="logo"><img src="<?=get_template_directory_uri()?>/source/images/logo_white.png" alt="Marquitetura" title="Marquitetura"></a>
		</div>
		<div class="presentation rellax" data-rellax-percentage="3"><h2>cada <span>projeto</span> é único, compõe e faz parte da história de cada pessoa.</h2></div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>portfólio</h2>
			</div>
		</div>
		<?php
		$portfolio = new WP_Query(array('category_name'=>'Portfólio','limit_per_page'=>'4'));

		if($portfolio->have_posts()) {
			$i = 0;
			while($portfolio->have_posts()) {
				$portfolio->the_post();
				if($i==0) {$class = "order-md-2";$i=1;}
				else {$class = "left"; $i=0;}

				$text = wp_strip_all_tags(get_the_content());
				$textResume = explode("\n", wordwrap($text, 165));

				?>
		<a href="<?=get_permalink()?>" class="row project">
			<div class="col-md-6 text <?=$class?>">
				<h3><?=get_the_title()?></h3>
				<span class="subtitle"><?=the_excerpt();?></span>
				<p><?=$textResume[0]?>...</p>
				<button class="btn-primary">Conheça o Projeto</button>
			</div>
			<div class="col-md-5">
				<div class="jarallax-keep-img">
					<img src="<?=the_post_thumbnail_url("home-size")?>" alt="<?=get_the_title()?>" title="<?=get_the_title()?>" class="jarallax-img">
				</div>
			</div>
		</a>
				<?php
			}
		}
		?>
		
		<a href="portfolio"><button class="btn-primary right">Veja o Portfólio Completo <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
	</div>
	<div>
		<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
			<defs>
				<path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
			</defs>
			<g class="parallax">
				<use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,88,81,0.7" />
				<use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,88,81,0.5)" />
				<use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,88,81,0.3)" />
				<use xlink:href="#gentle-wave" x="48" y="7" fill="#ff5851" />
			</g>
		</svg>
	</div>
	<div class="fluid-container quiz">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h2><?=get_theme_mod('set_style_title');?><span class="subtitle"><?=get_theme_mod('set_style_subtitle');?></span></h2>
				</div>
				<div class="col-md-7">
					<p><?=nl2br(get_theme_mod('set_style_text'));?></p>
				</div>
				<div class="col-md-5">
					<img src="<?=get_template_directory_uri()?>/source/images/quiz.gif" class="rellax" alt="Descubra seu Estilo" title="Descubra seu Estilo">
				</div>
				<div class="col-md-12">
					<a href="descubra-seu-estilo"><button class="btn-primary"><?=get_theme_mod('set_style_button');?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container about">
		<div class="row">
			<div class="col-12">
				<h2><?=get_theme_mod('set_about_title');?> <span class="subtitle"><?=get_theme_mod('set_about_subtitle');?></span></h2>

			</div>
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<p><?=nl2br(get_theme_mod('set_about_text'));?></p>
			</div>
			<div class="col-md-4"><img src="<?=wp_get_attachment_url(get_theme_mod('set_about_image'));?>" alt="" class="img-responsive rellax" data-rellax-percentage="0.2"></div>
		</div>
	</div>
	<div class="container blogArea">
		<div class="row">
			<?php
			$exclude = get_cat_ID('Portfólio');
			$wp_query = new WP_Query(array('category__not_in'=>$exclude,'posts_per_page' => 3,"paged" => $paged,'meta_query' => array(array('key' => '_thumbnail_id'))));

			if($wp_query->have_posts()) {
			?>
			<div class="col-md-12"><h3>blog</h3></div>
			<?php

				while($wp_query->have_posts()) {
					$wp_query->the_post();

					$text = wp_strip_all_tags(get_the_content());
					$textResume = explode("\n", wordwrap($text, 165));
					$categories = get_the_category();

			?>
			<div class="col-md-3">
				<a href="<?=get_permalink()?>">
					<img src="<?=the_post_thumbnail_url("home-size")?>" alt="<?=the_title();?>" title="<?=the_title();?>" />
					<span><?=the_title();?></span>
				</a>
			</div>
			<?php
				}
			}
			?>
		</div>
	</div>
	<?php get_footer() ?>
</body>
</html>