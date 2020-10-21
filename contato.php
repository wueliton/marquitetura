<?php /* Template Name: Contato */ ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contato - Marquitetura</title>
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

	<section class="titleSection">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1>contato</h1>
				</div>
				<div class="col-md-7">
					<p>Vamos ter uma conversa?</p>
				</div>
			</div>
		</div>
	</section>

	<div class="fluid-container">
		<?=the_content()?>
	</div>
	<?php get_footer() ?>
</body>
</html>