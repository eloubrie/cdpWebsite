<html>
    <head>
		<meta charset="utf-8" />
		<title>Pr&eacutesentation d'un atelier</title>
	</head>
	<body>
		<?php
		$TA = $_GET['titre'];
		include("../controller/afficherAtelier.php");
		?>
		<!-- Qu'importe la classe, la variable doit etre $atelier (faire interface si necessaire)-->
		<h1> Fiche Atelier </h1>
		<div class="atelier">
			<p>Titre : <?php echo $atelier['titre']; ?></p>
			<p>Th&egraveme : <?php echo $atelier['thematique']; ?></p>
			<p>Type : <?php echo $atelier['type']; ?></p>
			<p>Horaire : <?php echo $atelier['horaire']; ?></p>
			<p>Laboratoire : <?php echo $atelier['nomlab']; ?></p>
			<p>Lieu : <?php echo $atelier['Lieu']; ?></p>
			<p>Dur&eacutee de l'atelier : <?php echo $atelier['durée']; ?></p>
			<p>Capacit&eacute : <?php echo $atelier['capacité']; ?></p>
		</div>
	</body>
</html>

	