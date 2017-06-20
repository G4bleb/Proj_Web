<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sans titre</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	
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
	


<?php if(strtolower($_POST['recherche']) == 'html'): ?>
<!-- Ici va s'afficher la liste des resultats pour le mot cle "html"  
	A adapter selon vos propres affichage de resultats -->
	
<!--  tableau de reponse à mettre en forme 	-->

<!-- titre				theme	duree	format	type accès 	lien	-->
<!--
	initiation			html	2h	en ligne	free		lien1
	formation de base	html	2j	sur site	pro			lien2
	formation avancée	html	2j	sur site	pro			lien3
	formation expert	html	3j	sur site	premium		lien4
-->

resultats

<?php else: ?>
<!-- Ici va s'afficher la liste des resultats pour les autres recherche 
	=> il faut adapter le message pour pas de résultats  -->

pas de résultats

<?php endif; ?>
	
</body>

</html>
