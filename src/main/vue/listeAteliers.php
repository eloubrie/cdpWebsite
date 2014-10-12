<html>
	<head><title>Liste des ateliers</title>
	<link rel="stylesheet" href="../styles/style.css"/>
	</head>
	<body>
		<h1 class="CSSHeaderListeAteliers">
		Liste des ateliers
		</h1>
		<div class="CSSTableGenerator">
			<table border=2 align="center" style="margin-top:200px>
				<tr <!--style="color:#ffff"-->
					<td> Titre </td>
					<td> Thème </td>
					<td> Type </td>
					<td> Lieu </td>
					<td> Gestion des ateliers </td>
				</tr>
<!-- Fabrication dynamique de la table -->
<?php
include("../controller/listeAteliers.php");
?>

			</table>
			<a href='../vue/creationAtelier.php'><center><input type="button" value="ajouter atelier"></a>
		</div>
	</body>
</html>