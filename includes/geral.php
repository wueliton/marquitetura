<?php
global $wp;

$url 				= get_template_directory_uri()."/";
$nomeEmpresa		= 'Marquitetura';
$slogan				= 'Arquitetura + Design';
$author				= 'http://pluginzap.com/';
$creditos			= 'Paulo Wuéliton';
$ramo				= 'Arquitetura';
$email				= 'contato@marquitetura.com.br';
$tel				= '(11) 95451-1250';
$tel2				= '';
$tellink 			= (isset($tel)) ? preg_replace('/\(|\)|-| /','',$tel) : '' ;
$tel2link 			= (isset($tel2)) ? preg_replace('/\(|\)|-| /','',$tel2) : '' ;
$tel3link 			= (isset($tel3)) ? preg_replace('/\(|\)|-| /','',$tel3) : '' ;
$whatsapp			= '(11) 95451-1250';
$whatsapplink		= (isset($whatsapp)) ? "https://api.whatsapp.com/send?1=pr_BR&phone=55".preg_replace('/\(|\)|-| /','',$whatsapp) : '' ;
$endereco			= 'Rua Teolandia, 500';
$bairro 			= 'Jardim Maria Beatriz';
$cidade				= 'Carapicuíba - SP';
$uf 				= 'SP';
$cep				= '06365360';
$horario_s			= '';
$horario_sab		= '';
$horario_dom		= '';

$pastaImg           = get_template_directory_uri().'/source/images/';
$logo				= $pastaImg.'logo.png';
$favicon			= $pastaImg.'favicon2.png';
$card				= isset($persCard) ? $persCard : $pastaImg.'card.jpg';
$cardWidth			= isset($persCardWidth) ? $persCardWidth : "250";
$cardHeight			= isset($persCardHeight) ? $persCardHeight : "250";

$linkIframeMapa		= '';

$conceito			= $pastaImg.'conceito.jpg';
$googleTransparenci = $pastaImg.'cadeado.jpg';
$reposinator		= $pastaImg.'celular.jpg';

$canonical 			= home_url(add_query_arg(array(), $wp->request));

$title = (isset($title)) ? $title : '' ;
$title = (isset($title)) ? $title : '' ;
$description = (isset($description)) ? $description : '' ;
$keywords = (isset($keywords)) ? $keywords : '' ;

//redes sociais
$linkface			= 'https://www.facebook.com/marquiteturadesign1';
$linkinstagram		= 'https://www.instagram.com/marquiteturadesign/';
$linktwitter		= '';
$linkedin			= '';
$linkgoogle			= 'https://www.google.com/maps/place/Marquitetura+Design/@-23.6824124,-46.6653066,10z/data=!4m2!3m1!1s0x0:0xb957190aa7eb7e24?sa=X&ved=2ahUKEwj4x5vnsKfsAhVjK7kGHVhKCAQQ_BIwE3oECBMQBQ';
$linkYoutube		= '';

$googleMaps = 'https://www.google.com.br/maps/place/R.+Teolandia,+500+-+Jardim+Maria+Beatriz,+Carapicu%C3%ADba+-+SP,+06365-360/@-23.5522625,-46.8480074,18z/data=!3m1!4b1!4m5!3m4!1s0x94cf00491014151d:0x3e0a1e64d453b315!8m2!3d-23.552265!4d-46.8469131';
$geoLatitude = '-23.5522625';
$geoLongitude = '-46.8480074';