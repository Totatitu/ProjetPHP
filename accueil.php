<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <meta charset="UTF8">
        <title>Crowdfunding</title>
         
    </head>
    <body>
        <div id = "entete">
            <center>
                <img src="img/crowdfunding.jpg">
                <a class ="title">Crowdfunding</a>
            </center>
        <div id = "inscription">
            <form method="post" action="inscription.php">
				<fieldset id="connexion">
					<span style="color:red"></span>
					<legend><b>Inscription</b></legend>
					<label for="identifiant">Identifiant* </label><br>
					<input type="text" name="identifiant" id="identifiant" tabindex="10" value=""><br>
					<label for="nom">Nom* </label><br>
					<input type="text" name="nom" id="nom" tabindex="10" value=""><br>
					<label for="identifiant">Prenom* </label><br>
					<input type="text" name="prenom" id="prenom" tabindex="10" value=""><br>
					<label for="mdp">Mot de passe* </label><br>
					<input type="password" name="mdp" id="mdp" tabindex="20"><br>
					<label for="mdp">Confirmation du mot de passe* </label><br>
					<input type="password" name="mdp2" id="mdp2" tabindex="20"><br>
					<label for="email">Email* </label><br>
					<input type="text" name="email" id="email" tabindex="20" value=""><br>
					Vous êtes* 
					<input type="radio" name="statut" value="etudiant" id="etudiant" tabindex="40"> <label                         for="etudiant">Initiateur de projet</label>
					<input type="radio" name="statut" value="personnel" id="personnel" tabindex="40"> <label for="personnel">Investisseur</label><br><br>
					<input type="submit" value="Inscription">
				</fieldset>
			</form>           
	<div id="haut_a_i">
	</div>
	<div id="bloc">
		<form method="post" action="script/verifLogin.php">
		<fieldset id="connexion">
			<legend><b>Connexion</b></legend>
			<label for="login">Identifiant :</label><br>
			<input type="text" name="login" tabindex="10"><br>
			<label for="mdp">Mot de passe :</label><br>
			<input type="password" name="mdp" tabindex="20"><br>
		</fieldset>
		</form>
		<p id="inscription"><a href="inscription.php">Inscription</a></p><br><br>
	</div>
	<div id="bas_a_i">
	</div>
            
    </body>
</html>