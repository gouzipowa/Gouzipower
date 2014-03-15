<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		<title>Gouzipower</title>
		<link rel = "stylesheet" href = "../design/css/style.css"/>
		<link rel = "stylesheet" href = "../design/css/cv.css"/>
		<!--[if lt IE 9]>
			<script	src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="../design/css/style_ie.css" />
		<![endif]-->
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
							<li><a href = "index.php">Home</a></li>
							<li><a href = "#" class = "this_page">CV</a></li>
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
				<article id ="formation">
					<div class = "article_title_block">
						<img src = "../src/images/logos/ico_school.jpg" alt = "Catégorie formation" class = "ico_category" width = "80" height = "80"/>						
					</div>
					<div class = "article_title_block">
						<h1>Formation</h1>
							<h2>2012-2013</h2>
								<h3>Institut Supérieur d’Electronique et du Numérique de Lille</h3>
									<p>J’ai effectué ma première année de cycle ingénieur dans une filère générale.</p>
							<h2>2009-2012</h2>
								<h3>Lycée du Hainaut à Valenciennes</h3>
									<p>Trois ans de classes préparatoires dans en filière PTSI-PT (Physique-Technologie).</p>
							<h2>2006-2009</h2>
								<h3>Lycée Albert Châtelet à Saint-Pol sur Ternoise</h3>
									<p>J’ai effectué ma Seconde, ma Première et ma Terminale en filière scientifique.</p>
					</div>
				</article>
				<article id ="skills">
					<div class = "article_title_block">
						<img src = "../src/images/logos/ico_skills.jpg" alt = "Catégorie compétences" class = "ico_category" width ="80" height = "80"/>
					</div>
					<div class = "article_title_block">
						<h1>Compétences</h1>
							<h2>Informatique</h2>
								<ul>
									<li>Connaissances en langage C, java, C#</li>
									<li>Connaissances en CAO : Solidworks</li>
									<li>Acquisition des bases de Maple, Matlab, Octave</li>
									<li>Acquisition des bases en réseaux et SQL</li>								
									<li>Acquisition des bases d'HTML et CSS</li>
									<li>Notions en Microsoft Word, PowerPoint et Excel</li>
								</ul>
							<h2>Electronique</h2>
								<ul>
									<li>Acquisition des bases en assembleur</li>
									<li>Notions sur les protocoles de communication</li>
								</ul>
							<h2>Linguistique</h2>
								<ul>
									<li>Anglais (niveau B2)</li>
									<li>Espagnol (niveau C1)</li>
								</ul>
							<h2>Titulaire d'un permis B</h2>
					</div>
				</article>
				<aside>
					<h1>General</h1>
					<img src = "../design/src/img/icons/bubble_arrow.png" alt = "" id = "bubble_arrow" width = "12" height = "20"/>
					<p>
						Please to meet you, honorable visitor. We strongly hope that you'll enjoy these pages.
					</p>
					<p>
						Do you notice ? A navigator menu is present on the bottom-right corner of the gray banner, at the top of these pages.
					</p>
					<p>
						Here a picture of my room-mate :
						<br/>
						<img src = "../src/images/pictures/lama.png" width = "400"/>
					</p>
				</aside>
				<article id ="professional_experience">
					<div class = "article_title_block">
						<img src = "../src/images/logos/ico_business.jpg" alt = "Catégorie business" class = "ico_category" width = "80" height = "80"/>
					</div>
					<div class = "article_title_block">
						<h1>Expérience professionnelle</h1>
							<ul>
								<li>Responsable Communication du Club Rock Isen</li>
								<li>Actuel Secrétaire Général du Club Rock Isen</li>
								<li>Actuel Responsable Communication de l'Isen Concept, la JE de l'Isen</li>
							</ul>
					</div>					
				</article>
				<article id ="hobbies">
					<div class = "article_title_block">
						<img src = "../src/images/logos/ico_hobbies.jpg" alt = "Catégorie Hobbies" class = "ico_category" width = "80" height = "80"/>
					</div>
					<div class = "article_title_block">
						<h1>Hobbies</h1>
							<ul>
								<li>Reponsable dans le club rock de mon école</li>
								<li>Responsable dans la Junior-Entreprise de mon école</li>
								<li>Adhérent dans différents clubs de sport</li>
							</ul>
					</div>					
				</article>
			</section>
			<footer>
				<?php 
					include('footer.php');
				?>			
			</footer>
		</div>
	</body>
</html>