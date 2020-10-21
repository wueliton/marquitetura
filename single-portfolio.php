<?php
/*
 * Template Name: Projeto do Portfólio
 * Template Post Type: post
 */

require 'vendor/autoload.php';
use League\ColorExtractor\Color;
use League\ColorExtractor\Palette;
use League\ColorExtractor\ColorExtractor;
$image = get_the_post_thumbnail_url();
$palette = Palette::fromFilename($image, Color::fromHexToInt('#FFFFFF'));
$extractor = new ColorExtractor($palette);
$colors = $extractor->extract(6);
$words = get_the_tags();
$keywords = [];
if($words) {
	foreach($words as $key) {
		$keywords[] = $key->name;
	}
}
$keywords = implode(",",$keywords);
$title = get_the_title();
$description = strip_tags(get_the_excerpt());
$persCard = get_the_post_thumbnail_url();
$persCardWidth = 705;
$persCardHeight = 450;
include("includes/head.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?=the_title();?> - Marquitetura</title>
	<meta name="title" content="<?=the_title();?>" />
	<meta name="author" content="http://pluginzap.com/" />
	<meta name="description" content="<?=strip_tags(get_the_excerpt())?>" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="robots" content="index, follow" />

	<meta name="geo.region" content="BR-SP" />
	<meta name="geo.position" content="-23.6824124;-46.6653066" />
	<meta name="ICBM" content="-23.6824124, -46.6653066" />

	<meta name="language" content="pt-br" />
	<meta name="copyright" content="<?=strip_tags(get_the_excerpt())?>" />
	<meta name="distribution" content="global" />
	<meta name="audience" content="all" />
	<meta name="url" content="https://www.marquitetura.com.br/" />
	<meta name="classification" content="Marketing Digital" />
	<meta name="category" content="Marketing Digital" />
	<meta name="Page-Topic" content="<?=strip_tags(get_the_excerpt())?>" />
	<meta name="rating" content="general" />
	<meta name="fone" content="(11) 95451-1250" />
	<meta name="city" content="São Paulo - SP" />
	<meta name="country" content="Brasil" />
	<meta property="publisher" content="Paulo Wuéliton" />

	<!-- Google -->
	<link rel="canonical" href="https://www.marquitetura.com.br/" />
	<meta name="googlebot" content="index, follow" />
	<meta name="geo.placename" content="Brasil" />
	<meta name="geo.region" content="São Paulo - SP" />

	<!-- Twitter -->
	<meta name="twitter:card" content="<?=get_template_directory_uri()?>/source/images/card.jpg" />
	<meta name="twitter:site" content="https://www.marquitetura.com.br/" />
	<meta name="twitter:title" content="<?=the_title();?> - Marquitetura" />
	<meta name="twitter:description" content="<?=strip_tags(get_the_excerpt())?>" />
	<meta name="twitter:image:src" content="<?=get_template_directory_uri()?>/source/images/card.jpg" />
	<meta property="og:image" content="<?=get_template_directory_uri()?>/source/images/card.jpg" />

	<!-- Facebook -->
	<meta property="og:title" content="<?=the_title();?> - Marquitetura" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="Marquitetura" />
	<meta property="og:author" content="Paulo Wuéliton" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:region" content="Brasil" />
	<meta property="og:image" content="<?=get_template_directory_uri()?>/source/images/card.jpg" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="971" />
	<meta property="og:image:height" content="509" />
	<meta property="og:description" content="<?=strip_tags(get_the_excerpt())?>" />
	<meta property="og:url" content="https://www.conceitopublicidade.com.br/" />
	<?php wp_head(); ?>
</head>
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
	<span class="square" style="background-color: <?=Color::fromIntToHex($colors[0])?>"></span>
	<span class="square square1" style="background-color: <?=Color::fromIntToHex($colors[1])?>"></span>
	<span class="square square2" style="background-color: <?=Color::fromIntToHex($colors[2])?>"></span>
	<span class="square square3" style="background-color: <?=Color::fromIntToHex($colors[3])?>"></span>
	<span class="square square4" style="background-color: <?=Color::fromIntToHex($colors[4])?>"></span>
	<span class="square square5" style="background-color: <?=Color::fromIntToHex($colors[5])?>"></span>
	<div class="menuContainer">
		<div class="toggleMenu">
			<?=wp_nav_menu("menu");?>
		</div>
	</div>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><span>Portfólio</span><?=the_title();?></h1>
				</div>
			</div>
		</div>
	</section>

	<div class="contentSinglePortfolio">
		<?=the_content()?>
	</div>
	<div class="fluid-container">
	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12"><a href="<?=get_site_url()?>/portfolio/"><button class="btn-primary center"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Voltar para Portfólio</button></a></div>
		</div>
	</div>
	<div class="container footer">
		<div class="row">
			<div class="col"><img src="<?=get_template_directory_uri()?>/source/images/logo.png" class="img-responsive" alt=""></div>
			<div class="col-md-4"><a href="mailto:joe@example.com?subject=feedback">contato@marquitetura.com.br</a></div>
			<div class="col-md-auto col-4"><a href="https://www.facebook.com/marquiteturadesign1" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
			<div class="col-md-auto col-4"><a href="https://www.instagram.com/marquiteturadesign/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
			<div class="col-md-auto col-4"><a href="https://twitter.com/marquiteturade1" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
		</div>
	</div>
	<div class="pageTransition active"></div>
	<?php wp_footer(); ?>
</body>
</html>