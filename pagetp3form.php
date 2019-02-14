<html>

<!-- Head -->
<head>
</head>

<!-- Body -->
<body>
<center><b><font size="+6">Vos informations</font></b></center><br>	
<form action="tp3affiche.php" method="get" name="Envoyer">
<table align="center">


<!-- Input du Jour -->
	<tr><td>Choisir le jour</td><td><select name="jours" size="1">
<?php
for ($j = 1; $j <= 31; $j++)
{	
echo"<option>";
echo "$j"; 
echo"</option>";
}
?> 
</select></td></tr>

<!-- Input du Mois -->
	<tr><td>Choisir le mois</td><td><select name="mois" size="1">
<?php
$mois=array('Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre');

for ($m =0; $m <= 11; $m++)
{
echo"<option value=$mois[$m]"; 
echo(">$mois[$m]</option>");
}
?>
</select></td></tr>



<!-- Input de l'année -->
	<tr><td>Choisir l'annee</td><td><select name="annee" size="1">
<?php
for ($a = 1980; $a <= 2005; $a++)
{	
echo"<option>";
echo "$a"; 
echo"</option>";
}
?> 
</select></td></tr>

<!-- Choix du loisir -->
	<tr><td>Loisir favori</td></tr>
	<div>
  <tr><td><input type="checkbox" id="sport" name="loisirs[]" value="sport">
  <label for="sports">Sports</label></td></tr>


  <tr><td><input type="checkbox" id="musique" name="loisirs[]" value="musique">
  <label for="musique">Musique</label></td></tr>



  <tr><td><input type="checkbox" id="jeux" name="loisirs[]" value="jeux">
  <label for="jeux">Jeux</label></td></tr>



  <tr><td><input type="checkbox" id="voyages" name="loisirs[]
  	" value="voyages">
  <label for="voyages">Voyages</label></td></tr>
</div>

<!-- Envoyer -->
	<tr><td><input type="submit" name="envoyer" value="Envoyer" /></td></tr>


	
</table>
</form>
</body>
</html>