	<?php
	$estrelas = rand(3, 4).'.'.rand(0, 9);
	$coments = rand(30, 60);
	
	$criacao = date("d/m/Y", filemtime($urlPagina));

	$img_card = "assets/img/palavras-chave/thumbs/".$imagem;

	if (!is_file($img_card))
		$img_card = $card;

	?>
	<script type="application/ld+json">
		{
			"@context": "http://www.schema.org",
			"@type": "Corporation",
			"name": "<?=$nomeEmpresa;?>",
			"url": "<?=$url;?>",
			"logo": "<?=$logo;?>",
			"image": "<?=$img_card;?>",
			"telephone": "55<?=$tel;?>",
			"email": "<?=$email;?>",
			"description": "<?=$description;?>",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "<?=$endereco;?>",
				"addressLocality": "<?=$cidade;?>",
				"addressRegion": "<?=$uf;?>",
				"addressCountry": "BR"
			},
		
			"aggregateRating": {
				"@type": "aggregateRating",
				"ratingValue": "<?=$estrelas;?>",
				"reviewCount": "<?=$coments;?>"
			}
		}
	</script>

	<script type="application/ld+json">
		{
		  "@context": "https://schema.org",
		  "@type": "LocalBusiness",
		  "name": "<?=$nomeEmpresa;?>",
		  "image": "<?=$img_card;?>",
		  "@id": "<?=$canonical?>",
		  "url": "<?=$canonical?>",
		  "telephone": "55<?=$tel;?>",
		  "priceRange": "$$",
		  "address": {
		    "@type": "PostalAddress",
		    "streetAddress": "<?=$endereco;?>",
		    "addressLocality": "<?=$cidade;?>",
		    "postalCode": "<?=$cep?>",
		    "addressCountry": "BR"
		  },
		  "geo": {
		    "@type": "GeoCoordinates",
		    "latitude": <?=$geoLongitude;?>,
		    "longitude": <?=$geoLatitude;?>
		  } ,
		  "sameAs": [
<?php echo $facebook = !empty($linkface) ? '		  	"'.$linkface.'",' : ''; ?>
<?php echo $instagram = !empty($linkinstagram) ? '		  	"'.$linkinstagram.'",' : ''; ?>
<?php echo $twitter = !empty($linktwitter) ? '		  	"'.$linktwitter.'",' : ''; ?>
<?php echo $linklinkeding = !empty($linkedin) ? '		  	"'.$linkedin.'",' : ''; ?>
<?php echo $google = !empty($linkgoogle) ? '		  	"'.$linkgoogle.'",' : ''; ?>
<?php echo $youtube = !empty($linkYoutube) ? '		  	"'.$linkYoutube.'",' : ''; ?>
		    "<?=$url?>"
		  ]
		}
	</script>

	<script type='application/ld+json'>
		{
			"@context": "http://www.schema.org",
			"@type": "WebSite",
			"name": "<?=$nomeEmpresa;?>",
			"url": "<?=$url;?>",
			"description": "<?=$description;?>",
			"publisher": "<?=$author;?>"
		}
	</script>

	<script type='application/ld+json'>
		{
			"@context": "http://www.schema.org",
			"@type": "product",
			"brand": "<?=$nomeEmpresa;?>",
			"logo": "<?=$logo;?>",
			"name": "<?=$title;?>",
			"category": "Widgets",
			"image": "<?=$img_card;?>",
			"description": "<?=$description;?>",
			"aggregateRating": {
				"@type": "aggregateRating",
				"ratingValue": "<?=$estrelas;?>",
				"reviewCount": "<?=$coments;?>"
			}
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org/",
			"@type": "Recipe",
			"mainEntityOfPage": "<?=$canonical;?>",
			"name": "<?=$title;?>",
			"image": "<?=$img_card;?>",
			"author": {
				"@type":"Person",
				"name":"<?=$nomeEmpresa;?>"
			},
			"datePublished": "<?=$criacao;?>",
			"description": "<?=$description;?>",
			"aggregateRating": {
				"@type": "AggregateRating",
				"ratingValue": "<?=$estrelas;?>",
				"reviewCount": "<?=$coments;?>"
			},
			"publisher": {
				"@type": "Organization",
				"name": "<?=$author;?>",
				"logo": "<?=$logo;?>"
			}
		}
	</script>

	<script type="application/ld+json">
		{
		    "@context": "https://schema.org",
		    "@type": "TechArticle",
		    "url": "<?=$canonical?>",
		    "name": "<?=$title;?>",
		    "description": "<?=$description?>",
		    "mainEntityOfPage": "<?=$canonical?>",
		    "headline": "<?=$title;?>",
		    "alternativeHeadline": "<?=$title?> - <?=$nomeEmpresa?>",
		    "proficiencyLevel": "Expert",
		    "datepublished": "<?=$criacao;?>",
    		"datemodified": "<?=$criacao;?>",
    		"keywords": "<?=$keywords?>",
    		"genre": "empresa <?=$ramo?> online, empresa de <?=$ramo?>",
		    "inLanguage": "pt_BR",
		    "publisher": {
		        "@context": "https://schema.org",
		        "@type": "Organization",
		        "url": "<?=$url?>",
		        "name": "<?=$nomeEmpresa;?>",
		        "alternateName": "<?=$title;?> - <?=$nomeEmpresa;?>",
		        "description": "<?=$description?>",
		        "logo": {
		            "@context": "https://schema.org",
		            "@type": "ImageObject",
		            "url": "<?=$card?>",
		            "width": 250,
		            "height": 250
		        }
		    },
		    "author": [
		        {
		            "@context": "https://schema.org",
		            "@type": "Person",
		            "url": "<?=$url?>",
		            "name": "<?=$nomeEmpresa;?>",
		            "description": "<?=$description?>"
		        }
		    ],
		    "image": [
		        {
		            "@context": "https://schema.org",
		            "@type": "ImageObject",
		            "url": "<?=$card?>",
		            "width": 250,
		            "height": 250
		        }
		    ]
		}
	</script>