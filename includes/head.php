<?php include("geral.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?=$title?> - <?=$nomeEmpresa?></title>
	<meta name="title" content="<?=$title?>" />
	<meta name="author" content="<?=$author?>" />
	<meta name="description" content="<?=$description?>" />
	<meta name="keywords" content="<?=$keywords?>" />
	<meta name="robots" content="index, follow" />

	<meta name="geo.region" content="BR-SP" />
	<meta name="geo.position" content="<?=$geoLatitude?>;<?=$geoLongitude?>" />
	<meta name="ICBM" content="<?=$geoLatitude?>,<?=$geoLongitude?>" />

	<meta name="language" content="pt-br" />
	<meta name="copyright" content="<?=$nomeEmpresa?> <?=$slogan?>" />
	<meta name="distribution" content="global" />
	<meta name="audience" content="all" />
	<meta name="url" content="<?=$canonical?>" />
	<meta name="classification" content="<?=$ramo?>" />
	<meta name="category" content="<?=$ramo?>" />
	<meta name="Page-Topic" content="<?=$nomeEmpresa?> <?=$slogan?>" />
	<meta name="rating" content="general" />
	<meta name="fone" content="<?=$tel?>" />
	<meta name="city" content="São Paulo - SP" />
	<meta name="country" content="Brasil" />
	<meta property="publisher" content="<?=$creditos?>" />

	<!-- Google -->
	<link rel="canonical" href="<?=$canonical?>" />
	<meta name="googlebot" content="index, follow" />
	<meta name="geo.placename" content="Brasil" />
	<meta name="geo.region" content="São Paulo - SP" />

	<!-- Twitter -->
	<meta name="twitter:card" content="<?=$card?>" />
	<meta name="twitter:site" content="<?=$canonical?>" />
	<meta name="twitter:title" content="<?=$title?> - <?=$nomeEmpresa?>" />
	<meta name="twitter:description" content="<?=$description?>" />
	<meta name="twitter:image:src" content="<?=$card?>" />
	<meta name="twitter:image" content="<?=$card?>" />
	<meta property="og:image" content="<?=$card?>" />

	<!-- Facebook -->
	<meta property="og:title" content="<?=$title?> - <?=$nomeEmpresa?>" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="<?=$nomeEmpresa?>" />
	<meta property="og:author" content="<?=$creditos?>" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:region" content="Brasil" />
	<meta property="og:image" content="<?=$card?>" />
	<meta property="og:image:type" content="image/jpg" />
	<meta property="og:image:width" content="<?=$cardWidth?>" />
	<meta property="og:image:height" content="<?=$cardHeight?>" />
	<meta property="og:description" content="<?=$description?>" />
	<meta property="og:url" content="<?=$canonical?>" />
	<?php wp_head(); ?>
	<?php include("schema.php"); ?>
</head>