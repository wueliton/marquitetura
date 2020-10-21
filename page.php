<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Marquitetura</title>
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

	<div class="container portfolioPage">
		<?=the_content()?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12"><button class="btn-primary center">Próxima Página <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button></div>
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