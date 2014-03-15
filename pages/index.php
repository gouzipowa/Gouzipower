<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>Gouzipower</title>
		<link rel = "stylesheet" href = "../design/css/style.css"/>
		<!--[if lt IE 9]>
			<script	src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		<!--[if lt IE 9]>
			<link rel = "stylesheet" href = "style_ie.css"/>
		</![endif]-->
	</head>
	<body>
		<div id = "main_wrapper">
			<header>
				<?php
					include('header.php');
				?>
				<nav>
					<ul>
						<div>
							<li><a href = "#" class = "this_page">Home</a></li>
							<li><a href = "cv.php">CV</a></li>
						</div>
						
						<div>
							<li><a href = "notions.php">Notions</a></li>
							<li><a href = "contact.php">Contact</a></li>
						</div>
					</ul>	
				</nav>				
			</header>
			<section id = "search_section">
				<label for "search">Search:</label>
				<input type = "search" name = "search" id = "search"/>
			</section>
			<div id = "banner_picture">
				<div id = "banner_description">
					An article co-written by me					
				</div>
				<a href = "http://www.millenium.org/The-Elder-Scrolls-Online/eso/guides/teso-les-ancres-noires-mmo-elder-scrolls-online-anchor-103237" class = "red_button" id = "banner_button">
					Read the article
					<img src = "../design/src/img/icons/right_arrow.png" alt = "" width = "10" height = "10"/>
				</a>
			</div>
			
			<section>
				<article>
					<div>
						<img src = "../src/images/logos/ico_travel.jpg" alt = "Catégorie voyage" class = "ico_category" width = "80" height = "80"/>
						<h1>	
							Je suis un grand voyageur
						</h1>					
							<p>
								Bien que n'ayant voyagé uniquement lors de mon lycée, j'ai eû l'occasion de découvrir plusieurs contrées.
								Parmi celles-ci, l'Angleterre est celle que j'ai le plus pût visiter, que ce soit avec ma famille, mes classes de lycée, lors 
								d'échanges... Passant sur sa cuisine, plutôt médiocre, l'Angleterre offre de magnifiques paysages, des personnalités atypiques,
								une mode masculine au sommet de l'élégance et son pendant féminin au sommet de la décadence.
							</p>
							<p>
								Ensuite viens la Grèce, superbe contrée, dont on gâche bien souvent l'image par d'inexacts a priori qui cachent la profondeur de 
								coeur de ses habitants. Les vestiges de différentes époques s'empilent, s'entassent, restes s'ils en sont du vivier de culture
								que cette terre habrita.
							</p>
							<p>
								Les chauds paysages espagnols suivent, camouflant sous leur écrasante chaleur la richesse humaine des petites gens. Sous leur condition,
								sous leur carapace forgée par le soleil, on trouve des êtres attachants, aimants, le coeur sur la main, humains. Ils viennent récompenser
								ceux qui oseront les approcher par une aventure humaine qui n'est plus de notre époque : simple, sincère, grandiose et modeste à la fois.
							</p>
					</div>
				</article>
				<aside>
					<h1>A propos de l'auteur</h1>
					<img src = "../design/src/img/icons/bubble_arrow.png" alt = "" id = "bubble_arrow" width = "12" height = "20"/>
					<p id = "picture_gouzi">
						<img src = "../design/src/img/icons/chat.jpg" alt = "Photo de Gouzipower" width = "80" height = "70"/>
					</p>
					<p>
						Laissez-moi le temps de me présenter : je m'appelle Gouzipower, je suis né un 31 janvier 1991.
					</p>
					<p>
						Un peu maigre comme présentation, non ? C'est pourquoi j'ai décidé d'écrire ma biographie afin que l'on sache qui je suis.
					</p>
				</aside>
			</section>
			<footer>
				<?php 
					include('footer.php');
				?>			
			</footer>
		</div>
	</body>
</html>