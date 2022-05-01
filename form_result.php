<?php

if (empty($_POST))
{
	header("location:exercice27.php?erreur=form");
}

else
{
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	
	if ($q1 == "" or $q2 == "" or $q3 == "")
	{
		header("location:exercice27.php?erreur=vide");
	}
	
	$score = 0;
	
	if (strtolower($q1) == "mardi")
	{
		$score++;
	}
	
	if ($q2 == 3)
	{
		$score++;
	}
	
	if ($q3 == 1)
	{
		$score++;
	}
	
	echo("<h1>Votre score est de ".$score."/3</h1>");
	
	if ($score == 0)
	{
		echo("Nul");
	}
	
	elseif ($score == 1)
	{
		echo("Bof");
	}
	
	elseif ($score == 2)
	{
		echo("Pas mal");
	}
	
	elseif ($score == 3)
	{
		echo("Bravo !");
	}
}

?>f