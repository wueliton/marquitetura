	<div class="container footer">
		<div class="row">
			<div class="col"><img src="<?=get_template_directory_uri()?>/source/images/logo.png" class="img-responsive" alt=""></div>
			<div class="col-md-4"><a href="mailto:<?=$email?>?subject=Contato"><?=$email?></a></div>
			<div class="col-md-auto col-4"><a href="<?=$linkface?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
			<div class="col-md-auto col-4"><a href="<?=$linkinstagram?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
			<div class="col-md-auto col-4"><a href="https://twitter.com/marquiteturade1" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
		</div>
	</div>
	<a href="https://api.whatsapp.com/send?phone=5511954511250&text=Ol%C3%A1,%20tudo%20bem?" title="Enviar Mensagem no WhatsApp" target="_blank" class="whatsBtn"><i class="fa fa-whatsapp" aria-hidden="true"></i><span>Envie uma Mensagem</span></a>
	<div class="pageTransition active"></div>
	<?php wp_footer(); ?>