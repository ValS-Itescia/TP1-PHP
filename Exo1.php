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

echo "Bonjour $prenom $nom Nous avons bien noté que vous habitiez $adresse à $ville ($codepost)" ;

?>