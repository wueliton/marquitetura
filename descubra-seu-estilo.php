<?php /* Template Name: Descubra seu Estilo */ 
$keywords = "Marquitetura, MARQ, Arquitetura, Arquiteto, Arquiteto em São Paulo, Arquiteto na Grande São Paulo, Descubra seu estilo, Descubra estilo de Arquitetura, Descubra Design de Interiores, quiz, Quiz Descubra seu estilo de Design de Interiores";
$title = "Descubra seu Estilo!";
$description = "Quer saber qual estilo de design de interiores combina mais com você? Responda nosso Quiz e descuba!";
include("includes/head.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marquitetura</title>
	<?php wp_head(); ?>
</head>
<body <?=body_class();?>>
	<header class="quizHeader">
		<div class="cadeira"><img src="<?=get_template_directory_uri()?>/source/images/cadeira.png" alt=""></div>
		<div class="cadeira1"><img src="<?=get_template_directory_uri()?>/source/images/cadeira1.png" alt=""></div>
		<div class="cadeira2"><img src="<?=get_template_directory_uri()?>/source/images/cadeira2.png" alt=""></div>
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
			<a href="<?=get_site_url();?>" class="logo"><img src="<?=get_template_directory_uri()?>/source/images/logo_white.png" alt="Marquitetura" title="Marquitetura"></a>
			<div class="questions">
				<div class="container">
					<span class="loaderCards"><div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></span>
					<h3></h3>
					<div class="row">
						<script>urlPage="<?=get_template_directory_uri()?>";urlSite="<?=get_site_url()?>";</script>
					</div>
					<div class="loader">
						<div class="status"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="pageTransition active"></div>
	<div class="formShow"><?=do_shortcode('[ninja_form id=2]')?></div>
	<?php wp_footer(); ?>
</body>
</html>