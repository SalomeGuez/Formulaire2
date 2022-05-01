<!DOCTYPE html>
<html>
<head>
<title>Formulaire</title>
<meta charset="utf-8" />
</head>
<body>
<h1>Quizz</h1>

<?php

if (isset($_GET["erreur"]))
{
	if ($_GET["erreur"] == "form")
	{
		echo("<p>Il faut remplir le quizz avant d'afficher le score !</p>");
	}
	
	elseif ($_GET["erreur"] == "vide")
	{
		echo("<p>Toutes les questions sont obligatoires</p>");
	}
}

?>
<form method="post" action="form_result.php">
	<div>
		<label for="q1">Quel jour sommes-nous ?</label>
		<input type="text" name="q1" id="q1" required />
	</div>
	<div>
		<label for="q2">Quelle est votre matière préférée ?</label>
		<select name="q2" id="q2" required>
			<option value="">Sélectionnez</option>
			<option value="1">Marketing</option>
			<option value="2">Anglais</option>
			<option value="3">PHP</option>
			<option value="4">Photoshop</option>
		</select>
	</div>
	<div>
		<label for="q3">Aimez-vous le chocolat ?</label>
		<input type="radio" name="q3" id="q3" value="1"> Oui
		<input type="radio" name="q3" id="q3-0" value="0"> Non
	</div>
	<div>
		<input type="submit" value="Envoyer les réponses" />
	</div>
</form>
</body>
</html>