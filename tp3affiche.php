
<?php


if (isset($_GET['jours'])){
	$jours = $_GET['jours'];
}


if (isset($_GET['mois'])){
	$mois = $_GET['mois'];
}


$mois2=array('','Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');

for ($i=0;$i <=11; $i++)
{
    if ($mois == $mois2[$i])
    {
    $moisresult = $i;
    }

}



if (isset($_GET['annee']))
{
	$annee = $_GET['annee'];
}

if (isset($_GET['radio']))
{
	$radio = $_GET['radio'];
}

if (isset($_GET['loisirs']))
{
	$loisirs = $_GET['loisirs'];

}


echo "<center><b><font size=+6>La date choisie est $jours/$moisresult/$annee</font></b></center>";	
foreach ($loisirs as $coch) 
{
	echo "<center><b><font size=+6>Vos loisirs sont $coch</font></b></center>";
}


?>