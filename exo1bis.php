<html>


<body>
<?php

if (isset($_GET['prenom'])){
	$prenom = $_GET['prenom'];
}

if (isset($_GET['nom'])){
	$nom = $_GET['nom'];
}

if (isset($_GET['adresse'])){
	$adresse = $_GET['adresse'];
}

if (isset($_GET['ville'])){
	$ville = $_GET['ville'];
}

if (isset($_GET['cp'])){
	$codepost = $_GET['cp'];
}

echo "Consultation de :\n <br>";
echo "<a href=etat_civil.php?pnom=$prenom&amp;nom=$nom> - votre état civil </a> <br>";
echo "<a href=adresse.php?adresse=$adresse&amp;cpostal=$cpostal&amp;ville=$ville> - votre adresse </a>";

?>
</body>
</html>
