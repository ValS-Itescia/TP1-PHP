<html>


<body>

<center><b><font size=6>Entrez vos informations</font></b></center><br>
<form action="exo4.php" method="get" name="Envoyer">
<table align="center">

<!-- Input du login  -->
<tr><td>Login</td><td><input type="text" name="login" value="" size="30" class="form-control"></td></tr>

<!-- Input de mdp  -->
<tr><td>Mot de passe</td><td><input type="text" name="password" value="" size="30" class="form-control"></td></tr>

<!-- Connexion -->
<tr><td><input type="submit" name="envoyer" value="Connexion" /></td></tr>

</table>
</form>
</body>
</html>

<?php
if (isset($_POST))
{


$loginok = "admin";
$passwordok = "admin";

if (isset($_GET['login'])){
	$login = trim($_GET['login']);
}

if (isset($_GET['password'])){
	$password = trim($_GET['password']);
}




if (($login == $loginok) AND ($password == $passwordok))
{
	echo "Vous etes bien connecté !";
}
else
{
	echo "Vos identifiants sont incorrects";
}

}
?>