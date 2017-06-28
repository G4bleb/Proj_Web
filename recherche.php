<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<link href="styles/style.css" rel="stylesheet" type="text/css"/>
	<link href="styles/recherche.css" rel="stylesheet" type="text/css"/>
	<link rel="icon" type="image/png" href="img/favicon.png"/>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
	<title>Recherche</title>
</head>

<body>
	<!-- DEBUT HEADER -->
	<div id="header">
		<div id="navbar">
			<ul>
				<li><a href="accueil.html">Accueil</a></li>
				<li><a href="comparatif.html">Nos offres</a></li>
				<li class="dropdown">
					<a href="catalogue.html" class="dropbtn">Nos formations</a>
					<div class="dropdown-content">
						<a href="formations/formation-1.html">Formation 1</a>
						<a href="formations/formation-2.html">Formation 2</a>
						<a href="formations/formation-3.html">Formation 3</a>
						<a href="formations/formation-4.html">Formation 4</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="entreprise.html" class="dropbtn">L'entreprise</a>
					<div class="dropdown-content">
						<a href="entreprise/equipe.html">L'équipe</a>
					</div>
				</li>
				<li><a href="contact.html">Nous contacter</a></li>
				<li><a href="recherche.php">Recherche</a></li>
				<li>
					<ul id="networks">
						<li><a href="http://www.twitter.com"><img src="img/icons/twitter.png" alt="twitter" class="icon"></a></li>
						<li><a href="http://www.facebook.com"><img src="img/icons/facebook.png" alt="facebook" class="icon"></a></li>
						<li><a href="http://www.linkedin.com"><img src="img/icons/linkedin.png" alt="linkedin" class="icon"></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="banner">
			<img src="img/banner.jpg" alt="banner">
		</div>
	</div>
	<!-- FIN HEADER -->
	<div id=main>
		<form action="recherche.php" method="post">
			<!-- Ici va s'afficher le terme saisie dans le champ recherche
			si il n'est pas nul -->
			<?php if($_POST['recherche'] != ''): ?>
				<input type="text" name="recherche" value="<?php echo $_POST['recherche'] ; ?>">
			<?php else: ?>
				<input type="text" name="recherche" >
			<?php endif; ?>

			<input type="submit" value="Submit">

		</form>



		<?php if(strtolower($_POST['recherche']) == 'cloud'): ?>
			<!-- Ici va s'afficher la liste des resultats pour le mot cle "html"
			A adapter selon vos propres affichage de resultats -->

			<table>
				<tr>
					<td>Nom de la formation</td>
					<td>Matière</td>
					<td>Durée</td>
					<td>Offre correspondante</td>
					<td></td>
				</tr>
				<tr>
					<td>Home</td>
					<td>Cloud</td>
					<td>2h</td>
					<td>FREE</td>
					<td><a href="formations/formation-3.html">Consulter cette formation</a></td>
				</tr>
				<tr>
					<td>WAN</td>
					<td>Cloud</td>
					<td>16h</td>
					<td>PRO</td>
					<td><a href="formations/formation-2.html">Consulter cette formation</a></td>
				</tr>
				<tr>
					<td>Entreprise</td>
					<td>Cloud</td>
					<td>16h</td>
					<td>PRO</td>
					<td><a href="formations/formation-1.html">Consulter cette formation</a></td>
				</tr>
				<tr>
					<td>Formateur</td>
					<td>Cloud</td>
					<td>24h</td>
					<td>PREMIUM</td>
					<td><a href="formations/formation-4.html">Consulter cette formation</a></td>
				</tr>
			</table>

		<?php else: ?>
			<!-- Ici va s'afficher la liste des resultats pour les autres recherche
			=> il faut adapter le message pour pas de résultats  -->
			<table>
				<tr>
					<td>Aucun résultat</td>
				</tr>
			</table>

		<?php endif; ?>

	</div>
</body>

</html>
