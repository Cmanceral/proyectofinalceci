<?php get_header();?>
<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		<title> Cereal | Foto </title>
	</head>
	<body>
			
			<div class="content-wrap">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<div class="featured-fotos">
						<?php 
							the_content();
						?>
					</div> <!-- cierra posts-proyectos-->

				<?php endwhile; endif; ?>
			</div><!--cierra content-wrap-->
	
		
	</body>
<?php get_footer();?>