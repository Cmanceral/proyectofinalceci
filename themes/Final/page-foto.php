<?php get_header();?>
<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
		<title> Cereal | Foto </title>
	</head>
	<body>
		<div class="wrapper">
		
			<div id="submenu">
				<ul class="oswaldbook">
					<li id="fanaloga"><a href="<?php bloginfo('url');?>/category/analoga">Análoga </a></li>
					<li id="fobjetos"><a href="<?php bloginfo('url');?>/category/objetos"> Objetos </a> </li>
					<li id="farqui"><a href="<?php bloginfo('url');?>/category/arquitectura"> Arquitectura 
					</a> </li>
					<li if="fretratos"> Retratos </li>
				</ul>
			</div> <!-- cierra submenu-->

			<div id="sliderfoto">
				<img class="sly" src="<?php bloginfo('template_url');?>/StockImages/analoga.jpg"/>
				<img class="sly" src="<?php bloginfo('template_url');?>/StockImages/arquitectura.png"/>
				<img class="sly" src="<?php bloginfo('template_url');?>/StockImages/objetos.png"/>
				<img class="sly" src="<?php bloginfo('template_url');?>/StockImages/retrato.png"/>
			</div><!--cierra sliderfoto-->
		</div><!--cierra wrapper-->

	</body>
<?php get_footer();?>
