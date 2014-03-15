<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8"/>
		
		<title>Gouzipower</title>
		
		<link rel = "stylesheet" href = "../design/css/style.css"/>		
		<link rel = "stylesheet" href = "../design/css/style/contact.css"/>
		
		<!--[if lt IE 9]>
			<script	src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="../design/css/style/style_ie.css" />
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
							<li><a href = "cv.php">CV</a></li>
						</div>
						
						<div>
							<li><a href = "notions.php">Notions</a></li>
							<li><a href = "#" class = "this_page">Contact</a></li>
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
					<form method = "post" action = "processing.php">						
						<fieldset id = "sending_message_display">
							<legend>Message to send</legend>
								<div>									
									<textarea name = "to_send" id = "to_send"></textarea>
								</div>
								
								<div>
									<input type = "reset" value = "Reset" class = "red_button"/>
								</div>
								<div>
									<input type = "button" value = "Send" name = "send_button" class = "red_button"/>
								</div>							
						</fieldset>
					</form>
				</article>
				
				<aside>
					<form method = "post">
						<fieldset id = "personnal_info_display">
							<legend>Personnal informations</legend>
								<div>
									<p>
										<label for = "name">Name</label>
										
										<input type ="text" name = "name" id = "name" class = "input_size" autofocus required />								
									</p>
									
									<p>
										<label for = "forename">Forename</label>
										
										<input type = "text" name = "forename" id = "forename" class = "input_size" required />
									</p>
									
									<p>
										<label for = "mail">E-mail</label>
										
										<input type = "email" name = "mail" id = "mail" class = "input_size" required />
									</p>

									<p>
										<label for = "tel">Tel</label>
										
										<input type = "tel" name = "tel" id = "tel" class = "input_size" required />
									</p>									
								</div>
						</fieldset>
						
						<fieldset id = "general_info_display">
							<legend>General informations</legend>
								<div class = "floating_left">
									<p>
										In which age group are you ?
										<p>
											<input type = "radio" name = "age_group" id = "less15"/>
											
											<label for = "less15">Less than 15yo</label>
										</p>
										
										<p>
											<input type = "radio" name = "age_group" id = "medium15-25"/>
											
											<label for = "medium15-25">15 - 25 yo</label>
										</p>
										
										<p>
											<input type = "radio" name = "age_group" id = "medium25-40"/>
											
											<label for = "medium25-40">25 - 40yo</label>
										</p>
										
										<p>
											<input type = "radio" name = "age_group" id ="more40"/>
											
											<label for = "more40">More than 40yo</label>
										</p>		
									<p>
								</div>
								
								<div class = "floating_rigth">
									<label for = "country">Country</label>	
									
									<select name = "country" id = "country">
										<optgroup label = "Europe">
											<option value = "france" checked>France</option>
											
											<option value = "spain">Spain</option>
											
											<option value = "uk">United Kingdom</option>
											
											<option value = "italy">Italy</option>
										</optgroup>
										
										<optgroup label = "America">
											<option value = "canada">Canada</option>
											
											<option value = "usa">USA</option>
										</optgroup>
										
										<optgroup label = "Asia">
											<option value = "japan">Japan</option>
											
											<option value = "china">China</option>
										</optgroup>
									</select>
								</div>
						</fieldset>
					</form>
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