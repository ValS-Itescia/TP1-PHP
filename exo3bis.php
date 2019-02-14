<html>

<body>
<?php


if (isset($_GET['lignes'])){
	$lignes = $_GET['lignes'];
}

if (isset($_GET['colonnes'])){
	$colonnes = $_GET['colonnes'];
}

if (isset($_GET['bordures'])){
	$bordures = $_GET['bordures'];
}


echo "<table width=50% height=50% border=".$bordures.">";
for($boucle = 0;$boucle <= $lignes; $boucle++)
{
	echo"<tr>";


for($boucle2 = 0;$boucle2 <= $colonnes; $boucle2++)
{
	echo"<td></td>";
}
echo"</tr>";
}
?>
</table>
</body>
</html>