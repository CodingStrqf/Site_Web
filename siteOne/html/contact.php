<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/contact.css">
	<title>Page Contact</title>
</head>

<body>

		<?php
		$a = 0;
		$b = 0;
		$c = 0;
			if (isset($_POST['envoie'])) 
			{
				
				if (empty($_POST['text'])) 
				{
					$a = 1 ;	
				}

				if (empty($_POST['nom'])) 
				{
					$b = 1 ;	
				}

				if (empty($_POST['nom'])) 
				{
					$c = 1 ;	
				}				
			}
		echo "$a";
		?>

	<h1> Formulaire</h1>

<form action="contact.php" method="post">


	<div span="conteneur">
		<label for="nom" >  Donnez votre Nom :</label><br>
			<input type="text" name="text" 	 >
	</div>
			<?php
					if ($a == 1) {
					echo ('Vous devez rentrer un nom !') ;	
								}
			?>

	<div span="conteneur">
		<label for="email"> Rentrez votre email :</label><br>
		<input type="email" name="email" >
			<?php
					if ($b == 1) {
						echo ('Vous devez rentrer un email !') ;	
					}

			?>
	</div>

	<div span="conteneur">
		<label for="tel"> Rentrez votre numéro de téléphone :</label><br>
		<input type="tel" name="tel">
	</div>

	<div span="conteneur"> 
		<label for="listeD"> Quel est le problème ?<br>
			<select name="listeD" id="listeD">
				<option> Bug </option>
				<option> Amélioration </option>
				<option> Autre </option>
			</select>
		</label>
	</div>

	<div span="conteneur">
		<label for="quest">Est-ce votre première visite ?</label> <br>
		<label for="visite1">Oui</label>
		<input type="radio" name="oui" id="oui"><br>
		<label for="visite">Non</label>
		<input type="radio" name="non" id="non">
	</div>

	<div span="conteneur">
		<label for="message"> Dite nous votre problème :</label><br>
		<textarea name="text" rows="5" cols="50" ></textarea>
			<?php
				if ($c == 1) {
					echo ('Vous devez rentrer un problème!') ;	
				}

			?>
	</div>

	<div span="conteneur">
				
		<label for="envoie"></label>
		<input type="submit" name="envoie" for="sub">
	</div>

</form>

</body>
</html>

