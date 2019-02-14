<html>

<body>
<?php

if (isset($_GET['nbr1'])){
	$nbr1 = $_GET['nbr1'];
}

if (isset($_GET['nbr2'])){
	$nbr2 = $_GET['nbr2'];
}

if (isset($_GET['nbr3'])){
	$nbr3 = $_GET['nbr3'];
}


if  ($nbr1 < $nbr3 AND $nbr1 > $nbr2){
	echo "<p><font color=green>$nbr1 est-il compris entre $nbr2 et $nbr3 ?</font></p><br>";
	echo "<p><font color=red>Oui, $nbr1 est compris entre $nbr2 et $nbr3 ?</font></p><br>";
}
else{
			echo "<p><font color=green>$nbr1 est-il compris entre $nbr2 et $nbr3 ?</font></p><br>";
			echo "<p><font color=red>Non, $nbr1 n'est pas compris entre $nbr2 et $nbr3 ?</font></p><br>";
}


?>
</body>
</html>