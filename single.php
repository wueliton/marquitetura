<?php
$words = get_the_tags();
$keywords = [];
if($words) {
	foreach($words as $key) {
		$keywords[] = $key->name;
	}
}
$keywords = implode(",",$keywords);
$description = strip_tags(get_the_excerpt());
$title = get_the_title();
$persCard = get_the_post_thumbnail_url();
$persCardWidth = 705;
$persCardHeight = 450;

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

	<section>
		<div class="container postSection postContent">
			<div class="row">
				<div class="col-md-12 breadcrumb">
					<a href="<?=get_site_url()?>"><i class="fa fa-home" aria-hidden="true"></i></a> / <a href="<?=get_site_url()?>/blog/">blog</a> / <span><?=the_title();?></span>
				</div>
				<div class="col-md-12">
					<h1><?=the_title();?></h1>
				</div>
				<div class="col-md-12">
					<div class="postDetails">
						<?php $categories = get_the_category();
						$separator = ' ';
						$output = '';
						if ( ! empty( $categories ) ) {
							echo "<div class=\"post-categories\">";
						    foreach( $categories as $category ) {
						        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
						    }
						    echo trim( $output, $separator );
						    echo "</div>";
						}
						?>
						<span class="date">Postado em: <span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' atrás'; ?></span></span>
					</div>
				</div>
				<div class="col-md-12 postImage">
					<?=the_post_thumbnail('full');?>
				</div>
				<div class="col-md-12">
					<?=the_content()?>
				</div>
				<div class="col-md-12 tags">
					<?php
					$tags = get_the_tags();

					if($tags) {
						foreach ( $tags as $tag ) {
						     echo '<a href="' . get_tag_link( $tag ) . '">' . $tag->name . '</a>';
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<div class="container blogSuggests">
		<div class="row">
			<div class="col-md-12"><h2>Você também pode gostar de:</h2></div>
			<?=my_related_posts()?>
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